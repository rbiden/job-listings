import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                serif: ["Hanken Grotesk", "serif"],
            },
            colors: {
                primary: "#000000",
                secondary: "#121113",
                darkgray: "#212121",
                gray: "#495057",
                emphasis: "#0353a4",
            },
            fontSize: {
                xxs: "0.6rem",
            }
        },
    },
    plugins: [],
};
