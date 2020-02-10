<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="author" content="Adnan RIHAN">
    <meta name="language" content="fr">
    <meta name="description" content="Bienvenu sur ma page de présentation: Adnan RIHAN – Architecte Informatique, Développeur Full-Stack, Cryptographe et Pilote d'avion. Je conçois et développe des architectures et solutions de bureau en C/C++/Qt, Web en PHP/NodeJS (Laravel), serveurs headless (Unix et Linux), Administration de réseaux et systèmes mais aussi frontend (HTML/CSS/JS, Bootstrap, VueJS...) bien que ce ne soit pas ma spécialité. En tant que cryptographe, je conçois également des systèmes d'authentification, chiffrement et d'échange de données sécurisées. Pilote d'avion et musicien le reste du temps, j'aime donc voyager.">
    <meta name="keywords" content="Développeur, Programmeur, C, C++, Qt, Laravel, Linux, Unix, Bash, Shell, Serveur, Headless, Webapp, Web, Applications de bureau, Architecture système, Ingénieur Système, Cryptographe, PHP, PHP5, PHP7, JS, HTML, HTML5, CSS, CSS2, CSS3, javascript, bootstrap, vuejs, Crypto, Cryptographie, QCA">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

    <title>Adnan RIHAN: Architecte Informatique, Développeur Full-Stack, Cryptographe et Pilote</title>

    <!-- Custom Google Web Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>

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
            <h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">Adnan RIHAN</h1>
            <h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">Architecte Informatique, Développeur Full-Stack, Cryptographe et Pilote.</h3>
            <ul class="list-inline intro-social-buttons">
                <li>
                    <a href="https://github.com/Max13" class="swing wow fadeIn" data-wow-delay="1.2s" title="Github">
                        <i class="fa fa-github fa-inverse fa-3x" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/_Max13" class="swing wow fadeIn" data-wow-delay="1.2s" title="Twitter">
                        <i class="fa fa-twitter fa-inverse fa-3x" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="https://t.me/AdnanRIHAN" class="swing wow fadeIn" data-wow-delay="1.2s" title="Telegram">
                        <i class="fa fa-telegram fa-inverse fa-3x" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="https://keybase.io/max13/key.asc" class="swing wow fadeIn" data-wow-delay="1.2s" title="Clé publique GPG">
                        <i class="fa fa-key fa-inverse fa-3x" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/adnan-rihan-209b1097" class="swing wow fadeIn" data-wow-delay="1.2s" title="LinkedIn">
                        <i class="fa fa-linkedin-square fa-inverse fa-3x" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <h5 class="h5_home wow fadeIn hidden-xs mt-2" data-wow-delay="2s"><i>Le fond, c'est juste pour faire beau</i></h5>
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
                    <li class="menuItem"><a href="#whoami">A propos de moi</a></li>
                    <li class="menuItem"><a href="#contact">Contact</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- Who am I -->
    <div id="whoami" class="content-section-b" style="border-top: 0">
        <div class="container">

            <div class="text-center wrap_title">
                <h2>A propos de moi</h2>
                <p><i>Un peu de narcissisme</i></p>
            </div>

            <div class="row">
                <div class="col-sm-4 wow fadeInDown text-center">
                    <img src="/assets/build/img/icon/blueprint.svg" alt="Plan">
                    <h3>Architecture</h3>
                    <p class="lead">Je conçois l'architecture des solutions de mes clients. Avec mes clients. <small><i>(C'est quand même mieux)</i></small></p>

                    <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->

                <div class="col-sm-4 wow fadeInDown text-center">
                    <img src="/assets/build/img/icon/fullstack.svg" alt="Fullstack">
                    <h3>Full-Stack</h3>
                    <p class="lead">De l'arrière-plan (<i>back-end</i>) au frontal (<i>front-end</i>), en passant par des <abbr title="Application Programming Interface, ou Interface de Programmation">API</abbr> qui tapent sur des bases de données répliquées sur la lune tout en envoyant des notifications sur la TV de la salle de bain.</p>
                    <p class="small">Html/CSS/JS (Bootstrap/jQuery/VueJS/Apache Cordova), PHP (Laravel ++), MySQL/Sqlite, C/C++ (<i>Qt Ambassador</i>), Ruby (Quelques packages homebrew)</p>

                    <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->

                <div class="col-sm-4 wow fadeInDown text-center">
                    <img src="/assets/build/img/icon/cryptography.svg" alt="Cryptographie">
                    <h3>Cryptographie</h3>
                    <p class="lead">Implémentation de protocoles de chiffrement en vue de la sécurisation des données lors du stockage ou des échanges.<br><small><i>Big Brother...</i>&nbsp;🤫</small></p>
                    <p class="small">Contributeur sur <abbr title="Qt Cryptographic Architecture">QCA</abbr>, quelques projets en entreprise</p>

                    <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->

            </div><!-- /.row -->

            <div class="row">
                <div class="col-sm-4 wow fadeInDown text-center">
                    <img src="/assets/build/img/icon/home-automation.svg" alt="Domotique">
                    <h3>Systèmes embarqués, Domotique et <abbr title="Machine to Machine, ou Communication entre machine sans intervention humaine">M2M</abbr></h3>
                    <p class="lead">Si j'ai pu connecter ma maison, à base d'Arduino, d'ESP-8266 et de Home Assistant, <small>au prix de quelques frictions avec ma moitié</small>… C'est que je peux le faire n'importe où ailleurs.</p>

                    <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->

                <div class="col-sm-4 wow fadeInDown text-center">
                    <img src="/assets/build/img/icon/congo.svg" alt="République du Congo">
                    <h3>Enfant du Congo</h3>
                    <p class="lead">Croyez-le, c'est une compétence.</p>
                    <p class="small">Cela dit, j'ai aussi travaillé sur un projet d'informatisation du Cadastre avec le Ministère des Affaires Foncières en République Démocratique du Congo.</p>

                   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->

                <div class="col-sm-4 wow fadeInDown text-center">
                    <img src="/assets/build/img/icon/pilot.svg" alt="Pilote privé">
                    <h3>Pilote privé</h3>
                    <p class="lead">Licence en cours.</p>
                    <p class="small">28h53 au compteur</p>

                    <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->

            </div><!-- /.row -->
        </div>
    </div>

    <!-- Contact -->
    <div id="contact" class="content-section-a">
        <div class="container">
            <div class="text-center wrap_title">
                <h2>Contact</h2>
                <p class="lead">Si les réseaux sociaux ne suffisent pas</p>
                <button type="button" class="btn btn-primary" id="owo">Afficher mon e-mail</button>
            </div>
        </div>
    </div>

    <footer class="banner">
        <div class="row">
            <p class="col-xs-6 col-md-2 faded">Adnan RIHAN</p>
            <p class="hidden-xs col-md-6 col-md-offset-1 dedication small text-center">À Verone MANKOU, sans qui je n'aurais pas eu besoin de faire ce site…</p>
            <p class="col-xs-6 col-md-1 col-md-offset-2"><a href="#" title="En construction" data-toggle="modal" data-target="#modal-credits">Crédits</a></p>
        </div>
    </footer><!-- /footer -->

    <!-- Modal Credits -->
    <div class="modal fade" id="modal-credits" tabindex="-1" role="dialog" aria-labelledby="modal-credits-title">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-credits-title">Crédits</h4>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>Les sources de ce site sont disponibles sur <a href="https://github.com/Max13/Max13" _target="_blank">GitHub</a>.</li>
                        <li>Ce site est en déploiement continu (GitHub Workflow), et reflète donc les sources telles que publiées.</li>
                        <li>Ce site est basé sur le template <a href="https://github.com/andreagalanti/Flatfy-Free-Flat-and-Responsive-HTML5-Template" _target="_blank">Flatfy</a> par <a href="https://github.com/andreagalanti" _target="_blank">Andrea Galanti</a></li>
                        <li>
                            Merci aux personnes suivantes pour leurs créations:
                            <ul>
                                <li><img class="credit" src="/assets/build/img/icon/blueprint.svg" alt="Plan"> par <a href="https://www.iconfinder.com/Ruslancorel" _target="_blank">Rudez Studio</a></li>
                                <li><img class="credit" src="/assets/build/img/icon/fullstack.svg" alt="Fullstack"> par <a href="https://www.iconfinder.com/WHCompare" _target="_blank">Alexiuz AS</a></li>
                                <li><img class="credit" src="/assets/build/img/icon/cryptography.svg" alt="Cryptographie"> par <a href="https://www.flaticon.com/authors/surang" title="surang">surang</a> de <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></li>
                                <li><img class="credit" src="/assets/build/img/icon/home-automation.svg" alt="Domotique"> par <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons" _target="blank">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon" _target="blank">www.flaticon.com</a></li>
                                <li><img class="credit" src="/assets/build/img/icon/congo.svg" alt="République du Congo"> par <a href="https://www.flaticon.com/authors/freepik" title="Freepik" _target="blank">Freepik</a> de <a href="https://www.flaticon.com/" title="Flaticon" _target="blank">www.flaticon.com</a></li>
                                <li><img class="credit" src="/assets/build/img/icon/pilot.svg" alt="Pilote privé"> par <a href="https://www.iconfinder.com/laurareen" _target="blank">Laura Reen</a></li>
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
