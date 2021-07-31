import path from 'path';
// import { ProvidePlugin } from 'webpack';

import head from './config/head';
import {
    APP_ENV,
    APP_NAME,
    APP_URL,
    HOST,
    PORT,
    BROWSER_API_URL,
    GA_ID,
    // SENTRY_DSN,
} from './config/env';

export default {
    ssr: false,

    srcDir: path.resolve(__dirname, 'src'),

    components: true,

    build: {
        transpile: [/^element-ui/],

        postcss: {
            plugins: {
                tailwindcss: path.resolve(__dirname, './src/tailwind.config.js'),
            },
        },

        plugins: [
            // Enable if use laravel echo
            // new ProvidePlugin({
            //     io: 'socket.io-client',
            // }),
        ],
    },

    env: {
        APP_ENV,
        APP_NAME,
        APP_URL,
        BROWSER_API_URL,
    },

    server: {
        host: HOST,
        port: PORT,
    },

    render: {
        http2: {
            push: true,
        },
    },

    head,

    axios: {
        browserBaseURL: BROWSER_API_URL,
    },

    loading: {
        color: '#409EFF',
        height: '3px',
    },

    plugins: [
        '@/plugins/nuxt-client-init', // Enable if use client side render
        '@/plugins/element-ui',
        // { src: '@/plugins/echo', ssr: false }, // Enable if use laravel echo
    ],

    buildModules: [
        '@nuxtjs/tailwindcss',
        '@nuxtjs/google-analytics',
    ],

    modules: [
        'nuxt-i18n',
    ],

    i18n: {
        langDir: '~/locales/',
        locales: [
            { code: 'en', file: 'en.json' },
            { code: 'vi', file: 'vi.json' },
            { code: 'jp', file: 'jp.json' },
        ],
        strategy: 'no_prefix',
        defaultLocale: 'en',
        vueI18n: {
            fallbackLocale: 'en',
        },
    },

    googleAnalytics: {
        id: GA_ID,
        debug: {
            sendHitTask: true,
        },
    },

    // Enable if use Sentry
    // sentry: {
    //   dsn: SENTRY_DSN,
    //   config: {
    //       environment: APP_ENV,
    //   },
    // },
};
