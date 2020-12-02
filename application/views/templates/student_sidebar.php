<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('student'); ?>" class="brand-link">
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
                <?php if ($title == 'Student') : ?>
                    <li class="nav-item">
                        <a href="<?= base_url('student'); ?>" class="nav-link active">
                        <?php else : ?>
                    <li class="nav-item">
                        <a href="<?= base_url('student'); ?>" class="nav-link">
                        <?php endif; ?>
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Student
                        </p>
                        </a>
                    </li>
                    <?php if ($HeadTitle == 'Submission') : ?>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                            <?php else : ?>
                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link">
                            <?php endif; ?>
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Submission
                                <i class="fas fa-angle-left right"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <?php if ($title == 'Data Submission') : ?>
                                        <a href="<?= base_url('student/submission'); ?>" class="nav-link active">
                                        <?php else : ?>
                                            <a href="<?= base_url('student/submission'); ?>" class="nav-link">
                                            <?php endif; ?>
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Submission</p>
                                            </a>
                                </li>
                                <li class="nav-item">
                                    <?php if ($title == 'Add Submission') : ?>
                                        <a href="<?= base_url('student/addsubmission'); ?>" class="nav-link active">
                                        <?php else : ?>
                                            <a href="<?= base_url('student/addsubmission'); ?>" class="nav-link">
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