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
    <meta name="description" content="{{ $page->locales->{$page->locale}->description }}">
    <meta name="keywords" content="{{ $page->locales->{$page->locale}->keywords }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

    <meta property="og:type" content="profile">
    <meta property="og:first_name" content="Adnan">
    <meta property="og:last_name" content="RIHAN">
    <meta property="og:username" content="Max13">
    <meta property="og:gender" content="male">
    <meta property="og:title" content="{{ $page->locales->{$page->locale}->title }}">
    <meta property="og:url" content="{{ $page->baseUrl }}">
    <meta property="og:image" content="{{ $page->baseUrl }}/assets/build/img/portrait.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="216">
    <meta property="og:image:height" content="216">
    <meta property="og:image:alt" content="Portrait">
    <meta property="og:description" content="{{ $page->locales->{$page->locale}->description }}">
    <meta property="og:locale" content="{{ $page->locale.'_'.$page->locales->{$page->locale}->territory }}">
    @foreach ($page->locales as $locale)
    <meta property="og:locale:alternate" content="{{ $locale->lang.'_'.$locale->territory }}">
    @endforeach

    <title>{{ $page->locales->{$page->locale}->title }}</title>

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

    <!-- Jumbotron with social media -->
    @includeWhen($page->isIndex(), '_layouts.jumbotron-me')

    <!-- NavBar-->
    @include('_layouts.navbar', ['links' => $page->navbarLinks]);

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
                <div class="col-sm-{{ min(6, 12 / $loop->count) }} col-sm-offset-{{ $loop->count === 1 ? 3 : 0 }} wow fadeInDown text-center">
                    <div class="{{ $block->imgDivClass }}">
                        <img src="/assets/build/img/icon/{{ $block->icon }}" alt="{{ $block->alt }}" class="{{ $block->imgClass }}">
                    </div>
                    <h3>{!! $block->title !!}</h3>
                    <p class="lead">{!! $block->lead !!}</p>
                    @if ($block->subLead)
                    <p class="small">{!! $block->subLead !!}</p>
                    @endif
                </div><!-- /.col-sm-* -->
                @endforeach
            </div><!-- /.row -->
            @endforeach
        </div>
    </div>

    <!-- MikroTik -->
    <div id="mikrotik" class="content-section-a" style="border-top: 0">
        <div class="container">

            <div class="text-center wrap_title" style="margin-bottom: 5em">
                <h2>{{ $page->mikrotikTitle }}</h2>
                <p><i>{{ $page->mikrotikSubtitle }}</i></p>
            </div>

            @foreach ($page->mikrotikBlocks->chunk(3) as $blocks)
            <div class="row">
                @foreach ($blocks as $block)
                <div class="col-sm-{{ min(6, 12 / $loop->count) }} col-sm-offset-{{ $loop->count === 1 ? 3 : 0 }} wow fadeInDown text-center">
                    <div class="{{ $block->imgDivClass }}">
                        <img src="/assets/build/img/icon/{{ $block->icon }}" alt="{{ $block->alt }}" class="{{ $block->imgClass }}">
                    </div>
                    <h3>{!! $block->title !!}</h3>
                    <p class="lead">{!! $block->lead !!}</p>
                    @if ($block->subLead)
                    <p class="small">{!! $block->subLead !!}</p>
                    @endif
                </div><!-- /.col-sm-* -->
                @endforeach
            </div><!-- /.row -->
            @endforeach
        </div>
    </div>

    <!-- Contact -->
    <div id="contact" class="content-section-b">
        <div class="container">
            <div class="text-center wrap_title">
                <h2>{{ $page->contactTitle }}</h2>
                <p class="lead">{{ $page->contactSubtitle }}</p>
                <button type="button" class="btn btn-primary" id="owo">{{ $page->contactBtn }}</button>
            </div>
        </div>
    </div>

    <!-- Footer + Credits -->
    @include('_layouts.footer')

    <!-- 3CX Live Chat -->
    <call-us-selector phonesystem-url="https://iticparis.on3cx.fr" party="LiveChat956721" lang="{{ $page->locale }}" minimized="true" chat-delay="500"
        @if (isset($page->locales->{$page->locale}->live_chat))
            @foreach ($page->locales->{$page->locale}->live_chat as $key => $val)
            {{ $key }}="{{ $val }}"
            @endforeach
        @endif
    ></call-us-selector>

    <!-- JavaScript -->
    <script src="{{ mix('js/vendor.js', 'assets/build') }}"></script>
    <script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script>

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

                // $('#owo').one('click', e => {
                //     $.get('/getEmail.php')
                //      .done(email => {
                //         let $link = $('<p><b><a href="mailto:' + email +'">' + email + '</a></b></p>');

                //         $(e.target).replaceWith($link);
                //      });
                // });
                $('#owo').one('click', e => {
                    $(e.target).replaceWith('<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScV8j4caLDGU4Lab-MIIqkbuZXR98_ua3uuIprtJzczFZItbQ/viewform?embedded=true" height="780" width="100%" frameborder="0">Chargement…</iframe>');
                });
            });
        });
        new WOW().init();
    </script>
</body>
</html>
