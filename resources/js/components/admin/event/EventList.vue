<template>
    <div>
        <page-title-control :page-data="pageData"></page-title-control>
        <div class="card custom-card px-0">
        </div>
        <div class="col-xl-12">
            <div class="row">
                <div v-for="event in displayEvents" :key="event.id" :event="event"
                    class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card custom-card">
                        <a href="">
                            <img src="" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <p class="fw-semibold fs-15 text-dark mb-1">{{ event.title }}</p>
                            <p class="card-text text-muted mb-3">{{ event.description }}</p>
                            <a href="javascript:void(0);" class="text-primary fw-semibold">Full Details<i
                                    class="ti ti-arrow-narrow-right fs-15 align-middle fw-semibold ms-1"></i></a>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="p-3">
                                        <p class="mb-0 fw-semibold">Data</p>
                                        <p class="text-muted fs-10 mb-0">{{ event.date }}</p>
                                    </div>
                                    <div class="p-3">
                                        <p class="mb-0 fw-semibold">Time</p>
                                        <p class="text-muted fs-10 mb-0">{{ event.time }}</p>
                                    </div>
                                    <div class="p-3">
                                        <p class="mb-0 fw-semibold">Portal</p>
                                        <p class="text-muted fs-10 mb-0">{{ event.portal }}</p>
                                    </div>
                                    <div class="p-3">
                                        <p class="mb-0 fw-semibold">Type</p>
                                        <p class="text-muted fs-10 mb-0">{{ event.type }}</p>
                                    </div>
                                    <div class="p-3">
                                        <p class="mb-0 fw-semibold">Location</p>
                                        <p class="text-muted fs-10 mb-0">{{ event.location }}</p>
                                    </div>
                                </div>
                                <div class="btn-list">
                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i
                                            class="ri-thumb-up-line"></i></button>
                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i
                                            class="ri-chat-2-line"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start: pagination -->
        <div class="col-xl-12">
            <div class="float-end mb-4">
                <nav aria-label="Page navigation" class="pagination-style-4">
                    <ul class="pagination mb-0 gap-2">
                        <li class="page-item" @click="goToPerviousPage">
                            <a class="page-link">
                                Prev
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item">
                            <a aria-label="anchor" class="page-link" href="javascript:void(0);">
                                <i class="bi bi-three-dots"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">17</a></li>
                        <li class="page-item" @click="goToNextPage">
                            <a class="page-link text-primary">
                                next
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End: pagination -->
    </div>

</template>
<script>
import PageTitleControl from '../../shared/PageTitleControl.vue';

export default {
    components: { PageTitleControl },
    name: "EventList",

    data() {
        return {
            pageData:
            {
                pageTitle: "Our Events",
                hasSearch: false,
                hasImport: true,
                hasExport: true,
                hasDeleteAll: true,
                hasAdd: true,
                hasEdit: false
            }
            ,
            events: []
        }
    },

    computed: {
        currentPage() {
            const pageNumber = this.$route.query.page || "1";
            return Number.parseInt(pageNumber);
        },
        displayEvents() {
            const pageNumber = this.currentPage;
            const firstProgIndex = (pageNumber - 1) * 10;
            const lastProgIndex = (pageNumber * 10);
            return this.events.slice(firstProgIndex, lastProgIndex);
        }

    },
    methods: {
        goToPerviousPage() {
            if (this.currentPage > 1) {
                this.$router.push({ query: { page: this.currentPage - 1 } });
            }
        },
        goToNextPage() {
            if (this.displayEvents.length === 5) {
                this.$router.push({ query: { page: this.currentPage + 1 } });
            }
        }
    },
    mounted() {
        axios.get("/api/event")
            .then(response => {
                this.events = response.data;
                console.log(this.events);
            })
            .catch(error => {
                console.error("Faild to Fetch data", +error)
            });
    }
}
</script>
