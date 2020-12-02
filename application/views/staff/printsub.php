<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header rounded bg-purple p-3">
                        <i class="fas fa-globe"></i> <strong>SIPTAS</strong> Politeknik Dharma Patria Kebumen.
                        <a class="float-right" style="text-decoration: none;"><?= 'Date : ' . date('d/m/yy');  ?></a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <h4 class="">DIGITAL REPORT</h4>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <address>
                                    <strong>Politeknik Dharma Patria Kebumen</strong><br />
                                    Jl. Letnan Jenderal Suprapto No.73 <br />
                                    Kec. Kebumen, Kab. Kebumen 54311<br />
                                    <strong>Phone :</strong> (0287) 381 116<br />
                                    <strong>Website :</strong> politeknik-kebumen.ac.id
                                </address>
                            </div>
                            <!-- /.col -->
                            <?php
                            $studentq = $this->db->get('student')->row_array();
                            if ($submission['username'] == $studentq['username']) : ?>
                                <div class="col-sm-4 invoice-col">
                                    <address>
                                        <strong><?= $studentq['fullname']; ?></strong> <?= $studentq['username']; ?><br />
                                        <?= $studentq['address']; ?><br />
                                        <strong>Class : </strong> <?= $studentq['class'] . ' ' . $studentq['year'] ?><br />
                                        <strong>Phone : </strong> <?= $studentq['phone']; ?><br />
                                        <strong>Email : </strong> <?= $studentq['email']; ?><br />
                                    </address>
                                </div>

                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <b>Report Submission #<?= $submission['id']; ?></b><br />
                                    <strong>Status :
                                        <?php if ($submission['approval'] == 1) : ?>
                                    </strong> Approved <i class="fas fa-check"></i><br />
                                <?php elseif ($submission['approval'] == 2) : ?>
                                    </strong> Revision <i class="fas fa-times"></i><br />
                                <?php else : ?>
                                    </strong> Being Checked <i class="fas fa-search"></i><br />
                                <?php endif; ?>

                                <img width="90" src="<?= base_url('assets/dist/img/profile/') . $studentq['image']; ?>" class="elevation-2 sm" alt="User Image">
                                </div>
                                <!-- /.col -->
                            <?php endif; ?>
                        </div>
                        <!-- /.row -->
                        <hr>
                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="form">
                                    <tbody>
                                        <tr>
                                            <td class="p-2">NPM </td>
                                            <td>: <?= $submission['username']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="p-2">Full Name </td>
                                            <td>: <?= $submission['fullname']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="p-2">Title </td>
                                            <td>: <?= $submission['title']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="p-2">Program Study </td>
                                            <td>: <?= $submission['study']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="p-2">Lecturers </td>
                                            <td>: <?= $submission['lecturers']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="p-2">Date Created </td>
                                            <td>: <?= date('d F Y ', $submission['date_created']); ?></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <hr>
                        <div class="row invoice-info">
                            <div class="col-sm-3 invoice-col text-center">
                                <br>
                                <address>
                                    <strong>Directur</strong>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <b> ( ............................... )</b>
                                </address>
                            </div>
                            <div class="col-sm-3 invoice-col text-center">
                                <br>
                                <address>
                                    <strong>Academic</strong>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <b> ( ............................... )</b>
                                </address>
                            </div>
                            <div class="col-sm-3 invoice-col text-center">
                                <br>
                                <address>
                                    <strong>Lecturers</strong>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <b> ( <?= $submission['lecturers']; ?> )</b>
                                </address>
                            </div>
                            <div class="col-sm-3 invoice-col text-center">
                                Kebumen, <?= date('d F Y '); ?>
                                <address>
                                    <strong>Student</strong>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <b>( <?= $submission['fullname']; ?> )</b>
                                </address>
                            </div>
                            <!-- /.col -->
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <div class="rounded bg-purple p-3"></div>
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

<style>
    @media print {
        .hilang {
            display: none;
        }
    }
</style>

<script type="text/javascript">
    window.addEventListener("load", window.print());
</script>