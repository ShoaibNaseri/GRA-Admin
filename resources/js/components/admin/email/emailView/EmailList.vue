<template>
    <div>
        <div class="mail-messages" id="mail-messages">
            <ul class="list-unstyled mb-0">
                <li class="active">
                    <div class="d-flex align-items-top">
                        <div class="me-3 mt-1">
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </div>
                        <div class="me-2 lh-1">
                            <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                <i class="bx bx-star"></i>
                            </a>
                        </div>
                        <div class="me-1 lh-1">
                            <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                <i class="bx bx-label"></i>
                            </a>
                        </div>
                        <div class="flex-fill ms-2 subject-container">
                            <router-link :to="{ name: 'email.single' }" href="" class="stretched-link"></router-link>
                            <p class="mb-0  main-mail-subject">
                                <span class="d-block mb-0 fw-semibold fs-14">New Project details</span>
                                <span class="fs-12 text-muted text-truncate">
                                    <span class="badge bg-danger rounded-1">mail</span>
                                    &#128525;Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus
                                    elemen tum semper nisi enean vulputat enean commodo li gula eget
                                    dolor&#128077; cum socia eget dolor gula eget dolor
                                </span>
                            </p>
                        </div>
                        <div class="icons-mail">
                            <div class=" mail-date float-end text-muted fw-normal fs-11"><span
                                    class="me-1 d-inline-block"><i
                                        class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                            <div class="mail-hover-icons d-xl-block d-none">
                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="mark as read">
                                        <i class="fe fe-mail"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="delete">
                                        <i class="fe fe-trash"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Snooze">
                                        <i class="fe fe-clock"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="archive">
                                        <i class="fe fe-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex align-items-top">
                        <div class="me-3 mt-1">
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </div>
                        <div class="me-2 lh-1">
                            <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                <i class="bx bx-star"></i>
                            </a>
                        </div>
                        <div class="me-1 lh-1">
                            <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                <i class="bx bx-label"></i>
                            </a>
                        </div>
                        <div class="flex-fill ms-2 subject-container">
                            <a href="mail-chat.html" class="stretched-link"></a>
                            <p class="mb-0  main-mail-subject">
                                <span class="d-block mb-0 fw-semibold fs-14">Most Probable date of project
                                    completion</span>
                                <span class="fs-12 text-muted text-truncate">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum
                                    semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget
                                    dolor gula eget dolor
                                </span>
                            </p>
                        </div>
                        <div class="icons-mail">
                            <div class=" mail-date float-end text-muted fw-normal fs-11"><span
                                    class="me-1 d-inline-block"><i
                                        class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                            <div class="mail-hover-icons d-xl-block d-none">
                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="mark as read">
                                        <i class="fe fe-mail"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="delete">
                                        <i class="fe fe-trash"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Snooze">
                                        <i class="fe fe-clock"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="archive">
                                        <i class="fe fe-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="active">
                    <div class="d-flex align-items-top">
                        <div class="me-3 mt-1">
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </div>
                        <div class="me-2 lh-1">
                            <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                <i class="bx bx-star"></i>
                            </a>
                        </div>
                        <div class="me-1 lh-1">
                            <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                <i class="bx bx-label"></i>
                            </a>
                        </div>
                        <div class="flex-fill ms-2 subject-container">
                            <a href="mail-chat.html" class="stretched-link"></a>
                            <p class="mb-0  main-mail-subject">
                                <span class="d-block mb-0 fw-semibold fs-14">Personal Mail</span>
                                <span class="fs-12 text-muted text-truncate">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum
                                    semper nisi enean vulputat enean commodo &#128522;&#128525;li gula eget
                                    dolor cum socia eget dolor gula eget dolor
                                </span>
                            </p>
                        </div>
                        <div class="icons-mail">
                            <div class=" mail-date float-end text-muted fw-normal fs-11"><span
                                    class="me-1 d-inline-block"><i
                                        class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                            <div class="mail-hover-icons d-xl-block d-none">
                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="mark as read">
                                        <i class="fe fe-mail"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="delete">
                                        <i class="fe fe-trash"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Snooze">
                                        <i class="fe fe-clock"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="archive">
                                        <i class="fe fe-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="active">
                    <div class="d-flex align-items-top">
                        <div class="me-3 mt-1">
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </div>
                        <div class="me-2 lh-1">
                            <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                <i class="bx bx-star"></i>
                            </a>
                        </div>
                        <div class="me-1 lh-1">
                            <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                <i class="bx bx-label"></i>
                            </a>
                        </div>
                        <div class="flex-fill ms-2 subject-container">
                            <a href="mail-chat.html" class="stretched-link"></a>
                            <p class="mb-0  main-mail-subject">
                                <span class="d-block mb-0 fw-semibold fs-14">Applying for bank loan?</span>
                                <span class="fs-12 text-muted text-truncate">
                                    <span class="badge bg-success rounded-1">Friends</span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum
                                    semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget
                                    dolor gula eget dolor
                                </span>
                            </p>
                        </div>
                        <div class="icons-mail">
                            <div class=" mail-date float-end text-muted fw-normal fs-11"><span
                                    class="me-1 d-inline-block"><i
                                        class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                            <div class="mail-hover-icons d-xl-block d-none">
                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="mark as read">
                                        <i class="fe fe-mail"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="delete">
                                        <i class="fe fe-trash"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Snooze">
                                        <i class="fe fe-clock"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="archive">
                                        <i class="fe fe-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex align-items-top">
                        <div class="me-3 mt-1">
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </div>
                        <div class="me-2 lh-1">
                            <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                <i class="bx bx-star"></i>
                            </a>
                        </div>
                        <div class="me-1 lh-1">
                            <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                <i class="bx bx-label"></i>
                            </a>
                        </div>
                        <div class="flex-fill ms-2 subject-container">
                            <a href="mail-chat.html" class="stretched-link"></a>
                            <p class="mb-0  main-mail-subject">
                                <span class="d-block mb-0 fw-semibold fs-14">
                                    Life Insurance Corporation</span>
                                <span class="fs-12 text-muted text-truncate">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum
                                    &#129306;semper nisi enean vulputat enean commodo li gula eget dolor cum
                                    socia eget dolor gula eget dolor
                                </span>
                            </p>
                        </div>
                        <div class="icons-mail">
                            <div class=" mail-date float-end text-muted fw-normal fs-11"><span
                                    class="me-1 d-inline-block"><i
                                        class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                            <div class="mail-hover-icons d-xl-block d-none">
                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="mark as read">
                                        <i class="fe fe-mail"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="delete">
                                        <i class="fe fe-trash"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Snooze">
                                        <i class="fe fe-clock"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="archive">
                                        <i class="fe fe-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex align-items-top">
                        <div class="me-3 mt-1">
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </div>
                        <div class="me-2 lh-1">
                            <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                <i class="bx bx-star"></i>
                            </a>
                        </div>
                        <div class="me-1 lh-1">
                            <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                <i class="bx bx-label"></i>
                            </a>
                        </div>
                        <div class="flex-fill ms-2 subject-container">
                            <a href="mail-chat.html" class="stretched-link"></a>
                            <p class="mb-0  main-mail-subject">
                                <span class="d-block mb-0 fw-semibold fs-14">
                                    Life Insurance Corporation</span>
                                <span class="fs-12 text-muted text-truncate">
                                    <span class="badge bg-danger rounded-1">mail</span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum
                                    semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget
                                    dolor gula eget dolor
                                </span>
                            </p>
                        </div>
                        <div class="icons-mail">
                            <div class=" mail-date float-end text-muted fw-normal fs-11"><span
                                    class="me-1 d-inline-block"><i
                                        class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                            <div class="mail-hover-icons d-xl-block d-none">
                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="mark as read">
                                        <i class="fe fe-mail"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="delete">
                                        <i class="fe fe-trash"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Snooze">
                                        <i class="fe fe-clock"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="archive">
                                        <i class="fe fe-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="active">
                    <div class="d-flex align-items-top">
                        <div class="me-3 mt-1">
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </div>
                        <div class="me-2 lh-1">
                            <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                <i class="bx bx-star"></i>
                            </a>
                        </div>
                        <div class="me-1 lh-1">
                            <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                <i class="bx bx-label"></i>
                            </a>
                        </div>
                        <div class="flex-fill ms-2 subject-container">
                            <a href="mail-chat.html" class="stretched-link"></a>
                            <p class="mb-0  main-mail-subject">
                                <span class="d-block mb-0 fw-semibold fs-14">
                                    &#128522;History of planets are discovered yesterday.....</span>
                                <span class="fs-12 text-muted text-truncate">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum
                                    semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget
                                    dolor gula eget dolor
                                </span>
                            </p>
                        </div>
                        <div class="icons-mail">
                            <div class=" mail-date float-end text-muted fw-normal fs-11"><span
                                    class="me-1 d-inline-block"><i
                                        class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                            <div class="mail-hover-icons d-xl-block d-none">
                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="mark as read">
                                        <i class="fe fe-mail"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="delete">
                                        <i class="fe fe-trash"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Snooze">
                                        <i class="fe fe-clock"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="archive">
                                        <i class="fe fe-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex align-items-top">
                        <div class="me-3 mt-1">
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </div>
                        <div class="me-2 lh-1">
                            <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                <i class="bx bx-star"></i>
                            </a>
                        </div>
                        <div class="me-1 lh-1">
                            <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                <i class="bx bx-label"></i>
                            </a>
                        </div>
                        <div class="flex-fill ms-2 subject-container">
                            <a href="mail-chat.html" class="stretched-link"></a>
                            <p class="mb-0  main-mail-subject">
                                <span class="d-block mb-0 fw-semibold fs-14">
                                    New Project details</span>
                                <span class="fs-12 text-muted text-truncate">
                                    <span class="badge bg-info rounded-1">Home</span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum
                                    semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget
                                    dolor gula eget dolor
                                </span>
                            </p>
                        </div>
                        <div class="icons-mail">
                            <div class=" mail-date float-end text-muted fw-normal fs-11"><span
                                    class="me-1 d-inline-block"><i
                                        class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                            <div class="mail-hover-icons d-xl-block d-none">
                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="mark as read">
                                        <i class="fe fe-mail"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="delete">
                                        <i class="fe fe-trash"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Snooze">
                                        <i class="fe fe-clock"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="archive">
                                        <i class="fe fe-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="active">
                    <div class="d-flex align-items-top">
                        <div class="me-3 mt-1">
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </div>
                        <div class="me-2 lh-1">
                            <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                <i class="bx bx-star"></i>
                            </a>
                        </div>
                        <div class="me-1 lh-1">
                            <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                <i class="bx bx-label"></i>
                            </a>
                        </div>
                        <div class="flex-fill ms-2 subject-container">
                            <a href="mail-chat.html" class="stretched-link"></a>
                            <p class="mb-0  main-mail-subject">
                                <span class="d-block mb-0 fw-semibold fs-14">
                                    Life Insurance Corporation</span>
                                <span class="fs-12 text-muted text-truncate">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum
                                    semper nisi enean vulputat enean commodo &#128525;li gula eget dolor cum
                                    socia eget dolor gula eget dolor
                                </span>
                            </p>
                        </div>
                        <div class="icons-mail">
                            <div class=" mail-date float-end text-muted fw-normal fs-11"><span
                                    class="me-1 d-inline-block"><i
                                        class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                            <div class="mail-hover-icons d-xl-block d-none">
                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="mark as read">
                                        <i class="fe fe-mail"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="delete">
                                        <i class="fe fe-trash"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Snooze">
                                        <i class="fe fe-clock"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="archive">
                                        <i class="fe fe-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex align-items-top">
                        <div class="me-3 mt-1">
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </div>
                        <div class="me-2 lh-1">
                            <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                <i class="bx bx-star"></i>
                            </a>
                        </div>
                        <div class="me-1 lh-1">
                            <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                <i class="bx bx-label"></i>
                            </a>
                        </div>
                        <div class="flex-fill ms-2 subject-container">
                            <a href="mail-chat.html" class="stretched-link"></a>
                            <p class="mb-0  main-mail-subject">
                                <span class="d-block mb-0 fw-semibold fs-14">
                                    Life Insurance Corporation</span>
                                <span class="fs-12 text-muted text-truncate">
                                    <span class="badge bg-danger rounded-1">mail</span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit-&#127881;&#127874;
                                    viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget
                                    dolor cum socia eget dolor gula eget dolor
                                </span>
                            </p>
                        </div>
                        <div class="icons-mail">
                            <div class=" mail-date float-end text-muted fw-normal fs-11"><span
                                    class="me-1 d-inline-block"><i
                                        class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                            <div class="mail-hover-icons d-xl-block d-none">
                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="mark as read">
                                        <i class="fe fe-mail"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="delete">
                                        <i class="fe fe-trash"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Snooze">
                                        <i class="fe fe-clock"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="archive">
                                        <i class="fe fe-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="border-bottom">
                    <div class="d-flex align-items-top">
                        <div class="me-3 mt-1">
                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                        </div>
                        <div class="me-2 lh-1">
                            <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                <i class="bx bx-star"></i>
                            </a>
                        </div>
                        <div class="me-1 lh-1">
                            <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                <i class="bx bx-label"></i>
                            </a>
                        </div>
                        <div class="flex-fill ms-2 subject-container">
                            <a href="mail-chat.html" class="stretched-link"></a>
                            <p class="mb-0  main-mail-subject">
                                <span class="d-block mb-0 fw-semibold fs-14">
                                    New Project details</span>
                                <span class="fs-12 text-muted text-truncate">
                                    <span class="badge bg-info rounded-1">Home</span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum
                                    semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget
                                    dolor gula eget dolor
                                </span>
                            </p>
                        </div>
                        <div class="icons-mail">
                            <div class=" mail-date float-end text-muted fw-normal fs-11"><span
                                    class="me-1 d-inline-block"><i
                                        class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                            <div class="mail-hover-icons d-xl-block d-none">
                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="mark as read">
                                        <i class="fe fe-mail"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="delete">
                                        <i class="fe fe-trash"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Snooze">
                                        <i class="fe fe-clock"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="archive">
                                        <i class="fe fe-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="float-end mt-2 p-2">
            <nav aria-label="Page navigation" class="pagination-style-4 float-end">
                <ul class="pagination mb-0 gap-2">
                    <li class="page-item  bg-light rounded-5">
                        <a class="page-link  bg-light rounded-5" href="javascript:void(0);">
                            Prev
                        </a>
                    </li>
                    <li class="page-item active rounded-5"><a class="page-link rounded-5 "
                            href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item bg-light rounded-5 d-none d-sm-block"><a class="page-link  bg-light rounded-5"
                            href="javascript:void(0);">2</a></li>
                    <li class="page-item  bg-light rounded-5">
                        <a class="page-link  bg-light rounded-5" href="javascript:void(0);">
                            <i class="bi bi-three-dots"></i>
                        </a>
                    </li>
                    <li class="page-item   bg-light rounded-5 d-none d-sm-block"><a
                            class="page-link  bg-light rounded-5" href="javascript:void(0);">16</a></li>
                    <li class="page-item   bg-light rounded-5"><a class="page-link  bg-light rounded-5"
                            href="javascript:void(0);">17</a></li>
                    <li class="page-item   bg-light rounded-5">
                        <a class="page-link  bg-light rounded-5 text-primary" href="javascript:void(0);">
                            next
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</template>
<script>
export default {
    name: 'EmailList',
    props: {
        emails: {
            typeof: Array
        }
    }
}

</script>
