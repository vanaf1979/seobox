
const mix = require('laravel-mix');

mix.autoload({})
.js('silk/metabox/src/js/silk-admin.js', 'silk/metabox/dist/js/silk-admin.js')
.js('silk/settings/src/js/silk-settings.js', 'silk/settings/dist/js/silk-settings.js')
.react('silk/sidebar/src/js/silk-sidebar.js', 'silk/sidebar/dist/js/silk-sidebar.js')
.sass('silk/metabox/src/css/silk-admin.scss', 'silk/metabox/dist/css/silk-admin.css')
.sass('silk/settings/src/css/silk-settings.scss', 'silk/settings/dist/css/silk-settings.css')
.sass('silk/sidebar/src/css/silk-sidebar.scss', 'silk/sidebar/dist/css/silk-sidebar.css')
.options({
    processCssUrls: false,
    autoprefixer: {
        options: {
            browsers: '>0.1%'
        }
    },
    postCss: [
        require('cssnext')
    ]
}).webpackConfig({
    externals: {
        'react': 'React',
        'react-dom': 'ReactDOM',
        '@wordpress/components': '@wordpress/components'
    }
});