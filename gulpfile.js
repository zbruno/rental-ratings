var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.scss')
        .version([
            'css/app.css',
        ])
        .browserify([
            'resources/assets/jsx/app.js'
        ], 'public/build/js/app.js')
        .browserSync({
            proxy: 'rentalratings.dev',
            tunnel: false,
            open: false
        });
});