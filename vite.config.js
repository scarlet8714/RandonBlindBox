import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                'resources/js/app.js',
                'resources/css/login.css',
                'resources/css/B-1.css',
                'resources/js/B-1.js',
                'resources/css/D-1.css',
                'resources/js/D-1.js',
                'resources/css/H_member.css',
                'resources/css/I_check.css',
                'resources/js/I_check.js'],
            refresh: true,
        }),
    ],
});
