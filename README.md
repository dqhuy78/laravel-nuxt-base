# <p align="center">Laravel + NuxtJS + Docker base</p>

<p align="center">
  <img width="324" height="100" src="https://images.viblo.asia/e33d9a69-54bd-4ea7-8126-6ac910c934a8.png">
</p>

## Note:
- This base project is fully intergrate with docker, so you will need to install docker first before i it.
- Pull request are welcome.

## 1. What is inside this repository?

Laravel 8.4 with:
- [doctrine/dbal](https://github.com/doctrine/dbal])
- [laravel/telescope](https://github.com/laravel/telescope)
- [sun-asterisk/coding-standard](https://github.com/sun-asterisk-research/php-coding-standard)
- [predis/predis](https://github.com/predis/predis)
- [sentry/sentry-laravel](https://github.com/getsentry/sentry-laravel)


NuxtJS 2.15.3 with:
- [axios](https://github.com/axios/axios)
- [element-ui](https://element.eleme.io/#/en-US)
- [lodash](https://lodash.com/)
- [nuxt-i18n](https://i18n.nuxtjs.org/)
- [@nuxtjs/google-analytics](https://google-analytics.nuxtjs.org/)
- [@nuxtjs/tailwindcss](https://tailwindcss.nuxtjs.org/)
- [sass](https://sass-lang.com/)

Preconfigured docker development by [sun-asterusk-research/docker-php-development](https://github.com/sun-asterisk-research/docker-php-development)

## 2. Basic setup

- After clone this repository into your computer, run following command:
```bash
cd _docker/
cp .env.example .env
cp services services
cd ../api/
cp .env.example .env
cd ../web/
cp .env.example .env
cd ../_docker/
./project up
```

- After running `./project up` command you will need to wait for a few minute for project's setup.
- After project setup in complete, you will need to setup install Laravel and NuxtJS package

### a. Laravel setup

- Inside `_docker/` folder, run following command:
```bash
./projec sh php
```
- This command will allow you to enter Laravel container, inside this container, run following command:
```
COMPOSER_MEMORY_LIMIT=-1 composer install
php artisan key:generate
```

### b. NuxtJS setup

- Inside `_docker/` folder, run following command:
```bash
./projec sh web
```
- This command will allow you to enter NuxtJS container, inside this container, run following command:
```
yarn
yarn dev
```
- After running `yarn dev` command, NuxtJS will start running your website in dev mode and you can now access your site with following domain:
```
http://base.localhost:9876
```
<p align="center">
  <img src="https://images.viblo.asia/472ea3bc-e44a-46d6-bb7d-a90023147130.png">
</p>

## 3. Basic feature

### a. Github

- Support pull request template file

### b. Laravel

- Support doctrine/dbal for running migration.
- Support debug with laravel/telescope `http://base.localhost:9876/telescope/requests`.
- Support sentry/sentry-laravel (Need to provide `SENTRY_LARAVEL_DSN` in `.env` file).
- Custom `Resources` class.
- Support auto generate model command: `php artisan make:model [ModelName]`, this command will create:
  - Model Class inside `app/Models/` folder.
  - Resource Class bind to that model inside `app/Http/Resources` folder.
  - Query Class bind to that model inside `app/Queries`.
- Preconfigured mailing feature with mailhog `http://mailhog.localhost:9876` (Need to add mailhog to `_docker/services`).
- Support coding convetion lint tool by running following command:
```
composer sniff   // Running phpcs to check for coding convention
composer autofix // Running phpcbf to fix coding convention or report if can't fix
composer test    // Ruuning unit test
```

### b. NuxtJS

- Support Element-UI.
- Support tailwindcss with `JIT` mode enable.
- Support i18n with preconfigured locale for Vietnamese, English, Japanese.
- Support material-icon.
- Support SCSS.
- Support Google Analytic (Need to add `GA_ID` in `.env` file).
- Preconfigured Sentry (Need to insstall + un-comment sentry in `nuxt.config.js` and provide `SENTRY_DSN` in `.env` file).
- Preconfigured Laravel echo (Need to insstall + un-comment necessary confing in `nuxt.config.js`).
- Preconfigured `nuxtServerInit` and `nuxtClientInit`.
- Support eslint with following command:
```
yarn lint       // Report conding convetion
yarn lint --fix // Try to fix coding convetion or report if can't fix
```

## 4. Advance config

Comming soon...
