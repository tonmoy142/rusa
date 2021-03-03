<?php include 'header.php'; ?>


<section id="contact-page" class="pt-40 pb-40 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="contact-from mt-30">
                    <div class="section-title">
                        <h5>Login Form</h5>
                    </div> <!-- section title -->
                    <div class="main-form pt-20">
                        <form id="contact-form" action="#" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                        <label for="email">Email Address :</label>
                                        <input name="email" type="text" placeholder="Email Required"
                                            data-error="Name is required." required="required">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                        <label for="email">Password :</label>
                                        <input name="password" type="password" placeholder="password"
                                            data-error="password is required." required="required">
                                    </div>
                                </div>

                                <div class="col-md-12 mt-20">
                                    <div class="form-group">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input name="remember" type="checkbox" class="form-check-input"
                                                    value="remember">Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-20">
                                    <div class="form-group">
                                        <div class="form-check-inline">
                                            <a href="#"><b>? Forget Your Password</b></a>
                                        </div>
                                    </div>
                                </div>

                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="singel-form">
                                        <button type="submit" class="main-btn">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- container -->
</section>

<?php include 'footer.php'; ?>