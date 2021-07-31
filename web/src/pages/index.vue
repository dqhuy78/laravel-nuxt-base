<template>
    <div class="w-screen h-screen flex items-center justify-center">
        <div class="-mt-64">
            <h1 class="text-2xl mt-4 capitalize mb-5">Nuxt-Laravel base project</h1>
            <div class="mb-3">
                <p class="font-bold">Store test:</p>
                <pre class="bg-gray-200 p-2">{{ auth }}</pre>
            </div>
            <div class="mb-3">
                <p class="font-bold">i18n test:</p>
                <p class="capitalize bg-gray-200 p-2">
                    {{ $t('hello-world') }}
                </p>
                <div class="flex items-center justify-center">
                    <img src="~/assets/images/vi.svg" class="w-10 cursor-pointer" @click="changeLanguage('vi')">
                    <img src="~/assets/images/en.svg" class="w-10 mx-5 cursor-pointer" @click="changeLanguage('en')">
                    <img src="~/assets/images/jp.svg" class="w-10 cursor-pointer" @click="changeLanguage('jp')">
                </div>
            </div>
            <div>
                <p class="font-bold">Google Material Icon test:</p>
                <div class="bg-gray-200 p-2">
                    <span class="material-icons">home</span>
                    <span class="material-icons">settings</span>
                    <span class="material-icons">account_circle</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapState } from 'vuex';

    export default {
        name: 'Index',

        computed: {
            ...mapState(['auth']),
        },

        methods: {
            changeLanguage(locale) {
                this.$store.commit('i18n-store/set', locale);
            },
        },
    };
</script>
