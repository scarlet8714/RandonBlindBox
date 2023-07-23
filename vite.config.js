import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/login.css', 'resources/css/B-1.css', 'resources/js/B-1.js'],
            refresh: true,
        }),
    ],
});
