<div class="container">
<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
<?php 
	echo validation_errors();
	echo form_open_multipart('Customer/C_create', array('class' => 'needs-validation', 'novalidate' => '') );
?>
<table class="table table-hover">
	<h2>Create Customer</h2><br>
<tr>
<b>Nama :</b> <input type="text" class="form-control" name="CustName"><br>
<b>Alamat :</b> <textarea name="CustAddress" class="form-control" style="height:150px;"></textarea><br>
<b>Telepon :</b> <input type="text" class="form-control" name="CustPhone"><br>
<b>E-mail :</b> <input type="text" class="form-control" name="CustEmail"><br>
<br>
</tr>
<input type="submit" id="submitBtn" class="btn btn-primary" value="Tambah">
</table>
</div>
