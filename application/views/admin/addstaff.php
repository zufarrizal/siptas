<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Add Staff</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="" method="POST">
                            <small class="text-danger"><?= form_error('username'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-barcode"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger"><?= form_error('name'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger"><?= form_error('password'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <button type="submit" class="btn btn-primary btn-block">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->