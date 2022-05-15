---
extends: _layouts.misc
title: WireGuard
---

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">1) Configuration MikroTik</div>
            <div class="card-body">
                <form id="mt-form">
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="vpn-name">Nom du VPN (ou alias)</label>
                            <input type="text" class="form-control" id="vpn-name" name="vpn-name" placeholder="ex: Super SARL" required>
                        </div>
                        <div class="form-group col">
                            <label for="vpn-host">Hôte VPN</label>
                            <input type="text" class="form-control" id="vpn-host" name="vpn-host" placeholder="ex: 1.2.3.4 ou vpn.fr" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="gateway-ip">IP/CIDR passerelle VPN</label>
                            <input type="text" class="form-control" id="gateway-ip" name="gateway-ip" placeholder="ex: 192.168.200.1/24" pattern="[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}/([1-9]|[12][0-9]|30)" required>
                        </div>
                        <div class="form-group col">
                            <label for="allowed-ips">IP routables par VPN</label>
                            <input type="text" class="form-control" id="allowed-ips" name="allowed-ips" placeholder="ex: 192.168.2.0/24, 192.168.1.10/32, …">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="public-keys">Collez ici les clés publiques (1 par ligne) de chaque configuration du VPN</label>
                            <textarea class="form-control" id="public-keys" name="public-keys" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Confirmer</button>
                </form>

                <div class="form-row justify-content-center mt-3">
                    <div id="alert-mt-script" class="alert alert-dark" role="alert" style="display:none">
                        <h5 class="alert-heading">Configuration MikroTik</h5>
                        <hr>
                        <code id="mt-script"></code>
                    </div>

                    <div id="alert-wg-config" class="alert alert-dark" role="alert" style="display:none">
                        <h5 class="alert-heading">Configuration clients WireGuard</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(function() {
        $('#mt-form').submit(e => {
            e.preventDefault();

            let vpnName = $('#vpn-name').val();
            let vpnHost = $('#vpn-host').val();
            let gatewayIp = $('#gateway-ip').val();
            let subnet = gatewayIp.split('.', 3).join('.').concat('.');
            let allowedIPs = $('#gateway-ip').val();
            let publicKeys = $('#public-keys').val().split('\n');

            $('#mt-script').append('{<br>\
:global vpnHost "' + vpnHost + '"<br>\
:global vpnIp ' + gatewayIp + '<br>\
:global vpnName "' + vpnName + '"<br>\
:global vpnSubnet "' + subnet + '"<br>\
:global wgName<br>\
:global wgPort<br>\
:global wgPublicKey<br>\
:global wgPeerKeys {"' + publicKeys.join('"; "') + '"}<br>\
<br>\
# Cree l\'interface wireguard<br>\
/interface wireguard add<br>\
:foreach ID in=[/interface wireguard find] do={<br>\
    :set wgName [/interface wireguard get $ID name]<br>\
}<br>\
:set wgPort [/interface wireguard get [find name=$wgName] listen-port]<br>\
:set wgPublicKey [/interface wireguard get [find name=$wgName] public-key]<br>\
<br>\
# Assigne l\'IP<br>\
/ip address add address=$vpnIp interface=$wgName<br>\
<br>\
# Cree un NAT sur l\'interface wireguard si necessaire<br>\
# :if ([/ip firewall nat find chain=srcnat out-interface=$wgName action=masquerade]) do={} else={<br>\
#     /ip firewall nat add chain=srcnat out-interface=$wgName action=masquerade<br>\
:if ([/ip firewall nat find chain=srcnat action=masquerade]) do={} else={<br>\
    /ip firewall nat add chain=srcnat action=masquerade<br>\
}<br>\
# Cree les peers<br>\
:foreach I,PUB in=$wgPeerKeys do={<br>\
    /interface wireguard peers add allowed-address=($vpnSubnet . ($I+2)) interface=$wgName public-key="$PUB" persistent-keepalive=25s<br>\
}<br>\
<br>\
:put ""<br>\
:put ""<br>\
# :put "OK: {\\"name\\":\\"$vpnName\\", \\"host\\":\\"$vpnHost\\", \\"port\\":$wgPort, \\"publicKey\\":\\"$wgPublicKey\\", \\"gateway\\":\\"$vpnIp\\"}"<br>\
:put "WG PublicKey: $wgPublicKey<br>\
:put "WG Port: $wgPort<br>\
}');

            for (let i=0; i<publicKeys.length; ++i) {
                $('#alert-wg-config').append('<hr>\
<pre class="mb-0">[Interface]<br>\
PrivateKey = [...]</pre>\
<code>\
Address = ' + subnet + (i+2) + '/32<br>\
<br>\
[Peer]<br>\
Endpoint = ' + vpnHost + ':WG_PORT # !!! Port du serveur Wireguard<br>\
PublicKey = WG_PUBLIC_KEY # !!! PublicKey du serveur Wireguard<br>\
AllowedIPs = ' + allowedIPs + '<br>\
PersistentKeepalive = 25\
</code>');
            }

            $('#alert-mt-script').show();
            $('#alert-wg-config').show();
        });
    });
</script>
@endpush
