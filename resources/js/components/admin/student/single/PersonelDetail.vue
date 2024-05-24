<template>
    <div class="tab-pane show active fade p-0 border-0 bg-white p-4 rounded-3" id="activity-tab-pane" role="tabpanel"
        aria-labelledby="activity-tab" tabindex="0">
        <div class="row">
            <div class="col-md-10 col-xl-10">
                <div class="border-bottom">
                    <h4>Educations</h4>
                </div>
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            High School
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div v-if="school" class="table-responsive">
                            <table class="table text-nowrap table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Shool Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">School Type</th>
                                        <th scope="col">Enrolled Date</th>
                                        <th scope="col">Graduation Date</th>
                                        <th scope="col">Percentage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ school.schoolName }}</th>
                                        <td>{{ school.address }}</td>
                                        <td>{{ school.schoolType }}</td>
                                        <td>{{ school.startedDate }}</td>
                                        <td>{{ school.graduationDate }}</td>
                                        <td>{{ school.percentage }}%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div v-else class="p-3 text-danger">
                            High School Data Does Not Exist..!
                        </div>
                    </div>
                </div>
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Bachelor Degree
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div v-if="bachelor" class="table-responsive">
                            <table class="table text-nowrap table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">University Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Feild Or Major</th>

                                        <th scope="col">Enrolled Date</th>
                                        <th scope="col">Graduation Date</th>
                                        <th scope="col">GPA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ bachelor.universityName }}</th>
                                        <td>{{ bachelor.address }}</td>
                                        <td>{{ bachelor.feild }}</td>

                                        <td>{{ bachelor.startedDate }}</td>
                                        <td>{{ bachelor.graduationDate }}</td>
                                        <td>{{ bachelor.gpa }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div v-else class="p-3 text-danger">
                            Bachelor Data Does Not Exist..!
                        </div>
                    </div>
                </div>
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Master Degree
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div v-if="master" class="table-responsive">
                            <table class="table text-nowrap table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">University Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Feild Or Major</th>

                                        <th scope="col">Enrolled Date</th>
                                        <th scope="col">Graduation Date</th>
                                        <th scope="col">GPA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ master.universityName }}</th>
                                        <td>{{ master.address }}</td>
                                        <td>{{ master.feild }}</td>

                                        <td>{{ master.startedDate }}</td>
                                        <td>{{ master.graduationDate }}</td>
                                        <td>{{ master.gpa }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div v-else class="p-3 text-danger">

                            Master Degree Data Does Not Exist!

                        </div>
                    </div>
                </div>
                <div class="border-bottom">
                    <h4>Work And Experience</h4>
                </div>
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Work & Experience
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div v-if="experiences.length > 0" class=" table-responsive">
                            <table class="table text-nowrap table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Company Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Job Title</th>
                                        <th scope="col">Joined at</th>
                                        <th scope="col">Ended at</th>
                                        <th scope="col">File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for=" exp  in  experiences " :key="exp.id">
                                        <th scope="row">{{ exp.company_name }}</th>
                                        <td>{{ exp.country }} - {{ exp.city }}</td>
                                        <td>{{ exp.job_title }}</td>
                                        <td>{{ exp.start_date }}</td>
                                        <td>{{ exp.end_date }}</td>
                                        <td>
                                            <div v-if="exp.file">
                                                File.pdf
                                            </div>
                                            <div v-else>
                                                <span class="text-danger">No File Exist</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div v-else class="p-3 text-danger">
                            Experience Data Does Not Exist..!
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-2 col-xl-2">
                <div class="">
                    <h5 class="border-bottom p-1">National ID</h5>
                    <ul v-if="nIds">
                        <li><strong>Number: </strong><span class="text-muted float-end"> {{ nIds.nationalID }}</span>
                        </li>
                        <li><strong>Issued: </strong><span class="text-muted float-end"> {{ nIds.issueDate }}</span>
                        </li>
                        <li><strong>Exp: </strong><span class="text-muted float-end"> {{ nIds.expiryDate }}</span></li>
                        <li><strong>Nationality: </strong><span class="text-muted float-end">{{ nIds.nationality
                                }}</span></li>
                        <li><strong>DoB: </strong><span class="text-muted float-end">{{ nIds.dob }}</span></li>
                        <li><strong>Pob: </strong><span class="text-muted float-end">{{ nIds.pob }}</span></li>
                    </ul>
                    <div v-else>
                        <span class="small text-danger">No Data</span>
                    </div>
                </div>
                <div class="">
                    <h5 class="border-bottom p-1">Passport</h5>
                    <ul v-if="pass">
                        <li><strong>Number: </strong><span class="text-muted float-end"> {{ pass.passportNumber
                                }}</span>
                        </li>
                        <li><strong>Issued: </strong><span class="text-muted float-end"> {{ pass.issueDate }}</span>
                        </li>
                        <li><strong>Exp: </strong><span class="text-muted float-end"> {{ pass.expiryDate }}</span></li>
                        <li><strong>PT: </strong> <span class="text-muted float-end">{{ pass.passportType
                                }}</span></li>
                    </ul>
                    <div v-else>
                        <span class="small text-danger">No Data</span>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-12">
                <div class="border-bottom">
                    <h4>LCT (Language Certification )</h4>
                </div>
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            International Language Certifactions
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div v-if="lcts.length > 0" class="table-responsive">
                            <table class="table text-nowrap table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Test Type</th>
                                        <th scope="col">Test Number</th>
                                        <th scope="col">Test Date</th>
                                        <th scope="col">Reading</th>
                                        <th scope="col">Writing</th>
                                        <th scope="col">Listening</th>
                                        <th scope="col">Speaking</th>
                                        <th scope="col">Overall Score</th>
                                        <th scope="col">File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for=" lct  in  lcts " :key="lct.id">
                                        <th scope="row">{{ lct.testType }}</th>
                                        <td>{{ lct.registrationNumber }}</td>
                                        <td>{{ lct.testDate }}</td>
                                        <td>{{ lct.reading }}</td>
                                        <td>{{ lct.writing }}</td>
                                        <td>{{ lct.listening }}</td>
                                        <td>{{ lct.speaking }}</td>
                                        <td>{{ lct.testScore }}</td>
                                        <td>
                                            <div v-if="lct.document">
                                                File.pdf
                                            </div>
                                            <div v-else>
                                                <span class="text-danger">No File Exist</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div v-else class="p-3 text-danger">
                            LCT Data Does Not Exist..!
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>
<script>
export default {
    name: "PersonelDetail",
    props: {
        school: {

        },
        bachelor: {

        },
        master: {

        },
        experiences: {
            type: Array,
        },
        lcts: {
            type: Array,
        },
        nIds: {

        },
        pass: {

        }
    },
}

</script>
