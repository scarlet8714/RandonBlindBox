import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/login.css', 'resources/css/B-1.css', 'resources/js/B-1.js', 'resources/css/H_member.css', 'resources/css/I_check.css', 'resources/js/I_check.js', 'resources/js/slot.js', 'resources/css/slot.css', 'resources/css/swiper.css'],
=======
<<<<<<< HEAD
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/login.css', 'resources/css/B-1.css', 'resources/js/B-1.js', 'resources/css/D-1.css', 'resources/js/D-1.js'],
=======
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/login.css', 'resources/css/B-1.css', 'resources/js/B-1.js', 'resources/css/H_member.css', 'resources/css/I_check.css', 'resources/js/I_check.js'],
>>>>>>> c0aa8a3bc53951af4713389adf24d7a2e1bd15e0
>>>>>>> origin/master
            refresh: true,
        }),
    ],
});
