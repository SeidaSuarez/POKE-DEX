import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js', 'resources/js/botonSeason.js', 'resources/js/alert.js'],
            refresh: true,
        }),
    ],
});
