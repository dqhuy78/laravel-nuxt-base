import {
    cleanEnv,
    str,
    url,
    host,
    port,
} from 'envalid';

const validEnv = cleanEnv(process.env, {
    APP_ENV: str({
        devDefault: 'local',
        desc: 'Application environment',
    }),
    APP_URL: url({
        default: 'http://localhost',
        desc: 'Default application url',
    }),
    APP_NAME: str({
        default: 'S*Review',
        desc: 'Application name',
    }),
    HOST: host({
        default: '0.0.0.0',
        desc: 'Application host',
    }),
    PORT: port({
        default: 3000,
        desc: 'Application post',
    }),
    SENTRY_DSN: str({
        default: '',
        desc: 'Sentry DSN for logging error',
    }),
    BROWSER_API_URL: str({
        default: '/api',
        desc: 'API rewrite entry point',
    }),
    GA_ID: str({
        default: '',
        desc: 'Google Analytic ID',
    }),
});

export const {
    APP_ENV,
    APP_URL,
    APP_NAME,
    HOST,
    PORT,
    SENTRY_DSN,
    BROWSER_API_URL,
    GA_ID,
} = validEnv;
