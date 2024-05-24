<template>
    <div class="tab-pane show active fade p-0 border-0 bg-white p-4 rounded-3" id="activity-tab-pane" role="tabpanel"
        aria-labelledby="activity-tab" tabindex="0">
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="row row-cols-12">
                    <div class="col-xxl-3 col-xl-4 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex-between mb-3">
                                    <span class="text-muted">Balance</span>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div class="flex-1">
                                        <h3 class="mb-2">{{ balance }}£</h3>
                                        <span class="badge bg-success-transparent rounded-1">+1.26%</span>
                                    </div>
                                    <span class="ms-2 avatar bg-success-transparent">
                                        <i class="bx bx-money fs-22"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex-between mb-3">
                                    <span class="text-muted">Pending Balance</span>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div class="flex-1">
                                        <h3 class="mb-2">{{ countAble.sumPending }}£</h3>
                                        <span class="badge bg-warning-transparent rounded-1">+1.26%</span>
                                    </div>
                                    <span class="ms-2 avatar bg-warning-transparent">
                                        <i class="bx bx-money fs-22"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex-between mb-3">
                                    <span class="text-muted"> Widthraws</span>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div class="flex-1">
                                        <h3 class="mb-2">{{ countAble.sumWidthraw }}£</h3>
                                        <span class="badge bg-primary-transparent rounded-1">+1.26%</span>
                                    </div>
                                    <span class="ms-2 avatar bg-primary-transparent">
                                        <i class="bx bx-user-circle fs-22"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex-between mb-3">
                                    <span class="text-muted">Transactions </span>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div class="flex-1">
                                        <h3 class="mb-2">{{ countAble.countTransaction }}</h3>
                                        <span class="badge bg-secondary-transparent rounded-1">{{ countAble.countPending
                                            }} - Pending</span>
                                    </div>
                                    <span class="ms-2 avatar bg-secondary-transparent">
                                        <i class="bx bx-user-circle fs-22"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Recent Pending Requests
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#No</th>
                                        <th scope="col">Wallet</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Request Date</th>
                                        <th scope="clo">Request Type</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="req in countAble.widthraws" :key="req.id">
                                        <td scope="row">
                                            <div class="d-flex align-items-center">
                                                <strong>1</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <strong> {{ wallet }}</strong>
                                        </td>
                                        <td>
                                            <strong> {{ req.amount }}£</strong>
                                        </td>
                                        <td><span class="badge bg-warning-transparent">
                                                {{ req.status }}
                                            </span>
                                        </td>
                                        <td>
                                            <span v-if="!req.requestDate" class="text-danger">
                                                NaN
                                            </span>
                                            <span v-else>
                                                {{ req.created_at }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-primary">Widthraw</span>
                                        </td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-info-light rounded-pill"><i
                                                        class="ri--line"></i> Accept</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-light rounded-pill"><i
                                                        class="ri-delete-bin-line"></i> Reject</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    props: {
        countAble: {

        },
        wallet: {

        },
        balance: {

        }
    }
}

</script>
