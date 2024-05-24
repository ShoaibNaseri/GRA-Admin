<template>
    <div class="table-responsive">
        <table class="table text-wrap">
            <thead>
                <tr>
                    <th scope="col">#No</th>
                    <th scope="col">Subscribers Email</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(sub, index) in displaySubs" :key="index" :sub="sub">
                    <td scope="row"> {{ index + 1 }} </td>
                    <td>
                        <div class="d-flex align-items-center">
                            {{ sub.email }}
                        </div>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-danger">Delete</button>
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
    name: "SubscriberTable",

    data() {
        return {
            subs: []
        }
    },
    computed: {
        currentPage() {
            const pageNumber = this.$route.query.page || "1";
            return Number.parseInt(pageNumber);
        },
        displaySubs() {
            const pageNumber = this.currentPage;
            const firstProgIndex = (pageNumber - 1) * 10;
            const lastProgIndex = (pageNumber * 10);
            return this.subs.slice(firstProgIndex.lastProgIndex);
        }

    },
    methods: {
        goToPreviousPage() {
            if (this.currentPage > 1) {
                this.$router.push({ query: { page: this.currentPage - 1 } });
            }
        },
        goToNextPage() {
            if (this.displaySubs.length === 10) {
                this.$router.push({ query: { page: this.currentPage + 1 } });
            }
        }
    },
    mounted() {
        axios.get("/api/getAllSubs")
            .then(response => {
                this.subs = response.data;
                console.log(this.subs);
            })
            .catch(error => {
                console.error('Faild To Fetch Subscriber Data', +error)
            });
    }
}
</script>
