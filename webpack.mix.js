let mix = require('laravel-mix');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

require('laravel-mix-jigsaw');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css')
    .options({
        processCssUrls: false,
        postCss: [
            require('tailwindcss'),
            require('autoprefixer'),
        ],
    })
    .version();
