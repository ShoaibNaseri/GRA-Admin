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
                        <university-filter></university-filter>
                    </div>
                    <div class="card-body p-3">
                        <university-table></university-table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-11 -->
    </div>
</template>

<script>
import axios from 'axios';
import UniversityTable from '../../components/admin/university/UniversityTable.vue';
import UniversityFilter from '../../components/admin/university/UniversityFilter.vue';
import PageTitleControl from '../../components/shared/PageTitleControl.vue';
export default {
    components: { UniversityTable, UniversityFilter, PageTitleControl },
    name: "UniversityView",

    data() {
        return {
            pageData:
            {
                pageTitle: "University Table",
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
