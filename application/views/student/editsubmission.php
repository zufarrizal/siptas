<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Submission</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="text" class="form-control" id="id" name="id" value="<?= $submission['id'] ?>" hidden>
                            <small class="text-danger"><?= form_error('username'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $user['username'] ?>" readonly>
                            </div>
                            <small class="text-danger"><?= form_error('title'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?= $submission['title'] ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-map-marker-alt"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <small class="text-danger"><?= form_error('lect2'); ?></small>
                                    <div class="input-group mb-3">
                                        <select class="custom-select select2" id="lect2" name="lect2">
                                            <option value="" disabled>- Select your first lecturers -</option>
                                            <?php foreach ($lecturers as $ltc) : ?>
                                                <?php if ($submission['lect2'] == $ltc['lecturers']) : ?>
                                                    <option value="<?= $ltc['lecturers']; ?>" selected><?= $ltc['lecturers']; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $ltc['lecturers']; ?>"><?= $ltc['lecturers']; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <small class="text-danger"><?= form_error('lect3'); ?></small>
                                    <div class="input-group mb-3">
                                        <select class="custom-select select2" id="lect3" name="lect3">
                                            <option value="" disabled>- Select your second lecturers -</option>
                                            <?php foreach ($lecturers as $ltc) : ?>
                                                <?php if ($submission['lect3'] == $ltc['lecturers']) : ?>
                                                    <option value="<?= $ltc['lecturers']; ?>" selected><?= $ltc['lecturers']; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $ltc['lecturers']; ?>"><?= $ltc['lecturers']; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger"><?= form_error('file'); ?></small>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="file" name="file">
                                    <label class="custom-file-label" for="file">Choose File</label>
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