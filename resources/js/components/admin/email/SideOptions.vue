<template>
    <div>
        <ul class="list-unstyled mail-main-nav" id="mail-main-nav">
            <span v-for="(menu, index) in menus" :key="index">
                <li v-if="menu.mainTitle" class="px-0 pt-0 mail-nav-heading">
                    <span class="fs-11 text-muted op-7 fw-semibold">{{ menu.mainTitle }}</span>
                </li>
                <li class="">
                    <router-link :to="{ name: menu.routeName }" href="javascript:void(0);">
                        <div class="d-flex align-items-center">
                            <span class="me-2 lh-1">
                                <i :class="menu.icon" class="align-middle fs-14"></i>
                            </span>
                            <span class="flex-fill text-nowrap">
                                {{ menu.name }}
                            </span>
                            <span :class="menu.bgColor" class="badge  rounded-1">{{ menu.notifyNumber
                                }}</span>
                        </div>
                    </router-link>
                </li>
            </span>
        </ul>
    </div>
</template>
<script>
export default {
    name: 'SideOptions',
    data() {
        return {
            menus: [
                {
                    name: 'All Mails',
                    routeName: 'email.all',
                    mainTitle: 'MAILS',
                    icon: 'ri-inbox-archive-line',
                    bgColor: 'bg-info-transparent',
                    notifyNumber: '20',
                },
                {
                    name: 'Inbox',
                    routeName: 'email.inbox',
                    icon: 'ri-inbox-archive-line',
                    bgColor: 'bg-info-transparent',
                    notifyNumber: '20',
                },
                {
                    name: 'Sent',
                    routeName: 'email.sent',
                    icon: 'ri-send-plane-2-line ',
                    bgColor: 'bg-info-transparent',
                    notifyNumber: '20',
                },
                {
                    name: 'Drafts',
                    routeName: 'email.draft',
                    icon: 'ri-draft-line',
                    bgColor: 'bg-info-transparent',
                    notifyNumber: '20',
                },
                {
                    name: 'Spam',
                    routeName: 'email.spam',
                    icon: 'ri-spam-2-line',
                    bgColor: 'bg-info-transparent',
                    notifyNumber: '20',
                },
                {
                    name: 'Important',
                    routeName: 'email.important',
                    icon: 'ri-bookmark-line',
                    bgColor: 'bg-info-transparent',
                    notifyNumber: '20',
                },
                {
                    name: 'Trash',
                    routeName: 'email.trash',
                    icon: 'ri-delete-bin-line',
                    bgColor: 'bg-info-transparent',
                    notifyNumber: '20',
                },
                {
                    name: 'Archive',
                    routeName: 'email.archive',
                    icon: 'ri-archive-line',
                    bgColor: 'bg-info-transparent',
                    notifyNumber: '20',
                },
                {
                    name: 'Starred',
                    routeName: 'email.starred',
                    icon: 'ri-star-line',
                    bgColor: 'bg-info-transparent',
                    notifyNumber: '20',
                },
                {
                    name: 'Setting',
                    routeName: 'email.setting',
                    mainTitle: 'SETTING',
                    icon: 'ri-settings-3-line ri-settings-3-line',
                    bgColor: 'bg-info-transparent',
                    notifyNumber: '',
                },

            ]
        }
    }
}

</script>
