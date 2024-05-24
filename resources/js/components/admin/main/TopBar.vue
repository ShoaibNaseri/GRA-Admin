<template>
    <!-- HEADER -->
    <header class="app-header">
        <!-- Start::main-header-container -->
        <div class="main-header-container container-fluid bg-side">
            <!-- Start::header-content-left -->
            <div class="header-content-left">
                <header-element></header-element>
                <!-- Start::header-element -->
                <div class="header-element">
                    <!-- Start::header-link -->
                    <side-menu-toggle></side-menu-toggle>
                    <search-bar></search-bar>
                    <!-- End::header-link -->
                </div>
                <!-- End::header-element -->
                <!-- Start::header-element -->
                <div class="header-element header-search d-lg-none d-block ">
                    <!-- Start::header-link -->
                    <a aria-label="anchor" href="javascript:void(0);" class="header-link" data-bs-toggle="modal"
                        data-bs-target="#searchModal">
                        <i class="bx bx-search-alt-2 header-link-icon"></i>
                    </a>
                    <!-- End::header-link -->
                </div>
                <!-- End::header-element -->
            </div>
            <!-- End::header-content-left -->
            <!-- Start::header-content-right -->
            <div class="header-content-right">

                <language-selector></language-selector>

                <theme-selector></theme-selector>

                <notification-selector></notification-selector>

                <chat-selector></chat-selector>

                <admin-account-navigator></admin-account-navigator>

                <!-- Start::header-element -->
                <div class="header-element">
                    <!-- Start::header-link|switcher-icon -->
                    <a aria-label="anchor" href="javascript:void(0);" class="header-link switcher-icon ms-1"
                        data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                        <i class="bx bx-cog bx-spin header-link-icon"></i>
                    </a>
                    <!-- End::header-link|switcher-icon -->
                </div>
                <!-- End::header-element -->
            </div>
            <!-- End::header-content-right -->
        </div>
        <!-- End::main-header-container -->
    </header>
    <!-- END HEADER -->

</template>
<script>
import AdminAccountNavigator from '../topbar/AdminAccountNavigator.vue';

import ChatSelector from '../topbar/ChatSelector.vue';
import HeaderElement from '../topbar/HeaderElement.vue';
import LanguageSelector from '../topbar/LanguageSelector.vue';
import NotificationSelector from '../topbar/NotificationSelector.vue';
import SearchBar from '../topbar/SearchBar.vue';
import SideMenuToggle from '../topbar/SideMenuToggle.vue';
import ThemeSelector from '../topbar/ThemeSelector.vue';

export default {
    components: { HeaderElement, ChatSelector, SideMenuToggle, SearchBar, LanguageSelector, ThemeSelector, NotificationSelector, AdminAccountNavigator },
    name: 'TopBar'
    ,

}

</script>
<style></style>
