import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/frontend/app.css',
        'resources/frontend/index.ts',
        'resources/app/index.ts',
        'resources/admin/index.ts',
      ],
      refresh: ['resources/views/**']
    }),
    vue({
      template: {
        transformAssetUrls: {
          base: null,
          includeAbsolute: false
        }
      }
    })
  ],
  resolve: {
    alias: {
      '@': '/resources',
      '@api': '/resources/shares/api',
      '@components': '/resources/shares/components',
      '@utils': '/resources/shares/utils',
      '@stores': '/resources/shares/stores',
      '@router': '/resources/shares/router',
      '@admin-pages': '/resources/stores/admin/pages',
      '@admin-router': '/resources/stores/admin/router',
      '@admin-stores': '/resources/stores/admin/stores',
      '@app-pages': '/resources/stores/app/pages',
      '@app-router': '/resources/stores/app/router',
      '@app-stores': '/resources/stores/app/stores',
      '~': '/resources/shares/assets',
      vue: 'vue/dist/vue.esm-bundler.js'
    }
  },
  server: {
    host: '0.0.0.0',
    hmr: {
      host: 'localhost'
    }
  }
})
