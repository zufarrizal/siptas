<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Add Submission</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <small class="text-danger"><?= form_error('username'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $user['username'] ?>" readonly>
                            </div>
                            <small class="text-danger"><?= form_error('title'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?= set_value('title') ?>" value="<?= set_value('title'); ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-map-marker-alt"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger"><?= form_error('year'); ?></small>
                            <div class="input-group mb-3">
                                <select class="custom-select select2" id="year" name="year">
                                    <option value="" disabled selected>- Select Year Submission -</option>
                                    <?php for ($i = 0; $i <= 40; $i++) {
                                        $year = date('Y') - $i;
                                        if ($student['year'] == $year) {
                                            echo '<option value=' . $year . ' selected>' . $year . '</option>';
                                        } else {
                                            echo '<option value=' . $year . ' >' . $year . '</option>';
                                        }
                                    } ?>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <small class="text-danger"><?= form_error('lect2'); ?></small>
                                    <div class="input-group mb-3">
                                        <select class="custom-select select2" id="lect2" name="lect2">
                                            <option value="" disabled selected>- Select your first lecturers -</option>
                                            <?php foreach ($lecturers as $ltr) : ?>
                                                <option value="<?= $ltr['lecturers']; ?>"><?= $ltr['lecturers']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <small class="text-danger"><?= form_error('lect3'); ?></small>
                                    <div class="input-group mb-3">
                                        <select class="custom-select select2" id="lect3" name="lect3">
                                            <option value="" disabled selected>- Select your second lecturers -</option>
                                            <?php foreach ($lecturers as $ltr) : ?>
                                                <option value="<?= $ltr['lecturers']; ?>"><?= $ltr['lecturers']; ?></option>
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