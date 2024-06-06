<template>
    <div class="p-3 d-flex align-items-center border-bottom">
        <div class="me-3">
            <input class="form-check-input" type="checkbox" id="checkAll" value="" aria-label="...">
        </div>
        <a href="javascript:void(0);" class="  fs-14" data-bs-toggle="tooltip" title=""
            data-bs-original-title="refresh">
            <i class="fe fe-rotate-cw text-muted"></i>
        </a>
        <div class="dropdown ms-3">
            <a href="javascript:void(0);" class=" text-muted border-0 fs-14" data-bs-toggle="dropdown"
                aria-expanded="true">
                <i class="fe fe-more-vertical"></i>
            </a>
            <ul class="dropdown-menu" role="menu" data-popper-placement="bottom-start">
                <li><a class="dropdown-item" href="javascript:void(0);">Read</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Unread</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Mark As Read</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Spam</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
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
    name: 'EmailAction'
}

</script>
