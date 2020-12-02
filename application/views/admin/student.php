<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Table Student</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Full Name</th>
                                    <th>Class</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($student as $std) : ?>
                                    <tr>
                                        <td><?= $std['username'] ?></td>
                                        <td><?= $std['fullname'] ?></td>
                                        <td><?= $std['class'] ?></td>
                                        <td><a href="<?= base_url('admin/editstudent/') .  $std['id']; ?>"><span class="btn btn-success btn-sm"><i class="fas fa-edit"></i></span></a>
                                            <a href="<?= base_url('admin/deleteStudent/') .  $std['id']; ?>" class="btn btn-danger btn-sm delete-data"><i class="fas fa-trash "></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Username</th>
                                    <th>Full Name</th>
                                    <th>Class</th>
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