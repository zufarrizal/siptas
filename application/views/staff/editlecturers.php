<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Lecturers</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="" method="POST">
                            <input type="text" class="form-control" id="id" name="id" value="<?= $lecturers['id']; ?>" hidden>
                            <small class="text-danger"><?= form_error('lecturers'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="lecturers" name="lecturers" placeholder="Lecturers" value="<?= $lecturers['lecturers']; ?>" readonly>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger"><?= form_error('study'); ?></small>
                            <div class="input-group mb-3">
                                <select class="custom-select select2" id="study" name="study">
                                    <?php foreach ($study as $std) : ?>
                                        <?php if ($lecturers['study'] == $std['study']) : ?>
                                            <option value="<?= $std['study']; ?>" selected><?= $std['study']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $std['study']; ?>"><?= $std['study']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <small class="text-danger"><?= form_error('phone'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="<?= $lecturers['phone']; ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
                                    </div>
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
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->