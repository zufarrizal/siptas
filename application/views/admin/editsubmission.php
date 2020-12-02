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
                        <?= $this->session->flashdata('message'); ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="text" class="form-control" id="id" name="id" value="<?= $submission['id'] ?>" hidden>
                            <small class="text-danger"><?= form_error('username'); ?></small>
                            <div class="input-group mb-3">
                                <select class="custom-select select2" id="username" name="username">
                                    <?php foreach ($student as $std) : ?>
                                        <?php if ($submission['username'] == $std['username']) : ?>
                                            <option value="<?= $std['username']; ?>" selected><?= $std['username']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $std['username']; ?>"><?= $std['username']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <small class="text-danger"><?= form_error('title'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?= $submission['title']; ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-journal-whills"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger"><?= form_error('year'); ?></small>
                            <div class="input-group mb-3">
                                <select class="custom-select select2" id="year" name="year">
                                    <option value="" disabled>- Select Year Submission -</option>
                                    <?php for ($i = 0; $i <= 40; $i++) {
                                        $year = date('Y') - $i;
                                        if ($submission['year'] == $year) {
                                            echo '<option value=' . $year . ' selected>' . $year . '</option>';
                                        } else {
                                            echo '<option value=' . $year . ' >' . $year . '</option>';
                                        }
                                    } ?>
                                </select>
                            </div>
                            <small class="text-danger"><?= form_error('lecturers'); ?></small>
                            <div class="input-group mb-3">
                                <select class="custom-select select2" id="lecturers" name="lecturers">
                                    <option value="" disabled selected>- Choose one of the selected lecturers -</option>
                                    <?php foreach ($lecturers as $ltc) : ?>
                                        <?php if ($submission['lecturers'] == $ltc['lecturers']) : ?>
                                            <option value="<?= $ltc['lecturers']; ?>" selected><?= $ltc['lecturers']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $ltc['lecturers']; ?>"><?= $ltc['lecturers']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <small class="text-danger"><?= form_error('lect2'); ?></small>
                                    <div class="input-group mb-3">
                                        <select class="custom-select select2" id="lect2" name="lect2">
                                            <option value="" disabled>- Select your lecturers 2 -</option>
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
                                            <option value="" disabled>- Select your lecturers 3 -</option>
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($student as $std) : ?>
                                    <tr>
                                        <td><?= $std['username'] ?></td>
                                        <td><?= $std['fullname'] ?></td>
                                        <td><?= $std['class'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Username</th>
                                    <th>Full Name</th>
                                    <th>Class</th>
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