
const mix = require('laravel-mix');

mix.autoload({})
.js('seobox/admin/src/js/seobox-admin.js', 'seobox/admin/dist/js/seobox-admin.js')
.js('seobox/settings/src/js/seobox-settings.js', 'seobox/settings/dist/js/seobox-settings.js')
.react('seobox/sidebar/src/js/seobox-sidebar.js', 'seobox/sidebar/dist/js/seobox-sidebar.js')
.sass('seobox/admin/src/css/seobox-admin.scss', 'seobox/admin/dist/css/seobox-admin.css')
.sass('seobox/settings/src/css/seobox-settings.scss', 'seobox/settings/dist/css/seobox-settings.css')
.sass('seobox/sidebar/src/css/seobox-sidebar.scss', 'seobox/sidebar/dist/css/seobox-sidebar.css')
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