<template>
    <login-view v-if="!loggedIn"> </login-view>
    <main-layout v-else>
    </main-layout>

</template>
<script>
import { mapState } from 'vuex';
import LoginView from '@/pages/auth/LoginView.vue';
import MainLayout from '@/pages/main/MainLayout.vue';
export default {
    components: { LoginView, MainLayout },
    name: "Home",
    computed: {
        ...mapState(['loggedIn']),

    }
}

</script>
<style></style>
