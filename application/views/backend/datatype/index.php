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
                        <!-- <a href="<?= base_url()?>admin/Datatype/tambahdata" class="btn btn-primary">Add Data</a> -->
                        <button
                            type="button"
                            class="btn btn-primary"
                            data-toggle="modal"
                            data-target="#exampleModal">
                            Add Asset Type
                        </button>

                    </div>

                </div>
                <table
                    id="datatbl"
                    class="table table-striped table-bordered"
                    style="width:100% ">

                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Type Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; 
                            foreach ($invtype as $type) : ?>
                        <tr >

                            <td ><?= $no++; ?></td>
                            <td ><?= $type['typename'] ?></td>

                            <td >
                                <a href="" class="btn btn-primary btn-sm">edit</span></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Add Modal -->
    <!-- <button
        type="button"
        class="btn btn-primary"
        data-toggle="modal"
        data-target="#exampleModal">
        Add Asset Type
    </button> -->

    <!-- Modal -->
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Asset Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('admin/datatype/tambahdata'); ?>
                    <div class="container">

                        <div class="card-body">
                            <?php if (validation_errors() ) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                            <?php endif; ?>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="nama">Type Name</label>
                                    <input type="text" name="typename" class="form-control" id="typename">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="adddata" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Add Modal -->
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
        ],
        columnDefs: [
            {
                targets: -1,
                visible: false
            }
        ]

    });
});
</script>

</body>
</html>