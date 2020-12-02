<footer class="main-footer hilang">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2020 <a href="<?= base_url(); ?>">SIPTAS Politeknik Dharma Patria</a>.</strong> All rights
    reserved.
</footer>
</div>

<!-- Script Upload Image -->
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop;
        $(this).next('.custom-file-input').addClass("selected").html(fileName);
    });
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
<!-- ./wrapper -->
<!-- SweetAlert2 -->
<script src="<?= base_url('assets/'); ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- jQuery -->
<script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets/'); ?>plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url('assets/'); ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url('assets/'); ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url('assets/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url('assets/'); ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url('assets/'); ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url('assets/'); ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/'); ?>dist/js/demo.js"></script>

<!-- Table Page Script  -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

<!-- Delete Data -->
<script>
$('.delete-data').on('click', function(e){
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
        title: 'Are you sure ?',
        text: "You will not be able to recover this data",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
	}).then((result) => {
        if (result.value) {
            window.location.href = url;
        }
	})
});
</script>

<!-- Logout Script -->
<script>
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'middle',
            showConfirmButton: true,
            timer: 300
        });
        $("#logout").on("click", function() {
            Swal.fire({
                title: 'Do you want to logout?',
                icon: 'question',
                showCancelButton: true
            }).then((result) => {
                if (result.value === true) {
                    $('#logoutform').submit() // this submits the form 
                }
            })
        })
    });
</script>

<script>
    $(function() {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Initialize Select2 Elements
        $(".select2bs4").select2({
            theme: "bootstrap4",
        });

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {
            placeholder: "dd/mm/yyyy"
        });
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {
            placeholder: "mm/dd/yyyy"
        });
        $("[data-mask]").inputmask();
    });
</script>

<script>
    $('.custom-file-input').on('change', function() {
        let filename = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(filename);
    });
</script>


</body>

</html>