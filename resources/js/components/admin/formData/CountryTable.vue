<template>

    <div>
        <div class="table-responsive">
            <table class="table text-wrap">
                <thead>
                    <tr>
                        <th scope="col">#No</th>
                        <th scope="col">Country ({{ totalCount }})</th>
                        <th scope="col">Capital</th>
                        <th scope="col">Currency(SYM)</th>
                        <th scope="col">Flag</th>
                        <th scope="col">PhoneCode</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(count, index) in displayCountries" :key="index" :count="count">
                        <td>{{ index + 1 }}</td>
                        <td>
                            {{ count.name }}

                        </td>
                        <td>
                            {{ count.capital }}

                        </td>
                        <td>
                            {{ count.currency }}({{ count.symbol }})
                        </td>
                        <td>
                            <flag :squared="true" :iso="count.code" />
                        </td>
                        <td>00{{ count.phone }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="p-4 float-end">
            <nav aria-label="Page navigation" class="pagination-style-3">
                <ul class="pagination mb-0 flex-wrap">
                    <li class="page-item" @click="goToPerviousPage">
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
    name: "CountryTable",

    data() {
        return {
            couns: [],
            countIndex: [],
        }
    },
    computed: {

        totalCount() {
            return this.couns.length; // Assuming 'data' is an array containing the data from the database
        },
        currentPage() {
            const pageNumber = this.$route.query.page || "1";
            return Number.parseInt(pageNumber);
        },
        displayCountries() {
            const pageNumber = this.currentPage;
            const firstProgIndex = (pageNumber - 1) * 15;
            const lastProgIndex = (pageNumber * 15);
            return this.couns.slice(firstProgIndex, lastProgIndex);
        }
    },
    methods: {
        goToPerviousPage() {
            if (this.currentPage > 1) {
                this.$router.push({ query: { page: this.currentPage - 1 } });
            }
        },
        goToNextPage() {
            if (this.displayCountries.length === 15) {
                this.$router.push({ query: { page: this.currentPage + 1 } });
            }
        }
    },
    mounted() {
        axios.get("/api/getAllCounts")
            .then(response => {
                this.couns = response.data;
                console.log(this.couns);
            })
            .catch(error => {
                console.error('Faild To Fetch Countries Data', +error)
            });
    }
}
</script>
