import { APP_NAME } from './env';

export default {
    title: APP_NAME || '',
    meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
    ],
    link: [
        { rel: 'icon', type: 'image/x-icon', href: '/favicon.svg' },
        {
            rel: 'stylesheet',
            href: 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap',
        },
        {
            rel: 'stylesheet',
            href: 'https://fonts.googleapis.com/icon?family=Material+Icons',
        },
    ],
};
