<template>
    <!-- Start::header-element -->
    <div class="header-element mainuserProfile">
        <!-- Start::header-link|dropdown-toggle -->
        <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <div class="d-flex align-items-center">
                <div class="d-sm-flex wd-100p">
                    <div class="avatar avatar-sm"><img alt="avatar" class="rounded-circle"
                            src="../../../assets/devImage/profile/profile.png"></div>
                    <div class="ms-2 my-auto d-none d-xl-flex">
                        <h6 class=" font-weight-semibold mb-0 fs-13 user-name d-sm-block d-none">Admin GRA
                        </h6>
                    </div>
                </div>
            </div>
        </a>
        <!-- End::header-link|dropdown-toggle -->
        <ul class="dropdown-menu  border-0 main-header-dropdown  overflow-hidden header-profile-dropdown"
            aria-labelledby="mainHeaderProfile">
            <li><a class="dropdown-item border-bottom" href="profile.html"><i
                        class="fs-13 me-2 bx bx-user"></i>Profile</a></li>
            <li><a class="dropdown-item border-bottom" href="mail.html"><i
                        class="fs-13 me-2 bx bx-comment"></i>Message</a></li>
            <li><a class="dropdown-item border-bottom" href="mail-settings.html"><i
                        class="fs-13 me-2 bx bx-cog"></i>Settings</a></li>
            <li><a class="dropdown-item border-bottom" href="faqs.html"><i
                        class="fs-13 me-2 bx bx-help-circle"></i>Help</a></li>
            <li> <log-out></log-out> </li>
        </ul>
    </div>
    <!-- End::header-element -->
</template>

<script>
import LogOut from '../auth/LogOut.vue';
export default {
    name: "AdminAccountNavigator",
    components: {
        LogOut,
    }
}
</script>
