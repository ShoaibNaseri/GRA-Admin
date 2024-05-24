<template>

    <div>
        <page-title-control :page-data="pageData"></page-title-control>
        <div class="col-xxl-10 col-lg-12 col-md-12 col-sm-12">
            <div class="card custom-card contactus-form overflow-hidden">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-xl-12 p-0">
                            <div class="p-3">
                                <h5 class="card-title mb-1">Contact Us Page Information</h5>
                                <p class="text-muted mb-0"></p>
                            </div>
                            <div class="p-3">
                                <div class="d-flex align-items-top mt-2">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-info-transparent">
                                            <i class="bx bxs-phone"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class=" mb-1 align-items-top">
                                            <h6 class="fw-semibold mb-1 lh-1">Phone number</h6>
                                            <span class="text-muted">{{ contact.phone }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-top mt-4">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-pink-transparent">
                                            <i class="bx bxs-envelope"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class=" mb-1 align-items-top">
                                            <h6 class="fw-semibold mb-1 lh-1">Email Address</h6>
                                            <span class="text-muted">{{ contact.email }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-top mt-4">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-teal-transparent">
                                            <i class="bx bxs-time"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class=" mb-1 align-items-top">
                                            <h6 class="fw-semibold mb-1 lh-1">Timings</h6>
                                            <span class="text-muted">Mon-Fri 09:00 to 06:00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-top mt-4">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-warning-transparent">
                                            <i class="bx bxs-location-plus"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class=" mb-1 align-items-top">
                                            <h6 class="fw-semibold mb-1 lh-1">Address</h6>
                                            <span class="text-muted">{{ contact.address }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-top mt-4">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-warning-transparent">
                                            <i class="bx bxs-location-plus"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class=" mb-1 align-items-top">
                                            <h6 class="fw-semibold mb-1 lh-1">Address</h6>
                                            <span class="text-muted">{{ contact.link }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="float-end">
                                <router-link :to="{ name: 'contact.save', params: { id: contact.id } }"
                                    class="btn btn-success-transparent">Edit</router-link>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios'
import PageTitleControl from '../../../shared/PageTitleControl.vue'
export default {
    components: { PageTitleControl },
    name: "ContactList",
    data() {
        return {
            contact: {

            },
            pageData: {
                pageTitle: "Contact Us",
                hasSearch: false,
                hasImport: false,
                hasExport: false,
                hasDeleteAll: false,
                hasAdd: false,
                hasEdit: false,
                pageName: 'contact',
                route: 'contact.save',
                paramId: '',
            }
        }
    },
    methods: {
        updateParamId(id) {
            this.pageData.paramId = id;
        }
    },
    mounted() {
        axios.get('/api/contact')
            .then(response => {
                this.contact = response.data;
                console.log(this.contact);

            })
            .catch(error => {
                console.error('Faild To Fetch COntact Data', +error)
            });

    }
}
</script>
