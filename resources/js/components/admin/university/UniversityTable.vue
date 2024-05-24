<template>
    <div class="table-responsive">
        <table class="table text-nowrap">
            <thead>
                <tr>
                    <th scope="col">#No</th>
                    <th scope="col">University Name</th>
                    <th scope="col">Country</th>
                    <th scope="col">Rank</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(uni, index) in displayUnis" :key="index" :uni="uni">
                    <th scope="row"> {{ index + 1 }} </th>
                    <td>
                        <router-link :to="{ name: 'university.single', params: { id: uni.id } }">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-xs me-2 online avatar-rounded">
                                    <img :src="getImageUrl('cms/images/uniLogos/' + uni.uniLogo)" alt="img">
                                </span>{{ uni.uniName }}
                            </div>
                        </router-link>

                    </td>
                    <td>{{ uni.country.name }}</td>
                    <td>#{{ uni.rank }}</td>
                    <td><span class="badge bg-primary-transparent">{{ uni.type }}</span></td>
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
                <li class="page-item">
                    <a class="page-link text-primary" @click="goToNextPage">
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

    name: "UniversityTable",
    data() {
        return {
            unis: [],
        }
    },
    computed: {
        currentPage() {
            const pageNumber = this.$route.query.page || "1";
            return Number.parseInt(pageNumber);
        },
        displayUnis() {
            const pageNumber = this.currentPage;
            const firstProgIndex = (pageNumber - 1) * 10;
            const lastProgIndex = (pageNumber * 10);
            return this.unis.slice(firstProgIndex, lastProgIndex);
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
            // Assuming there are more items to display
            if (this.displayUnis.length === 10) {
                this.$router.push({ query: { page: this.currentPage + 1 } });
            }
        }
    },
    mounted() {
        axios.get("/api/getAllUni")
            .then(response => {
                this.unis = response.data;
                console.log(this.unis);
            })
            .catch(error => {
                console.error('Faild To Fetch Data' + error)
            });
    }

}

</script>
