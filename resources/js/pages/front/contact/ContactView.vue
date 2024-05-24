<template>

    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">
            <contact-list></contact-list>
        </div>
        <!-- End:: row-11 -->
    </div>

</template>

<script>
import ContactList from '../../../components/admin/front/contact/ContactList.vue'
export default {
    components: { ContactList },
    name: "ContactView"
}
</script>
