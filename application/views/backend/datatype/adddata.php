<?php $this->load->view('template/meta'); ?>
<!-- <?php $this->load->view('template/navbar'); ?> <?php
$this->load->view('template/sidebar'); ?> -->
<!-- <?php $this->load->view('template/footer'); ?> -->

<div class="container">
    <div class="col-md-6  row mt-3">
        <div class="card">
            <div class="card-header blockquote mb-0">
                Add Type Data
            </div>
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
                    <button type="submit" name="adddata" class="btn btn-primary float-right">Submit</button>
                </form>
            
            </div>
        </div>

    </div>
</div>
<?php $this->load->view('template/js'); ?>