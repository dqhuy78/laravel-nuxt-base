export const state = () => ({
    user: null,
});

export const mutations = {
    set(state, data) {
        state.user = data;
    },
};
