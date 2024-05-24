<template>
    <div class="tab-pane fade p-0 border-0" id="posts-tab-pane" role="tabpanel" aria-labelledby="posts-tab"
        tabindex="0">
        <div class="row">
            <div class="col-xl-4 col-md-6 task-card">
                <div class="card custom-card task-pending-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="javascript:void(0);"
                                    class="fs-14 fw-semibold mb-3 d-flex align-items-center">Testing</a>
                                <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                <p class="mb-0">Assigned To :</p>
                                <span class="avatar-list-stacked ms-1">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/2.jpg" alt="">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/8.jpg" alt="">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/2.jpg" alt="">
                                    </span>
                                </span>
                                <span class="me-2">
                                    <button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-secondary-light waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#addpromodal"><i
                                            class="ri-add-fill"></i></button></span>
                                <div class="modal fade" id="addpromodal" tabindex="-1" aria-labelledby="AddModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="AddModalLabel">Edit Assigne</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Assigne
                                                                To:</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="btn-list">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light"><i
                                            class="ri-eye-line"></i></a>
                                    <button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i
                                            class="ri-delete-bin-line"></i></button>
                                </div>
                                <span class="footer-badge badge bg-warning-transparent d-block">Low</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 task-card">
                <div class="card custom-card task-completed-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="javascript:void(0);"
                                    class="fs-14 fw-semibold mb-3 d-flex align-items-center">Creating
                                    Home Page Website </a>
                                <p class="mb-3">Status : <span class="badge bg-success">Completed</span></p>
                                <p class="mb-0">Assigned To :</p>
                                <span class="avatar-list-stacked ms-1">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/2.jpg" alt="">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/8.jpg" alt="">
                                    </span>
                                </span>
                                <span class="me-2"><button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-success-light waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#addpromodal2"><i
                                            class="ri-add-fill"></i></button></span>
                                <div class="modal fade" id="addpromodal2" tabindex="-1" aria-labelledby="AddModalLabel2"
                                    aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="AddModalLabel2">Edit Assigne
                                                </h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Assigne
                                                                To:</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="btn-list">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light"><i
                                            class="ri-eye-line"></i></a>
                                    <button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i
                                            class="ri-delete-bin-line"></i></button>
                                </div>
                                <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 task-card">
                <div class="card custom-card task-pending-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="javascript:void(0);"
                                    class="fs-14 fw-semibold mb-3 d-flex align-items-center">Data
                                    table Design</a>
                                <p class="mb-3">Status : <span class="badge bg-info">Pending</span></p>
                                <p class="mb-0">Assigned To :</p>
                                <span class="avatar-list-stacked ms-1">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/2.jpg" alt="">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/8.jpg" alt="">
                                    </span>
                                </span>
                                <span class="me-2"><button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#addpromodal3"><i
                                            class="ri-add-fill"></i></button></span>
                                <div class="modal fade" id="addpromodal3" tabindex="-1" aria-labelledby="AddModalLabel3"
                                    aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="AddModalLabel3">Edit Assigne
                                                </h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Assigne
                                                                To:</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="btn-list">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light"><i
                                            class="ri-eye-line"></i></a>
                                    <button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i
                                            class="ri-delete-bin-line"></i></button>
                                </div>
                                <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 task-card">
                <div class="card custom-card task-completed-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="javascript:void(0);"
                                    class="fs-14 fw-semibold mb-3 d-flex align-items-center">Design
                                    Horizontal Layout</a>
                                <p class="mb-3">Status : <span class="badge bg-success">completed</span></p>
                                <p class="mb-0">Assigned To :</p>
                                <span class="avatar-list-stacked ms-1">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/2.jpg" alt="">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/8.jpg" alt="">
                                    </span>
                                </span>
                                <span class="me-2"><button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-success-light waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#addpromodal4"><i
                                            class="ri-add-fill"></i></button></span>
                                <div class="modal fade" id="addpromodal4" tabindex="-1" aria-labelledby="AddModalLabel4"
                                    aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="AddModalLabel4">Edit Assigne
                                                </h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Assigne
                                                                To:</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="btn-list">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light"><i
                                            class="ri-eye-line"></i></a>
                                    <button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i
                                            class="ri-delete-bin-line"></i></button>
                                </div>
                                <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 task-card">
                <div class="card custom-card task-inprogress-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="javascript:void(0);"
                                    class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix
                                    Header issue</a>
                                <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                <p class="mb-0">Assigned To :</p>
                                <span class="avatar-list-stacked ms-1">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/2.jpg" alt="">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/8.jpg" alt="">
                                    </span>
                                </span>
                                <span class="me-2">
                                    <button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#addpromodal5"><i
                                            class="ri-add-fill"></i></button></span>
                                <div class="modal fade" id="addpromodal5" tabindex="-1" aria-labelledby="AddModalLabel5"
                                    aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="AddModalLabel5">Edit Assigne
                                                </h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Assigne
                                                                To:</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="btn-list">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light"><i
                                            class="ri-eye-line"></i></a>
                                    <button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i
                                            class="ri-delete-bin-line"></i></button>
                                </div>
                                <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 task-card">
                <div class="card custom-card task-inprogress-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="javascript:void(0);"
                                    class="fs-14 fw-semibold mb-3 d-flex align-items-center">Create
                                    a blog post</a>
                                <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                <p class="mb-0">Assigned To :</p>
                                <span class="avatar-list-stacked ms-1">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/2.jpg" alt="">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/8.jpg" alt="">
                                    </span>
                                </span>
                                <span class="me-2"><button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#addpromodal6"><i
                                            class="ri-add-fill"></i></button></span>
                                <div class="modal fade" id="addpromodal6" tabindex="-1" aria-labelledby="AddModalLabel6"
                                    aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="AddModalLabel6">Edit Assigne
                                                </h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Assigne
                                                                To:</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="btn-list">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light"><i
                                            class="ri-eye-line"></i></a>
                                    <button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i
                                            class="ri-delete-bin-line"></i></button>
                                </div>
                                <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 task-card">
                <div class="card custom-card task-pending-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="javascript:void(0);"
                                    class="fs-14 fw-semibold mb-3 d-flex align-items-center">Testing</a>
                                <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                <p class="mb-0">Assigned To :</p>
                                <span class="avatar-list-stacked ms-1">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/2.jpg" alt="">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/8.jpg" alt="">
                                    </span>
                                </span>
                                <span class="me-2"><button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-secondary-light waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#addpromodal7"><i
                                            class="ri-add-fill"></i></button></span>
                                <div class="modal fade" id="addpromodal7" tabindex="-1" aria-labelledby="AddModalLabel7"
                                    aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="AddModalLabel7">Edit Assigne
                                                </h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Assigne
                                                                To:</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="btn-list">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light"><i
                                            class="ri-eye-line"></i></a>
                                    <button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i
                                            class="ri-delete-bin-line"></i></button>
                                </div>
                                <span class="footer-badge badge bg-warning-transparent d-block">Low</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 task-card">
                <div class="card custom-card task-completed-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="javascript:void(0);"
                                    class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix
                                    the Data Table Issue</a>
                                <p class="mb-3">Status : <span class="badge bg-success">Completed</span></p>
                                <p class="mb-0">Assigned To :</p>
                                <span class="avatar-list-stacked ms-1">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/2.jpg" alt="">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/8.jpg" alt="">
                                    </span>
                                </span>
                                <span class="me-2"><button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#addpromodal8"><i
                                            class="ri-add-fill"></i></button></span>
                                <div class="modal fade" id="addpromodal8" tabindex="-1" aria-labelledby="AddModalLabel8"
                                    aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="AddModalLabel8">Edit Assigne
                                                </h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Assigne
                                                                To:</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="btn-list">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light"><i
                                            class="ri-eye-line"></i></a>
                                    <button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i
                                            class="ri-delete-bin-line"></i></button>
                                </div>
                                <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 task-card">
                <div class="card custom-card task-pending-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="javascript:void(0);"
                                    class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix
                                    the Data Table Issue</a>
                                <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                <p class="mb-0">Assigned To :</p>
                                <span class="avatar-list-stacked ms-1">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/2.jpg" alt="">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/8.jpg" alt="">
                                    </span>
                                </span>
                                <span class="me-2"><button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#addpromodal9"><i
                                            class="ri-add-fill"></i></button></span>
                                <div class="modal fade" id="addpromodal9" tabindex="-1" aria-labelledby="AddModalLabe9"
                                    aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="AddModalLabe9">Edit Assigne</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Assigne
                                                                To:</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="btn-list">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light"><i
                                            class="ri-eye-line"></i></a>
                                    <button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i
                                            class="ri-delete-bin-line"></i></button>
                                </div>
                                <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 task-card">
                <div class="card custom-card task-inprogress-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="javascript:void(0);"
                                    class="fs-14 fw-semibold mb-3 d-flex align-items-center">Data
                                    table Design</a>
                                <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                <p class="mb-0">Assigned To :</p>
                                <span class="avatar-list-stacked ms-1">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/2.jpg" alt="">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/8.jpg" alt="">
                                    </span>
                                </span>
                                <span class="me-2"><button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#addpromodal10"><i
                                            class="ri-add-fill"></i></button></span>
                                <div class="modal fade" id="addpromodal10" tabindex="-1"
                                    aria-labelledby="AddModalLabel10" aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="AddModalLabel10">Edit Assigne
                                                </h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Assigne
                                                                To:</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="btn-list">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light"><i
                                            class="ri-eye-line"></i></a>
                                    <button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i
                                            class="ri-delete-bin-line"></i></button>
                                </div>
                                <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 task-card">
                <div class="card custom-card task-pending-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="javascript:void(0);"
                                    class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix
                                    the Data Table Issue</a>
                                <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                <p class="mb-0">Assigned To :</p>
                                <span class="avatar-list-stacked ms-1">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/2.jpg" alt="">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/8.jpg" alt="">
                                    </span>
                                </span>
                                <span class="me-2"><button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#addpromodal11"><i
                                            class="ri-add-fill"></i></button></span>
                                <div class="modal fade" id="addpromodal11" tabindex="-1"
                                    aria-labelledby="AddModalLabel11" aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="AddModalLabel11">Edit Assigne
                                                </h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Assigne
                                                                To:</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="btn-list">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light"><i
                                            class="ri-eye-line"></i></a>
                                    <button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i
                                            class="ri-delete-bin-line"></i></button>
                                </div>
                                <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 task-card">
                <div class="card custom-card task-inprogress-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="javascript:void(0);"
                                    class="fs-14 fw-semibold mb-3 d-flex align-items-center">Home
                                    page design</a>
                                <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                <p class="mb-0">Assigned To :</p>
                                <span class="avatar-list-stacked ms-1">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/2.jpg" alt="">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../images/faces/8.jpg" alt="">
                                    </span>
                                </span>
                                <span class="me-2"><button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#addpromodal12"><i
                                            class="ri-add-fill"></i></button></span>
                                <div class="modal fade" id="addpromodal12" tabindex="-1"
                                    aria-labelledby="AddModalLabel12" aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="AddModalLabel12">Edit Assigne
                                                </h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Assigne
                                                                To:</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="btn-list">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-sm btn-icon btn-wave btn-primary-light"><i
                                            class="ri-eye-line"></i></a>
                                    <button type="button" aria-label="button"
                                        class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i
                                            class="ri-delete-bin-line"></i></button>
                                </div>
                                <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
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
    name: "DocumentDetail"
}
</script>
