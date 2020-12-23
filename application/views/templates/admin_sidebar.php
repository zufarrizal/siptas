<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin'); ?>" class="brand-link">
        <img src="<?= base_url('assets/'); ?>dist/img/LOGO_SIPTAS.png" alt="LOGO SIPTAS" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">SIPTAS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/dist/img/profile/') . $user['image']; ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $user['fullname']; ?></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <?php if ($title == 'Dashboard') : ?>
                    <li class="nav-item">
                        <a href="<?= base_url('admin'); ?>" class="nav-link active">
                        <?php else : ?>
                    <li class="nav-item">
                        <a href="<?= base_url('admin'); ?>" class="nav-link">
                        <?php endif; ?>
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                        </a>
                    </li>
                    <?php if ($HeadTitle == 'Direktur') : ?>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                            <?php else : ?>
                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link">

                            <?php endif; ?>
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Direktur
                                <i class="fas fa-angle-left right"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <?php if ($title == 'Direktur') : ?>
                                        <a href="<?= base_url('admin/admin'); ?>" class="nav-link active">
                                        <?php else : ?>
                                            <a href="<?= base_url('admin/admin'); ?>" class="nav-link">
                                            <?php endif; ?>
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Direktur</p>
                                            </a>
                                </li>
                                <li class="nav-item">
                                    <?php if ($title == 'Add Direktur') : ?>
                                        <a href="<?= base_url('admin/addadmin'); ?>" class="nav-link active">
                                        <?php else : ?>
                                            <a href="<?= base_url('admin/addadmin'); ?>" class="nav-link">
                                            <?php endif; ?>
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add Direktur</p>
                                            </a>
                                </li>
                            </ul>
                        </li>
                        <?php if ($HeadTitle == 'Staff') : ?>
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                <?php else : ?>
                            <li class="nav-item has-treeview menu-close">
                                <a href="#" class="nav-link">
                                <?php endif; ?>
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Staff
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <?php if ($title == 'Data Staff') : ?>
                                            <a href="<?= base_url('admin/staff'); ?>" class="nav-link active">
                                            <?php else : ?>
                                                <a href="<?= base_url('admin/staff'); ?>" class="nav-link">
                                                <?php endif; ?>
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Data Staff</p>
                                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <?php if ($title == 'Add Staff') : ?>
                                            <a href="<?= base_url('admin/addstaff'); ?>" class="nav-link active">
                                            <?php else : ?>
                                                <a href="<?= base_url('admin/addstaff'); ?>" class="nav-link">
                                                <?php endif; ?>
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Add Staff</p>
                                                </a>
                                    </li>
                                </ul>
                            </li>
                            <?php if ($HeadTitle == 'Student') : ?>
                                <li class="nav-item has-treeview menu-open">
                                    <a href="#" class="nav-link active">
                                    <?php else : ?>
                                <li class="nav-item has-treeview menu-close">
                                    <a href="#" class="nav-link">
                                    <?php endif; ?>
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Student
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <?php if ($title == 'Data Student') : ?>
                                                <a href="<?= base_url('admin/student'); ?>" class="nav-link active">
                                                <?php else : ?>
                                                    <a href="<?= base_url('admin/student'); ?>" class="nav-link">
                                                    <?php endif; ?>
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Data Student</p>
                                                    </a>
                                        </li>
                                        <li class="nav-item">
                                            <?php if ($title == 'Add Student') : ?>
                                                <a href="<?= base_url('admin/addstudent'); ?>" class="nav-link active">
                                                <?php else : ?>
                                                    <a href="<?= base_url('admin/addstudent'); ?>" class="nav-link">
                                                    <?php endif; ?>
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Add Student</p>
                                                    </a>
                                        </li>
                                    </ul>
                                </li>
                                <?php if ($HeadTitle == 'Class') : ?>
                                    <li class="nav-item has-treeview menu-open">
                                        <a href="#" class="nav-link active">
                                        <?php else : ?>
                                    <li class="nav-item has-treeview menu-close">
                                        <a href="#" class="nav-link">
                                        <?php endif; ?>
                                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                        <p>
                                            Class
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <?php if ($title == 'Data Class') : ?>
                                                    <a href="<?= base_url('admin/class'); ?>" class="nav-link active">
                                                    <?php else : ?>
                                                        <a href="<?= base_url('admin/class'); ?>" class="nav-link">
                                                        <?php endif; ?>
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Data Class</p>
                                                        </a>
                                            </li>
                                            <li class="nav-item">
                                                <?php if ($title == 'Add Class') : ?>
                                                    <a href="<?= base_url('admin/addclass'); ?>" class="nav-link active">
                                                    <?php else : ?>
                                                        <a href="<?= base_url('admin/addclass'); ?>" class="nav-link">
                                                        <?php endif; ?>
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Add Class</p>
                                                        </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php if ($HeadTitle == 'Study') : ?>
                                        <li class="nav-item has-treeview menu-open">
                                            <a href="#" class="nav-link active">
                                            <?php else : ?>
                                        <li class="nav-item has-treeview menu-close">
                                            <a href="#" class="nav-link">
                                            <?php endif; ?>
                                            <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                            <p>
                                                Study
                                                <i class="fas fa-angle-left right"></i>
                                            </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <?php if ($title == 'Data Study') : ?>
                                                        <a href="<?= base_url('admin/study'); ?>" class="nav-link active">
                                                        <?php else : ?>
                                                            <a href="<?= base_url('admin/study'); ?>" class="nav-link">
                                                            <?php endif; ?>
                                                            <i class="far fa-circle nav-icon"></i>
                                                            <p>Data Study</p>
                                                            </a>
                                                </li>
                                                <li class="nav-item">
                                                    <?php if ($title == 'Add Study') : ?>
                                                        <a href="<?= base_url('admin/addstudy'); ?>" class="nav-link active">
                                                        <?php else : ?>
                                                            <a href="<?= base_url('admin/addstudy'); ?>" class="nav-link">
                                                            <?php endif; ?>
                                                            <i class="far fa-circle nav-icon"></i>
                                                            <p>Add Study</p>
                                                            </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <?php if ($HeadTitle == 'Lecturers') : ?>
                                            <li class="nav-item has-treeview menu-open">
                                                <a href="#" class="nav-link active">
                                                <?php else : ?>
                                            <li class="nav-item has-treeview menu-close">
                                                <a href="#" class="nav-link">
                                                <?php endif; ?>
                                                <i class="nav-icon fas fa-user"></i>
                                                <p>
                                                    Lecturers
                                                    <i class="fas fa-angle-left right"></i>
                                                </p>
                                                </a>
                                                <ul class="nav nav-treeview">
                                                    <li class="nav-item">
                                                        <?php if ($title == 'Data Lecturers') : ?>
                                                            <a href="<?= base_url('admin/lecturers'); ?>" class="nav-link active">
                                                            <?php else : ?>
                                                                <a href="<?= base_url('admin/lecturers'); ?>" class="nav-link">
                                                                <?php endif; ?>
                                                                <i class="far fa-circle nav-icon"></i>
                                                                <p>Data Lecturers</p>
                                                                </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <?php if ($title == 'Add Lecturers') : ?>
                                                            <a href="<?= base_url('admin/addlecturers'); ?>" class="nav-link active">
                                                            <?php else : ?>
                                                                <a href="<?= base_url('admin/addlecturers'); ?>" class="nav-link">
                                                                <?php endif; ?>
                                                                <i class="far fa-circle nav-icon"></i>
                                                                <p>Add Lecturers</p>
                                                                </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <?php if ($HeadTitle == 'Titles') : ?>
                                                <li class="nav-item has-treeview menu-open">
                                                    <a href="#" class="nav-link active">
                                                    <?php else : ?>
                                                <li class="nav-item has-treeview menu-close">
                                                    <a href="#" class="nav-link">
                                                    <?php endif; ?>
                                                    <i class="nav-icon fas fa-journal-whills"></i>
                                                    <p>
                                                        Titles Available
                                                        <i class="fas fa-angle-left right"></i>
                                                    </p>
                                                    </a>
                                                    <ul class="nav nav-treeview">
                                                        <li class="nav-item">
                                                            <?php if ($title == 'Data Titles') : ?>
                                                                <a href="<?= base_url('admin/titles'); ?>" class="nav-link active">
                                                                <?php else : ?>
                                                                    <a href="<?= base_url('admin/titles'); ?>" class="nav-link">
                                                                    <?php endif; ?>
                                                                    <i class="far fa-circle nav-icon"></i>
                                                                    <p>Data Titles</p>
                                                                    </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <?php if ($title == 'Add Titles') : ?>
                                                                <a href="<?= base_url('admin/addtitles'); ?>" class="nav-link active">
                                                                <?php else : ?>
                                                                    <a href="<?= base_url('admin/addtitles'); ?>" class="nav-link">
                                                                    <?php endif; ?>
                                                                    <i class="far fa-circle nav-icon"></i>
                                                                    <p>Add Titles</p>
                                                                    </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <?php if ($HeadTitle == 'Submission') : ?>
                                                    <li class="nav-item has-treeview menu-open">
                                                        <a href="#" class="nav-link active">
                                                        <?php else : ?>
                                                    <li class="nav-item has-treeview menu-close">
                                                        <a href="#" class="nav-link">
                                                        <?php endif; ?>
                                                        <i class="nav-icon fas fa-file-import"></i>
                                                        <p>
                                                            Submission
                                                            <i class="fas fa-angle-left right"></i>
                                                        </p>
                                                        </a>
                                                        <ul class="nav nav-treeview">
                                                            <li class="nav-item">
                                                                <?php if ($title == 'Data Submission') : ?>
                                                                    <a href="<?= base_url('admin/submission'); ?>" class="nav-link active">
                                                                    <?php else : ?>
                                                                        <a href="<?= base_url('admin/submission'); ?>" class="nav-link">
                                                                        <?php endif; ?>
                                                                        <i class="far fa-circle nav-icon"></i>
                                                                        <p>Data Submission</p>
                                                                        </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <?php if ($title == 'Add Submission') : ?>
                                                                    <a href="<?= base_url('admin/addsubmission'); ?>" class="nav-link active">
                                                                    <?php else : ?>
                                                                        <a href="<?= base_url('admin/addsubmission'); ?>" class="nav-link">
                                                                        <?php endif; ?>
                                                                        <i class="far fa-circle nav-icon"></i>
                                                                        <p>Add Submission</p>
                                                                        </a>
                                                            </li>
                                                        </ul>
                                                    </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><?= $HeadTitle; ?></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>