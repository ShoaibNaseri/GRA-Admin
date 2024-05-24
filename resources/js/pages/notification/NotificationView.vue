<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">
            <page-title-control :page-data="pageData"></page-title-control>
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="p-3">
                        <div class="">
                            <h6>Summary</h6>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <notification-list></notification-list>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-11 -->
    </div>
</template>

<script>
import NotificationList from '../../components/admin/notification/NotificationList.vue'
import PageTitleControl from '../../components/shared/PageTitleControl.vue'

export default {
    components: { NotificationList, PageTitleControl },
    name: 'NotificationView',
    data() {
        return {
            pageData:
            {
                pageTitle: "Notifications",
                hasSearch: false,
                hasImport: true,
                hasExport: true,
                hasDeleteAll: true,
                hasAdd: false
            }

        }
    }
}
</script>
