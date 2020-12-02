<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Table Admin</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Full Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($admin as $adm) : ?>
                                    <tr>
                                        <td><?= $adm['username']; ?></td>
                                        <td><?= $adm['fullname']; ?></td>
                                        <td><a href="<?= base_url('admin/edit/') . $adm['id']; ?>"><span class="btn btn-success btn-sm"><i class="fas fa-edit "></i></span></a>
                                            <?php if ($adm['id'] != $user['id']) : ?>
                                                <a href="<?= base_url('admin/deleteAdmin/') . $adm['id']; ?>" class="btn btn-danger btn-sm delete-data"><i class="fas fa-trash "></i></a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Username</th>
                                    <th>Full Name</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
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