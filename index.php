<!DOCTYPE html>
<?php


//************************************************************************

// подключение меню
// при необходимости добавить новые разделы, нужно
// 1) добавить новый шаблон в /template/content/
// 2) прописать новый пункт в /template/include/menu_items.php


//************************************************************************

include 'template/menu.php';

//************************************************************************

function make_safe($variable) {
   $variable = strip_tags(htmlentities(trim($variable)));
   return $variable; 
}

//************************************************************************

// содержимое страницы

$action = $_GET['action'];
$alias = make_safe($_GET['alias']);
$page_tpl = null;


//************************************************************************
if ($action == 'portfolio-gallery' && $alias) {// оверлей с фотогалереей
	$page_tpl = 'template/portfolio/portfolio-gallery.php';
};

//************************************************************************
 
?>
<html class="background-100-e">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		
		<title>Photographer Katerina Medowaya</title>
		<meta name="description" content="Katerina Medowaya - portrait and fashion photographer, art critic, blogger" />
		<meta name="keywords" content="photographer, fashion" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<link rel="stylesheet" href="/bower_components/fontawesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="/bower_components/animate.css/animate.min.css" />
		<link rel="stylesheet" href="/bower_components/minicolors/jquery.minicolors.css" />
		<link rel="stylesheet" href="/bower_components/slick.js/slick/slick.css" />
		<link rel="stylesheet" href="/bower_components/slick.js/slick/slick-theme.css" />
		<link rel="stylesheet" href="/bootstrap/dist/css/bootstrap-custom.min.css" />
		<link rel="stylesheet" href="/lib/linecons/style.css" />
		<link rel="stylesheet" href="/styles/style.min.css" />
		<link rel="stylesheet" href="/theme-custom.css" />
		
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png" />
		
	</head>
	<body class="state1 background-100-e">
		
		<div class="youtube-bg" data-video="uNlKoO5-YUU" data-mute="yes" data-volume="50" data-alternative="/images/bg/1920x1200-0.jpg"></div>
		
		<div class="ext-nav background-95-h page-transition">
			<div class="view half-height">
				<img alt class="bg static" src="/images/bg/1920x1200-video.jpg" />
				<div class="content no-top-padding no-bottom-padding  full-height"></div>
			</div>
		</div>

		<div class="page-border bottom colors-e background-solid">
			 <a href="#top" class="hover-effect">To <span class="highlight">Top</span></a>
		</div>

		<div class="page-border left colors-e background-solid">
			<ul>
				<li><a href="https://www.instagram.com/honey_and_dreams/" target="_blank"><i class="fa fa-instagram"></i></a></li>
				<li><a href="https://www.facebook.com/katmedowaya--" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://vk.com/kmedowaya" target="_blank"><i class="fa fa-vk"></i></a></li>
			</ul>
		</div>

		<!-- BEGIN: Top menu -->
		<div class="page-border right colors-e background-solid"></div>
		<nav class="navbar navbar-default navbar-fixed-top page-transition colors-e background-solid" role="navigation" id="top-nav">
			<div class="container">
				<div class="navbar-header">
					<a class="menu-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" href="#"><span></span></a>
					<a class="navbar-brand" href="/">KATERINA MEDOWAYA <span class="highlight navbar-brand-sub">Photographer</span></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<?php foreach ($menu_items AS $index => $item): ?>
							<li><a href="/#<?php echo $item['id'] ?>" class="hover-effect"><?php echo $item['title'] ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END: Top menu -->

		<ul id="dot-scroll" class="colors-e background-solid"></ul>
		
		<div class="overlay-window gallery-overlay colors-e background-90-light" data-overlay-zoom="#work .content">
			<div class="overlay-control colors-f background-85-d">
				<a title="Previos gallery" class="previos" href="#"></a>
				<a title="Next gallery" class="next" href="#"></a>
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view"></div>
			<ul class="loader">
				<li class="background-100-d"></li>
				<li class="background-100-d"></li>
				<li class="background-100-d"></li>
			</ul>
		</div>
		
		<div class="overlay-window map-overlay colors-f background-95-f">
			<div class="overlay-control background-90-f">
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view">
				<div class="map-canvas" data-latitude="42.487606" data-longitude="-71.115661" data-zoom="14">
					<div class="map-marker" data-latitude="42.487606" data-longitude="-71.115661" data-text="Our awesome location"></div>
					<div class="map-marker" data-latitude="42.485100" data-longitude="-71.113256" data-text="Our sales office"></div>
				</div>
			</div>
		</div>
		
		<div class="overlay-window credits-overlay colors-g background-95-g">
			<div class="overlay-control background-85-d">
				<a class="cross" href="#"></a>
			</div>
		</div>
		
		<div class="gate colors-e background-solid">
			<div class="gate-bar background-highlight-e"></div>
			<ul class="loader">
				<li class="background-100-g"></li>
				<li class="background-90-c"></li>
				<li class="background-100-f"></li>
			</ul>
		</div>
		
		<!-- BEGIN: Page content -->
		
		<?php if ($page_tpl): ?>
			<section>
				<?php include $page_tpl; ?>
			</section>
		<?php else: ?>
			<?php foreach ($menu_items AS $index => $item): ?>
				<section id="<?php echo $item['id'] ?>">
					<?php include $item['tpl']; ?>
				</section>
			<?php endforeach; ?>
		<?php endif; ?>

		<!-- END: Page content -->
		
		<script>
		if (typeof(atob) == "undefined")
		{
			document.write('<script src="/lib/stringencoders-v3.10.3/javascript/base64.js"><\/script>');
			var atob = function(x)
			{
				return base64.decode(x);
			}
		}
		</script>
		<script src="/bower_components/less.js/dist/less.min.js"></script>
		<script src="/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="/lib/tween/tween.min.js"></script>
		<script src="/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="/bower_components/modernizr/modernizr.js"></script>
		<script src="/lib/SmoothScroll-1.2.1/SmoothScroll.js"></script>
		<script src="/bower_components/jquery-cookie/jquery.cookie.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="/bower_components/jqBootstrapValidation/dist/jqBootstrapValidation-1.3.7.min.js"></script>
		<script src="/bower_components/minicolors/jquery.minicolors.min.js"></script>
		<script src="/bower_components/slick.js/slick/slick.min.js"></script>
		<script src="/bower_components/shufflejs/dist/jquery.shuffle.min.js"></script>
		<script src="/bower_components/textillate/assets/jquery.lettering.js"></script>
		<script src="/bower_components/textillate/assets/jquery.fittext.js"></script>
		<script src="/bower_components/textillate/jquery.textillate.js"></script>
		<script src="/lib/prism/prism.js"></script>
		<script>
		(function()
		{
			var disableMobileAnimations = true;
			var isWin = navigator.appVersion.indexOf("Win") !== -1;
			if (isWin) $('html').addClass('win');
			var ua = navigator.userAgent.toLowerCase();
			var isChrome = ua.indexOf('chrome') > -1;
			if (isChrome) $('html').addClass('chrome');
			var isAndroidBrowser4_3minus = ((ua.indexOf('mozilla/5.0') > -1 && ua.indexOf('android ') > -1 && ua.indexOf('applewebkit') > -1) && !(ua.indexOf('chrome') > -1));
			if (isAndroidBrowser4_3minus) $('html').addClass('android-browser-4_3minus');
			var isSafari = !isChrome && ua.indexOf('safari') !== -1;
			if (isSafari) $('html').addClass('safari');
			var isMobile = Modernizr.touch;
			if (isMobile)
			{
				$('html').addClass('mobile');
				if (disableMobileAnimations) $('html').addClass('poor-browser');
			}
			else
			{
				$('html').addClass('non-mobile');
			}
			if (isWin && isSafari)
			{
				$('html').addClass('flat-animation');
			}
		})();
		</script>
		<script src="/scripts/script-bundle.js"></script>
		<script>
		if (Function('/*@cc_on return document.documentMode===9@*/')())
		{
			$('html').addClass('ie9');
		}
		if (Function('/*@cc_on return document.documentMode===10@*/')())
		{
			$('html').addClass('ie10');
		}
		if (!!navigator.userAgent.match(/Trident.*rv\:11\./))
		{
			$('html').addClass('ie11');
		}
		</script>
	</body>
</html>