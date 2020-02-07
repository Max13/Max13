let mix = require('laravel-mix');
let build = require('./tasks/build.js');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*']),
    ]
});

 mix//.sass('source/_assets/sass/main.scss', 'css')
    //.js('source/_assets/js/main.js', 'js')
    .copy([
        'source/_assets/css/bootstrap.min.css',
        'source/_assets/css/font-awesome.min.css',
        'source/_assets/css/general.css',
        'source/_assets/css/owl.custom.css',
        'source/_assets/css/owl.carousel.css',
        'source/_assets/css/owl.theme.css',
        'source/_assets/css/style.css',
        'source/_assets/css/animate.css',
        'source/_assets/css/magnific-popup.css',
        'source/_assets/css/custom.css',
    ], mix.config.publicPath + '/css')
    .copy([
        'source/_assets/fonts/flat-ui-icons-regular.eot',
        'source/_assets/fonts/flat-ui-icons-regular.svg',
        'source/_assets/fonts/flat-ui-icons-regular.ttf',
        'source/_assets/fonts/flat-ui-icons-regular.woff',
        'source/_assets/fonts/fontawesome-webfont.eot',
        'source/_assets/fonts/fontawesome-webfont.svg',
        'source/_assets/fonts/fontawesome-webfont.ttf',
        'source/_assets/fonts/fontawesome-webfont.woff',
        'source/_assets/fonts/fontawesome-webfont.woff2',
        'source/_assets/fonts/FontAwesome.otf',
        'source/_assets/fonts/glyphicons-halflings-regular.eot',
        'source/_assets/fonts/glyphicons-halflings-regular.svg',
        'source/_assets/fonts/glyphicons-halflings-regular.ttf',
        'source/_assets/fonts/glyphicons-halflings-regular.woff',
    ], mix.config.publicPath + '/fonts')
    .copyDirectory('source/_assets/fonts/lato', mix.config.publicPath + '/fonts/lato')
    .copy([
        'source/_assets/js/modernizr-2.8.3.min.js',
        'source/_assets/js/PIE_IE9.js',
        'source/_assets/js/PIE_IE678.js',
        'source/_assets/js/html5shiv.js',
        'source/_assets/js/jquery-1.10.2.js',
        'source/_assets/js/bootstrap.min.js',
        'source/_assets/js/owl.carousel.js',
        'source/_assets/js/script.js',
        'source/_assets/js/stickUp.min.js',
        'source/_assets/js/jquery.corner.js',
        'source/_assets/js/wow.min.js',
        'source/_assets/js/classie.js',
        'source/_assets/js/uiMorphingButton_inflow.js',
        'source/_assets/js/jquery.magnific-popup.js',
    ], mix.config.publicPath + '/js')
    .copyDirectory('source/_assets/img', mix.config.publicPath + '/img')
    // .options({
    //     processCssUrls: false,
    // })
    .version();
