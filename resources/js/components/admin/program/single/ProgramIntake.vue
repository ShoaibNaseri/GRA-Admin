<template>
    <div class="card custom-card border-0">
        <div class="card-header">
            <div class="card-title">
                Program Intake & Dates
            </div>
        </div>
        <div class="card-body">
            <div>
                <ul>

                    <li class="p-2">
                        Address: <span class="float-end">{{ progD.intake.address }}</span>
                    </li>
                    <li class="p-2">
                        Intake Season: <span class="float-end">{{ progD.intake.intakeSeason }}</span>
                    </li>
                    <li class="p-2">
                        Starting Date: <span class="float-end">{{ progD.intake.startDate }}</span>
                    </li>
                    <li class="p-2">
                        Annouced Date: <span class="float-end">{{ progD.intake.announcedDate }}</span>
                    </li>
                    <li class="p-2">
                        Registration Closing Date: <span class="float-end">{{ progD.intake.endDate }}</span>
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
    name: "ProgramIntake",
    props: {
        progD: {

        }
    }
}

</script>
