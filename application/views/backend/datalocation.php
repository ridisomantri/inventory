<?php $this->load->view('template/meta'); ?>

<div class="wrapper">
    <?php $this->load->view('template/navbar'); ?>
    <?php $this->load->view('template/sidebar'); ?>
    <!-- <?php $this->load->view('template/footer'); ?> -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><?= $judul_halaman ?></h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active"><?= $judul_halaman ?></li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->

        <div class="col lg 6">

            <div class="card-body">
                <div class="row mb-3">
                    <div class="col md 6">
                        <a href="<?= base_url()?>admin/datalocation/adddata" class="btn btn-primary">Add Data</a>
                    </div>
                </div>
                <table
                    id="datatbl"
                    class="table table-striped table-bordered"
                    style="width:100% ">

                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Location Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; 
                            foreach ($location as $loc) : ?>
                        <tr >

                            <td ><?= $no++; ?></td>
                            <td ><?= $loc['LOCATIONNAME'] ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<?php $this->load->view('template/js'); ?>

<script>
$(document).ready(function () {
    $('#datatbl').DataTable({
        //dom: 'Bfrtip',
        dom: '<"top"lBf>rt<"bottom"pi><"clear">',
        paging: 'false',
        pagingtype: 'simple_numbers',
        info: 'false',

        buttons: [
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            }, {
                extend: 'excel',
                exportOptions: {
                    columns: ':visible'
                }
            }, {
                extend: 'pdf',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis'
        ]
    });
});
</script>

</body>
</html>