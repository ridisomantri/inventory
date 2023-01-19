<?php $this->load->view('template/meta'); ?>

<div class="wrapper">
    <?php $this->load->view('template/navbar'); ?>
    <?php $this->load->view('template/sidebar'); ?>
    <!-- <?php $this->load->view('template/footer'); ?> -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" responsive="true">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><?= $judul_halaman ?></h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6" >
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
        <div class="col lg 6" responsive="true">
        <div class="card-body">
        <div class="row mb-3">
                    <div class="col md 6">
                        <a href="<?= base_url()?>admin/datalocation/adddata" class="btn btn-primary">Add Data</a>
                    </div>
                </div>
            <table
                id="datatbl"
                class="table table-striped table-bordered col-sm" 
                style="width:100% "
                responsive= "true">

                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Code</th>
                        <th>Department</th>
                        <th>IPComp</th>
                        <th>Location</th>
                        <th>Type</th>
                        <th>User</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; 
                            foreach ($inventory as $inv) : ?>
                    <tr >

                        <td ><?= $no++; ?></td>
                        <td ><?= $inv['CODE'] ?></td>
                        <td ><?= $inv['DEPARTMENT'] ?></td>
                        <td ><?= $inv['IPCOMP'] ?></td>
                        <td ><?= $inv['LOCATION'] ?></td>
                        <td ><?= $inv['TYPECOMP'] ?></td>
                        <td ><?= $inv['USERCOMP'] ?></td>
                        <td >
                            <a href="<?php base_url()?>Datainventory/viewdata()" class="fa fa-list"</a>
                            <a href="" class="fa fa-pen"</a>
                           
                        </td>
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
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':visible'
                }
            }
            ,'colvis'
        ],
        columnDefs: [ {
            targets: 2,
            visible: false},
            {targets: 4,
            visible: false},
            {targets: 5,
            visible: false} 
        ]

    });
});
</script>

</body>
</html>