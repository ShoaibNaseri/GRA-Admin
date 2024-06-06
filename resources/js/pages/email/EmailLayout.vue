<template>

    <div class="container-fluid">
        <div class="main-mail-container p-2 gap-4 d-md-flex">
            <div class="mail-navigation d-none d-md-block card custom-card">
                <compose-emal></compose-emal>
                <side-options></side-options>
            </div>
            <router-view></router-view>
        </div>
    </div>

</template>
<script>
import ComposeEmal from '../../components/admin/email/ComposeEmal.vue'
import SideOptions from '../../components/admin/email/SideOptions.vue'
export default {
    components: { SideOptions, ComposeEmal },
    name: "EmailLayout"
}


</script>
