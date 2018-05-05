<div class="container">
<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
<?php 
	echo validation_errors();
	echo form_open_multipart('Guide/G_create', array('class' => 'needs-validation', 'novalidate' => '') );
?>
<table class="table table-hover">
	<h2>Create Guide</h2><br>
<tr>
<b>Nama :</b> <input type="text" class="form-control" name="GuideName"><br>
<b>Jenis Kelamin :</b> <input type="radio" name="Gender" value="L" checked>Laki-Laki   <input type="radio" name="Gender" value="P">Perempuan<br>
<b>Telepon :</b> <input type="text" class="form-control" name="GuidePhone"><br>
<b>E-mail :</b> <input type="text" class="form-control" name="GuideEmail"><br>
<br>
</tr>
<input type="submit" id="submitBtn" class="btn btn-primary" value="Tambah">
</table>
</div>
