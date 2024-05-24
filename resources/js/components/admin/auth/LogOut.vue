<template>
    <li class="" @click="logout">
        <a class="dropdown-item py-2">
            <i class="fs-13 me-2 bx bx-arrow-to-right"></i>
            <span>Log Out</span>
        </a>
    </li>
</template>

<script>
export default {
    methods: {
        logout() {
            // Clear token from local storage
            localStorage.removeItem('token');
            // Commit logout mutation to update Vuex store state
            this.$store.commit('logout');
            // Clear any other user-related data from Vuex store if needed
            // For example: this.$store.commit('clearUserData');
            // Redirect to the login page or another appropriate page
            this.$router.push({ name: 'Login' });
        }
    }
}

</script>
