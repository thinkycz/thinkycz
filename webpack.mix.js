let mix = require('laravel-mix');
let build = require('./tasks/build.js');

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*']),
    ]
});

mix.js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css')
    .tailwind()
    .purgeCss({
        folders: ['source'],
    })
    .version();

mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'source/assets/build/webfonts');
