<div class="container">
<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
<?php 
	echo validation_errors();
	echo form_open_multipart('Paket_Tour/C_edit/'.$show_article['id']);
?>
<table class="table table-hover">
	<h2>Update Customer</h2><br>
<tr>

Judul : <input type="text" class="form-control" name="judul" value="<?php echo $show_article['judul'] ?>"><br>
Duration : <input type="text" class="form-control" name="duration" value="<?php echo $show_article['duration']?>"><br>
Loc : <input type="text" class="form-control" name="loc" value="<?php echo $show_article['loc'] ?>"><br>
Jadwal : <input type="text" class="form-control" name="jadwal" value="<?php echo $show_article['jadwal'] ?>"><br>
Harga : <input type="text" class="form-control" name="harga" value="<?php echo $show_article['harga'] ?>"><br>
Image : <input type="file" class="form-control" name="image"><br>
<br>
</tr>
<input type="submit" id="submitBtn" class="btn btn-primary" value="Ok">
</table>
</div>s