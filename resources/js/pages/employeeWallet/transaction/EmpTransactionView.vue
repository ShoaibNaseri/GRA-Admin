<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">
            <page-title-control :page-data="pageData"></page-title-control>

            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body p-3">
                        <emp-transaction-table :transactions="transactions"></emp-transaction-table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-11 -->
    </div>
</template>

<script>
import axios from 'axios'
import EmpTransactionTable from '../../../components/admin/employeeWallet/transaction/EmpTransactionTable.vue'

import PageTitleControl from '../../../components/shared/PageTitleControl.vue'
export default {
    components: { PageTitleControl, EmpTransactionTable, },
    name: "TransactionView",
    data() {
        return {
            pageData:
            {
                pageTitle: "All Employee Wallet Transactions",
                hasSearch: true,
                hasImport: true,
                hasExport: true,
                hasDeleteAll: false,
                hasAdd: false,
            },
            transactions: [],
        }
    },
    mounted() {

        axios.get("/api/admin/employee/getAllTransaciton")
            .then(response => {
                this.transactions = response.data;
                console.log(this.transactions);
            })
            .catch(error => {
                console.error('Failed to fetch data:', error);
                // Handle the error here, such as displaying an error message to the user
            });
    }
}

</script>
