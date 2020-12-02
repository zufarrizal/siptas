<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Table Submission</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Full Name</th>
                                    <th>Class</th>
                                    <th>Program Study</th>
                                    <th>Lecturers</th>
                                    <th>Aproval</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($submission as $sbm) : ?>
                                    <tr>
                                        <td><?= $sbm['username'] ?></td>
                                        <td><?= $sbm['fullname'] ?></td>
                                        <td><?= $sbm['class'] ?></td>
                                        <td><?= $sbm['study'] ?></td>
                                        <td><?= $sbm['lecturers'] ?></td>
                                        <td><?php if ($sbm['approval'] == '3') : ?>
                                                <button class="btn btn-primary btn-sm hilang"><i class="fa fa-search" aria-hidden="true"></i> Being Checked</button>
                                            <?php elseif ($sbm['approval'] == '2') : ?>
                                                <button class="btn btn-danger btn-sm hilang"><i class="fa fa-times" aria-hidden="true"></i> Revision</button>
                                            <?php else : ?>
                                                <button class="btn btn-success btn-sm hilang"><i class="fa fa-check" aria-hidden="true"></i></i> Approved</button>
                                                <?php if ($user['username'] == $sbm['username']) : ?>
                                                    <a href="<?= base_url('student/printsub/') .  $sbm['id']; ?>" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                        <?php if ($user['username'] == $sbm['username']) : ?>
                                            <a href="<?= base_url('student/editsubmission/') .  $sbm['id']; ?>"><span class="btn btn-success btn-sm"><i class="fas fa-edit"></i></span></a>
                                        <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Username</th>
                                    <th>Full Name</th>
                                    <th>Class</th>
                                    <th>Program Study</th>
                                    <th>Lecturers</th>
                                    <th>Aproval</th>
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

<style>
    @media print {
        .hilang {
            display: none;
        }
    }
</style>