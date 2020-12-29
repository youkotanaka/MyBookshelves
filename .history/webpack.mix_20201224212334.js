const mix = require('laravel-mix');



mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .version();

mix.browserSync({
    files: [
      "resources/views/**/*.blade.php",
      "public/**/*.*"
    ],
    proxy: 'http://127.0.0.1:8000'
});