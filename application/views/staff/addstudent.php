<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Add Student</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <small class="text-danger"><?= form_error('username'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-barcode"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger"><?= form_error('name'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger"><?= form_error('email'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="gender" name="gender">
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <select class="custom-select select2" id="class" name="class">
                                            <?php foreach ($class as $cl) : ?>
                                                <option value="<?= $cl['class']; ?>"><?= $cl['class']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <select class="custom-select select2" id="year" name="year">
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
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <small class="text-danger"><?= form_error('city'); ?></small>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="city" name="city" placeholder="City" value="<?= set_value('city'); ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-city"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3 date" id="reservationdate" data-target-input="nearest" >
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" id="birthdate" name="birthdate" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask value="<?= set_value('birthdate'); ?>"/>
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger"><?= form_error('address'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?= set_value('address'); ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-map-marker-alt"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger"><?= form_error('phone'); ?></small>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="<?= set_value('phone'); ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger"><?= form_error('password'); ?></small>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
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