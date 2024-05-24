<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">
            <page-title-control :page-data="pageData"></page-title-control>

            <div class="col-xl-6">
                <div class="card custom-card">
                    <form @submit.prevent="handleSubmit()">
                        <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-xl-6">
                                    <label for="blog-title" class="form-label">Phone Number</label>
                                    <input type="text" v-model="contact.phone" class="form-control" id="blog-title"
                                        placeholder="Phone Number">
                                </div>
                                <div class="col-xl-6">
                                    <label for="blog-title" class="form-label">Email Address</label>
                                    <input type="email" v-model="contact.email" class="form-control" id="blog-title"
                                        placeholder="Email Address">
                                </div>
                                <div class="col-xl-12">
                                    <label for="blog-title" class="form-label">Address</label>
                                    <input type="text" v-model="contact.address" class="form-control" id="blog-title"
                                        placeholder="Address">
                                </div>
                                <div class="col-xl-12">
                                    <label for="blog-title" class="form-label">Map Link</label>
                                    <input type="text" v-model="contact.link" class="form-control" id="blog-title"
                                        placeholder="Address">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="btn-list text-end">
                                <button v-if="!editMode" type="submit" class="btn btn-light">Save</button>
                                <button v-else type="submit" class="btn btn-success-transparent">Update</button>
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
    name: "ContactSave",
    data() {
        return {
            editMode: false,
            contact: {
                id: '',
                phone: '',
                email: '',
                address: '',
                link: ''
            },
            pageData:
            {
                pageTitle: "Contact Us Customization",
                hasSearch: false,
                hasImport: false,
                hasExport: false,
                hasDeleteAll: false,
                hasAdd: false,
                hasEdit: false,
            }
        }
    },
    methods: {
        handleSubmit() {
            if (this.editMode) {
                this.updateContact();
            } else {
                this.createContact();
            }
        },
        updateContact() {
            axios.put(`/api/contact/${this.$route.params.id}`, this.contact)
                .then(response => {
                    this.$router.push({ name: 'contact.index' })
                })
                .catch(error => {
                    console.error('Faild TO update data', +error)
                });
        },
        createContact() {

        }

    },
    mounted() {
        if (this.$route.params.id) {
            this.editMode = true;

            axios.get(`/api/contact/${this.$route.params.id}/edit`)
                .then(response => {
                    this.contact = response.data
                })
                .catch(error => {
                    console.error('Faild To get ', +error)
                });
        }
    }
}
</script>
