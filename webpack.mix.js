let mix = require('laravel-mix');
require('dotenv').config();

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

// You can set up a `.env` file in your project root (see `.env.sample`) or just override the default proxy URL here.
let proxy_url = process.env.BROWSERSYNC_PROXY_URL || 'local.wordpress.dev';

mix.setPublicPath('./')
    .autoload({
        'popper.js/dist/umd/popper.js': ['Popper']
    })
    .js(['js/main.js'], 'js/build/bundle.js')
    // If you need multiple JavaScript sources:
    // .js(
    //     [
    //         'js/main.js',
    //         'path/to/some/other/javascript'
    //     ],
    //     'js/build/bundle.js'
    // )
    .standaloneSass('sass/style.scss', 'css/')
    .sourceMaps()
    .browserSync({
        proxy: proxy_url,
        files: [
            './*.php',
            'template-parts/*.php',
            'js/build/*.js',
            'css/style.css'
        ]
    });
