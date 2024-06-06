<template>
    <div class="mail-info-footer d-sm-flex align-items-center justify-content-between">
        <div class="mb-3 mb-sm-0">
            <button class="btn btn-icon btn-light m-1" data-bs-toggle="tooltip" data-bs-placement="top"
                data-bs-title="Print">
                <i class="ri-printer-line"></i>
            </button>
            <button class="btn btn-icon btn-light  m-1" data-bs-toggle="tooltip" data-bs-placement="top"
                data-bs-title="Mark as read">
                <i class="ri-mail-open-line"></i>
            </button>
            <button class="btn btn-icon btn-light  m-1" data-bs-toggle="tooltip" data-bs-placement="top"
                data-bs-title="Reload">
                <i class="ri-refresh-line"></i>
            </button>
        </div>
        <div>
            <button class="btn btn-secondary d-inline-flex m-1">
                <i class="ri-share-forward-line me-1 align-middle"></i>Forward
            </button>
            <button class="btn btn-danger  m-1 d-inline-flex">
                <i class="ri-reply-all-line me-1 align-middle"></i>Reply
            </button>
        </div>
    </div>
</template>
<script>

export default {
    name: 'EmailFooter'
}

</script>
