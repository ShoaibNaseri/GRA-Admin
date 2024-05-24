<template>
    <div class="card custom-card border-0">
        <div class="image-container text-center">
            <a href="javascript:void(0);">
                <img :src="getImageUrl('cms/images/uniLogos/' + progs.uniLogo)" class="image-d" alt="...">
            </a>
        </div>
        <div class="card-header d-block border-bottom border-block-end-dashed">
            <p class="fs-22 fw-semibold mb-1">{{ progs.title }}</p>
            <div class="d-sm-flex align-items-cneter">
                <div class="d-flex align-items-center flex-fill">

                    <div>
                        <p class="mb-0 fw-semibold fs-14">{{ progs.uni }}</p>
                    </div>
                </div>
                <div class="mt-sm-0 mt-2 d-flex">
                    <div class="p-2">
                        <button class="btn btn-success-ghost btn-sm">Edit</button>
                    </div>
                    <div class="p-2">
                        <button class="btn btn-danger-ghost btn-sm">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h6 class="fw-semibold">
                Program Description
            </h6>
            <p class="mb-5 text-muted p-2">
                {{ progs.description }}
            </p>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProgramShow",
    props: {
        progs: {

        },
        university: {

        }

    },
    methods: {
        getImageUrl(imagePath) {
            return `${window.location.origin}/storage/${imagePath}`;
        }
    }
}


</script>
<style>
.image-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 30vh;
    /* Set a height for the container */
}

.image-d {
    max-width: 40%;
    /* Make the image responsive */
    max-height: 40%;
    /* Make the image responsive */
    object-fit: contain;
    /* Maintain image aspect ratio */
}
</style>
