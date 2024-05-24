<template>
    <div class="page error-bg" id="particles-js">

        <!-- Start::error-page -->
        <div class="error-page  ">
            <div class="container">

                <!-- Start::row-1 -->
                <div class="row justify-content-center ">
                    <div class="col-xl-8 col-md-12 col-sm-10 ">
                        <div class="card custom-card  rectangle2">
                            <div class="card-body p-0 ">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6 pe-sm-0 d-flex">
                                        <form action="" @submit="loginSubmit">
                                            <div class="p-5">
                                                <p class="h4 fw-semibold mb-2">Sign Up</p>
                                                <p class="mb-3 text-muted op-7 fw-normal">Welcome Dear Admin !!</p>
                                                <div class="row gy-3 mt-3">
                                                    <div class="col-xl-12 mt-0">
                                                        <label for="signin-username"
                                                            class="form-label text-default">User
                                                            Name</label>
                                                        <input type="text" v-model="adminName"
                                                            class="form-control form-control-lg" id="signin-username"
                                                            placeholder="user name">
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <label for="signup-lastname"
                                                            class="form-label text-default">Password</label>
                                                        <input type="password" v-model="adminPass"
                                                            class="form-control form-control-lg" id="signup-lastname"
                                                            placeholder="emali">
                                                    </div>
                                                    <div class="col-xl-12 d-grid mt-2">
                                                        <button type="submit"
                                                            class="btn btn-lg btn-primary mt-4">Login</button>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <p class="fs-12 text-muted mt-3">Designed With Love <a
                                                            href="signin-cover.html" class="text-primary">By</a></p>
                                                </div>
                                                <div class="text-center my-3 authentication-barrier">
                                                    <span>GRA</span>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-xl-6 col-md-6 ps-0 text-fixed-white rounded-0 d-none d-md-block  ">
                                        <div
                                            class="card custom-card mb-0 cover-background overflow-hidden rounded-end rounded-0">
                                            <div class="card-img-overlay d-flex  align-items-center p-0 rounded-0">
                                                <div class="card-body p-5 rectangle3">
                                                    <div>
                                                        <a href="index.html"> <img
                                                                src="../../../../public/admin/assets/images/brand-logos/desktop-dark.png"
                                                                alt="logo" class="desktop-dark"></a>
                                                    </div>
                                                    <h6 class="mt-4 fs-15 op-9  text-fixed-white">GRA Admin Control
                                                        Panel
                                                    </h6>
                                                    <div class="d-flex mt-3  text-fixed-white">
                                                        <p class="mb-0 fw-normal fs-14 op-7">
                                                            Welcome to GRA(Global Reach Admission )'s Admin
                                                            Authenticatoin System. Via This Panel You Can Controll
                                                            All Your Site's Data and Visualizations..!
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::error-page -->

    </div>

</template>
<script>
import axios from "axios";
export default {

    name: "LoginView",
    data() {
        return {
            adminName: '',
            adminPass: '',
        }
    },
    methods: {
        loginSubmit() {
            const formData = {
                name: this.adminName,
                pass: this.adminPass
            }
            axios.post("/api/adminLogin", formData)
                .then(response => {
                    localStorage.setItem('token', response.data.token);
                    axios.defaults.headers.common['Authorization'] = 'Bearer ' + response.data.token;
                    this.$store.commit('login');
                    // After successful login
                    this.$store.dispatch('setCurrentRoute', this.$route.path)
                    // Redirect to the dashboard or current route
                    this.$router.push(this.$store.state.currentRoute)
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },

}
</script>
