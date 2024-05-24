<template>
    <!-- APP CONTENT -->
    <div class="container-fluid">
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-xl-12">
                        <university-show :unds="unds"></university-show>
                    </div>
                    <div class="col-xl-12">
                        <university-detail :details="details"></university-detail>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-xxl-12">
                        <university-side-detail :unds="unds"></university-side-detail>
                    </div>
                    <div class="col-xl-12">
                        <university-gallery :gallery="gallery"></university-gallery>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->
    </div>
    <!-- END APP CONTENT -->
</template>

<script>
import axios from 'axios'
import UniversityDetail from '../../components/admin/university/single/UniversityDetail.vue'
import UniversityGallery from '../../components/admin/university/single/UniversityGallery.vue'
import UniversityShow from '../../components/admin/university/single/UniversityShow.vue'
import UniversitySideDetail from '../../components/admin/university/single/UniversitySideDetail.vue'
export default {
    components: { UniversityShow, UniversityDetail, UniversitySideDetail, UniversityGallery },
    name: 'UniversitySingle',

    data() {
        return {
            unds: {
                country: '',
            },
            gallery: [],
            details: [],
            id: this.$route.params.id
        }
    },
    mounted() {
        axios.get(`/api/admin/university/single/${this.id}`)
            .then(response => {
                this.unds = response.data;
                this.unds.country = this.unds.country;
                this.details = this.unds.university_details;
                this.gallery = this.unds.university_gallery;

                console.log(this.gallery);
            })
            .catch(error => {
                console.error('Faild To Fetch Univerity Data ', +error)
            })
    }
}

</script>
