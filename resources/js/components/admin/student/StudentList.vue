<template>
    <div class="table-responsive">
        <table class="table text-nowrap">
            <thead>
                <tr>
                    <th scope="col">#No</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Country</th>
                    <th scope="col">Account Status</th>
                    <th scope="col">Co-Ordinator</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(student, index) in displayStudents" :key="index" :student="student">
                    <th scope="row"> {{ index + 1 }} </th>
                    <td>
                        <router-link :to="{ name: 'student.single', params: { id: student.id } }">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-xs me-2 online avatar-rounded">
                                    <img :src="getImageUrl('student/images/profile/' + student.image)" alt="img">
                                </span>{{ student.name }}
                            </div>
                        </router-link>
                    </td>
                    <td>{{ student.email }}</td>
                    <td>{{ student.country.name }}</td>
                    <td><span class="badge bg-success-transparent">{{ student.status }} <span
                                v-if="student.status === 'Verified'"><i class="bx bx-home"></i></span></span></td>
                    <td>
                        {{ student.employee_id }}
                    </td>
                    <td>
                        <div class="hstack gap-2 fs-15">
                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"><i
                                    class="ri-download-2-line"></i></a>
                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"><i
                                    class="ri-edit-line"></i></a>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="p-4 float-end">
        <nav aria-label="Page navigation" class="pagination-style-3">
            <ul class="pagination mb-0 flex-wrap">
                <li class="page-item" @click="goToPreviousPage">
                    <a class="page-link">
                        Prev
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0);">
                        <i class="bi bi-three-dots"></i>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">16</a></li>
                <li class="page-item" @click="goToNextPage">
                    <a class="page-link text-primary">
                        next
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: 'StudentList',
    data() {
        return {
            students: [],
        }
    },
    computed: {
        currentPage() {
            const pageNumber = this.$route.query.page || "1";
            return Number.parseInt(pageNumber);
        },
        displayStudents() {
            const pageNumber = this.currentPage;
            const firstProgIndex = (pageNumber - 1) * 10;
            const lastProgIndex = (pageNumber * 10);
            return this.students.slice(firstProgIndex, lastProgIndex);
        }
    },
    methods: {
        getImageUrl(imagePath) {
            return `${window.location.origin}/storage/${imagePath}`;
        },
        goToPerviousPage() {
            if (this.currentPage > 1) {
                this.$router.push({
                    query: { page: this.currentPage - 1 }
                });
            }
        },
        goToNextPage() {
            if (this.displayStudents.length === 10) {
                this.$router.push({ query: { page: this.currentPage + 1 } })
            }
        }
    },
    mounted() {
        axios.get("/api/getAllStudents")
            .then(response => {
                this.students = response.data;
                console.log(this.students);
            })
            .catch(error => {
                console.error('Error TO fetch data' + error);
            })
    }

}


</script>
<style></style>
