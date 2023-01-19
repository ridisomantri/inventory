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
                <table
                    id="datatbl"
                    class="table table-striped table-bordered"
                    style="width:100% ">

                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Brand Name</th>
                            <th>Sparepart Name</th>
                            <th>Serial</th>
                            <th>Type</th>
                            <th>Source</th>
                            <th>Size</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; 
                            foreach ($invstock as $stock) : ?>
                        <tr >

                            <td ><?= $no++; ?></td>
                            <td ><?= $stock['brand'] ?></td>
                            <td ><?= $stock['sparepart_name'] ?></td>
                            <td ><?= $stock['serialno'] ?></td>
                            <td ><?= $stock['invtype'] ?></td>
                            <td ><?= $stock['invsource'] ?></td>
                            <td ><?= $stock['invsize'] ?></td>
                            <td ><?= 'View' ?></td>
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
            targets: -1,
            visible: false
        } ]

    });
});
</script>

</body>
</html>