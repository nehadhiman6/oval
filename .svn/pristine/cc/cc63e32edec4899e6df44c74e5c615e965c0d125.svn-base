const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: 'jit',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            boxShadow: {
                'insidePos': 'inset 2px 2px 2px #0000007a',
                'insideNeg': 'inset -2px -2px 2px #0000007a',
                'insidePos1': 'inset -2px 2px 2px #0000007a',
                'insideNeg1': 'inset 2px -2px 2px #0000007a',
              },
            backgroundSize: {
                '100%': '100%',
              },
            screens: {
                'custom': {'min': '1280px', 'max': '1350px'}, // Custom media query range
                'custom2': {'min': '1536px', 'max': '1780px'}, // Custom media query range
              },
            zIndex: {
                '999': '999',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'main': "var(--main-color)",
                'primary': "var(--primary-color)",
                'secondary': "var(--secondary-color)",
                'tertiary': "var(--tertiary-color)",
                'body-color': "var(--body-color)",
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('flowbite/plugin')],
};
