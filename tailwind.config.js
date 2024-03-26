import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",

        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                'linux': ['linux'],
              },
              colors: {
                'primary': '#9E896A',
                'secondary': '#FFF3DE',
                'secondary-text': '#AFA08B',
                'text-opt': '#A88632',
                'slider-button': '#D1BB84',
                'dark-brown': '#35281E',
              },
              variants: {
                extend: {
                  divideColor: ['group-hover'],
                }
              },
              theme: {
                fontWeight: {
                 hairline: 100,
                 'extra-light': 100,
                 thin: 200,
                  light: 300,
                  normal: 400,
                  medium: 500,
                 semibold: 600,
                  bold: 700,
                 extrabold: 800,
                 'extra-bold': 800,
                  black: 900,
                }
              }
        },
    },

    plugins: [
      forms,
      require('flowbite/plugin')
    ],
};
