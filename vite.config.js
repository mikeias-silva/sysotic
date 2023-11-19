import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve:{
        alias:{
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~datatablesbs5': path.resolve(__dirname, 'node_modules/datatables.net-bs5'),
            '~fa': path.resolve(__dirname, 'node_modules/@fortawesome/fontawesome-free/scss'),
        }
    }
});
