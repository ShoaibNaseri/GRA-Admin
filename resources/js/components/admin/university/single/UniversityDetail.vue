<template>
    <div class="card custom-card">
        <div class="card-header">
            <div class="card-title">
                <div class="col-md-12 ">
                    Other Details
                </div>
            </div>
        </div>
        <div class=" card-body">
            <div v-if="details.length > 0" class="accordion" id="accordionExample">
                <div v-for="(det, index) in  details " :key="index" class="accordion-item">
                    <h2 class="accordion-header" :id="`headingOne` + index">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            :data-bs-target="`#collapseOne` + index" aria-expanded="true"
                            :aria-controls="`collapseOne` + index">
                            {{ det.title }}
                        </button>
                    </h2>
                    <div :id="`collapseOne` + index" class="accordion-collapse collapse show"
                        :aria-labelledby="`headingOne` + index" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {{ det.description }}
                        </div>
                        <div class="float-end p-2">
                            <a href="http://" class="btn btn-sm btn-danger-ghost">Delete</a>
                        </div>
                    </div>

                </div>
            </div>
            <div v-else>
                <span class="text-danger p-2">
                    NO Detail Exist
                </span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "UniversityDetail",
    props: {
        details: {
            Array,
        }
    }
}

</script>
