<template>
    <!-- Start::row-1 -->
    <div class="row">
        <profile-detail :emp="emp" :bank="bank"></profile-detail>
        <div class="col-xxl-9 col-xl-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class=" custom-card">
                        <div class="card-body p-0">
                            <div class="border-block-end-dashed  bg-white rounded-2 p-2">
                                <div>
                                    <ul class="nav nav-pills nav-justified gx-3 tab-style-6 d-sm-flex d-block "
                                        id="myTab" role="tablist">
                                        <!-- <li class="nav-item rounded" role="presentation">
                                            <button class="nav-link active" id="activity-tab" data-bs-toggle="tab"
                                                data-bs-target="#activity-tab-pane" type="button" role="tab"
                                                aria-controls="activity-tab-pane" aria-selected="true"><i
                                                    class="ri-eye-line me-1 align-middle d-inline-block fs-16"></i>OverView</button>
                                        </li> -->
                                        <li class="nav-item rounded" role="presentation">
                                            <button class="nav-link active" id="gallery-tab" data-bs-toggle="tab"
                                                data-bs-target="#gallery-tab-pane" type="button" role="tab"
                                                aria-controls="gallery-tab-pane" aria-selected="false"><i
                                                    class="ri-exchange-box-line me-1 align-middle d-inline-block fs-16"></i>OverView
                                            </button>
                                        </li>
                                        <!-- <li class="nav-item rounded" role="presentation">
                                            <button class="nav-link" id="posts-tab" data-bs-toggle="tab"
                                                data-bs-target="#posts-tab-pane" type="button" role="tab"
                                                aria-controls="posts-tab-pane" aria-selected="false"><i
                                                    class="ri-bill-line me-1 align-middle d-inline-block fs-16"></i>Documents</button>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="py-4">
                                <div class="tab-content" id="myTabContent">
                                    <over-view></over-view>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End::row-1 -->
</template>
<script>
import axios from 'axios'
import ProfileDetail from '../../components/admin/employee/single/ProfileDetail.vue'
import OverView from '../../components/admin/employee/single/OverView.vue'
export default {
    components: { ProfileDetail, OverView },
    name: "ProfileDetails",

    data() {
        return {
            emp: '',
            bank: '',
            id: this.$route.params.id,
        }
    },
    mounted() {
        axios.get(`/api/admin/employee/single/${this.id}`)
            .then(response => {
                this.emp = response.data;
                this.bank = this.emp.employeebank;

                console.log(this.bank);
            })
            .catch(error => {
                console.error('Faild To Fetch data', +error)
            })
    },
}
</script>
