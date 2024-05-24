<template>
    <div class="card custom-card border-0">
        <div class="card-header">
            <div class="card-title">
                Details
            </div>
        </div>
        <div class="card-body">
            <div>
                <ul>
                    <li class="p-2">
                        Type <span class="float-end">{{ unds.type }}</span>
                    </li>
                    <li class="p-2">
                        Country<span class="float-end">{{ unds.country.name }}</span>
                    </li>
                    <li class="p-2">
                        University Rank <span class="float-end">#{{ unds.rank }}</span>
                    </li>
                    <li class="p-2">
                        Email <span class="float-end">{{ unds.uniEmail }}</span>
                    </li>
                    <li class="p-2">
                        Phone <span class="float-end">{{ unds.uniPhone }}</span>
                    </li>
                    <li class="p-2">
                        Submittion Link <span class="float-end">{{ unds.submationLink }}</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-footer border-block-start-dashed text-center">
            <div class="btn-list">
                <div class="btn-list">
                    <button aria-label="button" type="button"
                        class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light">
                        <i class="ri-facebook-line"></i>
                    </button>
                    <button aria-label="button" type="button"
                        class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                        <i class="ri-twitter-line"></i>
                    </button>
                    <button aria-label="button" type="button"
                        class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                        <i class="ri-instagram-line"></i>
                    </button>
                    <button aria-label="button" type="button"
                        class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                        <i class="ri-github-line"></i>
                    </button>
                    <button aria-label="button" type="button"
                        class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                        <i class="ri-youtube-line"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "UniversitySideDetail",
    props: {
        unds: {

        },

    }
}

</script>
