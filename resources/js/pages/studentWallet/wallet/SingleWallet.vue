<template>
    <div class="container-fluid">

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xxl-12 col-xl-12">
                <wallet-header :student="student" :walletDetail="walletDetail"></wallet-header>
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
                                        <wallet-overview :countAbles="countAbles" :balance="walletDetail.walletBalance"
                                            :wallet="walletDetail.walletName"></wallet-overview>
                                        <div class="tab-pane fade p-0 border-0" id="gallery-tab-pane" role="tabpanel"
                                            aria-labelledby="gallery-tab" tabindex="0">
                                            <page-title-control :page-data="pageData"></page-title-control>
                                            <transaction-table :transactions="transactions"></transaction-table>
                                        </div>
                                        <wallet-deposit-widthraw></wallet-deposit-widthraw>
                                        <wallet-credit-card></wallet-credit-card>
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
import WalletCreditCard from '../../../components/admin/studentWallet/wallet/singleWallet/WalletCreditCard.vue'
import WalletDepositWidthraw from '../../../components/admin/studentWallet/wallet/singleWallet/WalletDepositWidthraw.vue'
import WalletHeader from '../../../components/admin/studentWallet/wallet/singleWallet/WalletHeader.vue'
import WalletOverview from '../../../components/admin/studentWallet/wallet/singleWallet/WalletOverview.vue'
import WalletTransaction from '../../../components/admin/studentWallet/wallet/singleWallet/WalletTransaction.vue'
import TransactionTable from '../../../components/admin/studentWallet/transaction/TransactionTable.vue'
import PageTitleControl from '../../../components/shared/PageTitleControl.vue'
export default {
    components: { WalletHeader, WalletOverview, WalletTransaction, WalletDepositWidthraw, WalletCreditCard, TransactionTable, PageTitleControl },

    data() {
        return {
            pageData:
            {
                pageTitle: "All Transactions",
                hasSearch: true,
                hasImport: false,
                hasExport: true,
                hasDeleteAll: false,
                hasAdd: false,
            },
            wallet: [],
            student: '',
            walletDetail: {
                walletName: '',
                walletBalance: '',
                status: '',
            },
            countAbles: {
                countTransaction: '',
                totalDeposit: '',
                totalWidthraw: '',
                requests: [],
            },

            transactions: [],
            id: this.$route.params.id
        }
    },
    mounted() {
        axios.get(`/api/admin/getStudentSingleWallet/${this.id}`)
            .then(response => {
                this.wallet = response.data;
                this.student = this.wallet.wallet.student;
                this.walletDetail.walletName = this.wallet.wallet.name;
                this.walletDetail.walletBalance = this.wallet.wallet.amount;
                this.walletTransaction = this.wallet.transactions;
                this.walletDetail.status = this.wallet.wallet.status;
                this.countAbles.countTransaction = this.wallet.countTransaction;
                this.countAbles.totalDeposit = this.wallet.totalDeposit;
                this.countAbles.totalWidthraw = this.wallet.totalWithdraw;
                this.countAbles.requests = this.wallet.requests;
                this.transactions = this.wallet.transactions;

                console.log(this.wallet);
            })
            .catch(error => {
                console.error('Faild TO Fetch Data', +error)
            })
    }

}
</script>
