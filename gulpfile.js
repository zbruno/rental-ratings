var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.scss')
        .version([
            'css/app.css',
        ])
        .browserSync({
            proxy: 'rentalratings.dev',
            tunnel: false,
            open: false
        });
});