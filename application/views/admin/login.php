<?php             
$this->load->view('admin/_partial/header');

?>
<!-- Login Content -->
<div class="bg-white pulldown">
    <div class="content content-boxed overflow-hidden">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <div class="push-30-t push-50 animated fadeIn">
                    <!-- Login Title -->
                    <div class="text-center">
                        <i class="fa fa-2x fa-circle-o-notch text-primary"></i>
                        <p class="text-muted push-15-t">Welcome Administrator</p>
                        <div class="flash-data" data-flashdata=""><?php echo $this->session->flashdata('flash'); ?></div>
                        <div class="flash-data-error" data-flashdata=""><?php echo $this->session->flashdata('error'); ?></div>

                    </div>
                    <!-- END Login Title -->

                    <!-- Login Form -->
                    <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-login form-horizontal push-30-t" action="<?=base_url('/mypanel/auth/login')?>" method="post">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary floating">
                                    <input class="form-control" type="text" id="login-username" name="username">
                                    <label for="login-username">Username</label>
                                </div>
                                <p class="mt-3"><small class="text-danger"><?php echo form_error('username'); ?></small></p>


                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary floating">
                                    <input class="form-control" type="password" id="login-password" name="password">
                                    <label for="login-password">Password</label>
                                </div>
                                <p class="mt-3"><small class="text-danger"><?php echo form_error('password'); ?></small></p>


                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label class="css-input switch switch-sm switch-primary">
                                    <input type="checkbox" id="login-remember-me" name="login-remember-me"><span></span> Remember Me?
                                </label>
                            </div>
                            <!-- <div class="col-xs-6">
                                <div class="font-s13 text-right push-5-t">
                                    <a href="base_pages_reminder_v2.html">Forgot Password?</a>
                                </div>
                            </div> -->
                        </div>
                        <div class="form-group push-30-t">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                <button class="btn btn-sm btn-block btn-primary" type="submit">Log in</button>
                            </div>
                        </div>
                    </form>
                    <!-- END Login Form -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Login Content -->

<!-- Login Footer -->
<div class="pulldown push-30-t text-center animated fadeInUp">
    <small class="text-muted"><span class="js-year-copy"></span> &copy; Local Guide CMS</small>
</div>
<!-- END Login Footer -->
<?php 
    $this->load->view('admin/_partial/footer');

?>