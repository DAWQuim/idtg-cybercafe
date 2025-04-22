import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                khand: ["Khand"],
                zen_dots: ["Zen Dots"],
                saira: ["Saira"],
                inter: ["Inter"],
            },
            colors: {
                "primary": "#AACBA7",
                "hero": "#4B3717",
            },
        },
    },

    plugins: [forms],
};
