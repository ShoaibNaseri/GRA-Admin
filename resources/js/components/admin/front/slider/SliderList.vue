<template>
    <div>
        <page-title-control :page-data="pageData"></page-title-control>
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-body p-3">
                    <div class="row">
                        <div v-for="slide in slides" :key="slide.id" class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="card custom-card">
                                <a href="javascript:void(0);">
                                    <img :src="getImageUrl('cms/images/slider/' + slide.image)" height="300px"
                                        class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <p class="fw-semibold fs-15 text-dark mb-1">{{ slide.title }}</p>
                                    <p class="card-text text-muted mb-3">{{ slide.subTitle }}</p>
                                    <a href="javascript:void(0);" class="text-primary fw-semibold">Read More<i
                                            class="ti ti-arrow-narrow-right fs-15 align-middle fw-semibold ms-1"></i></a>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm avatar-rounded me-2">
                                                <img src="../../../../assets/devImage/profile/profile.png" alt="">
                                            </div>
                                            <div>
                                                <p class="mb-0 fw-semibold">By Admin</p>
                                                <p class="text-muted fs-10 mb-0">{{ slide.created_at }}</p>
                                            </div>
                                        </div>
                                        <div class="btn-list">
                                            <router-link :to="{ name: 'slider.save', params: { id: slide.id } }"
                                                aria-label="button" type="button"
                                                class="btn  btn-success-transparent btn-sm m-1">Edit</router-link>
                                            <button aria-label="button" @click="deleteSlider(slide.id)" type="button"
                                                class="btn  btn-danger-transparent btn-sm m-1">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    name: "SliderList",
    data() {
        return {
            pageData:
            {
                pageTitle: "Sliders",
                hasSearch: false,
                hasImport: false,
                hasExport: false,
                hasDeleteAll: true,
                hasAdd: true,
                route: "slider.save"
            },
            slides: [],
        }
    },
    methods: {
        getImageUrl(imagePath) {
            return `${window.location.origin}/storage/${imagePath}`;
        },
        deleteSlider(toBeDeletedId) {
            axios.delete(`/api/slider/${toBeDeletedId}`)
                .then(response => {
                    console.log(response.data)
                    const index = this.slides.findIndex(
                        (slide) => slide.id == toBeDeletedId
                    );
                    this.slides.splice(index, 1);
                    this.$toast.success('Slider Deleted Successfully', {
                        position: 'top-right',
                    });
                })
                .catch(error => {
                    console.error('Flaid to dleet', +error)
                });
        }
    },
    mounted() {
        axios.get("/api/slider")
            .then(response => {
                this.slides = response.data;
                if (this.slides.length >= 3) {
                    this.pageData.hasAdd = false
                }
            })
            .catch(error => {
                console.error('Faild To fetch SLiders', +error)
            });
    }


}

</script>
