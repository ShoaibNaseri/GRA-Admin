<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">
            <page-title-control :page-data="pageData"></page-title-control>

            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body p-3">
                        <due-table></due-table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-11 -->
    </div>
</template>
<script>
import DueTable from '../../../components/admin/studentWallet/dues/DueTable.vue'
import PageTitleControl from '../../../components/shared/PageTitleControl.vue'
export default {
    components: { PageTitleControl, DueTable },
    name: 'DueView',
    data() {
        return {
            pageData:
            {
                pageTitle: "All Dues Table",
                hasSearch: true,
                hasImport: true,
                hasExport: true,
                hasDeleteAll: false,
                hasAdd: false,
            }
        }
    }

}

</script>
