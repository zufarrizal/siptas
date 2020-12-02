<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="register-box mx-auto">
                        <div class="register-logo">
                            <a href="#"><strong>SIPTAS</strong> Register</a>
                        </div>
                        <div class="card">
                            <div class="card-body register-card-body">
                                <p class="login-box-msg">Register a new account</p>
                                <form action="" method="post">
                                    <small class="text-danger"><?= form_error('username'); ?></small>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username') ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-barcode"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="text-danger"><?= form_error('name'); ?></small>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="<?= set_value('name') ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="text-danger"><?= form_error('email'); ?></small>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= set_value('email') ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="text-danger"><?= form_error('password1'); ?></small>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="text-danger"><?= form_error('password2'); ?></small>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Retype password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <input class="mb-3" type="checkbox" onclick="myFunction()"> Show Password
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <p class="mb-0 text-center">
                                    <a href="<?= base_url('auth/login'); ?>" class="text-center">I already have an account</a>
                                </p>
                            </div>
                            <!-- /.form-box -->
                        </div><!-- /.card -->
                    </div>
                    <!-- /.register-box -->
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
        var x = document.getElementById("password1");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }

        var y = document.getElementById("password2");
        if (y.type === "password") {
            y.type = "text";
        } else {
            y.type = "password";
        }
    }
</script>