<template>
    <a @click="toggleMenu()" class="sidemenu-toggle header-link" data-bs-toggle="sidebar">
        <span class="open-toggle me-2">
            <i class="bx bx-menu header-link-icon"></i>
        </span>
    </a>
</template>

<script>
let data = [];

let html = document.querySelector('html');
function getHtmlAttribut() {
    data = html.getAttribute('data-toggled');
    return data;
}

function setAttribute() {
    html.setAttribute('data-toggled', 'close-menu-close');
}
function seBack(data) {
    html.setAttribute('data-toggled', data);
}
export default {
    name: "SideMenuToggle",
    data() {
        return {
            data: [],
            setAt: [],
            isToggeled: false,
        }
    },
    methods: {
        toggleMenu() {
            if (this.isToggeled === false) {
                this.data = getHtmlAttribut()
                setAttribute()
                this.isToggeled = !this.isToggeled
            } else {
                seBack()
                this.isToggeled = !this.isToggeled
            }

        }

    },

}
</script>
