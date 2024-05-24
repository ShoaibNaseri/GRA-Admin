<template>
    <!-- Start::row-1 -->
    <div class="row">
        <student-profile :bank="bank" :personel="personel" :student="student" :country="country"
            :creden="creden"></student-profile>

        <div class="col-xxl-9 col-xl-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class=" custom-card">
                        <div class="card-body p-0">
                            <div class="border-block-end-dashed  bg-white rounded-2 p-2">
                                <div>
                                    <ul class="nav nav-pills nav-justified gx-3 tab-style-6 d-sm-flex d-block "
                                        id="myTab" role="tablist">
                                        <li class="nav-item rounded" role="presentation">
                                            <button class="nav-link active" id="activity-tab" data-bs-toggle="tab"
                                                data-bs-target="#activity-tab-pane" type="button" role="tab"
                                                aria-controls="activity-tab-pane" aria-selected="true"><i
                                                    class="ri-user-line me-1 align-middle d-inline-block fs-16"></i>Persona
                                                Details</button>
                                        </li>
                                        <li class="nav-item rounded" role="presentation">
                                            <button class="nav-link" id="gallery-tab" data-bs-toggle="tab"
                                                data-bs-target="#gallery-tab-pane" type="button" role="tab"
                                                aria-controls="gallery-tab-pane" aria-selected="false"><i
                                                    class="ri-exchange-box-line me-1 align-middle d-inline-block fs-16"></i>Applications
                                            </button>
                                        </li>
                                        <li class="nav-item rounded" role="presentation">
                                            <button class="nav-link" id="posts-tab" data-bs-toggle="tab"
                                                data-bs-target="#posts-tab-pane" type="button" role="tab"
                                                aria-controls="posts-tab-pane" aria-selected="false"><i
                                                    class="ri-bill-line me-1 align-middle d-inline-block fs-16"></i>Documents</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="py-4">
                                <div class="tab-content" id="myTabContent">
                                    <personel-detail :pass="pass" :nIds="nIds" :lcts="lcts" :experiences="experiences"
                                        :master="master" :bachelor="bachelor" :school="school"></personel-detail>
                                    <academic-detail :applications='applications'></academic-detail>
                                    <document-detail></document-detail>

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
import axios from 'axios';
import AcademicDetail from '../../components/admin/student/single/AcademicDetail.vue';
import DocumentDetail from '../../components/admin/student/single/DocumentDetail.vue';
import PersonelDetail from '../../components/admin/student/single/PersonelDetail.vue';
import StudentProfile from '../../components/admin/student/single/StudentProfile.vue';

export default {
    components: { StudentProfile, PersonelDetail, AcademicDetail, DocumentDetail },
    name: "StudentSingleView",

    data() {
        return {
            student: '',
            country: '',
            creden: '',
            personel: '',
            bank: '',
            school: '',
            bachelor: '',
            master: '',
            experiences: [],
            lcts: [],
            nIds: '',
            pass: '',
            applications: [],
            id: this.$route.params.id,
        }
    },

    mounted() {
        axios.get(`/api/admin/student/single/${this.id}`)
            .then(response => {
                this.student = response.data;
                this.country = this.student.country
                this.creden = this.student.creden;
                this.personel = this.student.personal;
                this.bank = this.student.bank;
                this.school = this.student.school;
                this.bachelor = this.student.bachelor;
                this.master = this.student.master;
                this.experiences = this.student.experiences;
                this.lcts = this.student.lcts;
                this.nIds = this.student.nationalid;
                this.pass = this.student.passport;
                this.applications = this.student.applications;
                console.log(this.applications);
            })
            .catch(error => {
                console.error('Faild To Fetch data', +error)
            })
    },
}
</script>
