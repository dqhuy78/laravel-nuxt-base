export default (ctx) => Promise.all([
    ctx.store.dispatch('nuxtClientInit', ctx),
]);
