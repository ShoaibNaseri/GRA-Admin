<template>
    <div>
        <div class="table-responsive">
            <table class="table text-wrap">
                <thead>
                    <tr>
                        <th scope="col">#No</th>
                        <th scope="col">Employee's Name</th>
                        <th scope="col">Wallet</th>
                        <th scope="col">Balance</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(wallet, index) in    displayWallets   " :key="index" :wallet="wallet">
                        <th scope="row"> {{ index + 1 }} </th>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-xs me-2 online avatar-rounded">
                                    <img src="../../../../public/asset/imges/1.jpg" alt="img">
                                </span>{{ wallet.employee.name }}
                            </div>

                        </td>
                        <td>
                            <router-link :to="{ name: 'employeeWallet.single', params: { id: wallet.id } }">
                                <strong>
                                    {{ wallet.walletNumber }}
                                </strong>
                            </router-link>
                            <!-- <router-link :to=" { name: 'employeeWallet.single' , params: { id: wallet.id } }">
                                <strong>

                                </strong>
                            </router-link> -->
                        </td>
                        <td>{{ wallet.balance }}</td>

                        <td><span class="badge bg-primary-transparent">{{ wallet.status }}</span></td>
                        <td>
                            <div class="hstack gap-2 fs-15">
                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"><i
                                        class="ri-add-line"></i></a>
                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"><i
                                        class="ri-eye-line"></i></a>
                            </div>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
        <div class="p-4 float-end">
            <nav aria-label="Page navigation" class="pagination-style-3">
                <ul class="pagination mb-0 flex-wrap">
                    <li class="page-item" @click="goToPreviousPage">
                        <a class="page-link">
                            Prev
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">
                            <i class="bi bi-three-dots"></i>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">16</a></li>
                    <li class="page-item" @click="goToNextPage">
                        <a class="page-link text-primary">
                            next
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: "WalletTable",
    data() {
        return {
            wallets: '',
            hasPagination: false
        }
    },
    computed: {
        currentPage() {
            const pageNumber = this.$route.query.page || "1";
            return Number.parseInt(pageNumber);
        },
        displayWallets() {
            const pageNumber = this.currentPage;
            const firstProgIndex = (pageNumber - 1) * 8;
            const lastProgIndex = (pageNumber * 8);
            return this.wallets.slice(firstProgIndex, lastProgIndex);
        }
    },
    methods: {
        getImageUrl(imagePath) {
            return `${window.location.origin}/storage/${imagePath}`;
        },
        goToPerviousPage() {
            if (this.currentPage > 1) {
                this.$router.push({
                    query: { page: this.currentPage - 1 }
                });
            }
        },
        goToNextPage() {
            if (this.displayWallets.length === 4) {
                this.$router.push({ query: { page: this.currentPage + 1 } })
            }
        },
        // deleteGallery(toBeDeletedId) {
        //     axios.delete(`/api/gallery/${toBeDeletedId}`)
        //         .then(response => {
        //             const index = this.galleries.findIndex(
        //                 (gall) => gall.id == toBeDeletedId
        //             );

        //             this.galleries.splice(index, 1);

        //         })
        //         .catch(error => {
        //             console.error('error', +error)
        //         })
        // }
    },
    mounted() {
        axios.get("/api/admin/getAllEmpWallets")
            .then(response => {
                this.wallets = response.data;
                console.log(response.data);
            })
            .catch(error => {
                console.error('Failed to fetch data:', error);
                // Handle the error here, such as displaying an error message to the user
            });
    }

}

</script>
