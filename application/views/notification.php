<?php if($this->session->flashdata('error')):?>
<div class="alert alert-error"><?php echo $this->session->flashdata('error');?></div>
<?php elseif($this->session->flashdata('errorlogin')):?>
<div class="alert alert-error"><?php echo $this->session->flashdata('errorlogin');?></div>
<?php elseif($this->session->flashdata('success')):?>
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong><?php echo $this->session->flashdata('success');?></strong>
</div>
<?php elseif($this->session->flashdata('success-request')):?>
<div class="alert alert-success">
    <?php echo $this->session->flashdata('success-request');?>
</div>
<?php elseif(validation_errors()):?>
<?php echo validation_errors();?>
<?php endif;?>