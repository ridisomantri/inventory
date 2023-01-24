<?php $this->load->view('template/meta'); ?>

<div class="wrapper">
    <?php $this->load->view('template/navbar'); ?>
    <?php $this->load->view('template/sidebar'); ?>
    <!-- <?php $this->load->view('template/footer'); ?> -->
    <?php $this->load->view('template/titlebreadcumb'); ?>

        <!-- Main content -->
        <div class="col lg 6" responsive="true">
        <div class="card-body">
        <div class="row mb-3">
                   
                    <button
                            type="button"
                            class="btn btn-primary"
                            data-toggle="modal"
                            data-target="#addasset">
                            Add Asset
                        </button>
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
                            
                            <a href="<?= base_url()?>admin/Datainventory/detail/<?= $inv['IDCOMP01']; ?>" class="btn btn-success btn-sm" role="button" aria-disabled="true">detail</a>
                            <a href="<?= base_url()?>admin/Datainventory/edit/<?= $inv['IDCOMP01']; ?>" class="btn btn-primary btn-sm" role="button" aria-disabled="true">edit</a>
                         
                           
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

<!-- Modal -->
<div
        class="modal fade"
        id="addasset"
        tabindex="-1"
        role="dialog"
        aria-labelledby="addasset"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addasset">Add Asset</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <?php echo form_open_multipart('admin/Datainventory/tambahdata'); ?>
                    <div class="container">

                        <div class="card-body">
                            <!-- <?php if (validation_errors() ) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                            <?php endif; ?> -->

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="CODE">Code</label>
                                    <input type="text" name="CODE" class="form-control" id="CODE">
                                </div>
                               
                                <div class="form-group">
                                    <label for="DEPARTMENT">Department</label>
                                        <select class="form-control" id="DEPARTMENT" name="DEPARTMENT">
                                            <?php foreach($department as $dpt) : ?>
                                            <option><?= $dpt['name']; ?></option>
                                            <? endforeach; ?>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="IPCOMP">IP Number</label>
                                    <input type="text" name="IPCOMP" class="form-control" id="IPCOMP">
                                </div>
                                <div class="form-group">
                                    <label for="LOCATION">Location</label>
                                        <select class="form-control" id="LOCATION" name="LOCATION">
                                            <?php foreach($location as $lct) : ?>
                                            <option><?= $lct['LOCATIONNAME']; ?></option>
                                            <? endforeach; ?>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="TYPECOMP">Asset Type</label>
                                        <select class="form-control" id="TYPECOMP" name="TYPECOMP">
                                            <?php foreach($type as $typ) : ?>
                                            <option><?= $typ['typename']; ?></option>
                                            <? endforeach; ?>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="USERCOMP">User</label>
                                    <input type="text" name="USERCOMP" class="form-control" id="USERCOMP">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="adddata" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Add Modal -->

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