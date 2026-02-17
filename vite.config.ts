import { fileURLToPath } from 'url';
import { dirname } from 'path';
import { wayfinder } from '@laravel/vite-plugin-wayfinder';
import tailwindcss from '@tailwindcss/vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';
import path from 'path';
import { nativephpHotFile, nativephpMobile } from './vendor/nativephp/mobile/resources/js/vite-plugin.js';

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

export default defineConfig({
    resolve: {
        alias: {
            '@/actions': path.resolve(__dirname, './resources/wayfinder/actions'),
            '@/routes': path.resolve(__dirname, './resources/wayfinder/routes'),
            '@': path.resolve(__dirname, './resources'),
        },
    },
    plugins: [
        laravel({
            input: ['resources/app.ts'],
            ssr: 'resources/app.ts',
            refresh: true,
            hotFile: nativephpHotFile(),
        }),
        nativephpMobile(),
        tailwindcss(),
        wayfinder({
            path: 'resources/wayfinder',
            formVariants: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
});
