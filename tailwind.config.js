import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
const plugin = require("tailwindcss/plugin");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                dark: "#001220",
                light: "#F8FBFD",
                porpNight: "#0F000D",
                porpDay: "#F3EFFF",
                porp: {
                    50: "#DCCCFF",
                    100: "#DEA4F0",
                    200: "#E07BE0",
                    300: "#CD68C4",
                    400: "#BA55A7",
                    500: "#A7428A",
                    600: "#932F6D",
                    700: "#7F2460",
                    800: "#6B1853",
                    900: "#3C0034",
                    950: "#2C0625",
                },
            },
            dropShadow: {
                block: "2px 3px 5px rgba(0, 0, 0, 0.3)",
            },
        },
    },

    plugins: [forms],
};
