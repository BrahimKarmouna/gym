// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { fileURLToPath } from 'node:url'
import vue from '@vitejs/plugin-vue'
import { quasar, transformAssetUrls } from '@quasar/vite-plugin'

export default defineConfig({
    plugins: [

        vue(
            {
                template: { transformAssetUrls }
              }
        ),

        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        quasar({
            sassVariables: fileURLToPath(
              new URL('resources/css/quasar-variables.sass', import.meta.url)
            )
          })
    ],
});