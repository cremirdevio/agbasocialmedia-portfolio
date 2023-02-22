const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Ubuntu', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                wiggle: {
                    '0%, 100%' : { transform: 'rotate(-3deg)'}, 
                    '50%' : { transform: 'rotate(3deg)'}, 
                }
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
