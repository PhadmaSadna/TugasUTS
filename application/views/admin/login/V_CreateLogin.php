<div class="container">
<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
<?php 
	echo validation_errors();
	echo form_open_multipart('Login/create_login', array('class' => 'needs-validation', 'novalidate' => '') );
?>
<table class="table table-hover">
	<h2>Create Account</h2><br>
<tr>
<b>Username :</b> <input type="text" class="form-control" name="username"><br>
<b>Password :</b> <input type="text" class="form-control" name="password"><br>
<br>
</tr>
<input type="submit" id="submitBtn" class="btn btn-primary" value="Tambah">
</table>
</div>
