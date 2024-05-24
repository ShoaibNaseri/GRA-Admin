<template>
    <div class="card custom-card border-0">
        <div class="card-header">
            <div class="card-title">
                Program Details
            </div>
        </div>
        <div class="card-body">
            <div>
                <ul>
                    <li class="p-2">
                        University: <span class="float-end">{{ progE.uni }} <span v-if="progE.uni == null"
                                class="text-danger">NaN</span></span>
                    </li>
                    <li class="p-2">
                        Country:<span class="float-end">{{ progE.country }} <span v-if="progE.country == null"
                                class="text-danger">NaN</span></span>
                    </li>
                    <li class="p-2">
                        Program Major: <span class="float-end">{{ progE.major }} <span v-if="progE.major == null"
                                class="text-danger">NaN</span></span>
                    </li>
                    <li class="p-2">
                        Degree: <span class="float-end">{{ progE.degree }} <span v-if="progE.degree == null"
                                class="text-danger">NaN</span></span>
                    </li>
                    <li class="p-2">
                        Teaching Language: <span class="float-end">{{ progE.tLang }} <span v-if="progE.tLang == null"
                                class="text-danger">NaN</span></span>
                    </li>
                    <li class="p-2">
                        Teaching Method: <span class="float-end">{{ progE.tMethod }} <span v-if="progE.tMethod == null"
                                class="text-danger">NaN</span></span>
                    </li>
                    <li class="p-2">
                        Duration: <span class="float-end">{{ progE.duration }} <span v-if="progE.duration == null"
                                class="text-danger">NaN</span></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        progE: {

        }
    }
}

</script>
