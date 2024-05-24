<template>
    <div class="card custom-card">
        <div class="card-header">
            <div class="card-title">
                Gallery
            </div>
        </div>
        <div class="card-body">
            <div class="text-center demo-gallery">
                <div class="">
                    <div v-if="gallery.length == 0">
                        <span class="text-danger">No Image has been uploaded yet</span>
                    </div>
                    <ul v-else id="lightgallery" class="list-unstyled row row-sm gy-3 gx-3">
                        <li v-for="gall in gallery" :key="gall.id" class="col-sm-6 col-lg-4">
                            <a href="assets/images/media/media-40.jpg" class="glightbox" data-gallery="gallery1">
                                <img src="../..//images/media/media-40.jpg" alt="image"
                                    class="img-responsive br-5 w-100">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'UniversityGallery',
    props: {
        gallery: {
            type: Array
        }
    }
}

</script>
