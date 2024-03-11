import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/comment-reply.js',
                'resources/js/comment-index.js',
                'resources/js/index-page.js',
                'resources/js/fontawesome/all.min.js',
                'resources/js/theme.js',
                'resources/css/theme.css',
                'resources/css/cabinet/mdi/css/materialdesignicons.min.css',
               'resources/css/cabinet/base/vendor.bundle.base.css',
                'resources/css/cabinet/datatables.net-bs4/dataTables.bootstrap4.css',
                'resources/css/cabinet/style.css',
                'resources/js/cabinet/chart.js',
                'resources/js/cabinet/Chart.min.js',
                'resources/js/cabinet/jquery.dataTables.js',
                'resources/js/cabinet/dataTables.bootstrap4.js',
                'resources/js/cabinet/off-canvas.js',
                'resources/js/cabinet/hoverable-collapse.js',
                'resources/js/cabinet/template.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
                compilerOptions: {
                    isCustomElement: (tag) => ['md-linedivider'].includes(tag),
                }
            },

        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },


});
