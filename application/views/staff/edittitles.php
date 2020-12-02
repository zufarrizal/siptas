<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Titles</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="" method="POST">

                            <input type="text" class="form-control" id="id" name="id" value="<?= $titles['id']; ?>" hidden>
                            <small class="text-danger"><?= form_error('title'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?= $titles['title']; ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-journal-whills"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger"><?= form_error('study'); ?></small>
                            <div class="input-group mb-3">
                                <select class="custom-select select2" id="study" name="study">
                                    <?php foreach ($study as $std) : ?>
                                        <?php if ($title['study'] == $std['study']) : ?>
                                            <option value="<?= $std['study']; ?>" selected><?= $std['study']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $std['study']; ?>"><?= $std['study']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
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