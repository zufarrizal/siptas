<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="login-box mx-auto">
                        <div class="login-logo">
                            <a href="#"><strong>SIPTAS</strong> Login</a>
                        </div>
                        <!-- /.login-logo -->
                        <div class="card">
                            <div class="card-body login-card-body">
                                <p class="login-box-msg">Sign in to start your session</p>

                                <form action="" method="post">
                                    <div class="input-group mb-3">
                                        <select class="custom-select" id="role" name="role">
                                            <option value="1">Admin</option>
                                            <option value="2">Staff</option>
                                            <option value="3">Student</option>
                                        </select>
                                    </div>
                                    <small class="text-danger"><?= form_error('username'); ?></small>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" aria-invalid="true" placeholder="Username" id="username" name="username" value="<?= set_value('username') ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-barcode"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="text-danger"><?= form_error('password'); ?></small>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- An element to toggle between password visibility -->
                                    <input class="mb-3" type="checkbox" onclick="myFunction()"> Show Password
                                    <div class="row">
                                        <!-- /.col -->
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>
                                <hr>
                                <p class="mb-0 text-center">
                                    <a href="<?= base_url('auth/register'); ?>" class="text-center">Register a new account</a>
                                </p>
                            </div>
                            <!-- /.login-card-body -->
                        </div>
                    </div>
                    <!-- /.login-box -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Show Password -->
<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>