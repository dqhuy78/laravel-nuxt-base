import _get from 'lodash/get';

import axios from '~/utils/axios';

export const actions = {
    // Comment nuxtClientInit if using SSR or comment nuxtServerInit if using CSR
    async nuxtClientInit({ commit }) {
        try {
            const { data } = await axios.get('/web-init');

            commit('auth/set', _get(data, 'data', null));
        } catch (error) {
            // Handle error
        }
    },
    // async nuxtServerInit({ commit }) {
    //     try {
    //         const { data } = await axios.get('/web-init');

    //         commit('auth/set', _get(data, 'data', null));
    //     } catch (error) {
    //         // Handle error
    //     }
    // },
};
