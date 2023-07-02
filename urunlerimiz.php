<?php
include("admin/include/site_db.php");
if(!(isset($_COOKIE["refreshc"]))) {
		setcookie("refreshc", "yes", time() + (864 * 30), "/");
		 header("Refresh:0");
}




?><!DOCTYPE html>
<html lang="zxx">
	<head>
		 <title>3F Yapı | Ürünlerimiz</title>
		<meta charset="UTF-8" />
		 <meta content="width=device-width,initial-scale=1,maximum-scale=1" name="viewport" />
		<link href="css\bootstrap.min.css" rel="stylesheet" />
		<link href="css\font-awesome.css" rel="stylesheet" />
		<link href="css\icomoon.css" rel="stylesheet" />
		<link href="css\swiper.min.css" rel="stylesheet" />
		<link href="css\animate.css" rel="stylesheet" />
		<link href="css\owl.carousel.css" rel="stylesheet" />
		<link href="css\slick.css" rel="stylesheet" />
		<link href="css\particles.css" rel="stylesheet" />
		<link href="css\default.css" rel="stylesheet" />
		<?php include("favo.php")?>

		<link href="css\styles.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,400i,500,600,700,800,900" rel="stylesheet" />
	</head>
	<body>
		<div id="preloader">
			<div class="spinner">
				<div class="cube1"></div>
				<div class="cube2"></div>
			</div>
		</div>
			 <?php include("ust.php")?>
<div class="page-title">
			<div id="particles-js-pagetitle"></div>
			<div class="container">
				<h1>ÜRÜNLERİMİZ</h1>
				<h6>3F Yapı</h6>
			</div>
		</div>
		<div class="section-block">
			<div class="container">
				<div class="row">

				<div class="isotope-grid">
					<?php
		if($db->veriSaydir("urunler_category", array(), array()) > 0) {
		$bilgi= $db->VeriOkuCoklu("urunler_category", array(), array(), "row", "DESC");
		$bilgial= $db->bilgial;
		foreach($bilgial as $rows){
		 ?>


				<a href="urunler-<?=$rows->url;?>.html">	<div class="col-xs-12 col-md-4 col-sm-6 isotope-item design interior">

				<div class="project">

				<a href="urunler-<?=$rows->url;?>.html">	<div class="project__card"><a href="urunler-<?=$rows->url;?>.html" class="project__image"><a href="urunler-<?=$rows->url;?>.html"><img alt="project" src="upload/<?=$rows->resim;?>"></a></a>

			 <a href="urunler-<?=$rows->url;?>.html"><div class="project__detail"><h2 class="project__title"><a href="urunler-<?=$rows->url;?>.html"><?=$rows->isim;?></a></h2><small class="project__category"><a href="#">3F Yapı</a></small>
			</div></a>
				</div>  </a>
				</div>
				</div>
</a>
				<?php }} ?>




				</div>
				</div>
			</div>
		</div>
	<div class="container section-block">
			<div>
				<div class="col-xs-12 col-md-3 col-sm-3">
					<div class="section-heading">
						<h2 class="animated fadeInLeft wow">Referanslar</h2>
						<h3>Bazı Projeler</h3>
					</div>
				</div>
				<div class="col-xs-12 col-md-9 col-sm-9">
					<div class="owl-carousel owl-theme" id="our-clients">

<?php
if($db->veriSaydir("referanslar", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("referanslar", array(), array(), "row", "DESC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>
			 <div class="client-item">
							<img alt="3F Yapı" src="upload/<?=$rows->image;?>" />
						</div>
						<?php }} ?>

			 </div>
				</div>
			</div>
		</div>

	 <?php include("alt.php")?>
<a href="#" class="scroll-to-top"></a>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/particles.min.js"></script>
		<script src="js/particles.js"></script>
		<script src="js/jquery.hover3d.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<script src="js/scrollax.js"></script>
		<script src="js/slick-plugin.js"></script>
		<script src="js/slick.js"></script>
		<script src="js/swiper.min.js"></script>
		<script src="js/jquery.mb.YTPlayer.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/modernizr.js"></script>
		<script src="js/map.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
