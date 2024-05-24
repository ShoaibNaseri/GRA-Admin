<template>
    <div>
        <div class="table-responsive">
            <table class="table text-wrap">
                <thead>
                    <tr>
                        <th scope="col">#No</th>
                        <th scope="col">Category Title</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(doc, index) in displayDocs" :key="index" :doc="doc">
                        <td>{{ index + 1 }}</td>
                        <td>
                            {{ doc.title }}
                            <br>
                            <span class="small text-muted">
                                {{ doc.comment }}
                            </span>
                        </td>
                        <td>
                            {{ doc.type }}
                        </td>
                        <td>
                            <div class="d-flex">
                                <div class="p-1">
                                    <button class="btn btn-sm btn-success"><i class="ri-edit-line"></i></button>
                                </div>
                                <div class="p-1">
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </div>
                            </div>
                        </td>
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
export default {
    name: "RequiredDocTable",
    data() {
        return {
            docs: []
        }
    },
    computed: {
        currentPage() {
            const pageNumber = this.$route.query.page || "1";
            return Number.parseInt(pageNumber);
        },
        displayDocs() {
            const pageNumber = this.currentPage;
            const firstProgIndex = (pageNumber - 1) * 10;
            const lastProgIndex = (pageNumber * 10);
            return this.docs.slice(firstProgIndex, lastProgIndex);
        }
    },
    methods: {
        goToPerviousPage() {
            if (this.currentPage > 1) {
                this.$router.push({ query: { page: this.currentPage - 1 } });
            }
        },
        goToNextPage() {
            if (this.displayDocs.length === 10) {
                this.$router.push({ query: { page: this.currentPage + 1 } });
            }
        }

    },
    mounted() {
        axios.get("/api/getAllDocs")
            .then(response => {
                this.docs = response.data;
                console.log(this.docs);
            })
            .catch(error => {
                console.error('Faild To fetch Langugaes', +error);
            })

    }
}
</script>
