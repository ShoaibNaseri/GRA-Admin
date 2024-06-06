<template>
    <div class="mail-info-header d-xxl-flex align-items-center">
        <div class="mail-option-read d-md-flex  d-block">
            <a href="javascript:void(0);" class=" vertical-phone" data-bs-toggle="tooltip" title=""
                data-bs-original-title="Back to inbox">
                <i class="bx bx-left-arrow-alt"></i>
            </a>
            <a href="javascript:void(0);" class=" vertical-phone" data-bs-toggle="tooltip" title=""
                data-bs-original-title="Archive">
                <i class="bx bx-download"></i>
            </a>
            <a href="javascript:void(0);" class=" vertical-phone" data-bs-toggle="tooltip" title=""
                data-bs-original-title="Report spam">
                <i class="bx bx-error-alt"></i>
            </a>
            <a href="javascript:void(0);" class=" vertical-phone" data-bs-toggle="tooltip" title=""
                data-bs-original-title="delete">
                <i class="bx bx-trash-alt"></i>
            </a>
            <a href="javascript:void(0);" class=" vertical-phone" data-bs-toggle="tooltip" title=""
                data-bs-original-title="mark as unread">
                <i class="bx bx-envelope"></i>
            </a>
            <a href="javascript:void(0);" class=" vertical-phone d-none d-xl-block" data-bs-toggle="dropdown"
                title="Snooze">
                <i class="bx bx-time-five"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item  fs--14 font-weight-semibold  border-bottom"
                        href="javascript:void(0);">Snooze Until..</a> </li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);">Today</a> </li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);">Tommaro</a> </li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);">This weekend</a> </li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);">Last weekend</a> </li>
            </ul>
            <a href="javascript:void(0);" class=" vertical-phone  profile-user d-none d-xl-block "
                data-bs-toggle="dropdown" title="move to">
                <i class="bx bx-folder-open"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item  fs--14 font-weight-semibold  border-bottom" href="javascript:void(0);">Move
                        TO</a></li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i
                            class="fa fa-inbox me-2"></i>Inbox</a></li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>
                        Sent</a></li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i
                            class="far fa-trash-alt  me-2"></i>Trash</a></li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i
                            class="far fa-file me-2"></i>Drafts</a></li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i class="fas fa-download me-2"></i>
                        Archive</a></li>
            </ul>
            <a href="javascript:void(0);" class=" vertical-phone  profile-user d-none d-xl-block "
                data-bs-toggle="dropdown" title="copy to">
                <i class="bx bx-copy"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item  fs--14 font-weight-semibold  border-bottom" href="javascript:void(0);">Copy
                        TO</a></li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i
                            class="fa fa-inbox me-2"></i>Inbox</a></li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>
                        Sent</a></li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i
                            class="far fa-trash-alt  me-2"></i>Trash</a></li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i
                            class="far fa-file me-2"></i>Drafts</a></li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i class="fas fa-download me-2"></i>
                        Archive</a></li>
            </ul>
            <a href="javascript:void(0);" class=" vertical-phone  profile-user d-none d-lg-block "
                data-bs-toggle="dropdown" title="Label as">
                <i class="bx bx-label"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item fs--14 font-weight-semibold  border-bottom" href="javascript:void(0);">Label
                        as</a></li>
                <li class="dropdown-item fs--14"><label class="ckbox"><input class="form-check-input"
                            type="checkbox"><span class="ms-2">Main</span></label></li>
                <li class="dropdown-item fs--14"><label class="ckbox"><input class="form-check-input"
                            type="checkbox"><span class="ms-2">Home</span></label></li>
                <li class="dropdown-item fs--14"><label class="ckbox"><input class="form-check-input"
                            type="checkbox"><span class="ms-2">work</span></label></li>
                <li class="dropdown-item fs--14"><label class="ckbox"><input class="form-check-input"
                            type="checkbox"><span class="ms-2">Friends</span></label></li>
            </ul>
            <a href="javascript:void(0);" class=" vertical-phone" data-bs-toggle="dropdown" title="more">
                <i class="bx bx-dots-vertical-rounded"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"> Mark As Important</a></li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"> Unread</a></li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"> Mark as Read</a></li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);">Add Star</a></li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"> delete</a></li>
                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"> None</a></li>
            </ul>
        </div>
        <div class="unstyled inbox-pagination ms-auto mb-0 ps-3">
            <span>
                <a href="javascript:void(0);" class="text-muted d-inline-flex">1-50 of 234</a>
                <a href="javascript:void(0);" class="fs-18  op-6">
                    <i class="fe fe-chevron-left text-muted"></i>
                </a>
                <a href="javascript:void(0);" class=" fs-18">
                    <i class="fe fe-chevron-right text-muted"></i>
                </a>
            </span>
        </div>
    </div>
</template>

<script>
export default {
    name: 'EmailHeader'
}
</script>
