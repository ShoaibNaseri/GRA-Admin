
import Dashboard from "../pages/dashboard/Dashboard.vue";
import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path:'/student',
        name:'studentDashboard',
        component:Dashboard
    },
]

const router= createRouter({
history:createWebHistory(),
routes
});
export default router;
