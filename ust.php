<header>
		<nav class="navbar navbar-custom navbar-default" data-offset-top="20" data-spy="affix">
			<div class="container">
				<div class="row">
					<div class="navbar-header navbar-header-custom">
						<button aria-expanded="false" class="collapsed menu-icon navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-logo" href="index">
							<img alt="Gaziantep İç Mimarlar 3F Yapı" src="img/logos/logo.png"></a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-links-custom navbar-nav navbar-right">
							<li>
								<a href="index">ANASAYFA</a>
							</li>

							<li class="dropdown">
								<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#">KURUMSAL</a>
								<ul class="dropdown-menu dropdown-menu-left">
										 <?php
if($db->veriSaydir("kurumsal", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("kurumsal", array(), array(), "row", "DESC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>
									<li>
										<a href="kurumsal-<?=$rows->url;?>.html"><?=$rows->isim;?></a>
									</li>

									<?php }} ?>
								</ul>
							</li>

							<li>
								<a href="hizmetlerimiz">HİZMETLERİMİZ</a>
							</li>
							<li>
								<a href="projeler">PROJELERİMİZ</a>
							</li><li>
								<a href="urunlerimiz">ÜRÜNLERİMİZ</a>
							</li> <li>
								<a href="haberler">HABERLER</a>
							</li>
							<li>
								<a href="iletisim">İLETİŞİM</a>
							</li>

						 </ul>

					</div>
				</div>
			</div>
		</nav>
	</header>
