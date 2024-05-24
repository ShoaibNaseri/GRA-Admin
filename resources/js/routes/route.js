import LoginView from "@/pages/auth/LoginView.vue";
import MainLayout from "@/pages/main/MainLayout.vue";
import Dashboard from "@/pages/dashboard/DashboardView.vue";
import UniversityView from "@/pages/university/UniversityView.vue";
import ProgramView from "@/pages/program/ProgramView.vue";
import StudentView from "@/pages/student/StudentView.vue";
import EmployeeView from "@/pages/employee/EmployeeView.vue";
import NotificationView from "@/pages/notification/NotificationView.vue";
import EventView from "@/pages/event/EventView.vue";
import SubscriberView from "@/pages/subscriber/SubscriberView.vue";
import CountryView from "@/pages/formData/country/CountryView.vue";
import LanguageView from "@/pages/formData/language/LanguageView.vue";
import ProgramCategoryView from "@/pages/formData/porgramCategory/ProgramCategoryView.vue";
import RequiredDocView from "@/pages/formData/requiredDocs/RequiredDocsView.vue";
import AboutView from "@/pages/front/AboutView.vue";
import AboutSave from "@/pages/front/AboutSave.vue";
import SliderView from "@/pages/front/slider/SliderView.vue";
import SliderSave from "@/pages/front/slider/SliderSave.vue";
import ContactView from "@/pages/front/contact/ContactView.vue";
import ContactSave from "@/pages/front/contact/ContactSave.vue";
import GalleryView from "@/pages/front/gallery/GalleryView.vue";
import GallerySave from "@/pages/front/gallery/GallerySave.vue";
import AllWallet from "@/pages/studentWallet/wallet/AllWallet.vue";
import WiseTopUp from '@/pages/studentWallet/wiseTopUp/WiseTopUp.vue';
import TransactionView from "@/pages/studentWallet/transaction/TransactionView.vue";
import DueView from "@/pages/studentWallet/dues/DueView.vue";
import AllWalletView from "@/pages/employeeWallet/wallet/AllWalletView.vue";
import EmpTransactionView from "@/pages/employeeWallet/transaction/EmpTransactionView.vue";
import EmpWidthrawView from "@/pages/employeeWallet/widthraw/EmpWidthrawView.vue";
import StudentSingle from "@/pages/student/StudentSingleView.vue";
import EmployeeSingle from "@/pages/employee/EmployeeSingle.vue";
import TestView from "@/pages/test/TestView.vue";
import UniversitySingle from "@/pages/university/UniversitySingle.vue";
import ProgramSingle from "@/pages/program/ProgramSingle.vue";
import StudentWalletSingle from "@/pages/studentWallet/wallet/SingleWallet.vue";
import EmployeeWalletSingle from "@/pages/employeeWallet/wallet/SingleWallet.vue";

import  Home from "@/Home.vue";

import { createRouter, createWebHistory } from 'vue-router';


