<template>
    <div class="col-xxl-12 col-xl-12">
        <div class="card custom-card overflow-hidden">
            <div class="card-body d-sm-flex align-items-top p-4   main-profile-cover">
                <p class="avatar avatar-xxl avatar-rounded online me-3 my-auto">
                    <img :src="getImageUrl('employee/images/profile/' + emp.image)" alt="">
                </p>
                <div class="flex-fill main-profile-info my-auto">
                    <h5 class="fw-semibold mb-1 ">{{ emp.name }}</h5>
                    <div>
                        <p class="mb-1 text-muted">{{ emp.country }}

                        </p>
                        <div class="fs-12 op-7 mb-0 d-flex">
                            <p class="mb-0"><i class="ri-map-pin-line me-1 align-middle d-inline-flex"></i>{{
                        emp.email }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="main-profile-info ms-auto">
                    <div class="mb-0  mt-2 text-end d-flex">
                        <div class="p-1">
                            <button type="button" class=" btn btn-secondary btn-sm btn-wave"><i
                                    class="ri-eye-line me-1 align-middle"></i>See Wallet</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3">
        <div class="card custom-card">
            <div class="">
                <div class="p-4 border-bottom border-block-end-dashed">
                    <div>
                        <p class="fs-15 mb-2 fw-semibold">Profile Status :</p>
                        <p class="fw-semibold mb-2">Profile 60% completed - <a href="javascript:void(0);"
                                class="text-primary fs-12">Finish now</a></p>
                        <div class="progress progress-sm progress-animate ">
                            <div class="progress-bar bg-primary  ronded-1" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                        </div>
                    </div>
                </div>
                <div class="p-4 border-bottom border-block-end-dashed">
                    <p class="fs-15 mb-2 fw-semibold">OverView Profile:</p>
                    <div v-if="emp" class=" p-2">
                        <div class="mb-2">
                            <strong class="fw-semibold">Name:</strong><span class="text-muted float-end">{{
                        emp.name }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Email:</strong><span class="text-muted float-end">{{
                        emp.email }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Country:</strong><span class="text-muted float-end">{{
                        emp.country }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Birth Date:</strong><span class="text-muted float-end">{{
                        emp.Dob }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Account Status:</strong><span class="text-muted float-end">{{
                        emp.status }}</span>
                        </div>
                    </div>
                    <div v-else>
                        No Data Exist
                    </div>
                </div>
                <div class="p-4 border-bottom border-block-end-dashed">
                    <p class="fs-15 mb-2 fw-semibold">Employee Bank Account:</p>
                    <div v-if="bank" class=" p-2">
                        <div class="mb-2">
                            <strong class="fw-semibold">Aqcuired Degree:</strong><span class="text-muted float-end">{{
                        bank.degree }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Bank Name:</strong><span class="text-muted float-end">{{
                        bank.bank_name }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Account Number:</strong><span class="text-muted float-end">{{
                        bank.accountID }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Registred Name:</strong><span class="text-muted float-end">{{
                        bank.registrated_name }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Bank Location:</strong><span class="text-muted float-end">{{
                        bank.country }} - {{ bank.city }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">IBAN:</strong><span class="text-muted float-end">{{
                        bank.iban }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">BIC Code:</strong><span class="text-muted float-end">{{
                                bank.bicCode }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Routing Number:</strong><span class="text-muted float-end">{{
                                bank.routingNumber }}</span>
                        </div>
                    </div>
                    <div v-else class="text-danger">
                        No Data Exist
                    </div>
                </div>
                <!-- <div class="p-4  border-bottom border-block-end-dashed">
                    <p class="fs-15 mb-2 me-4 fw-semibold">Personal Info :</p>
                    <div v-if="personel" class="p-2">
                        <div class="mb-2">
                            <strong class="fw-semibold">Father Name:</strong><span class="text-muted float-end">{{
                        personel.f_name }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Gender:</strong><span class="text-muted float-end">{{
                        personel.gender }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">M-State:</strong><span class="text-muted float-end">{{
                        personel.marital_state }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">City:</strong><span class="text-muted float-end">{{
                        personel.city }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Phone:</strong><span class="text-muted float-end">{{
                        personel.phone }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Wtsp:</strong><span class="text-muted float-end">{{
                        personel.wtsp }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Mailing Address:</strong><span class="text-muted float-end">{{
                        personel.mailingAddress }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Postal-Code:</strong><span class="text-muted float-end">{{
                        personel.postal_code }}</span>
                        </div>
                    </div>
                    <div v-else>
                        No Personel Data Exist..!
                    </div>
                </div>
                <div class="p-4 border-bottom border-block-end-dashed">
                    <p class="fs-15 mb-2 me-4 fw-semibold">Bank Account Information :</p>
                    <div v-if="bank" class="p-2">
                        <div class="mb-2">
                            <strong class="fw-semibold">Bank Name:</strong><span class="text-muted float-end">{{
                        bank.bank_name }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Account Number:</strong><span class="text-muted float-end">{{
                        bank.accountID }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Account Name:</strong><span class="text-muted float-end">{{
                        bank.registrated_name }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">IBAN:</strong><span class="text-muted float-end">{{
                        bank.iban }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Bic Code:</strong><span class="text-muted float-end">{{
                                bank.bicCode }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Routing Number:</strong><span class="text-muted float-end">{{
                                bank.routingNumber }}</span>
                        </div>
                        <div class="mb-2">
                            <strong class="fw-semibold">Bank Location:</strong><span class="text-muted float-end">{{
                                bank.country }} - {{ bank.city }}</span>
                        </div>
                    </div>
                    <div v-else class="p-2">
                        No Bank Data Exist..!
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "EmployeeSingle",
    props: {
        emp: {
        },
        bank: {

        }
    },
    methods: {
        getImageUrl(imagePath) {
            return `${window.location.origin}/storage/${imagePath}`;
        },
    }
}

</script>
