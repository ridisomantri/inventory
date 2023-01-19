<!doctype html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h2 style="margin-top:0px">Comp01 Read</h2>
            <div class="ibox-tools">
            </div>
        </div>
        <div class="ibox-content">
        
        <table class="table">
	    <tr><td>IDCOMP01</td><td><?php echo $IDCOMP01; ?></td></tr>
	    <tr><td>CODE</td><td><?php echo $CODE; ?></td></tr>
	    <tr><td>DEPARTMENT</td><td><?php echo $DEPARTMENT; ?></td></tr>
	    <tr><td>IPCOMP</td><td><?php echo $IPCOMP; ?></td></tr>
	    <tr><td>LOCATION</td><td><?php echo $LOCATION; ?></td></tr>
	    <tr><td>TYPECOMP</td><td><?php echo $TYPECOMP; ?></td></tr>
	    <tr><td>USERCOMP</td><td><?php echo $USERCOMP; ?></td></tr>
	    <tr><td>REMARK</td><td><?php echo $REMARK; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('comp01') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>