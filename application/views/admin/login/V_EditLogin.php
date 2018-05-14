<div class="container">
<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
<?php 
	echo validation_errors();
	echo form_open_multipart('Login/edit_login'.$show['username']);
?>
<table class="table table-hover">
	<h2>Update Account</h2><br>
<tr>
Username : <input type="text" class="form-control" name="username" value="<?php echo $show['username'] ?>"><br>
Password : <input type="text" class="form-control" name="password" value="<?php echo $show['password'] ?>"><br>
<br>
</tr>
<input type="submit" id="submitBtn" class="btn btn-primary" value="Edit">
</table>
</div>s