<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="{{ $page->locale }}"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="{{ $page->locale }}"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="{{ $page->locale }}"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="{{ $page->locale }}"> <![endif]-->
<!--[if gt IE 9]><!-->
<html prefix="og: http://ogp.me/ns#"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="author" content="{{ $page->author }}">
    <meta name="language" content="{{ $page->locale }}">
    <meta name="description" content="{{ $page->description }}">
    <meta name="keywords" content="{{ $page->keywords }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

    <meta property="og:type" content="profile">
    <meta property="og:first_name" content="Adnan">
    <meta property="og:last_name" content="RIHAN">
    <meta property="og:username" content="Max13">
    <meta property="og:gender" content="male">
    <meta property="og:title" content="{{ $page->title }}">
    <meta property="og:url" content="{{ $page->baseUrl }}">
    <meta property="og:image" content="{{ $page->baseUrl }}/assets/build/img/portrait.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="216">
    <meta property="og:image:height" content="216">
    <meta property="og:image:alt" content="Portrait">
    <meta property="og:description" content="{{ $page->description }}">
    <meta property="og:locale" content="{{ $page->locale.'_'.$page->territory }}">
    @foreach ($page->locales as $locale)
    <meta property="og:locale:alternate" content="{{ $locale->lang.'_'.$locale->territory }}">
    @endforeach

    <title>{{ $page->title }}</title>

    <!-- Custom Google Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet" type="text/css">

    <!-- Vendor CSS (integrated by Flatfy) -->
    <link href="{{ mix('css/vendor.css', 'assets/build') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ mix('css/custom.css', 'assets/build') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-157964671-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-157964671-1');
    </script>

    <!--[if IE 9]>
        <script src="{{ mix('js/PIE_IE9.js', 'assets/build') }}"></script>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="{{ mix('js/PIE_IE678.js', 'assets/build') }}"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <script src="{{ mix('js/html5shiv.js', 'assets/build') }}"></script>
    <![endif]-->

</head>

<body id="home">

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>

    <!-- FullScreen -->
    <div class="intro-header">
        <div class="text-center self">
            <img src="/assets/build/img/avatar.svg" class="center-block img-responsive" alt="Avatar Afro" width="150">
            <h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">{{ $page->author }}</h1>
            <h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">{{ $page->jobTitle }}.</h3>
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

    <!-- NavBar-->
    <nav class="navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{-- <a class="navbar-brand" href="#home">Brand</a> --}}
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="menuItem"><a href="#whoami">{{ $page->aboutMeTitle }}</a></li>
                    <li class="menuItem"><a href="#contact">{{ $page->contactTitle }}</a></li>
                    @foreach ($page->locales as $locale)
                    <li class="menuItem flag stick-top"><a href="/{{ $locale->lang }}"><img src="/assets/build/img/icon/{{ $locale->icon }}" alt="{{ $locale->alt }}"></a></li>
                    @endforeach
                </ul>
            </div>

        </div>
    </nav>

    <!-- Who am I -->
    <div id="whoami" class="content-section-b" style="border-top: 0">
        <div class="container">

            <div class="text-center wrap_title">
                <h2>{{ $page->aboutMeTitle }}</h2>
                <p><i>{{ $page->aboutMeSubtitle }}</i></p>
            </div>

            @foreach ($page->aboutMeBlocks->chunk(3) as $blocks)
            <div class="row">
                @foreach ($blocks as $block)
                <div class="col-sm-4 wow fadeInDown text-center">
                    <img src="/assets/build/img/icon/{{ $block->icon }}" alt="{{ $block->alt }}">
                    <h3>{!! $block->title !!}</h3>
                    <p class="lead">{!! $block->lead !!}</p>
                    @if ($block->subLead)
                    <p class="small">{!! $block->subLead !!}</p>
                    @endif
                </div><!-- /.col-sm-4 -->
                @endforeach
            </div><!-- /.row -->
            @endforeach
        </div>
    </div>

    <!-- Contact -->
    <div id="contact" class="content-section-a">
        <div class="container">
            <div class="text-center wrap_title">
                <h2>{{ $page->contactTitle }}</h2>
                <p class="lead">{{ $page->contactSubtitle }}</p>
                <button type="button" class="btn btn-primary" id="owo">{{ $page->contactBtn }}</button>
            </div>
        </div>
    </div>

    <footer class="banner">
        <div class="row">
            <p class="col-xs-6 col-md-2 faded">{{ $page->author }}</p>
            <p class="hidden-xs col-md-6 col-md-offset-1 dedication small text-center">{{ $page->dedication }}</p>
            <p class="col-xs-6 col-md-1 col-md-offset-2"><a href="#" data-toggle="modal" data-target="#modal-credits">{{ $page->creditsTitle }}</a></p>
        </div>
    </footer><!-- /footer -->

    <!-- Modal Credits -->
    <div class="modal fade" id="modal-credits" tabindex="-1" role="dialog" aria-labelledby="modal-credits-title">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-credits-title">{{ $page->creditsTitle }}</h4>
                </div>
                <div class="modal-body">
                    <ul>
                        @foreach ($page->creditsContent as $line)
                        <li>{!! $line !!}</li>
                        @endforeach
                        <li>
                            {{ $page->creditsBy->title }}:
                            <ul>
                                @foreach ($page->creditsBy->icons as $icon)
                                <li>
                                    <img class="credit" src="/assets/build/img/icon/{{ $icon->icon }}" alt="{{ $icon->alt }}"> {{ $page->by }} <a href="{{ $icon->link }}" _target="_blank">{{ $icon->author }}</a>
                                    @if ($icon->from)
                                    {{ $page->from }} <a href="{{ $icon->fromLink }}" _target="_blank">{{ $icon->from }}</a>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Model Credits -->

    <!-- JavaScript -->
    <script src="{{ mix('js/vendor.js', 'assets/build') }}"></script>
    <!-- StikyMenu -->
    <script type="text/javascript">
        jQuery(function($) {
            $(document).ready(function() {
                $('.navbar-default').stickUp();

                $('.navbar-default .flag').each(function () {
                    let $this = $(this),
                        $clone = $this.clone();

                    $this.addClass('invisible')
                         .removeClass('stick-top');

                    $clone.offset({left: $this.offset().left - $(window).scrollLeft()})
                          .appendTo($this.parent());
                });

                $('#owo').one('click', e => {
                    $.get('/getEmail.php')
                     .done(email => {
                        let $link = $('<p><b><a href="mailto:' + email +'">' + email + '</a></b></p>');

                        $(e.target).replaceWith($link);
                     });
                });
            });
        });
        new WOW().init();
    </script>
</body>
</html>
