<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">
            <page-title-control :page-data="pageData"></page-title-control>
            <div class="col-xl-12">
                <div class="card custom-card">

                    <div class="p-3">
                        <div class="">
                            <h6>Filteration</h6>
                        </div>
                        <student-filter></student-filter>
                    </div>
                    <div class="card-body p-3">
                        <student-list> </student-list>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-11 -->
    </div>
</template>

<script>
import StudentFilter from '../../components/admin/student/StudentFilter.vue'
import StudentList from '../../components/admin/student/StudentList.vue'
import PageTitleControl from '../../components/shared/PageTitleControl.vue'
export default {

    components: { StudentList, StudentFilter, PageTitleControl },
    name: "StudentView",
    data() {
        return {
            pageData:
            {
                pageTitle: "Student Table",
                hasSearch: false,
                hasImport: true,
                hasExport: true,
                hasDeleteAll: false,
                hasAdd: false,
            }

        }
    }



}
</script>
