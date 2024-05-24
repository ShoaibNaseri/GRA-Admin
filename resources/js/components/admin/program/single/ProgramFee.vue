<template>

    <div class="card custom-card">
        <div class="card-header">
            <div class="card-title">
                Program Fees
            </div>
        </div>
        <div class="card-body">
            <div class=" demo-gallery">
                <ul>
                    <li class="p-2">Application Fee: <span class="float-end">{{ progFee.applicationFee }}£</span>
                    </li>
                    <li class="p-2">Tuition Fee: <span class="float-end">{{ progFee.tuationFee }}£</span></li>
                    <hr>
                    <li class="p-2">
                        <strong>Total</strong> <span class="float-end"><strong>{{ progFee.applicationFee +
                        progFee.tuationFee }}£</strong></span>
                    </li>
                </ul>

            </div>
        </div>
    </div>

</template>
<script>
import Decimal from 'decimal.js';
export default {
    name: "ProgramFee",
    props: {
        progFee: {
        },
    },
}

</script>
