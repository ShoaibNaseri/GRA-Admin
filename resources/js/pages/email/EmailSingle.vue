<template>
    <div class="mails-information card custom-card">
        <email-header></email-header>
        <email-body></email-body>
        <email-footer></email-footer>
    </div>

</template>

<script>
import EmailBody from '../../components/admin/email/emailSingle/EmailBody.vue'
import EmailFooter from '../../components/admin/email/emailSingle/EmailFooter.vue'
import EmailHeader from '../../components/admin/email/emailSingle/EmailHeader.vue'
export default {
    components: { EmailHeader, EmailBody, EmailFooter },
    name: 'EmailSingle'
}

</script>
