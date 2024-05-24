<template>
    <div>
        <div class="table-responsive">
            <table class="table text-wrap">
                <thead>
                    <tr>
                        <th scope="col">#No</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(cat, index) in displayPcats" :key="index" :cat="cat">
                        <td>{{ index + 1 }}</td>
                        <td>
                            {{ cat.name }}
                        </td>
                        <td>
                            action
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
</template>

<script>
import axios from 'axios';
export default {
    name: "ProgramCategoryTable",
    data() {
        return {
            pcats: []
        }
    },
    computed: {
        currentPage() {
            const pageNumber = this.$route.query.page || "1";
            return Number.parseInt(pageNumber);
        },
        displayPcats() {
            const pageNumber = this.currentPage;
            const firstProgIndex = (pageNumber - 1) * 10;
            const lastProgIndex = (pageNumber * 10);
            return this.pcats.slice(firstProgIndex, lastProgIndex);
        }
    },
    methods: {
        goToPreviousPage() {
            if (this.currentPage > 1) {
                this.$router.push({ query: { page: this.currentPage - 1 } });
            }
        },
        goToNextPage() {
            if (this.displayPcats.length === 10) {
                this.$router.push({ query: { page: this.currentPage + 1 } });
            }
        }
    },
    mounted() {
        axios.get("/api/getAllCats")
            .then(response => {
                this.pcats = response.data;
                console.log(this.pcats);
            })
            .catch(error => {
                console.error('Faild To fetch data', +error)
            });
    }

}

</script>
