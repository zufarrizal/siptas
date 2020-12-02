<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detail Submission</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="col-12 table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="p-2">NPM </td>
                                        <td>: <?= $submission['username']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2">Full Name </td>
                                        <td>: <?= $submission['fullname']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2">Title </td>
                                        <td>: <?= $submission['title']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2">Program Study </td>
                                        <td>: <?= $submission['study']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2">Lecturers </td>
                                        <td>: <?= $submission['lecturers']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2">File </td>
                                        <td>: <a href="<?= base_url('assets/dist/file/') .  $submission['file']; ?>" class="btn btn-success btn-sm"><i class="fas fa-download"></i> Download</a></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2">Date Created </td>
                                        <td>: <?= date('d F Y ', $submission['date_created']); ?></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <!-- /.col -->
                        <form action="" method="POST">
                            <input type="text" class="form-control" id="id" name="id" value="<?= $submission['id']; ?>" hidden>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $submission['username']; ?>" hidden>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="note" name="note" placeholder="Note" value="<?= $submission['note']; ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-sticky-note"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="approval" name="approval" value="<?= $submission['approval']; ?>">
                                    <?php  ?>
                                    <?php if ($submission['approval'] == 1) : ?>
                                        <option value="1" selected>Approved</option>
                                        <option value="2">Revision</option>
                                        <option value="3">Being Checked</option>
                                    <?php elseif ($submission['approval'] == 2) : ?>
                                        <option value="1">Approved</option>
                                        <option value="2" selected>Revision</option>
                                        <option value="3">Being Checked</option>
                                    <?php else : ?>
                                        <option value="1">Approved</option>
                                        <option value="2">Revision</option>
                                        <option value="3" selected>Being Checked</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Revision History</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="col-12 table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>History</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($history as $hs) : ?>
                                        <tr>
                                            <?php if ($hs['username'] == $submission['username']) : ?>
                                                <td><?= $hs['history'] ?></td>
                                                <td> <?= date('d F Y ', $hs['date']); ?></a></td>
                                            <?php else : ?>
                                                <td></td>
                                                <td></td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>History</th>
                                        <th>Date</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
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