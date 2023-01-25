const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                body: ["Roboto"],
            },
            colors: {
                "gray-background": "#f7f8fc",
                "own-blue": "#328af1",
                "blue-hover": "#2879bd",
                "own-yellow": "#ffc73c",
                "own-red": "#ec454f",
                "own-green": "#1aab8b",
                "own-purple": "#8b60ed",
            },
            spacing: {
                70: "17.5rem",
                175: "43.75rem",
                104: "26rem",
                76: "19rem",
            },
            maxWidth: {
                custom: "62.5rem",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
