import _find from 'lodash/find';

export const state = () => ({
    locales: [
        { value: 'vi', label: 'VI' },
        { value: 'en', label: 'EN' },
        { value: 'jp', label: 'JP' },
    ],
    locale: 'en',
});

export const mutations = {
    set(state, locale) {
        const localeExists = _find(state.locales, { value: locale });
        if (localeExists) {
            state.locale = locale;
            this.$i18n.setLocale(locale);
        }
    },
};
