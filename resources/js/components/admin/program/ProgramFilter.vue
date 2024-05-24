<template>
    <div class="row p-3">
        <div class="col-xl-3">
            <label for="name" class="form-label">Search By University</label>
            <input type="text" class="form-control" placeholder="Search By University" required>
        </div>
        <div class="col-xl-3">
            <label for="" class="form-label">Country</label>
            <select class="form-control">
                <option value="" selected disabled>Select Your Country</option>
                <option value="m-2">Multiple-2</option>
                <option value="m-3">Multiple-3</option>
                <option value="m-4">Multiple-4</option>
                <option value="m-5">Multiple-5</option>
            </select>
        </div>
        <div class="col-xl-3">
            <label for="name" class="form-label">Search By University</label>
            <input type="text" class="form-control" placeholder="Search By University" required>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProgramFilter"
}

</script>
