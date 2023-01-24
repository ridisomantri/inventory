<?php $this->load->view('template/meta'); ?>

<div class="wrapper">
    <?php $this->load->view('template/navbar'); ?>
    <?php $this->load->view('template/sidebar'); ?>
    <!-- <?php $this->load->view('template/footer'); ?> -->
    <?php $this->load->view('template/titlebreadcumb'); ?>

    <!-- /.content-header -->

    <!-- Main content -->
    <!-- <div class="col lg 6" responsive="true"> -->
    <div class="card">

        <div class="card-header">
            <div class="row sm-small">
                <div class="col-4 ">ASSET DETAIL</div>

                <div class="col-4">
                    <a href="" class="btn btn-primary">Update Data</a>
                </div>
            </div>

        </div>

        <div class="card-body">
            <div class="row sm-small">
                <div class="col-4 ">ID Comp</div>
                <div class="col-6"><?= $inventory['IDCOMP01']?></div>
            </div>
            <div class="row sm-small">
                <div class="col-4 ">Code</div>
                <div class="col-6"><?= $inventory['CODE']?></div>
            </div>
            <div class="row sm-small">
                <div class="col-4">User</div>
                <div class="col-6"><?= $inventory['USERCOMP']?></div>
            </div>
            <div class="row sm-small">
                <div class="col-4">IP Number</div>
                <div class="col-6"><?= $inventory['IPCOMP']?></div>
            </div>
            <div class="row sm-small">
                <div class="col-4">Departmen</div>
                <div class="col-6"><?= $inventory['DEPARTMENT']?></div>
            </div>
            <div class="row sm-small">
                <div class="col-4">LOCATION</div>
                <div class="col-6"><?= $inventory['LOCATION']?></div>
            </div>
            <div class="row sm-small">
                <div class="col-4">ASSET TYPE</div>
                <div class="col-6"><?= $inventory['TYPECOMP']?></div>
            </div>

        </div>
        <!-- Table Detail Asset -->
            <div class="col-4">
                <button
                    type="button"
                    class="btn btn-primary"
                    data-toggle="modal"
                    data-target="#getdatasparepart">
                    Add Sparepart
                </button>
            </div>
        <!-- Button trigger modal -->

        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NO.</th>
                        <th scope="col">NAME</th>
                        <th scope="col">BRAND</th>
                        <th scope="col">TYPE</th>
                        <th scope="col">SIZE</th>
                        <th scope="col">MOVE TO</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1; 
                foreach ($inventorydetail as $inv) : ?>
                    <tr>
                        <td><?= $inv['IDCOMP01']?></td>
                        <td><?= $no++?></td>
                        <td><?= $inv['SPNAME']?></td>
                        <td><?= $inv['SPBRAND']?></td>
                        <td><?= $inv['SPTYPE']?></td>
                        <td><?= $inv['SPSIZE']?></td>
                        <td>
                            <button href="<?= base_url()?>" type="button" class="btn btn-primary btn-sm">store</button>
                            <button href="<?= base_url()?>" type="button" class="btn btn-danger btn-sm">garbage</button>
                          
                       
                    </tr>
                 <?php endforeach; ?>   
                </tbody>
            </table>

           

        </div>

    </div>

</div>
</div>
<!-- </div> -->
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- Modal SparepartStock-->
<div class="modal fade" id="getdatasparepart" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Sparepart Stock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo form_open_multipart('admin/Datainventory/adddetailasset'); ?>
      <table class="table table-hover" id="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Serialno</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Size</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; 
                foreach($sparepart as $part) : ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $part['serialno']?></td>
                <td><?= $part['sparepart_name']?></td>
                <td><?= $part['invtype']?></td>
                <td><?= $part['invsize']?></td>
                <td><button href="" type="submit" class="btn btn-success btn-xs" 
                    id="select"
                    data-idcomp01="<?= $inv['IDCOMP01']?>"
                    data-spbrand="<?= $part['brand']?>"
                    data-spname="<?= $part['sparepart_name']?>"
                    data-sptype="<?= $part['invtype']?>"
                    data-spsize="<?= $part['invsize']?>"
                    data-spserial="<?= $part['serialno']?>"
                    >select</button></td>
                
            </tr>
            <?php endforeach; ?>
            
        </tbody>
        </table>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('template/js'); ?>

<script>
$(document).ready(function () {
    $('#table').DataTable({
        dom: 'lfrtp',
        // dom: '<"top"lBf>rt<"bottom"pi><"clear">',
        paging: 'false',
        pagingtype: 'simple_numbers',
        info: 'false'    
    });
});
</script>

</body>
</html>