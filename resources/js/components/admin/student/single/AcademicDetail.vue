<template>
    <div class="tab-pane fade p-0 border-0" id="gallery-tab-pane" role="tabpanel" aria-labelledby="gallery-tab"
        tabindex="0">
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Applications
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Application Number</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Last Action Taken By Co-Ordinator at</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="applic in applications" :key="applic.id">
                                        <th scope="row">
                                            <div class="d-flex align-items-center">
                                                <strong>{{ applic.applicationNumber }}</strong>
                                            </div>
                                        </th>
                                        <td><span class="badge bg-success-transparent">{{ applic.status }}</span></td>
                                        <td>{{ applic.updated_at }}</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-info-light rounded-pill"><i
                                                        class="ri-eye-line"></i></a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-light rounded-pill"><i
                                                        class="ri-delete-bin-line"></i></a>
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
    name: "AcademicDetail",
    props: {
        applications: {
            type: Array
        }
    }
}

</script>
