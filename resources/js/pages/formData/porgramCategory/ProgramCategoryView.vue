<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">

            <page-title-control :page-data="pageData"></page-title-control>
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body p-3">
                        <program-category-table></program-category-table>

                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-11 -->
    </div>
</template>

<script>
import ProgramCategoryTable from '../../../components/admin/formData/ProgramCategoryTable.vue'
import PageTitleControl from '../../../components/shared/PageTitleControl.vue'
export default {
    components: { PageTitleControl, ProgramCategoryTable },
    name: "ProgramCategoryView",
    data() {
        return {
            pageData:
            {
                pageTitle: "Program Category Table",
                hasSearch: true,
                hasImport: true,
                hasExport: true,
                hasDeleteAll: true,
                hasAdd: true,
            }

        }
    }
}

</script>
