<template>
    <div>
        <div class="table-responsive">
            <table class="table text-wrap">
                <thead>
                    <tr>
                        <th scope="col">#No</th>
                        <th scope="col">Language</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(lang, index) in displayLangs" :key="index" :lang="lang">
                        <td>{{ index + 1 }}</td>
                        <td>
                            {{ lang.name }}
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
export default {
    name: "LanguageTable",

    data() {
        return {
            langs: []
        }
    },
    computed: {
        currentPage() {
            const pageNumber = this.$route.query.page || "1";
            return Number.parseInt(pageNumber);
        },
        displayLangs() {
            const pageNumber = this.currentPage;
            const firstProgIndex = (pageNumber - 1) * 10;
            const lastProgIndex = (pageNumber * 10);
            return this.langs.slice(firstProgIndex, lastProgIndex);
        }
    },
    methods: {
        goToPerviousPage() {
            if (this.currentPage > 1) {
                this.$router.push({ query: { page: this.currentPage - 1 } });
            }
        },
        goToNextPage() {
            if (this.displayLangs.length === 10) {
                this.$router.push({ query: { page: this.currentPage + 1 } });
            }
        }

    },
    mounted() {
        axios.get("/api/getAllLangs")
            .then(response => {
                this.langs = response.data;
                console.log(this.langs);
            })
            .catch(error => {
                console.error('Faild To fetch Langugaes', +error);
            })
    }
}
</script>
