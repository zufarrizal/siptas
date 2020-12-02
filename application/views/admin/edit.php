<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Admin</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="text" class="form-control" id="id" name="id" value="<?= $admin['id']; ?>" hidden>
                            <small class="text-danger"><?= form_error('username'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $admin['username']; ?>" readonly>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-barcode"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger"><?= form_error('name'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= $admin['fullname']; ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/dist/img/profile/') . $admin['image']; ?>" alt="User profile picture">
                            </div>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose File</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <button type="submit" class="btn btn-primary btn-block">Edit</button>
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