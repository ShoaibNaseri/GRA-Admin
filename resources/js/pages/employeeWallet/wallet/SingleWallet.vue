<template>
    <div class="container-fluid">

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xxl-12 col-xl-12">
                <employee-wallet-header :employee="employee" :walletDetail="walletDetail"></employee-wallet-header>
            </div>
            <div class="col-xxl-12 col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class=" custom-card">
                            <div class="card-body p-0">
                                <div class="border-block-end-dashed  bg-white rounded-2 p-2">
                                    <div>
                                        <ul class="nav nav-pills nav-justified gx-3 tab-style-6 d-sm-flex d-block "
                                            id="myTab" role="tablist">
                                            <li class="nav-item rounded" role="presentation">
                                                <button class="nav-link active" id="activity-tab" data-bs-toggle="tab"
                                                    data-bs-target="#activity-tab-pane" type="button" role="tab"
                                                    aria-controls="activity-tab-pane" aria-selected="true"><i
                                                        class="ri-gift-line me-1 align-middle d-inline-block fs-16"></i>Wallet
                                                    OverView</button>
                                            </li>
                                            <li class="nav-item rounded" role="presentation">
                                                <button class="nav-link" id="gallery-tab" data-bs-toggle="tab"
                                                    data-bs-target="#gallery-tab-pane" type="button" role="tab"
                                                    aria-controls="gallery-tab-pane" aria-selected="false"><i
                                                        class="ri-exchange-box-line me-1 align-middle d-inline-block fs-16"></i>Transactions</button>
                                            </li>
                                            <li class="nav-item rounded" role="presentation">
                                                <button class="nav-link" id="posts-tab" data-bs-toggle="tab"
                                                    data-bs-target="#posts-tab-pane" type="button" role="tab"
                                                    aria-controls="posts-tab-pane" aria-selected="false"><i
                                                        class="ri-bill-line me-1 align-middle d-inline-block fs-16"></i>Deposit
                                                    & Widthraw</button>
                                            </li>
                                            <li class="nav-item rounded" role="presentation">
                                                <button class="nav-link" id="followers-tab" data-bs-toggle="tab"
                                                    data-bs-target="#followers-tab-pane" type="button" role="tab"
                                                    aria-controls="followers-tab-pane" aria-selected="false"><i
                                                        class="ri-money-dollar-box-line me-1 align-middle d-inline-block fs-16"></i>GRA
                                                    Cridet Card</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="py-4">
                                    <div class="tab-content" id="myTabContent">
                                        <employee-wallet-over-view :countAble="countAble"
                                            :wallet="walletDetail.walletName"
                                            :balance="walletDetail.walletBalance"></employee-wallet-over-view>
                                        <div class="tab-pane fade p-0 border-0" id="gallery-tab-pane" role="tabpanel"
                                            aria-labelledby="gallery-tab" tabindex="0">
                                            <page-title-control :page-data="pageData"></page-title-control>
                                            <emp-transaction-table :transactions="transactions"></emp-transaction-table>
                                        </div>
                                        <!-- <wallet-deposit-widthraw></wallet-deposit-widthraw>
                                        <wallet-credit-card></wallet-credit-card> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->

    </div>
</template>

<script>
import axios from 'axios'
import EmployeeWalletHeader from '../../../components/admin/employeeWallet/wallet/single/EmployeeWalletHeader.vue'
import EmployeeWalletOverView from '../../../components/admin/employeeWallet/wallet/single/EmployeeWalletOverView.vue'
import PageTitleControl from '../../../components/shared/PageTitleControl.vue'
import EmpTransactionTable from '../../../components/admin/employeeWallet/transaction/EmpTransactionTable.vue'


export default {
    components: { EmployeeWalletHeader, EmployeeWalletOverView, PageTitleControl, EmpTransactionTable },
    name: '',
    data() {
        return {
            pageData:
            {
                pageTitle: "Employee Transactions",
                hasSearch: true,
                hasImport: false,
                hasExport: true,
                hasDeleteAll: false,
                hasAdd: false,
            },
            id: this.$route.params.id,
            employee: '',
            wallet: '',
            walletDetail: {
                walletName: '',
                walletBalance: '',
                status: '',
            },
            countAble: {
                widthraws: [],
                sumPending: '',
                sumWidthraw: '',
                countTransaction: '',
                countPending: '',
            },
            transactions: [],

        }
    },
    mounted() {
        axios.get(`/api/admin/getSingelEmployeeWallet/${this.id}`)
            .then(response => {
                this.wallet = response.data;
                this.employee = this.wallet.wallet.employee;
                this.walletDetail.walletName = this.wallet.wallet.walletNumber;
                this.walletDetail.walletBalance = this.wallet.wallet.balance;
                this.walletDetail.status = this.wallet.wallet.status;
                this.countAble.widthraws = this.wallet.getWidthraws;
                this.countAble.sumPending = this.wallet.sumPendings;
                this.countAble.sumWidthraw = this.wallet.totalWithdraw;
                this.countAble.countTransaction = this.wallet.countTransaction;
                this.countAble.countPending = this.wallet.countPendings;
                this.transactions = this.wallet.transactions;
                console.log(this.wallet);
            })
    }
}
</script>
