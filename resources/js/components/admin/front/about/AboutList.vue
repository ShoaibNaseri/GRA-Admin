<template>
    <div>
        <page-title-control :page-data="pageData"></page-title-control>
        <div class="col-xl-12">
            <div class="card custom-card border-0">
                <a href="javascript:void(0);">
                    <img :src="abouts.imageUrl" class="shadow-logo blog-details-img card-img-top" alt="...">
                </a>
                <div class="card-header d-block border-bottom border-block-end-dashed">
                    <p class="fs-22 fw-semibold mb-1">{{ abouts.title }}</p>
                    <div class="d-sm-flex align-items-cneter">
                        <div class="d-flex align-items-center flex-fill">
                            <div>
                                <p class="mb-0 fw-semibold fs-14">By Admin - <span class="fs-12 text-muted fw-normal">
                                        {{ abouts.created_at }}</span></p>
                            </div>
                        </div>
                        <div class="mt-sm-0 mt-2">
                            <span class="badge bg-success-transparent me-3">
                                <i class="ri-thumb-up-line me-1 align-middle d-inline-block"></i> 32 Likes
                            </span>
                            <span class="badge bg-info-transparent me-3">
                                <i class="ri-chat-4-line me-1 align-middle d-inline-block"></i> 10 Comments
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="mb-5 text-muted">
                        {{ abouts.description }}
                    </p>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
import axios from 'axios'
import PageTitleControl from '../../../shared/PageTitleControl.vue';
export default {
    components: { PageTitleControl },
    name: "AboutList",


    data() {
        return {

            abouts: '',
            pageData:
            {
                pageTitle: "About Us",
                hasSearch: false,
                hasImport: false,
                hasExport: false,
                hasDeleteAll: false,
                hasAdd: false,
                hasEdit: true,
                paramName: 'about',
                paramId: 1,
                route: "about.save"
            }
            ,
        }
    },
    mounted() {
        axios.get("/api/about")
            .then(response => {
                this.abouts = response.data;
                console.log(this.abouts);
            })
            .catch(error => {
                console.error('Faild To Fetch Data', +error)
            });
    }
}

</script>
<style>
.shadow-logo {
    filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5));
}
</style>
