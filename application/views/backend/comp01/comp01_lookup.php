<!doctype html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h2><b>List Comp01</b></h2>
                    <?php if ($this->session->userdata('message') != '') {?>
                    <div class="alert alert-success alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <?=$this->session->userdata('message')?> <a class="alert-link" href="#"></a>
                    </div>
                 <?php }?>
                </div>
                <div class="ibox-content">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-8">
               
            </div>
            
            
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('comp01/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" id="q" value="<?php echo @$_GET['q']; ?>">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-success" onclick="lookup('<?php echo base_url()?>comp01/lookup')" >Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered table-hover table-condensed" style="margin-bottom: 10px">
            <thead class="thead-light">
            <tr>
                <th class="text-center">No</th>
		<th class="text-center">IDCOMP01</th>
		<th class="text-center">CODE</th>
		<th class="text-center">DEPARTMENT</th>
		<th class="text-center">IPCOMP</th>
		<th class="text-center">LOCATION</th>
		<th class="text-center">TYPECOMP</th>
		<th class="text-center">USERCOMP</th>
		<th class="text-center">REMARK</th></tr>
            </thead>
			<tbody><?php
            foreach ($comp01_data as $comp01)
            {
                ?>
                <tr style="cursor: pointer">
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $comp01->IDCOMP01 ?></td>
			<td><?php echo $comp01->CODE ?></td>
			<td><?php echo $comp01->DEPARTMENT ?></td>
			<td><?php echo $comp01->IPCOMP ?></td>
			<td><?php echo $comp01->LOCATION ?></td>
			<td><?php echo $comp01->TYPECOMP ?></td>
			<td><?php echo $comp01->USERCOMP ?></td>
			<td><?php echo $comp01->REMARK ?></td>
		</tr>
                
                <?php
            }
            ?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
        </div>
        </div>
    </div>
    </div>
    </div>
    </body>
</html>