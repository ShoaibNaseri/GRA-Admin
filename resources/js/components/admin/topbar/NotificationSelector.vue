<template>
    <!-- Start::header-element -->
    <div class="header-element notifications-dropdown ">
        <!-- Start::header-link|dropdown-toggle -->
        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown"
            data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
            <i class="bx bx-bell bx-flip-horizontal header-link-icon ionicon"></i>
            <span class="badge bg-info rounded-pill header-icon-badge pulse pulse-secondary"
                id="notification-icon-badge">1</span>
        </a>
        <!-- End::header-link|dropdown-toggle -->
        <!-- Start::main-header-dropdown -->
        <div class="main-header-dropdown dropdown-menu  border-0 dropdown-menu-end" data-popper-placement="none">
            <div class="p-3">
                <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fs-17 fw-semibold">Notifications</p>
                    <span class="badge bg-secondary-transparent" id="notifiation-data">5 Unread</span>
                </div>
            </div>
            <div class="dropdown-divider"></div>
            <ul class="list-unstyled mb-0" id="header-notification-scroll">
                <li class="dropdown-item">
                    <div class="d-flex align-items-start">
                        <div class="pe-2">
                            <span class="avatar avatar-md bg-secondary-transparent rounded-2">
                                <img src="../../../../public/admin/assets/images/faces/2.jpg" alt="">
                            </span>
                        </div>
                        <div class="flex-grow-1 d-flex  justify-content-between">
                            <div>
                                <p class="mb-0 fw-semibold"><a href="notifications.html">Olivia James</a>
                                </p>
                                <span class="fs-12 text-muted fw-normal">Congratulate for New template
                                    start</span>
                            </div>
                            <div class="min-w-fit-content ms-2 text-end">
                                <a aria-label="anchor" href="javascript:void(0);"
                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                        class="ti ti-x fs-14"></i></a>
                                <p class="mb-0 text-muted fs-11">2 min ago</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="p-3 empty-header-item1 border-top">
                <div class="d-grid">
                    <a href="notifications.html" class="btn btn-primary">View All</a>
                </div>
            </div>
            <div class="p-5 empty-item1 d-none">
                <div class="text-center">
                    <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                        <i class="bx bx-bell-off bx-tada fs-2"></i>
                    </span>
                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                </div>
            </div>
        </div>
        <!-- End::main-header-dropdown -->
    </div>
    <!-- End::header-element -->
</template>

<script>

export default {
    name: "NotificationSelector"
}
</script>
