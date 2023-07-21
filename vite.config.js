import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        output: 'app/public/build',
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/admin.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
