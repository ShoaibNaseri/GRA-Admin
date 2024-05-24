<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">
            <page-title-control :page-data="pageData"></page-title-control>
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body p-3">

                        <language-table></language-table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-11 -->
    </div>
</template>
<script>
import LanguageTable from '../../../components/admin/formData/LanguageTable.vue'
import PageTitleControl from '../../../components/shared/PageTitleControl.vue'
export default {
    components: { LanguageTable, PageTitleControl },
    name: "LanguageView",
    data() {
        return {
            pageData:
            {
                pageTitle: "Languge Tables",
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
