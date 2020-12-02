<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Add Titles</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="" method="POST">
                            <small class="text-danger"><?= form_error('title'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?= set_value('title'); ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-barcode"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger"><?= form_error('study'); ?></small>
                            <div class="input-group mb-3">
                                <select class="custom-select select2" id="study" name="study">
                                    <?php foreach ($study as $std) : ?>
                                        <option value="<?= $std['study']; ?>"><?= $std['study']; ?></option>
                                    <?php endforeach; ?>
                                </select>
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