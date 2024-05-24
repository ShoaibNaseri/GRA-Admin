<template>
    <!-- Start::header-element -->
    <div class="header-element header-theme-mode">
        <!-- Start::header-link|layout-setting -->
        <a aria-label="anchor" @click="toggleThem()" class="header-link layout-setting">
            <!-- Start::header-link-icon -->
            <i class="bx bx-sun bx-flip-horizontal header-link-icon ionicon  dark-layout"></i>
            <!-- End::header-link-icon -->
            <!--  Start::header-link-icon -->
            <i class="bx bx-moon bx-flip-horizontal header-link-icon ionicon light-layout"></i>
            <!-- End::header-link-icon -->
        </a>
        <!-- End::header-link|layout-setting -->
    </div>
    <!-- End::header-element -->
</template>

<script>
let data = [];
let html = document.querySelector('html');
function getThemeAttr() {
    data = html.getAttribute('data-theme-mode');
    console.log(data);
}
function seThemeToDark() {
    html.setAttribute('data-theme-mode', 'dark');
    html.setAttribute('data-header-styles', 'dark');
}
function seThemToLight() {
    html.setAttribute('data-theme-mode', 'light');
    html.setAttribute('data-header-styles', 'transparent');
}
export default {
    name: "ThemeSelector",
    isThemeLight: true,
    methods: {
        toggleThem() {
            if (this.isThemeLight === true) {
                seThemeToDark();
                this.isThemeLight = !this.isThemeLight
                console.log(this.isThemeLight);
            } else {
                seThemToLight();
                this.isThemeLight = !this.isThemeLight
            }
        }
    }
}
</script>
