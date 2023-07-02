<?php  include("admin/include/site_db.php"); ?><!DOCTYPE html>
<html lang="tr">
	<head>

		<title>3F Yapı | <?=$db->VeriOkuTek("kurumsal", "isim", "url", $_GET["url"]);?></title>
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
		<?php include("favo.php")?>

		<link href="css\default.css" rel="stylesheet" />
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
				<h1><?=$db->VeriOkuTek("kurumsal", "isim", "url", $_GET["url"]);?></h1>
				<h6>3F Yapı</h6>
			</div>
		</div>
		<div class="section-block">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-5 col-sm-5">
						<div class="section-heading">
							<h2 class="animated fadeInLeft wow">KURUMSAL</h2>
							<h3><?=$db->VeriOkuTek("kurumsal", "isim", "url", $_GET["url"]);?> </h3>
						</div>
						<div class="text-content">
							<p>  <?=$db->VeriOkuTek("kurumsal", "aciklama", "url", $_GET["url"]);?></p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-1">
						<div class="outline-bordered-right">
							<img  alt="Gaziantep İç Mimarlar 3F Yapı" src="upload/<?=$db->VeriOkuTek("kurumsal", "resim", "url", $_GET["url"]);?>" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="no-padding section-block">
			<div class="container">
				<div class="section-heading">
					<h2 class="animated fadeInLeft wow">EKİBİMİZLE TANIŞIN</h2>
				 </div>
			</div>
			<div class="container-fluid">
				<div class="row mt-30">
					<?php
if($db->veriSaydir("ekip", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("ekip", array(), array(), "row", "DESC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>
		<div class="col-xs-12 col-md-3 col-sm-6 no-padding">
						<div class="team-member team-member-image">
							<img alt="<?=$rows->isim;?>" src="upload/<?=$rows->resim;?>" />
							<div class="team-member-overlay">
								<div class="team-member-content">
								<a href="#"></a>
								<a href="#"></a>
								<a href="#"></a></div>
								<div class="team-member-name">
									<h4><?=$rows->isim;?></h4>
									<h6><?=$rows->unvan;?></h6>
								</div>
							</div>
						</div>
					</div>
		 <?php }} ?>

		 </div>
			</div>
		</div>

		<div class="section-block-parallax" style="background-image:url(img/bg/bg4.jpg)">
			<div class="container">
				<div class="owl-carousel owl-theme" id="testmonials">
					<?php
if($db->veriSaydir("nedenildi", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("nedenildi", array(), array(), "row", "DESC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>
		<div class="mt-40 testmonial-block">
						<h4><?=$rows->ad;?></h4>
						<h6><?=$rows->unvan;?></h6>
						<p><?=$rows->aciklama;?></p>
					</div>
					<?php }} ?>

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
							<img alt="Gaziantep İç Mimarlar 3F Yapı" src="upload/<?=$rows->image;?>" />
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
