import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/assets/css/home.style.css", // Existing CSS file
                "resources/js/app.js", // Your JS entry file
            ],
            refresh: true,
        }),
    ],
});
