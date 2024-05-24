<template>
    <!-- Start::header-element -->
    <div class="header-element country-selector">
        <!-- Start::header-link|dropdown-toggle -->
        <a aria-label="anchor" href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown"
            data-bs-auto-close="outside">
            <i class="bx bx-globe header-link-icon"></i>
        </a>
        <!-- End::header-link|dropdown-toggle -->
        <ul class="main-header-dropdown dropdown-menu border-0" data-popper-placement="none">
            <li>
                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                    <span class="avatar avatar-xs lh-1 me-2">
                        <img src="../../../../public/admin/assets/images/flags/us_flag.jpg" alt="img">
                    </span>
                    English
                </a>
            </li>
            <li>
                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                    <span class="avatar avatar-xs lh-1 me-2">
                        <img src="../../../../public/admin/assets/images/flags/spain_flag.jpg" alt="img">
                    </span>
                    Spanish
                </a>
            </li>
            <li>
                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                    <span class="avatar avatar-xs lh-1 me-2">
                        <img src="../../../../public/admin/assets/images/flags/french_flag.jpg" alt="img">
                    </span>
                    French
                </a>
            </li>
            <li>
                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                    <span class="avatar avatar-xs lh-1 me-2">
                        <img src="../../../../public/admin/assets/images/flags/germany_flag.jpg" alt="img">
                    </span>
                    German
                </a>
            </li>
            <li>
                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                    <span class="avatar avatar-xs lh-1 me-2">
                        <img src="../../../../public/admin/assets/images/flags/italy_flag.jpg" alt="img">
                    </span>
                    Italian
                </a>
            </li>
            <li>
                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                    <span class="avatar avatar-xs lh-1 me-2">
                        <img src="../../../../public/admin/assets/images/flags/russia_flag.jpg" alt="img">
                    </span>
                    Russian
                </a>
            </li>
        </ul>
    </div>
    <!-- End::header-element -->
</template>

<script>
export default {
    name: "LangugaeSelector"
}
</script>
