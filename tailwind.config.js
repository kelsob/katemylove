const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'sans': ['Titillium Web', ...defaultTheme.fontFamily.sans],
                'eurostyle': ['EuroStyle', 'sans-serif'],
                'space-crusaders': ['SpaceCrusaders', 'sans-serif'],
                'titillum-web': ['Titillium Web', 'sans-serif'],
            },
            colors: {
                purple: {
                    50: '#f5f3ff',
                    100: '#ede9fe',
                    200: '#ddd6fe',
                    300: '#c4b5fd',
                    400: '#a78bfa',
                    500: '#8b5cf6',
                    600: '#7c3aed',
                    700: '#6d28d9',
                    800: '#5b21b6',
                    900: '#4c1d95',
                },
                black: '#000000',
                'space-gray': {
                    50: '#f9fafb',
                    100: '#f3f4f6',
                    200: '#e5e7eb',
                    300: '#d1d5db',
                    400: '#9ca3af',
                    500: '#6b7280',
                    600: '#4b5563',
                    700: '#374151',
                    800: '#1f2937',
                    900: '#111827',
                },
                'spaceOrange': {
                    1: '#dd5227',
                    2: '#b62625',
                },
                'spaceRed': {
                    1: '#931924',
                    2: '#6f0c20',
                },
                'spaceTeal': {
                    1: '#c7e6e1',
                    2: '#a0cccd',
                    3: '#3b8993',
                    4: '#224c48',
                    5: '#133131',
                },
                'spaceWhite': {
                    1: '#e8efe8',
                    2: '#d4ded6',
                },
                'spaceBrown': {
                    1: '#3d2025',
                    2: '#220d14',
                }
            },
            animation: {
                'nebula': 'nebula 20s ease-in-out infinite',
                'twinkle': 'twinkle 7s ease-in-out infinite',
                'float': 'float 15s ease-in-out infinite',
            },
            keyframes: {
                nebula: {
                    '0%, 100%': { transform: 'scale(1)', opacity: '0.3' },
                    '50%': { transform: 'scale(1.1)', opacity: '0.4' },
                },
                twinkle: {
                    '0%, 100%': { opacity: '0.3' },
                    '50%': { opacity: '0.6' },
                },
                float: {
                    '0%, 100%': { transform: 'translate(0, 0)' },
                    '50%': { transform: 'translate(20px, -20px)' },
                },
            },
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
};