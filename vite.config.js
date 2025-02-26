import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: 'public/build',
        manifest: true,
        assetsDir: '',
    },
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
            buildDirectory: 'build',
            publicDirectory: 'public'
        }),
    ],
});
