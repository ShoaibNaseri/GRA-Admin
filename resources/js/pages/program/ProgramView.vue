<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">
            <page-title-control :page-data="pageData"></page-title-control>
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="p-3">
                        <div class="">
                            <h6>Filters</h6>
                        </div>
                        <program-filter></program-filter>
                    </div>
                    <div class="card-body p-3">
                        <program-table></program-table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-11 -->
    </div>
</template>
<script>
import ProgramFilter from '../../components/admin/program/ProgramFilter.vue'
import ProgramTable from '../../components/admin/program/ProgramTable.vue'
import PageTitleControl from '../../components/shared/PageTitleControl.vue'
export default {
    components: { ProgramFilter, ProgramTable, PageTitleControl },
    name: "ProgramView",
    data() {
        return {
            page: [
                { title: "Program" }
            ],
            pageData:
            {
                pageTitle: "Programs Table",
                hasSearch: false,
                hasImport: true,
                hasExport: true,
                hasDeleteAll: true,
                hasAdd: true,
            }

        }
    }
}
</script>
