<template>
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add Due Amount to </h6><button aria-label="Close" class="btn-close"
                    @click="closeModal" data-bs-dismiss="modal"></button>
            </div>
            <form action="" @submit.prevent="createDue()">
                <div class="modal-body text-start">
                    <input type="text" name="" v-model="due.student_id" id="" hidden>
                    <div class="col-xl-12">
                        <label for="blog-author-email" class="form-label">Due For</label>
                        <input required type="text" v-model="due.title" placeholder="Due Title" class="form-control">
                    </div>
                    <div class="col-xl-12">
                        <label for="blog-author-email" class="form-label">Due Amount(£)</label>
                        <input required type="text" v-model="due.amount" placeholder="Due Amount" class="form-control">
                    </div>
                    <div class="col-xl-12">
                        <label for="blog-author-email" class="form-label">Description</label>
                        <textarea required v-model="due.description" class="form-control" id="" cols="30"
                            rows="10"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-sm">Add</button> <button type="reset"
                        class="btn btn-warning btn-sm">Reset</button> <button class="btn btn-sm btn-danger"
                        @click.prevent="closeModal" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
import axios from 'axios'
export default {
    props: {
        closeModal: {

        }
    },
    data() {
        return {
            due: {
                title: '',
                description: '',
                amount: '',
                student_id: this.$route.params.id
            },

        }
    },
    methods: {
        createDue() {
            axios.post('/api/due/storeDue', this.due)
                .then(response => {
                    this.due = ''
                    this.closeModal()
                })
        }
    }
}

</script>
