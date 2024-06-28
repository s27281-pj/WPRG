import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/main.js',
                'resources/css/app.css', // Make sure to include your CSS files if any
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        },
    },
    build: {
        assetsInlineLimit: 0,
        rollupOptions: {
            output: {
                assetFileNames: (assetInfo) => {
                    if (assetInfo.name.endsWith('.woff') || assetInfo.name.endsWith('.woff2')) {
                        return 'fonts/[name].[hash][extname]';
                    }
                    return '[name].[hash][extname]';
                },
            },
        },
    },
});
