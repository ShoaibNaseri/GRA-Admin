<template>
    <page-title-control :page-data="pageData"></page-title-control>
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="p-3">
                <div class="">
                    <h6>Filters</h6>
                </div>
                <employee-filter></employee-filter>
            </div>
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table text-wrap">
                        <thead>
                            <tr>
                                <th scope="col">#No</th>
                                <th scope="col">Employee Name</th>
                                <th scope="col">Country</th>
                                <th scope="col">Email</th>
                                <th scope="col">Account Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(prog, index) in    displayEmpoyees   " :key="index" :prog="prog">
                                <th scope="row"> {{ index + 1 }} </th>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <router-link :to="{ name: 'employee.single', params: { id: prog.id } }">
                                            <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                <img :src="getImageUrl('employee/images/profile/' + prog.image)"
                                                    alt="img">
                                            </span>{{ prog.name }}
                                        </router-link>
                                    </div>
                                </td>
                                <td>{{ prog.country }}</td>
                                <td>{{ prog.email }}</td>
                                <td><span class="badge bg-success-transparent">{{ prog.status }} <span
                                            v-if="prog.status === 'Verified'"><i class="bx bxs-home"></i></span></span>
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
            </div>
        </div>
    </div>

</template>

<script>
import axios from 'axios';
import PageTitleControl from '../../shared/PageTitleControl.vue';
import EmployeeFilter from './EmployeeFilter.vue';
export default {
    components: { PageTitleControl, EmployeeFilter },
    name: "EmployeeList",

    data() {
        return {
            pageData:
            {
                pageTitle: "Employee Table",
                hasSearch: false,
                hasImport: true,
                hasExport: true,
                hasDeleteAll: false,
                hasAdd: false,
                hasEdit: false,
            }
            ,
            employees: [],
        }
    },
    computed: {
        currenPage() {
            const pageNumber = this.$route.query.page || "1";
            return Number.parseInt(pageNumber);
        },
        displayEmpoyees() {
            const pageNumber = this.currenPage;
            const firstProgIndex = (pageNumber - 1) * 10;
            const lastProgIndex = pageNumber * 10;
            return this.employees.slice(firstProgIndex, lastProgIndex);
        }
    },
    methods: {
        getImageUrl(imagePath) {
            return `${window.location.origin}/storage/${imagePath}`;
        },
        goToPerViousPage() {
            if (this.currenPage > 1) {
                this.$router.push({ query: { page: this.currenPage - 1 } });
            }
        },
        goToNexetPage() {
            if (this.displayEmpoyees.length === 10) {
                this.$router.push({ query: { page: this.currenPage + 1 } });
            }
        }
    },
    mounted() {
        axios.get("/api/getAllEmployees")
            .then(response => {
                this.employees = response.data;
                console.log(this.employees);
            })
            .catch(error => {
                console.error('Faild To fetch ', +error)
            });
    }
}
</script>
