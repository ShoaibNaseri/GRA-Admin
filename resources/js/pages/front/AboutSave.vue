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
                                <div class="col-xl-6">
                                    <label for="blog-title" class="form-label">About Title</label>
                                    <input type="text" v-model="abouts.title" class="form-control" id="blog-title"
                                        placeholder="About Title">
                                </div>
                                <div class="col-xl-12">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea v-model="abouts.description" class="form-control" id="content" cols="30"
                                        rows="10"></textarea>
                                </div>
                                <div class="col-xl-12 blog-images-container">
                                    <label for="blog-author-email" class="form-label">Blog Images</label>
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
import PageTitleControl from '../../components/shared/PageTitleControl.vue';

export default {
    components: { PageTitleControl },
    name: "AboutSave",
    data() {
        return {
            newImageFile: null,
            editMode: false,
            abouts: '',
            pageData:
            {
                pageTitle: "About Us ",
                hasSearch: false,
                hasImport: true,
                hasExport: true,
                hasDeleteAll: true,
                hasAdd: false,
                hasEdit: false,
            }
        }
    },
    methods: {
        handleImageChange(fileList) {
            var imageFile = fileList[0];
            this.newImageFile = imageFile;
            return;
        },
        handleSubmit() {
            if (this.editMode) {
                this.updateAbout();
            } else {
                this.createAbout();
            }
        },
        createAbout() {

        },
        updateAbout() {
            let formData = new FormData();
            formData.append('image', this.newImageFile);
            formData.append('title', this.abouts.title);
            formData.append('description', this.abouts.description);
            axios.post(`/api/about/updateAbout/${this.$route.params.id}`, formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(response => {

                    this.abouts = '';
                    this.$router.push({ name: "about.index" });
                    this.$toast.success('About Us Updated Successfully', {
                        position: 'top-right',
                    })
                })
                .catch(error => {
                    console.log('Failed:', error);
                    this.$toast.error('Faild To Update About Us Content', {
                        position: 'top-right'
                    })
                });
        }


    },
    mounted() {
        if (this.$route.params.id) {
            const id = this.$route.params.id;
            this.editMode = true;
            axios.get(`/api/about/${this.$route.params.id}/edit`)
                .then(response => {
                    this.abouts = response.data;
                    console.log(this.abouts);
                })
                .catch(error => {
                    console.error('Faild To fetch data', +error);
                })
        }
    }

}

</script>
