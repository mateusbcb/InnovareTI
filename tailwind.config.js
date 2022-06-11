const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'inovare-btn-primary': '#2ea2cd',
                'inovare-btn-primary-hover': '#091d3e',
                'inovare-text-blue-1': '#1a516c',
                'inovare-text-blue-2': '#1f314f',
                'inovare-bg-input': '#f1f5fe',
                'inovare-bg-footer': '#091d3e',
                'inovare-bg-menu': '#f8f9fa',
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
