import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/navbar.js",
                "resources/js/carousel.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
