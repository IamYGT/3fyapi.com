<?php  include("admin/include/site_db.php"); ?><!DOCTYPE html>
<html lang="tr">
	<head>

		<title>3F Yapı | Anasayfa</title>
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
		<link href="css\styles.css" rel="stylesheet" />
		<meta name="description" content="Gaziantep İç Mimar, 2012 yılında dekorasyon sektörüne giriş yapan 3F YAPI TASARIM , kısa sürede hatırı sayılır bir firma konumuna gelmiştir. "/>
		 <meta name="author" content="Memsidea Company Group"/>
		 <META NAME="Keywords" CONTENT="Gaziantep, İç Mimarlık, İç Mimar Şirketleri, 3f, Yapı, dekorasyon, 3f yapı">


		<?php include("favo.php")?>

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

	 <div class="swiper-container">
			<div class="swiper-wrapper">

	<?php
if($db->veriSaydir("slayt", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("slayt", array(), array(), "row", "DESC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>
		 <div class="slide-item swiper-slide" style="background-image:url(upload/<?=$rows->resim;?>)">
					<div class="container">
						<div class="row">
							<div class="center-holder col-md-12">
								<div class="slider-content">
									<div class="title-center" data-swiper-parallax="-1500" data-swiper-opacity="5"><?=$rows->baslik1;?>
									<br /><?=$rows->baslik2;?></div>
									<div class="text-center" data-swiper-parallax="-800">
										<p><?=$rows->aciklama;?></p>
									</div>
									<div class="mt-30">
										<a href="<?=$rows->buton_link;?>" class="button-md dark-button"><?=$rows->buton_isim;?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php }} ?>


		</div>
			<div class="swiper-pagination swiper-pagination-white"></div>
			<div class="swiper-button-white swiper-button-next"></div>
			<div class="swiper-button-white swiper-button-prev"></div>
		</div>
		<div class="section-block-bg" style="background-image:url(img/bg/bg1.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6 col-sm-7">
						<div class="section-heading">
							<h2 class="animated fadeInLeft wow">Kurumsal</h2>
							<h3>3F Yapı Hakkında
						 </div>
						<div class="text-content">
							<p><?=$db->VeriOkuTek("kurumsal", "aciklama", "url", "hakkimizda" );?></p>
						</div>
<h1 style="display:none;"> Gaziantep İç Mimarlar </h1>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="clearfix top-article">
									<div class="top-article-icon"></div>
									<div class="top-article-content">
										<h5>Hayal Edin</h5>
										<p>Sınırı Olmayan bir dünya</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="clearfix top-article">
									<div class="top-article-icon"></div>
									<div class="top-article-content">
										<h5>Yaratıcı Planlar</h5>
										<p>Sınırı Olmayan bir dünya</p>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="col-xs-12 col-md-offset-1 col-sm-5 col-md-5">
						<div class="outline-bordered-right">
							<img alt="Gaziantep İç Mimarlar 3F Yapı" src="upload/<?=$db->VeriOkuTek("kurumsal", "resim", "url", "hakkimizda", $_GET["url"]);?>" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-block">
			<div style="height:1500px" id="particles-js"></div>
			<div class="container">

<?php
$i = 0;
if($db->veriSaydir("projeler_category", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("projeler_category", array(), array(), "row", "DESC",2);
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
		$i++;
if($i == 1) {
 ?>

 <div class="row project-row" data-scrollax-parent="true">
					<div class="col-xs-12 col-sm-7 col-md-7"
					data-scrollax="properties: { &#39;translateY&#39;: &#39;-50px&#39;, &#39;opacity&#39;: 0.1 }">
						<div class="outline-bordered-left">
					<a href="proje-<?=$rows->url;$cattut=$rows->id;?>.html">     <img alt="Gaziantep İç Mimarlar 3F Yapı" src="upload/<?=$db->VeriOkuTek("projeler_items", "resim", "cat_id", $cattut);?>" /> </a>
						</div>
					</div>
					<div class="col-xs-12 col-md-4 col-md-offset-1 col-sm-5"
					data-scrollax="properties: { &#39;translateY&#39;: &#39;100px&#39;, &#39;opacity&#39;: 0 }">
						<div class="project-title">
						 <a href="proje-<?=$rows->url;?>.html"> <h3>3F YAPI</h3> </a>
							<a href="proje-<?=$rows->url;?>.html">  <h2><?=$rows->isim;?></h2> </a>
						</div>
						<div class="mt-30 text-content">
							<p><?=$rows->aciklama;?></p>
						</div>
					</div>
				</div>

					 <?php } else { $i = 1; ?>


				<div class="row project-row mt-100" data-scrollax-parent="true">
					<div class="col-xs-12 col-sm-6 col-md-6"
					data-scrollax="properties: { &#39;translateY&#39;: &#39;100px&#39;, &#39;opacity&#39;: 0.2 }">
						<div class="project-title">
						 <a href="proje-<?=$rows->url;?>.html"> <h3>3F YAPI</h3> </a>
							<a href="proje-<?=$rows->url;?>.html">  <h2><?=$rows->isim;?></h2> </a>
						</div>
						<div class="mt-30 text-content">
							<p><?=$rows->aciklama;$cattut=$rows->id;?></p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6"
					data-scrollax="properties: { &#39;translateY&#39;: &#39;-50px&#39;, &#39;opacity&#39;: 0 }">
						<div class="outline-bordered-right">
					<a href="proje-<?=$rows->url;?>.html"> 		<img alt="Gaziantep İç Mimarlar 3F Yapı" src="upload/<?=$db->VeriOkuTek("projeler_items", "resim", "cat_id", $cattut);?>" /> </a>
						</div>
					</div>
				</div>

	<?php }}} ?>


		</div>
		</div>
		<div class="container section-block">
			<div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="section-heading">
						<h2 class="animated fadeInLeft wow">Haberler</h2>
						<h3>Haberlerimizden siz de haberdar olun.</h3>
					</div>
				</div>
 
			 
			 <?php
if($db->veriSaydir("blog", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("blog", array(), array(), "row", "ASC",3);
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>
	 
				<div class="col-xs-12 col-sm-6 col-md-3">
  <div class="card-wrapper">
   <a href="haber-<?=$rows->id;?>.html">  <img src="upload/<?=$rows->resim;?>" alt="<?=$rows->isim;?>"></a>
 
     <a href="haber-<?=$rows->id;?>.html">
      <div class="card-content-wrapper">
        <h3 class="card-title"><?=$rows->isim;?></h3>
         <p class="card-text">
           <span class="card-teaser-link">Devamını Oku</span>
        </p>
        <div class="meta-info">             <span class="publish-date"><?=$rows->tarih;?></span>
          <span class="comment-count">3F Yapı</span>
        </div>
      </div>
    <!-- end card-content-wrapper -->
     </a>
    
  </div>
</div>
 
			 <?php }} ?>



		 </div>
		</div>
		<div class="section-block-parallax" style="background-image:url(img/bg/bg4.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="section-heading mt-70 outline-bordered-text-right white-color">
							<h3>Rakamlarla
							<br />3F Yapı -
							<br />Dekorasyon</h3>
						</div>
					</div>
					<div class="col-xs-12 col-md-offset-1 col-md-7 col-sm-7">
						<div class="text-content white-color">
							<p><?=$db->ayarlar("value" , "rakamyazi");?></p>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-4 col-md-4">
								<div class="countup-box">
									<h4 class="countup"><?=$db->ayarlar("value" , "yazi2");?></h4>
									<strong><?=$db->ayarlar("value" , "yazi1");?></strong>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<div class="countup-box">
									<h4 class="countup"><?=$db->ayarlar("value" , "yazi4");?></h4>
									<strong><?=$db->ayarlar("value" , "yazi3");?></strong>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<div class="countup-box">
									<h4 class="countup"><?=$db->ayarlar("value" , "yazi6");?></h4>
									<strong><?=$db->ayarlar("value" , "yazi5");?></strong>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-block">
		 <!--<div class="container">
				 <div class="row">
					<div class="col-xs-12 col-md-3 col-sm-3">
						<div class="section-heading">
							<h2 class="animated fadeInLeft wow">Special Prices</h2>
							<h3>Our Pricing List</h3>
						</div>
						<div class="text-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Donec auctor et
							urnaLorem ipsum dolor sit amet, consectetur adipiscing elit</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="pricing-box">
							<h4>2 Room Apartment</h4>
							<h5>$49,000</h5>
							<ul>
								<li>77
								<sup>2</sup></li>
								<li>30m
								<sup>2</sup></li>
								<li>15m
								<sup>2</sup></li>
							</ul>
							<div class="pricing-button">
								<a href="#">Contact Us</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="pricing-box pricing-best-center">
							<div class="pricing-center">
								<h6>Best value</h6>
							</div>
							<h4>3 Room Apartment</h4>
							<h5>$89,000</h5>
							<ul>
								<li>140m
								<sup>2</sup></li>
								<li>80m
								<sup>2</sup></li>
								<li>50m
								<sup>2</sup></li>
							</ul>
							<div class="pricing-button">
								<a href="#">Contact Us</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="pricing-box">
							<h4>4 Room Apartment</h4>
							<h5>$159,000</h5>
							<ul>
								<li>220m
								<sup>2</sup></li>
								<li>150m
								<sup>2</sup></li>
								<li>90m
								<sup>2</sup></li>
							</ul>
							<div class="pricing-button">
								<a href="#">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>-->
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
