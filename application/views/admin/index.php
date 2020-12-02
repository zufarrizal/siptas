<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-6 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><a href="<?= base_url('admin/student') ?>"><i class="fas fa-users"></i></a></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Student</span>
                        <span class="info-box-number">
                            <?= $HStudent; ?>
                            <small>User</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-6 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><a href="<?= base_url('admin/admin') ?>"><i class="fas fa-user"></i></a></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Admin</span>
                        <span class="info-box-number">
                            <?= $HAdmin; ?>
                            <small>User</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-6 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('admin/staff') ?>"><i class="fas fa-user"></i></a></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Staff</span>
                        <span class="info-box-number">
                            <?= $HStaff; ?>
                            <small>User</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-6 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('admin/class') ?>"><i class="fas fa-chalkboard-teacher"></i></a></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Class</span>
                        <span class="info-box-number">
                            <?= $HClass; ?>
                            <small>Data</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Info boxes -->
        <div class="row">
            <div class="col-6 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><a href="<?= base_url('admin/lecturers') ?>"><i class="fas fa-users"></i></a></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Lecturers</span>
                        <span class="info-box-number">
                            <?= $HLecturers; ?>
                            <small>Lecturers</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-6 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><a href="<?= base_url('admin/titles') ?>"><i class="fas fa-journal-whills"></i></a></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Title</span>
                        <span class="info-box-number">
                            <?= $HTitle; ?>
                            <small>Title</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-6 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><a href="<?= base_url('admin/submission') ?>"><i class="fas fa-journal-whills"></i></a></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Submission</span>
                        <span class="info-box-number">
                            <?= $HSubmission; ?>
                            <small>Title</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-6 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><a href="<?= base_url('admin/study') ?>"><i class="fas fa-chalkboard-teacher"></i></a></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Program Study</span>
                        <span class="info-box-number">
                            <?= $HStudy; ?>
                            <small>Data</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-4">
                <!-- USERS LIST -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Latest Join</h3>

                        <div class="card-tools">
                            <span class="badge badge-success"> New Members</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <ul class="users-list clearfix">
                            <?php $i = 0;
                            foreach ($student as $std) : ?>
                                <li>
                                    <img src="<?= base_url('assets/dist/img/profile/') . $std['image']; ?>" alt="User Image">
                                    <a class="users-list-name" href="<?= base_url('admin/editstudent/') . $std['id']; ?>"><?= $std['fullname']; ?></a>
                                    <span class="users-list-date"><?= date('d F Y ', $std['date_created']); ?></span>
                                </li>
                            <?php if (++$i == 8) break;
                            endforeach; ?>

                        </ul>
                        <!-- /.users-list -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                        <a href="<?= base_url('admin/student') ?>">View All Users</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!--/.card -->
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