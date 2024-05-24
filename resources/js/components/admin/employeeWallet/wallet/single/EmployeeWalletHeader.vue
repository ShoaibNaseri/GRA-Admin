<template>
    <div class="card custom-card overflow-hidden">
        <div class="card-body d-sm-flex align-items-top p-4   main-profile-cover">
            <p class="avatar avatar-xxl avatar-rounded online me-3 my-auto">
                <img :src="getImageUrl('employee/images/profile/' + employee.image)" alt="">
            </p>
            <div class="flex-fill main-profile-info my-auto">
                <h5 class="fw-semibold mb-1 ">{{ walletDetail.walletName }}</h5>
                <div>
                    <p class="mb-1 text-muted">{{ employee.name }}</p>
                    <div class="fs-12 op-7 mb-0 d-flex">
                        <p class="me-3 mb-0">{{
                    walletDetail.status }}</p>

                    </div>
                </div>
            </div>
            <div class="main-profile-info ms-auto">
                <div class="">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex mb-0 ms-auto">
                            <div class="me-4">
                                <p class="fw-bold fs-20  text-shadow mb-0">{{ walletDetail.walletBalance }}£</p>
                                <p class="mb-0 fs-12 text-muted ">Balance</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-0  mt-2 text-end d-flex">
                    <div class="p-1">
                        <button type="button" class="btn btn-success btn-sm btn-wave"><i
                                class="ri-add-line me-1 align-middle"></i>Deposit</button>
                    </div>
                    <div class="p-1">
                        <button type="button" class="btn btn-danger btn-sm btn-wave"><i
                                class="ri-add-line me-1 align-middle"></i>Widthraw</button>
                    </div>
                    <div class="p-1">
                        <button type="button" class="btn btn-secondary btn-sm btn-wave"><i
                                class="ri-add-line me-1 align-middle"></i>Deactive</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: {
        employee: {

        },
        walletDetail: {

        }
    },
    methods: {
        getImageUrl(imagePath) {
            return `${window.location.origin}/storage/${imagePath}`;
        },
    }
}
</script>
