<div class="container">
<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
<?php 
	echo validation_errors();
	echo form_open_multipart('Guide/G_edit/'.$show_article['GuideID']);
?>
<table class="table table-hover">
	<h2>Update Guide</h2><br>
<tr>
Nama : <input type="text" class="form-control" name="GuideName" value="<?php echo $show_article['GuideName'] ?>"><br>
Jenis Kelamin : <input type="radio" name="Gender" value="L" checked>Laki-Laki  <input type="radio" name="Gender" value="<?php echo $show_article['Gender']?>"> Perempuan<br>
Telepon : <input type="text" class="form-control" name="GuidePhone" value="<?php echo $show_article['GuidePhone'] ?>"><br>
E-mail : <input type="text" class="form-control" name="GuideEmail" value="<?php echo $show_article['GuideEmail'] ?>"><br>
<br>
</tr>
<input type="submit" id="submitBtn" class="btn btn-primary" value="Ok">
</table>
</div>s