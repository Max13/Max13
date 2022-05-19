<!-- FullScreen -->
<div class="intro-header">
    <div class="text-center self">
        <img src="/assets/build/img/avatar.svg" class="center-block img-responsive" alt="Avatar Afro" width="150">
        <h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">{{ $page->author }}</h1>
        <h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">{{ $page->locales->{$page->locale}->title }}.</h3>
        <ul class="list-inline intro-social-buttons">
            <li>
                <a href="https://github.com/Max13" class="swing wow fadeIn" data-wow-delay="1.2s" title="Github" target="_blank">
                    <i class="fa fa-github fa-inverse fa-3x" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/_Max13" class="swing wow fadeIn" data-wow-delay="1.2s" title="Twitter" target="_blank">
                    <i class="fa fa-twitter fa-inverse fa-3x" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="https://t.me/AdnanRIHAN" class="swing wow fadeIn" data-wow-delay="1.2s" title="Telegram" target="_blank">
                    <i class="fa fa-telegram fa-inverse fa-3x" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="https://keybase.io/max13/key.asc" class="swing wow fadeIn" data-wow-delay="1.2s" title="Clé publique GPG" target="_blank">
                    <i class="fa fa-key fa-inverse fa-3x" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/adnan-rihan-209b1097" class="swing wow fadeIn" data-wow-delay="1.2s" title="LinkedIn" target="_blank">
                    <i class="fa fa-linkedin-square fa-inverse fa-3x" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="https://bimoko.osc.cg/" class="swing wow fadeIn" data-wow-delay="1.2s" title="Podcast" target="_blank">
                    <i class="fa fa-podcast fa-inverse fa-3x" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
        <h5 class="h5_home wow fadeIn hidden-xs mt-2" data-wow-delay="2s"><i>{{ $page->homeSubtitle }}</i></h5>
    </div>
    <!-- /.self -->

    <div class="wow fadeIn center-block continue">
        <div class="button_down">
            <a href="#whoami" class="imgcircle wow bounceInUp" data-wow-duration="1.5s">
                <img class="img_scroll" src="/assets/build/img/icon/circle.png" alt="Continue">
            </a>
        </div>
    </div>
</div>
<!-- /.intro-header -->
