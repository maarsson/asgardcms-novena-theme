const mix = require('laravel-mix');
const WebpackShellPluginNext = require('webpack-shell-plugin-next');
const themeInfo = require('./theme.json');


// Set up paths
const path = require('path');
const appRoot = path.resolve(__dirname, '../../');
const dotEnvFile = appRoot + '/.env';
const themePublicPath = appRoot + '/public/themes/' + themeInfo.name.toLowerCase()

// Load the .env file variables to the `process.env`
require('mix-env-file');
mix.env(dotEnvFile)


/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .webpackConfig({
       devtool: !mix.inProduction() ? 'source-map' : false
    })
    .options({
        // do not convert and version images
       processCssUrls: false
    })
    .setPublicPath('assets')
    .js('resources/js/app.js', 'assets/js/app.js')
    .sass('resources/scss/app.scss', 'assets/css/app.css')
    .sourceMaps(!mix.inProduction())
    .copy('resources/images', 'assets/images')
    .copy('resources/fonts', 'assets/fonts')
    // Live reload on watch
    .browserSync({
        proxy: process.env.APP_URL,
        files: [
            'app/**/*.php',
            'resources/views/**/*.php',
            themePublicPath + '/js/**/*.js',
            themePublicPath + '/css/**/*.css',
        ]
    })
    // Publishing theme assets
    .webpackConfig({
        plugins: [
            new WebpackShellPluginNext({
                onAfterDone: {
                    scripts: ['php ../../artisan stylist:publish ' + themeInfo.name],
                    blocking: true,
                    parallel: false
                }
            })
        ]
    });

if (mix.inProduction()) {
    mix.version();
}
