const mix = require('laravel-mix');
require('laravel-mix-purgecss');
const tailwindcss = require('tailwindcss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').extract()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/vendor.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [
            require('postcss-css-variables')(),
            tailwindcss('./tailwind.config.js')
        ]
    })
    .purgeCss();

if (mix.inProduction()) {
    mix.version();
}
