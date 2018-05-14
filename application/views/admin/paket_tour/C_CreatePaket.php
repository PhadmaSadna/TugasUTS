<div class="container">
<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
<?php 
	echo validation_errors();
	echo form_open_multipart('Paket_Tour/C_create', array('class' => 'needs-validation', 'novalidate' => '') );
?>
<table class="table table-hover">
	<h2>Create Customer</h2><br>
<tr>
<b>Judul :</b> <input type="text" class="form-control" name="judul"><br>
<b>Duration :</b> <input type="text" name="duration" class="form-control"> <br>
<b>Loc :</b> <input type="text" class="form-control" name="loc"><br>
<b>Jadwal :</b> <input type="text" class="form-control" name="jadwal"><br>
<b>Harga :</b> <input type="text" class="form-control" name="harga"><br>
<b>Img :</b> <input type="file" class="form-control" name="image"><br>
<br>
</tr>
<input type="submit" id="submitBtn" class="btn btn-primary" value="Tambah">
</table>
</div>
