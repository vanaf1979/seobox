const mix = require('laravel-mix');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const CopyWebpackPlugin = require('copy-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');


mix.autoload({})
.js('admin/src/js/seobox-admin.js', 'admin/dist/js/seobox-admin.js')
.sass('admin/src/css/seobox-admin.scss', 'admin/dist/css/seobox-admin.css')
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
});