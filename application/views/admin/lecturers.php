<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Table Lecturers</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Lecturers</th>
                                    <th>Program Study</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lecturers as $ltr) : ?>
                                    <tr>
                                        <td><?= $ltr['lecturers'] ?></td>
                                        <td><?= $ltr['study'] ?></td>
                                        <td><a href="<?= base_url('admin/editlecturers/') .  $ltr['id']; ?>"><span class="btn btn-success btn-sm"><i class="fas fa-edit"></i></span></a>
                                            <a href="<?= base_url('admin/deleteLecturers/') .  $ltr['id']; ?>" class="btn btn-danger btn-sm delete-data"><i class="fas fa-trash "></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Lecturers</th>
                                    <th>Program Study</th>
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