<template>
    <div class="container-fluid">
        <!-- Start:: row-11 -->
        <div class="row">
            <page-title-control :page-data="pageData"></page-title-control>
            <div class="col-xl-12">
                <gallery-list></gallery-list>
            </div>
        </div>
        <!-- End:: row-11 -->
    </div>
</template>

<script>
import GalleryList from '../../../components/admin/front/gallery/GalleryList.vue'
import PageTitleControl from '../../../components/shared/PageTitleControl.vue'
export default {
    components: { GalleryList, PageTitleControl },
    name: "GalleryView",
    data() {
        return {
            pageData:
            {
                pageTitle: "Our Galleries",
                hasSearch: false,
                hasImport: false,
                hasExport: false,
                hasDeleteAll: true,
                hasAdd: true,
                route: 'gallery.save'
            }
        }
    }
}
</script>
