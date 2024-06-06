<template>
    <ul class="main-menu">
        <span v-for=" (menu, index) in menuItems" :key="index">
            <!-- Start::slide__category -->
            <li v-if="menu.mainTitle" class="slide__category"><span class="category-name">{{ menu.mainTitle }}</span>
            </li>
            <!-- End::slide__category -->
            <!-- Start::slide -->
            <li class="slide has-sub">
                <router-link v-if="!menu.children" :to="{ name: menu.routeName }" @click="toggleSubMenu(index)"
                    :class="{ 'active': showSubMenu === index }" class=" side-menu__item">
                    <span class=" side-menu__icon">
                        <i :class="menu.icon"></i>
                    </span>
                    <span class="side-menu__label">{{ menu.name }}</span>
                </router-link>
                <a v-else @click="toggleSubMenu(index)" class=" side-menu__item">
                    <span class=" side-menu__icon">
                        <i :class="menu.icon"></i>
                    </span>
                    <span class="side-menu__label">{{ menu.name }}</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class="slide-menu child1" :class="{ 'show': showSubMenu === index }">
                    <li class="slide " v-for="(childItem, childIndex) in menu.children" :key="childIndex">
                        <router-link :to="{ name: childItem.routeName }" class="side-menu__item active">{{
            childItem.name
        }}</router-link>
                    </li>
                </ul>
            </li>
        </span>

    </ul>

</template>

<script>
export default {

    data() {
        return {
            menuItems: [
                {
                    name: 'Test Panel',
                    routeName: 'Test',
                    icon: 'bx bxs-dashboard',

                },
                {
                    name: 'Emails',
                    icon: 'bx bxs-envelope',
                    mainTitle: "Emailings",
                    routeName: 'email'
                },
                {
                    name: 'Dashboards Panel',
                    icon: 'bx bxs-dashboard',
                    mainTitle: 'Dashboards',
                    children: [
                        {
                            name: "Main Dashboard",
                            routeName: "Dashboard"
                        },
                        {
                            name: "Programs Dashboard",
                            routeName: "Dashboard"
                        },
                        {
                            name: "Universities Dashboard",
                            routeName: "Dashboard"
                        },
                        {
                            name: "Students Dashboard",
                            routeName: "Dashboard"
                        },
                        {
                            name: "Employees Dashboard",
                            routeName: "Dashboard"
                        },
                        {
                            name: "Consultancy Dashboard",
                            routeName: "Dashboard"
                        }
                    ]
                },
                {
                    name: "Notifications",
                    icon: 'bx bxs-bell-ring',
                    mainTitle: 'Admin Panle',
                    routeName: 'AllNotification'
                },
                {
                    name: "Mail Inbox",
                    icon: 'bx bxs-envelope',
                },
                {
                    name: "Events",
                    icon: 'bx bxs-calendar-event',
                    routeName: 'event.index'

                },
                {
                    name: "News Subscribers",
                    icon: 'bx bxs-user-check',
                    routeName: 'subscriberIndex'
                },
                {
                    name: "Front Panel",
                    icon: 'bx bx-minus-front',
                    mainTitle: 'Frot Page Panle',
                    children: [
                        {
                            name: "About Us",
                            routeName: "about.index"
                        },
                        {
                            name: "Sliders",
                            routeName: "slider.index"

                        },
                        {
                            name: "Contact Us",
                            routeName: "contact.index"

                        },
                        {
                            name: "Our Gallery",
                            routeName: "gallery.index"

                        },
                        {
                            name: "Our Missions",

                        },
                    ]
                },
                {
                    name: "Forms Data",
                    mainTitle: 'Forms Detail Panel',
                    icon: 'bx bx-data',
                    children: [
                        {
                            name: "Countires DB",
                            routeName: 'countryIndex'
                        },
                        {
                            name: "Languages DB",
                            routeName: "languageIndex"
                        },
                        {
                            name: "Programs Category DB",
                            routeName: 'programCategoryIndex'
                        },
                        {
                            name: "Required Documents DB",
                            routeName: 'requiredDocIndex'
                        }
                    ]
                },
                {
                    name: "Universities",
                    icon: "bx bx-home-circle",
                    mainTitle: 'University & Programs',
                    children: [
                        {
                            name: 'All Universities',
                            routeName: 'AllUniversity',
                        },
                    ]
                },
                {
                    name: "Programs",
                    icon: "bx bx-desktop",
                    routeName: 'AllProgram'
                },
                {
                    name: "Students",
                    icon: "bx bx-user",
                    routeName: 'AllStudent',
                    mainTitle: 'Student & Employee'
                },
                {
                    name: "Employees",
                    icon: "bx bxs-user-voice",
                    routeName: 'AllEmployee'
                },
                {
                    name: "Student Wallet",
                    icon: "bx bx-wallet-alt",
                    mainTitle: "Student Wallet, Due & Refund",
                    children: [
                        {
                            name: "All Wallets",
                            routeName: 'studentWall.all'
                        },
                        {
                            name: "Wallets WisePay Deposit",
                            routeName: "studentWall.wise"
                        },
                        {
                            name: "Wallet's All Transactions",
                            routeName: "studentWall.all.transaction"
                        },
                        {
                            name: "Due Amounts Table",
                            routeName: "studentWall.due.all"
                        },
                        {
                            name: "Refunds"
                        }
                    ]
                },
                {
                    name: "Student Refunds",
                    icon: "bx bx-transfer-alt",
                    children: [
                        { name: "Refunds Requests" },
                        { name: "Refunds Table" },
                        { name: "Refund Transactions" }
                    ]
                },
                {
                    name: "Employee Wallet",
                    icon: "bx bxs-wallet-alt",
                    mainTitle: "Employee Wallet",
                    children: [
                        {
                            name: "All Wallets",
                            routeName: "employeeWall.all"
                        },
                        {
                            name: "Wallet Transactions",
                            routeName: "employeeWall.all.transaction"
                        },
                        {
                            name: "Widthraw Requests",
                            routeName: "employeeWall.all.widthraw"
                        }
                    ]
                },
                {
                    name: "Data Entries",
                    icon: "bx bxs-data",
                    mainTitle: "Data Entries Panel",
                    children: [
                        { name: "University Entries" },
                        { name: "Program Entries" }
                    ]
                }
            ],
            showSubMenu: null
        };
    },
    methods: {
        toggleSubMenu(index) {
            this.showSubMenu = this.showSubMenu === index ? null : index;
        },
    }
}


</script>
<style>
.slide-menu {
    display: none;
    /* Initially hide the submenu */
}

.show {
    display: block;
    transition-duration: 20000;
    transition: 100;
    /* Display the submenu when the "show" class is present */
}

.bb {
    color: red;
}
</style>
