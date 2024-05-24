<template>
    <div class="tab-pane show active fade p-0 border-0 bg-white p-4 rounded-3" id="activity-tab-pane" role="tabpanel"
        aria-labelledby="activity-tab" tabindex="0">
        <div class="row">
            <div class="col-md-12 col-xl-12s">
                <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-2">
                    <div class="col card-background flex-fill">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <p class="fw-medium mb-1 text-muted">Balance</p>
                                        <h3 class="mb-0">£{{ balance }}</h3>
                                    </div>
                                    <div class="avatar avatar-md br-4 bg-primary-transparent ms-auto">
                                        <i class="bi bi-currency-pound fs-20"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col card-background flex-fill">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <p class="fw-medium mb-1 text-muted">Total Deposits</p>
                                        <h3 class="mb-0">£{{ countAbles.totalDeposit }}</h3>
                                    </div>
                                    <div class="avatar avatar-md br-4 bg-secondary-transparent ms-auto">
                                        <i class="bi bi-archive fs-20"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col card-background flex-fill">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <p class="fw-medium text-muted mb-1">Total Widthraws</p>
                                        <h3 class="mb-0">£{{ countAbles.totalWidthraw }}</h3>
                                    </div>
                                    <div class="avatar avatar-md br-4 bg-info-transparent ms-auto">
                                        <i class="bi bi-handbag fs-20"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col card-background flex-fill">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <p class="fw-medium mb-1 text-muted">Total Transaction</p>
                                        <h3 class="mb-0">{{ countAbles.countTransaction }}</h3>
                                    </div>
                                    <div class="avatar avatar-md br-4 bg-warning-transparent ms-auto">
                                        <i class="bi bi-currency-dollar fs-20"></i>
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
                                            <th scope="col">Wallet Name</th>
                                            <th scope="col">Requet Type</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="req in countAbles.requests" :key="req.id">
                                            <td scope="row">
                                                <div class="d-flex align-items-center">
                                                    <strong>1</strong>
                                                </div>
                                            </td>
                                            <td>
                                                {{ wallet }}
                                            </td>
                                            <td>
                                                {{ req.request_type }}
                                            </td>
                                            <td>
                                                {{ req.amount }}£
                                            </td>
                                            <td><span class="badge bg-success-transparent">
                                                    {{ req.status }}
                                                </span>
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
    </div>
</template>
<script>
export default {
    props: {
        countAbles: {

        },
        balance: {

        },
        wallet: {

        }
    }
}

</script>
