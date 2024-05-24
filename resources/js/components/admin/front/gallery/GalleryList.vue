<template>
    <div class="row">
        <div v-for="(gall, index) in displayGalleries" :key="index" :gall="gall"
            class="card col-xl-3 col-md-4 col-sm-6">
            <a :href="getImageUrl('cms/images/gallery/' + gall.image)" class="glightbox  border-0"
                data-gallery="gallery1">
                <img height="300px" :src="getImageUrl('cms/images/gallery/' + gall.image)" alt="image">
            </a>
            <div class="p-2">
                <button @click="deleteGallery(gall.id)"
                    class="float-end btn-sm btn btn-danger-transparent">Delete</button>
            </div>
        </div>
        <div v-if="hasPagination" class="col-md-12 col-xl-12">
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
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: "GalleryList",
    data() {
        return {
            galleries: [],
            hasPagination: false,
        }
    },
    computed: {
        currentPage() {
            const pageNumber = this.$route.query.page || "1";
            return Number.parseInt(pageNumber);
        },
        displayGalleries() {
            const pageNumber = this.currentPage;
            const firstProgIndex = (pageNumber - 1) * 8;
            const lastProgIndex = (pageNumber * 8);
            return this.galleries.slice(firstProgIndex, lastProgIndex);
        }
    },
    methods: {
        getImageUrl(imagePath) {
            return `${window.location.origin}/storage/${imagePath}`;
        },
        goToPerviousPage() {
            if (this.currentPage > 1) {
                this.$router.push({
                    query: { page: this.currentPage - 1 }
                });
            }
        },
        goToNextPage() {
            if (this.displayGalleries.length === 8) {
                this.$router.push({ query: { page: this.currentPage + 1 } })
            }
        },
        deleteGallery(toBeDeletedId) {
            axios.delete(`/api/gallery/${toBeDeletedId}`)
                .then(response => {
                    const index = this.galleries.findIndex(
                        (gall) => gall.id == toBeDeletedId
                    );

                    this.galleries.splice(index, 1);

                })
                .catch(error => {
                    console.error('error', +error)
                })
        }
    },
    mounted() {
        axios.get('/api/gallery')
            .then(response => {
                this.galleries = response.data;
                if (this.galleries.length > 0) {
                    this.hasPagination = true;
                }
            })
            .catch(error => {
                console.error('Faild to Fetch data', +error)
            });
    }


}

</script>
