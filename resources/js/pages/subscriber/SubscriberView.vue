<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">
            <page-title-control :page-data="pageData"></page-title-control>
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body p-3">
                        <subsciber-table></subsciber-table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-11 -->
    </div>
</template>

<script>
import SubsciberTable from '../../components/admin/subscriber/SubsciberTable.vue'
import PageTitleControl from '../../components/shared/PageTitleControl.vue'
export default {
    components: { SubsciberTable, PageTitleControl },
    name: "SubscriberView",
    data() {
        return {
            pageData:
            {
                pageTitle: "Programs Table",
                hasSearch: true,
                hasImport: false,
                hasExport: true,
                hasDeleteAll: true,
                hasAdd: false,
            }

        }
    }
}
</script>
