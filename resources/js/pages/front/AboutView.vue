<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">
            <about-list></about-list>
        </div>
        <!-- End:: row-11 -->
    </div>
</template>

<script>
import AboutList from '../../components/admin/front/about/AboutList.vue'

export default {
    components: { AboutList },
    name: "AboutView",
    data() {
        return {

        }
    }
}
</script>
