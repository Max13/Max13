<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>TV Congo</title>
</head>
<body>
    <h2 class="text-center mt-5 mb-3">TV Congo</h2>
    <h5 class="text-center mb-5">Attention, la vidéo en pause continue de charger…</h5>

    <div class="container">
        <div class="row justify-content-center">
            <div id="tvcongo" class="col-auto">
                <div id="spinner" class="text-center">
                    <i class="fa fa-4x fa-circle-o-notch fa-spin text-center" aria-hidden="true"></i>
                </div>

                <div class="accordion" id="tvlinks" hidden>
                    <div class="card" hidden>
                        <div class="card-header p-1" id="heading">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsible" aria-expanded="true" aria-controls="collapsible">
                                    Collapsible Group Item #1
                                </button>
                            </h2>
                        </div>

                        <div id="collapsible" class="collapse" aria-labelledby="heading" data-parent="#tvlinks">
                            <div class="card-body">
                                <video width="320" height="240" controls preload="none">
                                    Votre navigateur ne prend pas en charge les vidéos HTML5. Tant pis.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $(function() {
            const tokenLink = 'https://token.kube.easybroadcast.fr/akamai/telecongo';
            const preIndexLink = 'https://cdnamd-hls-globecast.akamaized.net/live/ramdisk/congo_tv/hls_video_token/index.m3u8';

            $.get(tokenLink)
             .then(function (token) {
                let xhr = new XMLHttpRequest;

                $.ajax(preIndexLink + '?' + token, {
                    xhr: function() {
                         return xhr;
                    },
                }).then(function (data) {
                    let streamBaseLink = xhr.responseURL.split('/'),
                        streams = [];

                    streamBaseLink.pop();

                    data.split('\n').forEach(specsLine => {
                        if (specsLine.substring(0, 18) === '#EXT-X-STREAM-INF:') {
                            streamSpec = {};

                            specsLine.substring(18).split(',').forEach(specPart => {
                                const spec = specPart.split('=');

                                streamSpec[spec[0]] = spec[1];
                            });

                            streams.push(streamSpec);
                        } else if (specsLine.substring(specsLine.length - 5) === '.m3u8') {
                            streams[streams.length - 1].link = streamBaseLink.join('/') + '/' + specsLine;
                        }
                    });

                    let $spinner = $('#spinner'),
                        $tvlinks = $('#tvlinks'),
                        $modelCard = $tvlinks.children('.card[hidden]');

                    streams.forEach((s, i) => {
                        let $newCard = $modelCard.clone(true, true).prop('hidden', false),
                            $video = $newCard.find('video'),
                            resolution = s.RESOLUTION.split('x');

                        $newCard.children('.card-header')
                                .attr('id', `heading-${i}`);

                        $newCard.children('.collapse')
                                .attr('aria-labelledby', `heading-${i}`)
                                .attr('id', `collapsible-${i}`);

                        $newCard.find('button[data-toggle="collapse"]')
                                .attr('data-target', `#collapsible-${i}`)
                                .attr('aria-controls', `collapsible-${i}`)
                                .text(`${s.RESOLUTION} - ${parseInt(s['FRAME-RATE'])} ips`);

                        $newCard.on('show.bs.collapse', function () {
                            $video.attr('src', $video.attr('data-src'));
                            // Disabled because it constantly loads in background
                            // $video[0].load();
                        }).on('hide.bs.collapse', function () {
                            $video[0].pause();
                        });

                        $video.attr('width', resolution[0])
                              .attr('height', resolution[1])
                              .attr('data-src', s.link)

                        $newCard.appendTo($tvlinks);
                    });

                    $spinner.prop('hidden', true);
                    $tvlinks.prop('hidden', false);
                });
             });
        });
    </script>
</body>
</html>
