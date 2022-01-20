const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                backgroundColor: theme => ({
                    ...theme('colors'),
                    'primary': '#3490dc',
                    'secondary': '#ffed4a',
                    'danger': '#e3342f',
                }),
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
