<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">
            <page-title-control :page-data="pageData"></page-title-control>

            <div class="col-xl-12">
                <div class="card custom-card">
                    <form @submit.prevent="handleSubmit()">
                        <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-xl-12 blog-images-container">
                                    <label for="blog-author-email" class="form-label">Upload Gallery Image</label>
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
    name: "GallerySave",


    data() {
        return {
            editMode: false,
            gallery: {
                image: ''
            },
            pageData:
            {
                pageTitle: "Gallery Customization",
                hasSearch: false,
                hasImport: false,
                hasExport: false,



            }
        }
    },
    methods: {
        handleImageChange(fileList) {
            var imageFile = fileList[0];
            this.newImageFile = imageFile;
            return;
        },
        createGallery() {
            let formData = new FormData();
            formData.append('image', this.newImageFile);
            axios.post(`/api/gallery`, formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(response => {
                    this.$router.push({ name: 'gallery.index' })
                })
                .catch(error => {
                    console.error('Faild to Save Data', +error)
                });
        },
        handleSubmit() {
            if (this.editMode) {
                this.updateGallery();
            } else {
                this.createGallery();
            }
        }
    }
}

</script>
