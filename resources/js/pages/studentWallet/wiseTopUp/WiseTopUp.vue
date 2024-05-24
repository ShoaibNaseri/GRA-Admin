<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">
            <page-title-control :page-data="pageData"></page-title-control>


            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body p-3">
                        <wise-to-up-table></wise-to-up-table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-11 -->
    </div>
</template>
<script>
import WiseToUpTable from '../../../components/admin/studentWallet/wiseTopUp/WiseToUpTable.vue'
import PageTitleControl from '../../../components/shared/PageTitleControl.vue'
export default {
    components: { PageTitleControl, WiseToUpTable },
    name: "WiseTopUp",
    data() {
        return {
            pageData:
            {
                pageTitle: "Student's Wallet WiseTopUp Transactions and Requests",
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
