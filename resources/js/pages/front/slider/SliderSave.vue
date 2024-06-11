<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">
            <page-title-control :page-data="pageData"></page-title-control>
            <div class="col-xl-12">
                <div class="card custom-card">
                    <form @submit.prevent="handleSubmit()" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-xl-6">
                                    <label for="blog-title" class="form-label">Slider Main Title</label>
                                    <input type="text" v-model="slides.title" class="form-control" id="blog-title"
                                        placeholder="About Title">
                                </div>
                                <div class="col-xl-12">
                                    <label for="content" class="form-label">Slider Sub Title</label>
                                    <textarea v-model="slides.subTitle" class="form-control" id="content" cols="30"
                                        rows="10"></textarea>
                                </div>
                                <div class="col-xl-12 blog-images-container">
                                    <label for="blog-author-email" class="form-label">Slider Image</label>
                                    <input type="file" accept="image/*" @change="handleImageChange($event.target.files)"
                                        class="blog-images">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="btn-list text-end">
                                <button v-if="!editMode" type="submit" class="btn btn-light">Save</button>
                                <button v-else type="submit" class="btn btn-light">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End:: row-11 -->

    </div>
</template>

<script>
import axios from 'axios';
import PageTitleControl from '../../../components/shared/PageTitleControl.vue'
export default {
    components: { PageTitleControl },
    name: "SliderSave",
    newImageFile: null,
    editMode: false,
    data() {
        return {
            slides: {
                title: '',
                subTitle: '',
                image: ''

            },
            newImageFile: null,
            editMode: false,
            pageData:
            {
                pageTitle: "Sliders Customization",
                hasSearch: false,
                hasImport: false,
                hasExport: false,
                hasDeleteAll: false,
                hasAdd: false,
            }
        }
    },
    methods: {
        handleImageChange(fileList) {
            var imageFile = fileList[0];
            this.newImageFile = imageFile;
            return;
        },
        createSlide() {
            let formData = new FormData();
            formData.append('image', this.newImageFile);
            formData.append('title', this.slides.title);
            formData.append('subTitle', this.slides.subTitle);
            axios.post('/api/slider/storeSlider', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(response => {
                    this.slides = '';
                    this.$router.push({ name: "slider.index" });
                    this.$toast.success("Slider Created Successfully", {
                        position: 'top-right',
                        duration: 3000,
                        dismissible: true,
                        pauseOnHover: true,
                    });
                })
                .catch(error => {
                    console.error('Faild To asave Slider', +error)
                });
        },
        updateSlide() {

            // formData.append('title', this.slides.title);
            // formData.append('subTitle', this.slides.subTitle);
            axios.put(`/api/slider/${this.$route.params.id}`, this.slides, {

            })
                .then(response => {
                    if (this.newImageFile != null) {
                        let formData = new FormData();
                        formData.append("_method", "PUT");
                        formData.append('image', this.newImageFile);
                        axios.post(`/api/slider/uploadImage/${this.$route.params.id}`, formData, {
                            headers: {

                                'Content-Type': 'multipart/form-data'
                            }
                        })
                            .then(response => {
                                this.$router.push({ name: 'slider.index' });
                                this.$toast.success("Slider Created Successfully", {
                                    position: 'top-right',
                                    duration: 3000,
                                    dismissible: true,
                                    pauseOnHover: true,
                                });

                            })
                            .catch(error => {
                                console.error('Faild to Fetch Data', +error)
                            })
                    } else {
                        this.$router.push({ name: 'slider.index' })
                        this.$toast.success("Slider Updated Successfully", {
                            position: 'top-right',
                            duration: 3000,
                            dismissible: true,
                            pauseOnHover: true,
                        });
                    }

                })
                .catch(error => {
                    console.error('Faild To ', +error)
                })
        },
        handleSubmit() {
            if (this.editMode) {
                this.updateSlide();
            } else {
                this.createSlide();
            }
        },

    },
    mounted() {
        if (this.$route.params.id) {
            this.editMode = true;
            let x = this.$route.params.id;
            axios.get(`/api/slider/${this.$route.params.id}/edit`)
                .then(response => {
                    this.slides = response.data;
                    console.log(this.slides);
                })
                .catch(error => {
                    console.error('Faild Catch Slider Data', +error)
                });
        }
    }

}
</script>