const routes = [
    // {
    //     path:'/admin/index',
    //     name:'admin.index',
    //     component:Home,
    // },
    {
        path:"/test",
        name:"Test",
        component:TestView
    },
    {
        path:"/admin/login",
        name:'Login',
        component:LoginView
    },
    {
        path:'/admin',
        name:'MainLayout',
        component:Home,
        meta:{ requiresAuth: true },
    },
    {
        path:'/',
        name:'Dashboard',
        component:Dashboard,
        meta:{requiresAuth:true}
    },
   {
        path:'/all/university',
        name:'AllUniversity',
        component:UniversityView,
        meta:{requiresAuth:true},
   },
   {
        path:'/admin/university/single/:id?',
        name:'university.single',
        component:UniversitySingle,
        meta:{requiresAuth:true}
   },
   {
        path:'/all/program',
        name:'AllProgram',
        component:ProgramView,
        meta:{requiresAuth:true}
   },
   {
        path:'/admin/program/single/:id?',
        name:'program.single',
        component:ProgramSingle,
        meta:{requiresAuth:true}
   },
   //Student Routes
   {
    path:'/all/students',
    name:'AllStudent',
    component:StudentView,
    meta:{requiresAuth:true}
   },
   {
    path:'/admin/student/single/:id?',
    name:'student.single',
    component:StudentSingle,
    meta:{requiresAuth:true}


   },
//    Employee Routes
   {
    path:'/admin/all/employee',
    name:'AllEmployee',
    component:EmployeeView,
    meta:{requiresAuth:true}
   },
   {
    path:'/admin/employee/single/:id?',
    name:'employee.single',
    component:EmployeeSingle,
    meta:{requiresAuth:true}
   },
   {
    path:'/admin/all/notifications',
    name:'AllNotification',
    component:NotificationView,
    meta:{requiresAuth:true}
   },
   {
    path:'/admin/all/events',
    name:'event.index',
    component:EventView,
    meta:{requiresAuth:true}
   },
   {
    path:'/admin/subscriber/index',
    name:'subscriberIndex',
    component:SubscriberView,
    meta:{requiresAuth:true}
   },
   {
    path:'/country/index',
    name:'countryIndex',
    component:CountryView,
    meta:{requiresAuth:true}
   },
    {
        path:'/language/index',
        name:'languageIndex',
        component: LanguageView,
        meta:{requiresAuth:true}
    },
    {
        path:'/programCategory/index',
        name:'programCategoryIndex',
        component:ProgramCategoryView,
        meta:{requiresAuth:true}
    },
    {
        path:'/requiredDocs/index',
        name:'requiredDocIndex',
        component:RequiredDocView,
        meta:{requiresAuth:true}
    },
    {
        path:'/about/index',
        name:'about.index',
        component:AboutView,
        meta:{requiresAuth:true}
    },
    {
        path:'/about/save/:id?',
        name:'about.save',
        component:AboutSave,
        meta:{
            requiresAuth:true
        }
    },
    {
        path:'/slider/index',
        name:'slider.index',
        component:SliderView,
        meta:{requiresAuth:true}
    },
    {
        path:'/slider/save/:id?',
        name:'slider.save',
        component:SliderSave,
        meta:{requiresAuth:true}
    },
    {
        path:'/contact/index',
        name:'contact.index',
        component:ContactView,
        meta:{requiresAuth:true}
    },
    {
        path:'/contact/save/:id?',
        name:'contact.save',
        component:ContactSave,
        meta:{requiresAuth:true}
    },
    {
        path:'/gallery/index',
        name:'gallery.index',
        component:GalleryView,
        meta:{requiresAuth:true}

    },
    {
        path:'/gallery/save/:id?',
        name:'gallery.save',
        component:GallerySave,
        meta:{requiresAuth:true}
    },
    //Wallet - Student
    {
        path:'/admin/student/all/wallet',
        name:'studentWall.all',
        component:AllWallet,
        meta:{requiresAuth:true}

    },
    {
        path:'/admin/student/wallet/single/:id?',
        name:'studentWallet.single',
        component:StudentWalletSingle,
        meta:{requiresAuth:true}
    },
    {
        path:'/admin/student/walle/wise/topups',
        name:'studentWall.wise',
        component: WiseTopUp,
        meta:{requiresAuth:true}
    },
    {
        path:'/admin/student/wallets/transactions',
        name:'studentWall.all.transaction',
        component:TransactionView,
        meta:{requiresAuth:true}
    },
    {
        path:'/admin/student/wallet/all/dues',
        name:'studentWall.due.all',
        component:DueView,
        meta:{requiresAuth:true}
    },
    //Employee Wallet
    {
        path:'/admin/employee/all/wallet',
        name:'employeeWall.all',
        component:AllWalletView,
        meta:{requiresAuth:true}
    },
    {
        path:'/admin/employee/wallet/single/:id?',
        name:'employeeWallet.single',
        component:EmployeeWalletSingle,
        meta:{requiresAuth:true}
    },
    {
        path:'/admin/employee/wallet/transactions',
        name:'employeeWall.all.transaction',
        component:EmpTransactionView,
        meta:{requiresAuth:true}
    },
    {
        path:'/admin/employee/wallet/widthraws',
        name:'employeeWall.all.widthraw',
        component:EmpWidthrawView,
        meta:{requiresAuth:true}
    }

]


const router = createRouter({
    history: createWebHistory(),
    routes
});
router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.requiresAuth)) {
    const token = localStorage.getItem('token');
    if (!token) {
      next('/login'); // Redirect to login if token is not present
    } else {
      next(); // Proceed to the protected route
    }
  } else {
    next(); // Proceed to non-protected routes
  }
});
export default router;
