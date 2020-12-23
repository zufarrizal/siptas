<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Table Submission</h3>
                        <a href="<?= base_url('Staff/excel') ?>" class="btn btn-primary btn-sm float-right">Export To Excel</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Full Name</th>
                                    <th>Class</th>
                                    <th>File</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($submission as $sbm) : ?>
                                    <tr>
                                        <td><?= $sbm['username'] ?></td>
                                        <td><?= $sbm['fullname'] ?></td>
                                        <td><?= $sbm['class'] ?></td>
                                        <td><a href="<?= base_url('assets/dist/file/') .  $sbm['file']; ?>" class="btn btn-success btn-sm"><i class="fas fa-download"></i></a></td>

                                        <td><?php if ($sbm['approval'] == '3') : ?>
                                                <button class="btn btn-primary btn-sm"><i class="fas fa-search"></i> Being Checked</button>
                                            <?php elseif ($sbm['approval'] == '2') : ?>
                                                <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Revision</button>
                                            <?php else : ?>
                                                <button class="btn btn-success btn-sm"><i class="fa fa-check"></i> Approved</button>
                                            <?php endif; ?>
                                        </td>
                                        <td><a href="<?= base_url('staff/detailsubmission/') .  $sbm['id']; ?>"><span class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></i></span></a>
                                            <a href="<?= base_url('staff/printsub/') .  $sbm['id']; ?>" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Username</th>
                                    <th>Full Name</th>
                                    <th>Class</th>
                                    <th>File</th>
                                    <th>Status</th>
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