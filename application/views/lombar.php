<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
<body>

	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Paket Wisata di Lombok Barat</h2>
					<p>Kabupaten Lombok Barat juga memiliki tempat-tempat wisata menarik di Lombok. Berikut ini adalah deretan destinasi wisata populer di Lombok Barat:</p>
				</div>
			</div>
			<div class="row">
				<?php foreach ($paket->result() as $key) {?>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="/images/senggigi.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="<?=base_url('assets/images/').$key->image?>" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><?=$key->judul?></h2>
							<p>Price : <?=$key->harga?>,-<br>Duration Tour : 4 Day<br> 
								<p>Deskripsi</p>
							<p><span class="btn btn-primary">Pilih</span></p>
						</div>
					</a>
				</div>
			<?php } ?>
		</div>
		<div class="container" align="center">
			<?php echo $links; ?>
		</div>
	</body>
</html>

