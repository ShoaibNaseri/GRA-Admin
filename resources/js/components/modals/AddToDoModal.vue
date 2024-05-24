<template>
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add TO-DO's</h6><button aria-label="Close" class="btn-close"
                    @click="closeToDoModal" data-bs-dismiss="modal"></button>
            </div>
            <form action="">
                <div class="modal-body text-start">
                    <input type="text" hidden v-model="todos.student_id">
                    <div class="col-xl-12">
                        <label for="blog-author-email" class="form-label">Action</label>
                        <input required type="text" v-model="todos.title" placeholder="Action" class="form-control">
                    </div>
                    <div class="col-xl-12">
                        <label for="blog-author-email" class="form-label">Date</label>
                        <input required type="date" v-model="todos.date" placeholder="Due Title" class="form-control">
                    </div>
                    <div class="col-xl-12">
                        <label for="blog-author-email" class="form-label">Time</label>
                        <input required type="time" v-model="todos.time" placeholder="Due Title" class="form-control">
                    </div>
                    <div class="col-xl-12">
                        <label for="blog-author-email" class="form-label">Description</label>
                        <textarea required v-model="todos.description" class="form-control" id="" cols="30"
                            rows="10"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-sm">Add</button> <button type="reset"
                        class="btn btn-warning btn-sm">Reset</button> <button class="btn btn-sm btn-danger"
                        @click.prevent="closeToDoModal" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        closeToDoModal: {

        }
    },
    data() {
        return {
            todos: {
                student_id: this.$route.params.id,
                tite: '',
                description: '',
                date: '',
                time: '',
            }
        }
    }
}

</script>
