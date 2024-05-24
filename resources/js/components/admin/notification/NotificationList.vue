<template>
    <ul class="list-unstyled mb-0 notification-container p-3">
        <li v-for="not in nots" :key="not.id">
            <div class="card custom-card mb-3">
                <div class="d-flex p-3 border-bottom-0">
                    <div class="">
                        <svg class="me-4  bg-warning-transparent  alt-notify" xmlns="http://www.w3.org/2000/svg"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path fill="#ffce6d"
                                d="M18,13.18463V10c0-3.31372-2.68628-6-6-6s-6,2.68628-6,6v3.18463C4.83832,13.59863,4.00146,14.69641,4,16v2c0,0.00037,0,0.00073,0,0.00116C4.00031,18.5531,4.44806,19.00031,5,19h14c0.00037,0,0.00073,0,0.00116,0C19.5531,18.99969,20.00031,18.55194,20,18v-2C19.99854,14.69641,19.16168,13.59863,18,13.18463z">
                            </path>
                            <path fill="#ffae0c"
                                d="M8.14233 19c.4472 1.72119 1.99689 2.99817 3.85767 3 1.86078-.00183 3.41046-1.27881 3.85767-3H8.14233zM12 4c.34149 0 .67413.03516 1 .08997V3c0-.55231-.44769-1-1-1s-1 .44769-1 1v1.08997C11.32587 4.03516 11.65851 4 12 4z">
                            </path>
                        </svg>
                    </div>
                    <div class="mt-0 text-start">
                        <span class="fs-14 fw-semibold">{{ not.title }}<span
                                class="badge bg-success  badge-notify ms-2">Date</span></span>
                        <p class="fs-13 text-muted mb-0">{{ not.description }}</p>
                    </div>
                    <a href="javascript:void(0);" class="ms-auto">
                        <i class="fe fe-x text-muted border rounded-2 p-1 fs-12"></i>
                    </a>
                </div>
            </div>
        </li>
    </ul>
</template>

<script>
import axios from 'axios';
export default {
    name: "NotificationList",

    data() {
        return {
            nots: []
        }
    },

    mounted() {
        axios.get("/api/getAdminNotifications")
            .then(response => {
                this.nots = response.data;
                console.log(this.nots)
            })
            .catch(error => {
                console.error('Faild to fetch data', +error)
            });
    }

}

</script>
