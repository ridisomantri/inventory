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
                    <h2 style="margin-top:0px"><?php echo $button ?> Comp01 </h2>
                </div>
        
        <form action="<?php echo $action; ?>" method="post">
        <div class="ibox-content">
	    <div class="form-group">
            <label for="int">IDCOMP01 <?php echo form_error('IDCOMP01') ?></label>
            <input type="text" class="form-control" name="IDCOMP01" id="IDCOMP01" placeholder="IDCOMP01" value="<?php echo $IDCOMP01; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">CODE <?php echo form_error('CODE') ?></label>
            <input type="text" class="form-control" name="CODE" id="CODE" placeholder="CODE" value="<?php echo $CODE; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">DEPARTMENT <?php echo form_error('DEPARTMENT') ?></label>
            <input type="text" class="form-control" name="DEPARTMENT" id="DEPARTMENT" placeholder="DEPARTMENT" value="<?php echo $DEPARTMENT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">IPCOMP <?php echo form_error('IPCOMP') ?></label>
            <input type="text" class="form-control" name="IPCOMP" id="IPCOMP" placeholder="IPCOMP" value="<?php echo $IPCOMP; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">LOCATION <?php echo form_error('LOCATION') ?></label>
            <input type="text" class="form-control" name="LOCATION" id="LOCATION" placeholder="LOCATION" value="<?php echo $LOCATION; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">TYPECOMP <?php echo form_error('TYPECOMP') ?></label>
            <input type="text" class="form-control" name="TYPECOMP" id="TYPECOMP" placeholder="TYPECOMP" value="<?php echo $TYPECOMP; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">USERCOMP <?php echo form_error('USERCOMP') ?></label>
            <input type="text" class="form-control" name="USERCOMP" id="USERCOMP" placeholder="USERCOMP" value="<?php echo $USERCOMP; ?>" />
        </div>
	    <div class="form-group">
            <label for="blob">REMARK <?php echo form_error('REMARK') ?></label>
            <input type="text" class="form-control" name="REMARK" id="REMARK" placeholder="REMARK" value="<?php echo $REMARK; ?>" />
        </div>
	    <input type="hidden" name="" value="<?php echo $; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('comp01') ?>" class="btn btn-default">Cancel</a>
	</div>
            </form>
        </div>
        </div>
    </body>
</html>