<template>
    <div class="container-fluid">

        <!-- Start::row-1 -->
        <div class="row">
            <event-list></event-list>
        </div>
    </div>
</template>
<script>
import EventList from "../../components/admin/event/EventList.vue"

export default {
    components: { EventList },
    name: "EventView",
    data() {
        return {

        }
    }
}

</script>
