
import './bootstrap';
import store from '@/store'; // Import Vuex store
import { createApp } from 'vue/dist/vue.esm-bundler';
import Home from "@/Home.vue";
import router from "@/routes/route";
import FlagIcon from 'vue-flag-icon';
import VueToast from "vue-toast-notification";
import "vue-toast-notification/dist/theme-sugar.css";


const app = createApp(Home);

const token = localStorage.getItem('token');
if (token) {
    axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
}

const isLoggedIn = () => {
    return localStorage.getItem('token');
};

router.beforeEach((to, from, next) => {
    if (to.meta.requiresAuth && !isLoggedIn()) {
        // Check if the route requires authentication and the user is not logged in
        next({ name: 'Login' }); // Redirect to the 'Login' route
    } else if (to.name === 'Login' && isLoggedIn()) {
        // If trying to access the login page while logged in, redirect to Dashboard
        next({ name: 'Dashboard' });
    } else {
        next(); // Continue navigation
    }
});
// Add the beforeEach guard to the router instance


app.use(router).use(VueToast).use(store).use(FlagIcon).mount("#app");
