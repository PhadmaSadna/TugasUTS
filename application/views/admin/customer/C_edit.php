<div class="container">
<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
<?php 
	echo validation_errors();
	echo form_open_multipart('Customer/C_edit/'.$show_article['CustID']);
?>
<table class="table table-hover">
	<h2>Update Customer</h2><br>
<tr>
Nama : <input type="text" class="form-control" name="CustName" value="<?php echo $show_article['CustName'] ?>"><br>
Alamat : <textarea name="CustAddress" class="form-control" style="height:150px;"><?php echo $show_article['CustAddress']?></textarea><br>
Telepon : <input type="text" class="form-control" name="CustPhone" value="<?php echo $show_article['CustPhone'] ?>"><br>
E-mail : <input type="text" class="form-control" name="CustEmail" value="<?php echo $show_article['CustEmail'] ?>"><br>
<br>
</tr>
<input type="submit" id="submitBtn" class="btn btn-primary" value="Ok">
</table>
</div>s