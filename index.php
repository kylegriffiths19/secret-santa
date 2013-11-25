<!-- Hammer includes -->
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7) &!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8) &!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9) &!(IEMobile)]><html class="no-js lt-ie10" lang="en"><![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!--
	TODO: Add Titles and Description
	-->

	<meta name="description" content="Add a description">
	<meta name="author" content="Author Name">
	<meta name="copyright" content="Year, Site Title" />

	<!-- If it is so -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="cleartype" content="on">

	<!--
	TODO: Set MS Windows 8 tile icon and colour
	-->

	<meta name="msapplication-TileImage" content="">
	<meta name="msapplication-TileColor" content="#222222">

	<title>The Idea Bureau - Secret Santa</title>

	<!--
	NOTE: Uncomment for iOS and favicons
	-->

	<!-- For iPhone 4 -->
	<!-- <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/_assets/img/favicons/apple-touch-icon.png"> -->
	<!-- For iPad 1-->
	<!-- <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/_assets/img/favicons/apple-touch-icon.png">-->
	<!-- For the new iPad -->
	<!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/_assets/img/favicons/apple-touch-icon-144x144-precomposed.png">-->
	<!-- For iPhone 3G, iPod Touch and Android -->
	<!-- <link rel="apple-touch-icon-precomposed" href="/_assets/img/favicons/apple-touch-icon-precomposed.png">-->
	<!-- For Nokia -->
	<!-- <link rel="shortcut icon" href="/_assets/img/favicons/apple-touch-icon.png">-->
	<!-- For everything else -->
	<!-- <link rel="shortcut icon" href="/_assets/img/favicons/favicon.ico">-->
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<!--
	TODO: Check latest Normalize, Formalize, Selectivizr and Modernizr
	-->
	<link rel="stylesheet" href="_assets/css/libs/normalize.css" />
	<link rel="stylesheet" href="_assets/css/libs/formalize.css" />
	<link rel="stylesheet" href="_assets/css/libs/flexslider.css" />
	<link rel="stylesheet" href="_assets/css/styles.css" />

	<!-- Modernizr -->
	<script src="_assets/js/libs/modernizr-latest.js"></script>

	<!-- Typekit settings -->

	<!--[if (lt IE 9) & (!IEMobile)]><script src="_assets/js/libs/selectivizr.min.js"></script><![endif]-->
</head>
<body>
	<div class="wrapper"><body>
	
	<div class="title"><h1>Secret Santa</h1></div>
	<section role="main" class="form">
		<form action="POST">
			
			<section class="row">
				<input type="text" name="name" value="Your Name*" onblur="if(this.value == '') { this.value='Your Name*'}" onfocus="if (this.value == 'Your Name*') {this.value=''}">
				<input type="text" name="email" value="Your Email*"  onblur="if(this.value == '') { this.value='Your Email*'}" onfocus="if (this.value == 'Your Email*') {this.value=''}">
			</section>

			<section class="row">
				<input type="text" name="name" value="Your Name*" onblur="if(this.value == '') { this.value='Your Name*'}" onfocus="if (this.value == 'Your Name*') {this.value=''}">
				<input type="text" name="email" value="Your Email*"  onblur="if(this.value == '') { this.value='Your Email*'}" onfocus="if (this.value == 'Your Email*') {this.value=''}">
			</section>

			<section class="row">
				<input type="text" name="name" value="Your Name*" onblur="if(this.value == '') { this.value='Your Name*'}" onfocus="if (this.value == 'Your Name*') {this.value=''}">
				<input type="text" name="email" value="Your Email*"  onblur="if(this.value == '') { this.value='Your Email*'}" onfocus="if (this.value == 'Your Email*') {this.value=''}">
			</section>

			<section class="row">			
				<input type="text" name="name" value="Your Name*" onblur="if(this.value == '') { this.value='Your Name*'}" onfocus="if (this.value == 'Your Name*') {this.value=''}">
				<input type="text" name="email" value="Your Email*"  onblur="if(this.value == '') { this.value='Your Email*'}" onfocus="if (this.value == 'Your Email*') {this.value=''}">
			</section>	

			<section class="row">
				<input type="text" name="name" value="Your Name*" onblur="if(this.value == '') { this.value='Your Name*'}" onfocus="if (this.value == 'Your Name*') {this.value=''}">
				<input type="text" name="email" value="Your Email*"  onblur="if(this.value == '') { this.value='Your Email*'}" onfocus="if (this.value == 'Your Email*') {this.value=''}">
			</section>
			
			<section class="row add">
				<a href="" class="btn btn-plus ss-icon">&#x002B;</a>
				<input type="number" min="1" max="50" value="1" class="plus-input">
			</section>

			<section class="row">
				<a href="#" class="btn btn-red">Let the magic happen</a>
			</section>
		</form>
	</section>

<!-- Hammer includes -->
	<p>&copy;The Idea Bureau</p>

	</div>
	<!--
	TODO: Check latest jQuery and Formalize.js
	-->

	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="_assets/js/libs/formalize.min.js"></script>
	<script>window.jQuery || document.write('<script src="_assets/js/libs/jquery-1.10.1.min.js"><\/script>')</script>
	<script src="_assets/js/main.js"></script>

	<!--
	TODO: Google Analytics: change UA-XXXXX-X to be your site's ID.
	-->
	<!-- <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
	</script> --></body>
</html>