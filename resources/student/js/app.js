
import './bootstrap';
// import store from './store'; // Import Vuex store
import { createApp } from 'vue/dist/vue.esm-bundler';
import HomeApp from "./Home.vue";
import router from "../js/routes/routes";
import FlagIcon from 'vue-flag-icon';


const app = createApp ({
    components: {
        HomeApp,
    }
})
// const token = localStorage.getItem('token');
// if (token) {
//     axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
// }
// Add the beforeEach guard to the router instance


app.use(router).use(FlagIcon).mount("#app");
