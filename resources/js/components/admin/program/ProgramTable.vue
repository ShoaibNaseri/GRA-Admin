<template>
    <div class="table-responsive">
        <table class="table text-wrap">
            <thead>
                <tr>
                    <th scope="col">#No</th>
                    <th scope="col">Program Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Country</th>
                    <th scope="col">Type</th>
                    <th scope="col">Fee</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(prog, index) in displayPrograms" :key="index" :prog="prog">
                    <th scope="row"> {{ index + 1 }} </th>
                    <td>
                        <router-link :to="{ name: 'program.single', params: { id: prog.id } }">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-xs me-2 online avatar-rounded">
                                    <img :src="getImageUrl('cms/images/uniLogos/' + prog.university.uniLogo)" alt="img">
                                </span>{{ prog.title }}
                            </div>
                            <div class="text-muted">
                                {{ prog.university.uniName }}
                            </div>
                        </router-link>

                    </td>
                    <td>{{ prog.category }}</td>
                    <td>{{ prog.country }}</td>

                    <td><span class="badge bg-primary-transparent">{{ prog.type }}</span></td>
                    <td>$10,984.29</td>
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
    data() {
        return {
            progs: [],
        }
    },
    computed: {
        currentPage() {
            const pageNumber = this.$route.query.page || "1";
            return Number.parseInt(pageNumber);
        },
        displayPrograms() {
            const pageNumber = this.currentPage;
            const firstProgIndex = (pageNumber - 1) * 10;
            const lastProgIndex = (pageNumber * 10);
            return this.progs.slice(firstProgIndex, lastProgIndex);
        }
    },
    methods: {
        getImageUrl(imagePath) {
            return `${window.location.origin}/storage/${imagePath}`;
        },
        goToPreviousPage() {
            if (this.currentPage > 1) {
                this.$router.push({ query: { page: this.currentPage - 1 } });
            }
        },
        goToNextPage() {
            if (this.displayPrograms.length === 10) {
                this.$router.push({ query: { page: this.currentPage + 1 } });
            }
        }
    },
    mounted() {
        axios.get("/api/getAllProgs")
            .then(response => {
                this.progs = response.data;
                console.log(this.progs);
            })
            .catch(error => {
                console.error('Failed to fetch data:', error);
                // Handle the error here, such as displaying an error message to the user
            });
    }

}
</script>
