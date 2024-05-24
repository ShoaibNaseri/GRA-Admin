<template>
    <div class="table-responsive">
        <table class="table text-wrap">
            <thead>
                <tr>
                    <th scope="col">#No</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Wallet</th>
                    <th scope="col">TopUp Amount</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Payment Link || Doc</th>
                    <th scope="col">Paid Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(tran, index) in displayWises" :key="index" :tran="tran">
                    <th scope="row"> {{ index + 1 }} </th>
                    <td>
                        <div class="d-flex align-items-center">
                            <span class="avatar avatar-xs me-2 online avatar-rounded">
                                <img src="../../../../public/asset/imges/1.jpg" alt="img">
                            </span>{{ tran.student.name }}
                        </div>

                    </td>
                    <td>{{ tran.wallet.name }}</td>
                    <td>{{ tran.amount }}£</td>
                    <td>{{ tran.created_at }}</td>
                    <td><span class="badge bg-primary-transparent">{{ tran.status }}</span></td>
                    <td>
                        <a href="http://">Visit Link</a> || <a href="http://">Visit Doc</a>
                    </td>
                    <td>
                        {{ tran.payment_status }}
                    </td>
                    <td>
                        <div class="hstack gap-2 fs-15">
                            <a href="javascript:void(0);" class="btn btn-sm btn-success-transparent">
                                Accept
                            </a>
                            <a href="javascript:void(0);" class="btn btn-sm btn-primary-transparent">
                                Add Payment Link
                            </a>
                            <a href="javascript:void(0);" class="btn  btn-sm btn-danger-transparent">Delete</a>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="p-4 float-end">
        <nav aria-label="Page navigation" class="pagination-style-3">
            <ul class="pagination mb-0 flex-wrap">
                <li class="page-item" @click="goToPerviousPage">
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
</template>

<script>
import axios from 'axios';
export default {
    name: "WiseTopUpTable",
    data() {
        return {
            transactions: '',
            hasPagination: false
        }
    },
    computed: {
        currentPage() {
            const pageNumber = this.$route.query.page || "1";
            return Number.parseInt(pageNumber);
        },
        displayWises() {
            const pageNumber = this.currentPage;
            const firstProgIndex = (pageNumber - 1) * 8;
            const lastProgIndex = (pageNumber * 8);
            return this.transactions.slice(firstProgIndex, lastProgIndex);
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
            if (this.displayWises.length === 4) {
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
        axios.get("/api/admin/getStudentWiseTopUps")
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
