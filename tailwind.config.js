const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                roboto: ['Roboto'],
            },
            colors:{
                hueso:'#ede8e4',
                azul1:'#284277',
                azul2:'#006bbd',
                celeste:'#81c8ee',
                azul3:'#172add',
                gris1:'#373636',
                gris2:'#4E4E4E',
                marron:'#c1afa8'
              }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
