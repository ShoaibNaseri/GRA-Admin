<template>
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-body">
                <div class="contact-header">
                    <div class="d-sm-flex d-block align-items-center justify-content-between">
                        <div class="h5 fw-semibold mb-0">{{ pageData.pageTitle }} </div>
                        <div class="d-flex mt-sm-0 mt-2 align-items-center">
                            <div v-if="pageData.hasSearch" class="input-group">
                                <input type="text" class="form-control bg-light" placeholder="Search Here..!"
                                    aria-describedby="search-contact-member">
                                <button aria-label="button" class="btn btn-primary" type="button"
                                    id="search-contact-member"><i class="ri-search-line"></i></button>
                            </div>
                            <div class="dropdown ms-2">
                                <button aria-label="button" class="btn btn-icon btn-primary-light btn-wave"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li v-if="pageData.hasImport"><a class="dropdown-item border-bottom"
                                            href="javascript:void(0);">Import</a>
                                    </li>
                                    <li v-if="pageData.hasExport"><a class="dropdown-item  border-bottom"
                                            href="javascript:void(0);">Export</a>
                                    </li>
                                    <li v-if="pageData.hasDeleteAll"><a class="dropdown-item"
                                            href="javascript:void(0);">Delete All</a></li>
                                </ul>
                            </div>
                            <router-link v-if="pageData.hasAdd" :to="{ name: Route }" aria-label="button" type="button"
                                class="btn btn-icon btn-secondary-light ms-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Add Contact"><i
                                    class="ri-add-line"></i></router-link>
                            <router-link v-if="pageData.hasEdit" :to="{ name: Route, params: { id: Id } }"
                                aria-label="button" type="button" class="btn btn-icon btn-secondary-light ms-2"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Contact"><i
                                    class="ri-edit-line"></i></router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "PageTitleControl",
    props: {
        pageData: {
        },
    },
    data() {
        return {
            Name: this.pageData.pageName,
            Id: this.pageData.paramId,
            Route: this.pageData.route,
        }
    },

}

</script>
