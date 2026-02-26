import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';
import { resolve } from 'path';

export default defineConfig({
    plugins: [tailwindcss()],
    root: 'src',
    publicDir: '../src/public',
    build: {
        outDir: '../dist',
        emptyOutDir: true,
        rollupOptions: {
            input: {
                main: resolve(__dirname, 'src/index.html'),
                fitur: resolve(__dirname, 'src/fitur.html'),
                tentang: resolve(__dirname, 'src/tentang.html'),
                faq: resolve(__dirname, 'src/faq.html'),
                kontak: resolve(__dirname, 'src/kontak.html'),
            },
        },
    },
});
