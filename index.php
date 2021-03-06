<?php 

	$residents = json_decode(file_get_contents("assets/residents.json"), true);
	ksort($residents["current"]);
	ksort($residents["former"]);

?>

<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Mansão Babilônia</title>
		<meta name="description" content="Mansão Babilônia" />
		<meta name="Author" content="Stdio [www.stdio.com.br]" />

		<!--[if lt IE 9]>
			<script type="text/javascript" src="assets/plugins/lt-ie9/html5.js"></script>
			<script type="text/javascript" src="assets/plugins/lt-ie9/respond.min.js"></script>
			<script type="text/javascript" src="assets/plugins/lt-ie9/excanvas.compiled.js"></script>
		<![endif]--> 

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Dosis:300,400" rel="stylesheet" type="text/css" />

		<!-- CORE CSS FRAMEWORK -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/font-linecons/linecons.css" rel="stylesheet" type="text/css" />

		<!-- PLUGINS -->
		<link href="assets/css/superslides.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

		<!-- CSS TEMPLATE -->
		<link href="assets/css/reset.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/framework.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/typography.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<link href="assets/css/blog.css" rel="stylesheet" type="text/css" />

		<!-- COLOR -->
		<link href="assets/css/green.css" rel="stylesheet" type="text/css" title="color" />

		<!-- ICONS -->
		<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
		<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- Modernizr -->
		<script type="text/javascript" src="assets/plugins/modernizr.min.js"></script>
	</head>
	<body>

		<!-- HOME -->
		<section id="home" class="full-screen"><!-- full-screen or half-screen (550px height) -->

			<div id="slider">

				<!-- slider navigation -->
				<nav class="slides-navigation">
					<a class="prev" href="#"></a>
					<a class="next" href="#"></a>
				</nav>

				<ul class="slides-container">

					<!-- Item 1 -->
					<li>
						<div class="image-caption">
							<hr /><hr />
							<div class="inner">
								<h2 class="bigtext strtoupper nomargin">Não Pode Babi</h2>
								<p>#MansãoBabilônia</p>
							</div>
							<hr /><hr />
						</div>

						<span class="overlay"></span>
						<div style="background-image: url('assets/images/slider/1.png');" class="fullscreen-img"></div>
					</li>

					<!-- Item 2 -->
					<li>
						<div class="image-caption">
							<hr /><hr />
							<div class="inner">
								<h2 class="bigtext strtoupper nomargin">Férias</h2>
								<p>#EuPrecisoDeFérias</p>
							</div>
							<hr /><hr />
						</div>

						<!--<span class="overlay"></span>-->
						<div style="background-image: url('assets/images/slider/2.png');" class="fullscreen-img"></div>
					</li>

					<!-- Item 3 -->
					<li>
						<div class="image-caption">
							<hr /><hr />
							<div class="inner">
								<h2 class="strtoupper nomargin">Tesão</h2>
								<p>#Piscininha</p>
							</div>
							<hr /><hr />
						</div>

						<!--<span class="overlay"></span>-->
						<div style="background-image: url('assets/images/slider/3.png');" class="fullscreen-img"></div>
					</li>

				</ul>

			</div>

		</section>
		<!-- /HOME -->

		<!-- Main Nav -->
		<header id="header">

			<nav class="navbar navbar-inverse" role="navigation">
				<div class="container">

					<!-- Mobile Menu Button -->
					<button id="mobileMenu" class="fa fa-bars" type="button" data-toggle="collapse" data-target=".navbar-collapse"></button>

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<a class="navbar-brand scrollTo" href="#home">
							<img src="assets/images/logo/white.png" alt="Mansão Babilônia" width="75" height="50" />
							<span class="white hidden-xs">MANSÃO BABILÔNIA</span>
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="#babilonicos" class="scrollTo">Babilônicos</a></li>
							<li><a href="#lifestyle" class="scrollTo">Lifestyle</a></li>
							<li><a href="#contact" class="scrollTo">Contato</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->

				</div>
			</nav>

		</header>
		<!-- /Main Nav -->

		<!-- BABILONICOS -->
		<section id="babilonicos">
			<div class="container">
				<header class="text-center">
					<h1>BABILÔNICOS</h1>
				</header>

				<div class="divider"><!-- lines divider --></div>

				<article class="text-center big-paragraph">
					<p>Conheça os moradores da República mais linda de Barão Geraldo.</p>
				</article>

				<div class="me-picture text-center animate_fade_in">

					<?php foreach($residents["current"] as $name => $data): ?>

						<!-- ITEM -->
						<div class="item">
							<!-- social icons -->
							<span class="socials animated bounceIn">
								<a target="_blank" href="https://www.facebook.com/<?php echo $data["facebook"]; ?>" class="social fa fa-facebook"></a>
							</span>
							<!-- image -->
							<img class="img-responsive" src="http://graph.facebook.com/<?php echo $data["facebook"]; ?>/picture?width=200&height=200" width="200" height="200" alt="" />
							<!-- name -->
							<div class="member-name">
								<h3>
									<?php echo $name; ?>
									<small><?php echo $data["course"]; ?></small>
								</h3>
							</div>
						</div>
						<!-- /ITEM -->

					<?php endforeach; ?>

				</div>

				<div class="divider"><!-- lines divider --></div>

				<article class="text-center big-paragraph">
					<p>Conheça os ex-moradores.</p>
				</article>

				<div class="me-picture text-center animate_fade_in">

					<?php foreach($residents["former"] as $name => $data): ?>

						<!-- ITEM -->
						<div class="item">
							<!-- social icons -->
							<span class="socials animated bounceIn">
								<a target="_blank" href="https://www.facebook.com/<?php echo $data["facebook"]; ?>" class="social fa fa-facebook"></a>
							</span>
							<!-- image -->
							<img class="img-responsive" src="http://graph.facebook.com/<?php echo $data["facebook"]; ?>/picture?width=200&height=200" width="200" height="200" alt="" />
							<!-- name -->
							<div class="member-name">
								<h3>
									<?php echo $name; ?>
									<small><?php echo $data["course"]; ?></small>
								</h3>
							</div>
						</div>
						<!-- /ITEM -->

					<?php endforeach; ?>

				</div>

			</div>
		</section>
		<!-- /BABILONICOS -->

		<!-- BABILÔNIA TV -->
		<section id="lifestyle" class="alternate arrow-down">
			<div class="container">
				<header class="text-center">
					<h1>BABILÔNIA TV</h1>
				</header>

				<div class="divider"><!-- lines divider --></div>

				<article class="text-center">
					<p>
						Um pouco da vida da Mansão Babilônia.
					</p>
				</article>

				<div id="portfolio" class="text-center animate_fade_in">

					<!-- PORTFOLIO FILTER -->
					<div class="text-center">
						<ul class="nav nav-tabs bstrap-tabs isotope-filter" data-sort-id="isotope-list" data-option-key="filter">
							<li data-option-value="*" class="active"><a href="#">VER TUDO</a></li>
							<li data-option-value=".image"><a href="#">BRANDING</a></li>
							<li data-option-value=".video"><a href="#">BABILÔNIA TV</a></li>
						</ul>
					</div>
					<!-- /PORTFOLIO FILTER -->


					<div class="row">

						<ul class="sort-destination isotope" data-sort-id="isotope-list">

							<li class="isotope-item col-sm-6 col-md-4 video"><!-- item -->
								<a class="popup-video" href="https://www.youtube.com/watch?v=nlWOg1l5_R4">
									<img src="assets/images/preview/poker-sessions.png" class="img-responsive" alt="" />
									<div class="caption">
										<i class="rounded fa fa-film"></i>
										<h3>Poker Sessions</h3>
										<p>Babilônia TV</p>
									</div>
								</a>
							</li>

							<li class="isotope-item col-sm-6 col-md-4 image"><!-- item -->
								<a class="popup-image" href="assets/images/view/camisetas2014.png">
									<img src="assets/images/preview/preview-camisetas2014.png" class="img-responsive" alt="" />
									<div class="caption">
										<i class="rounded fa fa-camera"></i>
										<h3>Camiseta Babilônia 2014</h3>
										<p>Branding</p>
									</div>
								</a>
							</li>

							<li class="isotope-item col-sm-6 col-md-4 video"><!-- item -->
								<a class="popup-video" href="https://www.youtube.com/watch?v=Fx1SQbq3ows">
									<img src="assets/images/preview/cooking-sessions.png" class="img-responsive" alt="" />
									<div class="caption">
										<i class="rounded fa fa-film"></i>
										<h3>Cooking Sessions</h3>
										<p>Babilônia TV</p>
									</div>
								</a>
							</li>

						</ul>
					</div>

				</div>

			</div>
		</section>
		<!-- /BABILÔNIA TV -->

		<!-- QUOTE -->
		<section class="cover" style="background-image:url('assets/images/slider/quote.png')">
			<span class="overlay"></span>
			<div class="container text-center" data-animation="bounceIn">
				<q>Olhou pra mim, e eu olhei pra ela. Então falei você vai ser minha cadela.</q>
				<cite>Guilherme Pereira</cite>
			</div>
		</section>
		<!-- /QUOTE -->

		<!-- CONTACT -->
		<section id="contact">
			<div class="container">
				<header class="text-center">
					<h1>CONTATO</h1>
				</header>

				<div class="divider"><!-- lines divider --></div>

				<article>
					<p class="text-center big-paragraph">
						Entre em contato conosco pela nossa fanpage!
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
								<a href="https://www.facebook.com/MansaoBabilonia" target="_blank">
									<div class="btn btn-default btn-block text-none">
										facebook.com/MansaoBabilonia
									</div>
								</a>
							</div>
						</div>
					</p>
				</article>
			</div>
		</section>
		<!-- /CONTACT -->

		<!-- FOOTER -->
		<footer>
			<!-- SCROOL TO TOP -->
			<a href="#toTop" class="fa fa-arrow-up toTop"></a>

			<div class="container">

				<div class="row">

					<div class="col-md-6 copyright">
						República Mansão Babilônia<br />
						2012-2014 &copy; Todos os direitos reservados.
					</div>

					<div class="col-md-6 text-right">
						<a href="https://www.facebook.com/MansaoBabilonia" target="_blank" class="social fa fa-facebook"></a>
					</div>

				</div>

			</div>
		</footer>
		<!-- /FOOTER -->

		<!-- CORE FILES -->
		<script type="text/javascript" src="assets/plugins/jquery/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jquery.isotope.js"></script>
		<script type="text/javascript" src="assets/plugins/masonry.js"></script>

		<!-- PLUGINS -->
		<script type="text/javascript" src="assets/plugins/jquery-fitvids/jquery.fitvids.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jquery-appear/jquery.appear.js"></script>
		<script type="text/javascript" src="assets/plugins/superslides/dist/jquery.superslides.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jquery-owl-carousel/owl.carousel.min.js"></script>
		<script type="text/javascript" src="assets/plugins/carouFredSel/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="assets/plugins/jquery-countTo/jquery.countTo.js"></script>
		<script type="text/javascript" src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jquery.mb.YTPlayer.js"></script><!-- Youtube video background -->
		<script type="text/javascript" src="assets/plugins/holder.js"></script><!-- delete on production -->

		<!-- js scripts -->
		<script async type="text/javascript" src="assets/js/scripts.js"></script>

		<!-- Change UA-XXXXX-X with your site ID -->
		<!--<script>
			window._gaq = [['_setAccount','UA-XXXXX-X'],['_trackPageview'],['_trackPageLoadTime']];
			Modernizr.load({load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'});
		</script>  -->

	</body>
</html>