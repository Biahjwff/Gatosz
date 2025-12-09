import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            colors: {
                "rosa-claro": "#FC8871",
                "rosa-escuro": "#F1715E",
                "bege-claro": "#FAE8BD",
                "bege": "#F9E1A7",
                "bege-escuro": "#F8D69E",
                "laranja": "#F7C691",
                "marrom-escuro": "#8e4330",
            },
        },
    },

    plugins: [require("flowbite/plugin")],
};
