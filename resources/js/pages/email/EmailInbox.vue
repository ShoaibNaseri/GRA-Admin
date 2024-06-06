<template>
    <div class="total-mails card custom-card">
        <email-action></email-action>
        <email-list></email-list>
    </div>
</template>

<script>
import EmailAction from '../../components/admin/email/emailView/EmailAction.vue'
import EmailList from '../../components/admin/email/emailView/EmailList.vue'

export default {
    components: { EmailAction, EmailList },
    name: "EmailInbox",
}

</script>
