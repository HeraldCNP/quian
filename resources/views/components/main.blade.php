<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	
	<title>Quian Films</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="HandheldFriendly" content="true">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Import CSS -->
	<link rel="stylesheet" href="css/base.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
		
	<!-- Hero Causel CSS -->
	<link rel="stylesheet" href="css/jquery.heroCarousel.css">
	<link href="https://file.myfontastic.com/R3eFVjRP7f4HjV3RVktSZG/icons.css" rel="stylesheet">
	<link rel="shortcut icon" href="{{ asset('/img/favicon.ico') }}">
		
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body> 

    <x-menu></x-menu>
    

    {{ $slot }}

    <x-footer></x-footer>
	
	<!-- jQuery -->	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="js/jquery.easing-1.3.js"></script>

	<!-- jQuery Hero Slider -->
	<script src="js/hero/jquery.heroCarousel-1.3.js"></script>
	<script>
		$(function(){
		    if ($('.hero-carousel').length > 0)
		    {
		    	$('.hero-carousel').heroCarousel({
		    		easing: 'easeOutExpo',
		    		css3pieFix: true
		    	});
		    }
		});
	</script>
	
	<!-- Main JS Plugins -->
	<script src="js/shortcodes.js"></script><!-- Shortcodes -->
	<script src="js/main.js"></script><!-- Hovers -->
	<script src="js/selectnav.min.js"></script><!-- Mobile Navigation -->
	<script src="js/jquery.fancybox.pack.js"></script><!-- Fancybox -->
	<script src="js/jquery.fancybox-media.js"></script><!-- Fancybox Media Helper -->
	<script src="js/jquery.flexslider.js"></script><!-- Flexslider -->
	<script src="js/twitter/jquery.tweet.js"></script><!-- Twitter Feed -->
	<script src="js/twitter-options.js"></script><!-- Twitter Feed Options -->
	<script src="js/jflickrfeed.js"></script><!-- Flickr Feed -->
	<script src="js/jflickrfeed-setup.js"></script><!-- Flickr Feed Setup-->
	<script src="js/settings.js"></script> <!-- Settings for JS Plugins -->
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.2/dist/index.bundle.min.js"></script>
		
</body>

</html>
<!-- RUDERMANN TEMPLATE BY ILYA SIDELNIKOV AND TVDA - THEMES.TVDA.EU -->