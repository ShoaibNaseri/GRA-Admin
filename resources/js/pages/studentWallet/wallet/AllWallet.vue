<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">
            <page-title-control :page-data="pageData"></page-title-control>
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body p-3">
                        <wallet-table></wallet-table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-11 -->
    </div>
</template>

<script>
import { computed, ref } from 'vue'

import WalletTable from '../../../components/admin/studentWallet/wallet/WalletTable.vue'
import PageTitleControl from '../../../components/shared/PageTitleControl.vue'
const isError = ref(true)
const clsD = ref(null)

const classObej = computed(() => ({

}))
export default {
    components: { PageTitleControl, WalletTable },
    name: "AllWallet",
    data() {
        return {
            pageData:
            {
                pageTitle: "Student's Wallet Table",
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
