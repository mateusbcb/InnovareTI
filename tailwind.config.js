const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    mode: 'jit',
    content: [
        require('@tailwindcss/forms'),
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: 'class', // or 'media' or 'class'
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

                'success-text': '#0f5132',
                'success-bg': '#d1e7dd',
                'success-border': '#badbcc',

                'danger-text': '#842029',
                'danger-bg': '#f8d7da',
                'danger-border': '#f5c2c7',

                'primary-text': '#084298',
                'primary-bg': '#cfe2ff',
                'primary-border': '#b6d4fe',

                'secondary-text': '#41464b',
                'secondary-bg': '#e2e3e5',
                'secondary-border': '#d3d6d8',

                'warning-text': '#664d03',
                'warning-bg': '#fff3cd',
                'warning-border': '#ffecb5',

                'info-text': '#055160',
                'info-bg': '#cff4fc',
                'info-border': '#b6effb',
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
