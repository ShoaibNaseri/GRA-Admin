<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">

            <page-title-control :page-data="pageData"></page-title-control>
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body p-3">
                        <required-doc-table></required-doc-table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-11 -->
        <div class="modal fade" id="modaldemo8">
            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body text-start">
                        <h6>Why We Use Electoral College, Not Popular Vote</h6>
                        <p class="text-muted mb-0">It is a long established fact that a reader will be distracted by the
                            readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                            that it has a more-or-less normal distribution of letters, as opposed to using 'Content
                            here, content here', making it look like readable English.</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-primary">Save changes</button> <button class="btn btn-light"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import RequiredDocTable from '../../../components/admin/formData/RequiredDocTable.vue'
import PageTitleControl from '../../../components/shared/PageTitleControl.vue';
export default {
    components: { RequiredDocTable, PageTitleControl },
    name: "RequiredDocsView",
    data() {
        return {
            pageData:
            {
                pageTitle: "Required Document",
                hasSearch: true,
                hasImport: true,
                hasExport: true,
                hasDeleteAll: true,
                hasAdd: true,
            }

        }
    }
}
</script>
