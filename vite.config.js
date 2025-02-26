import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    base: '',
    build: {
        outDir: 'public/build',
        emptyOutDir: true,
        manifest: 'manifest.json',
        rollupOptions: {
            input: {
                app: path.resolve(__dirname, 'resources/js/app.js'),
                style: path.resolve(__dirname, 'resources/css/app.css')
            }
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/app.css'
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
            buildDirectory: 'build'
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, './resources')
        }
    }
});
