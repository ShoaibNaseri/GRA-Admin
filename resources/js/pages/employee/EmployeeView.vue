<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">
            <employee-list></employee-list>
        </div>
        <!-- End:: row-11 -->
    </div>
</template>


<script>
import EmployeeList from '../../components/admin/employee/EmployeeList.vue'
export default {
    components: { EmployeeList, },
    name: "EmployeeView",
    data() {
        return {

        }
    }
}
</script>
