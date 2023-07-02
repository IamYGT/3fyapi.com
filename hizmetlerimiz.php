<?php  include("admin/include/site_db.php"); ?><!DOCTYPE html>
<html lang="tr">
	<head>

		<title>3F Yapı | Hizmetlerimiz</title>
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
				<h1>Hizmetlerimiz</h1>
				<h6>3F Yapı</h6>
			</div>
		</div>
		<div class="section-block">
			<div class="container">

<?php
$i = 0;
if($db->veriSaydir("hizmetlerimiz", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("hizmetlerimiz", array(), array(), "row", "DESC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
		$i++;
if($i == 1) {
 ?>
		 <div>
					<div class="clearfix services-box">
						<div class="col-xs-12 col-sm-12 no-padding col-md-8">
							<div class="services-box-img">
								<img alt="3F Yapı" src="upload/<?=$rows->resim;?>" />
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 no-padding col-md-4">
							<div class="services-box-text">
								<h4><?=$rows->isim;?></h4>
								<ul>
									<li>
									<span>01 :</span> <?=$rows->hizmet1;?></li>
									<li>
									<span>02 :</span> <?=$rows->hizmet2;?></li>
									<li>
									<span>03 :</span> <?=$rows->hizmet3;?></li>
									<li>
									<span>04 :</span> <?=$rows->hizmet4;?></li>
									<li>
									<span>05 :</span> <?=$rows->hizmet5;?></li>
									 <li>
									<span>06 :</span> <?=$rows->hizmet6;?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			 <?php } else { $i = 1; ?>

		 <div>
					<div class="clearfix services-box">
						<div class="col-xs-12 col-sm-12 no-padding col-md-4">
							<div class="services-box-text services-box-text-left">
								<h4><?=$rows->isim;?></h4>
								<ul>
									<li>
									<span>01 :</span> <?=$rows->hizmet1;?></li>
									<li>
									<span>02 :</span> <?=$rows->hizmet2;?></li>
									<li>
									<span>03 :</span> <?=$rows->hizmet3;?></li>
									<li>
									<span>04 :</span> <?=$rows->hizmet4;?></li>
									<li>
									<span>05 :</span> <?=$rows->hizmet5;?></li>
									 <li>
									<span>06 :</span> <?=$rows->hizmet6;?></li>
								</ul>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 no-padding col-md-8">
							<div class="services-box-img services-box-img-right">
								<img alt="3F Yapı" src="upload/<?=$rows->resim;?>" />
							</div>
						</div>
					</div>
				</div>

	<?php }}} ?>

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
