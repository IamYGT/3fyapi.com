<?php  include("admin/include/site_db.php"); ?><!DOCTYPE html>
<html lang="tr">
	<head>

		<title>3F Yapı | <?=$db->VeriOkuTek("blog", "isim", "id", $_GET["url"]);?></title>
		<meta charset="UTF-8" />
		 <meta content="width=device-width,initial-scale=1,maximum-scale=1" name="viewport" />
		<link href="css\bootstrap.min.css" rel="stylesheet" />
		<link href="css\font-awesome.css" rel="stylesheet" />
		<link href="css\icomoon.css" rel="stylesheet" />
		<link href="css\swiper.min.css" rel="stylesheet" />
		<link href="css\animate.css" rel="stylesheet" />
		<link href="css\owl.carousel.css" rel="stylesheet" />
		<link href="css\slick.css" rel="stylesheet" />
		<?php include("favo.php")?>

		<link href="css\particles.css" rel="stylesheet" />
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
				<h1><?=$db->VeriOkuTek("blog", "isim", "id", $_GET["url"]);?></h1>
				<h6>3F Yapı</h6>
			</div>
		</div>
		<div class="section-block">
			<div class="container">
				<div class="blog-post">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-sm-8">
							<div class="blog-heading">
								<h3><?=$db->VeriOkuTek("blog", "isim", "id", $_GET["url"]);?></h3>
							</div>
							<img alt="blog-image" src="upload/<?=$db->VeriOkuTek("blog", "resim", "id", $_GET["url"]);?>" />
							<p><?=$db->VeriOkuTek("blog", "aciklama", "id", $_GET["url"]);?></p>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="blog-post">
								<div class="blog-side-row blog-post-recent">
									<div class="blog-side-title">
										<h4>SON HABERLER</h4>
									</div>

<?php
if($db->veriSaydir("blog", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("blog", array(), array(), "row", "DESC",4);
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>
				 <div class="blog-post-recent-post">
										<div class="row">
											<div class="col-sm-4 col-md-4 col-xs-4">
												<div class="blog-post-recent-img">
													<img alt="Gaziantep İç Mimarlar 3F Yapı" src="upload/<?=$rows->resim;?>" />
												</div>
											</div>
											<div class="col-md-8 col-sm-8 col-xs-8 pl-0 pr-0">
												<div class="blog-post-recent-text">
													<h5>
														<a href="haber-<?=$rows->id;?>.html"><?=$rows->isim;?></a>
													</h5>
													<span><?=$rows->tarih;?></span>
												</div>
											</div>
										</div>
									</div>

				 <?php }} ?>

				</div>


				</div>
						</div>
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
