    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Export by Lecturers & Year</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= base_url('Admin/Excel_ly') ?>" method="POST">
                                <small class="text-danger"><?= form_error('lecturers'); ?></small>
                                <div class="input-group mb-3">
                                    <select class="custom-select select2" id="lecturers" name="lecturers">
                                        <?php foreach ($lecturers as $ltc) : ?>
                                            <option value="<?= $ltc['lecturers']; ?>"><?= $ltc['lecturers']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <select class="custom-select select2" id="year" name="year">
                                        <?php foreach ($submission as $sub) : ?>
                                            <?php if ($lastYear != $sub['year']) : ?>
                                                <option value="<?= $sub['year']; ?>"><?= $sub['year']; ?></option>
                                            <?php endif; ?>
                                            <?php $lastYear = $sub['year']; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <button type="submit" class="btn btn-primary btn-block">Export</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Export by Class & Year</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= base_url('Admin/Excel_class') ?>" method="POST">
                                <div class="input-group mb-3">
                                    <select class="custom-select select2" id="class" name="class">
                                        <?php foreach ($submission as $sub) : ?>
                                            <?php if ($lastClass != $sub['class']) : ?>
                                                <option value="<?= $sub['class']; ?>"><?= $sub['class']; ?></option>
                                            <?php endif; ?>
                                            <?php $lastClass = $sub['class']; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <select class="custom-select select2" id="year3" name="year">
                                        <?php foreach ($submission as $sub) : ?>
                                            <?php if ($lastYear3 != $sub['year']) : ?>
                                                <option value="<?= $sub['year']; ?>"><?= $sub['year']; ?></option>
                                            <?php endif; ?>
                                            <?php $lastYear3 = $sub['year']; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <button type="submit" class="btn btn-primary btn-block">Export</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Export by Study & Year</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= base_url('Admin/Excel_study') ?>" method="POST">
                                <div class="input-group mb-3">
                                    <select class="custom-select select2" id="study" name="study">
                                        <?php foreach ($study as $std) : ?>
                                            <?php if ($lastStudy != $std['study']) : ?>
                                                <option value="<?= $std['study']; ?>"><?= $std['study']; ?></option>
                                            <?php endif; ?>
                                            <?php $lastStudy = $std['study']; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <select class="custom-select select2" id="year4" name="year">
                                        <?php foreach ($submission as $sub) : ?>
                                            <?php if ($lastYear4 != $sub['year']) : ?>
                                                <option value="<?= $sub['year']; ?>"><?= $sub['year']; ?></option>
                                            <?php endif; ?>
                                            <?php $lastYear4 = $sub['year']; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <button type="submit" class="btn btn-primary btn-block">Export</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Export by Year</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= base_url('Admin/Excel_year') ?>" method="POST">
                                <div class="input-group mb-3">
                                    <select class="custom-select select2" id="year2" name="year">
                                        <?php foreach ($submission as $sub) : ?>
                                            <?php if ($lastYear2 != $sub['year']) : ?>
                                                <option value="<?= $sub['year']; ?>"><?= $sub['year']; ?></option>
                                            <?php endif; ?>
                                            <?php $lastYear2 = $sub['year']; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <button type="submit" class="btn btn-primary btn-block">Export</button>
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