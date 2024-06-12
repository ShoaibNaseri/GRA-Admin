<template>
    <div class="container-fluid">
        <div class="row">
            <page-title-control :page-data="pageData"></page-title-control>
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Organization API - Details
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-sm btn-primary btn-wave waves-light"><i
                                    class="ri-add-line fw-semibold align-middle me-1"></i> Print</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Value</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Primary Domain Name</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="fw-semibold">
                                                {{ detail.primaryDomainName }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Zaid / Zoid</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="fw-semibold">
                                                {{ detail.zaid }} / {{ detail.zoid }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Base Plan / Plan Type</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="">
                                                {{ detail.basePlan }} / {{ detail.planType }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Organization Name</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="fw-semibold ">
                                                {{ detail.orgName }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Organization Creation Time</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="">
                                                {{ detail.orgCreationTime }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Organization Image URL</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                {{ detail.orgImageUrl }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Super Admin </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="">
                                                {{ detail.superAdmin }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Super Admin Name / Super Admin Login
                                                        Name</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="">
                                                {{ detail.superAdminFullName }} / {{ detail.superAdminLoginName }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Is Domain Marking Exist ?</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="">
                                                {{ detail.isDomainMarkingExist }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Is Email Confirmed ?</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="">
                                                {{ detail.isEmailConfirmed }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Is Mail Hosting Enabled ?</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="">
                                                {{ detail.isMailHostingEnabled }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Total Organization Groups</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="">
                                                {{ detail.groupCount }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Total Organization License</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="">
                                                {{ detail.licenseCount }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Total Mail-Box</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="">
                                                {{ detail.mailboxCount }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Total Users</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="">
                                                {{ detail.usersCount }}
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import PageTitleControl from '../../../../components/shared/PageTitleControl.vue'
export default {
    components: { PageTitleControl },
    name: 'OrganizationView',
    data() {
        return {
            pageData:
            {
                pageTitle: "ZohoMail - Organization API",
                hasSearch: false,
                hasImport: false,
                hasExport: false,
                hasDeleteAll: false,
                hasAdd: false,
            },
            detail: '',
            domains: '',
        }
    },
    mounted() {
        axios.get('/api/admin/zoho/ogranization')
            .then(response => {
                this.detail = response.data.data;

                console.log(this.detail);
            })
    }
}
</script>
