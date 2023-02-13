const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        'resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        'resources/views/auth/**/*.blade.php',
        'resources/views/layout/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'or': '#E9855A',
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms')
    ],
};
