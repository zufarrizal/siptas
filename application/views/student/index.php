<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/dist/img/profile/') . $user['image']; ?>" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><?= $user['fullname']; ?></h3>

                        <p class="text-muted text-center"><?php

                                                            if ($user['role_id'] == 1) {
                                                                echo 'Admin';
                                                            } elseif ($user['role_id'] == 2) {
                                                                echo 'Academic';
                                                            } else {
                                                                echo 'Student';
                                                            };

                                                            ?></p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>NPM</b> <a class="float-right"><?= $user['username']; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Email</b> <a class="float-right"><?= $user['email']; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Join Date</b> <a class="float-right"><?= date('d F Y ', $user['date_created']); ?></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-venus-mars"></i> Gender</strong>
                        <p class="text-muted"> <?= $user['gender']; ?>
                        </p>
                        <hr>
                        <strong><i class="fas fa-calendar"></i> Birthday</strong>
                        <p class="text-muted">
                            <?php $originalDate = $user['birthdate'];
                            $BirthDate = date("d F Y", strtotime($originalDate));
                            echo $user['city'] . ', ' . $BirthDate;
                            ?>
                        </p>
                        <hr>
                        <strong><i class="fas fa-book mr-1"></i> Class</strong>
                        <p class="text-muted"> <?= $user['class']; ?> <?= $user['year']; ?>
                        </p>
                        <hr>
                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>
                        <p class="text-muted"><?= $user['address']; ?></p>
                        <hr>
                        <strong><i class="far fa-file-alt mr-1"></i> Phone Number</strong>
                        <p class="text-muted"><?= $user['phone']; ?></p>
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#TitleAvailable" data-toggle="tab">Title Available</a></li>
                            <li class="nav-item"><a class="nav-link" href="#Edit" data-toggle="tab">Edit Profile</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="TitleAvailable">
                                <h3>Title Available</h3>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Program Study</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($titles as $tl) : ?>
                                            <tr>
                                                <td><?= $tl['title'] ?></td>
                                                <td><?= $tl['study'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>Program Study</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="Edit">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <small class="text-danger"><?= form_error('username'); ?></small>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $user['username']; ?>" readonly>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-barcode"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="text-danger"><?= form_error('name'); ?></small>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="<?= $user['fullname']; ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="text-danger"><?= form_error('email'); ?></small>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= $user['email']; ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="text-danger"><?= form_error('gender'); ?></small>
                                    <div class="input-group mb-3">
                                        <select class="custom-select" id="gender" name="gender">
                                            <?php if ($user['gender'] == 'Male') : ?>
                                                <option value="Male" selected>Male</option>
                                                <option value="Female">Female</option>
                                            <?php else : ?>
                                                <option value="Male">Male</option>
                                                <option value="Female" selected>Female</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <small class="text-danger"><?= form_error('class'); ?></small>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <select class="custom-select select2bs4" id="class" name="class">
                                                    <?php foreach ($class as $cl) : ?>
                                                        <?php if ($user['class'] == $cl['class']) : ?>
                                                            <option value="<?= $cl['class']; ?>" selected><?= $cl['class']; ?></option>
                                                        <?php else : ?>
                                                            <option value="<?= $cl['class']; ?>"><?= $cl['class']; ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <select class="custom-select select2bs4" id="year" name="year">
                                                    <?php for ($i = 0; $i <= 40; $i++) {
                                                        $year = date('Y') - $i;
                                                        if ($user['year'] == $year) {
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
                                                <input type="text" class="form-control" id="city" name="city" placeholder="City" value="<?= $user['city']; ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-city"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $originalDate = $user['birthdate'];
                                                $newDate = date("d/m/Y", strtotime($originalDate));
                                        ?>
                                        <div class="col-6">
                                            <div class="input-group mb-3 date" id="reservationdate" data-target-input="nearest" >
                                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" id="birthdate" name="birthdate" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask value="<?= $newDate; ?>"/>
                                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="text-danger"><?= form_error('address'); ?></small>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?= $user['address']; ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-map-marker-alt"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="text-danger"><?= form_error('phone'); ?></small>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="<?= $user['phone']; ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-phone"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/dist/img/profile/') . $user['image']; ?>" alt="User profile picture">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose File</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <button type="submit" class="btn btn-primary btn-block">Edit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->