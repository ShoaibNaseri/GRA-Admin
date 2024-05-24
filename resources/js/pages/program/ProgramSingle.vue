<template>

    <div class="container-fluid">
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-xl-12">
                        <program-show :progs="progs"></program-show>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-xxl-12">
                        <program-detail :progE="progE"></program-detail>
                    </div>
                    <div class="col-xxl-12">
                        <program-intake :progD="progD"></program-intake>
                    </div>

                    <div class="col-xxl-12">
                        <program-fee :progFee="progFee"></program-fee>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->
    </div>

</template>

<script>
import axios from 'axios'
import ProgramFee from '../../components/admin/program/single/ProgramFee.vue'
import ProgramIntake from '../../components/admin/program/single/ProgramIntake.vue'
import ProgramRequirement from '../../components/admin/program/single/ProgramRequirement.vue'
import ProgramShow from '../../components/admin/program/single/ProgramShow.vue'
import Decimal from 'decimal.js'
import ProgramDetail from '../../components/admin/program/single/ProgramDetail.vue'
export default {
    components: { ProgramRequirement, ProgramShow, ProgramIntake, ProgramFee, ProgramDetail },
    name: "ProgramSingle",
    data() {
        return {
            progs: {
                title: '',
                description: '',
                uni: '',
                uniLogo: ''
            },
            progD: {

                intake: '',

            },
            progE: {
                uni: '',
                country: '',
                address: '',
                tMethod: '',
                major: '',
                degree: '',
                tLang: '',
            },
            progFee: {

                applicationFee: '',
                tuationFee: '',
            },
            prog: '',

            id: this.$route.params.id
        }
    },
    mounted() {
        axios.get(`/api/admin/prog/single/${this.id}`)
            .then(response => {
                this.prog = response.data;
                this.progs.title = this.prog.title;
                this.progs.description = this.prog.description;
                this.progs.uni = this.prog.university.uniName;
                this.progs.uniLogo = this.prog.university.uniLogo;
                this.progE.tMethod = this.prog.method;
                this.progE.major = this.prog.category;
                this.progE.degree = this.prog.degree;
                this.progE.tLang = this.prog.tlang;
                this.progD.intake = this.prog.scholarship_intake;
                this.progE.country = this.prog.country;
                this.progE.uni = this.progs.uni;
                this.progE.address = this.prog.address;
                this.progFee.applicationFee = parseFloat(this.prog.scholarship_fee.applicationFee);
                this.progFee.tuationFee = parseFloat(this.prog.scholarship_fee.tuationFee);

                console.log(this.progFee.applicationFee + this.progFee.tuationFee);
            })
    }
}
</script>
