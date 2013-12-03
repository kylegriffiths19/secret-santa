<?php
	//functions
function isValidEmail($email) {
		return strpos($email, "@") !== false;
	}

//shuffles assoc array keeping key => value pairs in tact
function shuffle_assoc(&$array) {
	$keys = array_keys($array);

	shuffle($keys);

	foreach($keys as $key) {
    	$new[$key] = $array[$key];
	}

		$array = $new;

		return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    //budget amount
    $amount = $_POST['amount'];

	if (isset($_POST['hidden_submit']) && $_POST['name'] >= 2) {
		$name = $_POST['name'];//array of names
		$email = $_POST['email'];//array of emails

		$users = array_combine($name, $email); //becomes users array('name' => 'email')
		$giver = $users; //assign users array to both givers and recievers
		$receiver = $users;

		$sent_emails = $users;

		shuffle_assoc($giver); //shuffles the arrays
		shuffle_assoc($receiver);

		//iterate through the giver array for the individuals.
		foreach ($giver as $giver_name => $email) {
		//Make sure that the giver and the receiver are not the same person
			
			while (reset($receiver) == $email) {
			//Shuffle the array to randomize it.
				shuffle_assoc($receiver); }

				//Grab the first person off the receiver array
				$r = reset($receiver);

				//test
				//echo $g . "gives to " . $r . " ";

				if(isValidEmail($email)){

					$mail_from = "secretsanta.com";
					$mail_title = "Secret Santa";
					$email_body = "Hello {$giver_name},
									for Secret Santa this year you will be buying a present for" . key($receiver) . ". " .
									"Presents should all be around £$amount,

									Good luck and Merry Christmas,
									Santa
									". "\n";
					
					echo $email_body;
					

							//Send em via normal PHP mail method
							/*if(mail($g, $mail_title, $email_body, "From: {$mail_from}\r\n")){
								echo "success";
							} else{
								echo "error";
							}*/
				} else {
					echo "Sorry there was an error";
				}

				//Remove that first person from the array, so we only have ungifted people remaining.
				$receiver = array_slice($receiver,1);

		}
	}
	else{ 
		//Ensure some people actually entered the Secret Santa
		exit("Only one valid user was detected. Please ensure you fill out the form fully."); 
	}
}

?>
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
	<link rel="stylesheet" href="_assets/css/styles.css" />

	<!-- Modernizr -->
	<script src="_assets/js/libs/modernizr-latest.js"></script>

	<!-- Typekit settings -->

	<!--[if (lt IE 9) & (!IEMobile)]><script src="_assets/js/libs/selectivizr.min.js"></script><![endif]-->
</head>
<body>
	<div class="wrapper">
	<div class="title">

		<h1>Secret Santa</h1>

	</div>


	<div role="main" class="verification-message center">
		<p>Success! The Emails have been sent to the following recipients:</p>
		<ul class="emails-sent">
			<?php
				foreach ($sent_emails as $emails) {
					echo "<li>{$emails}</li>";
				}
			?>
		</ul>
		<a href="index.php" class="btn btn-red">Go back</a>
	</div>
<!-- Hammer includes -->
	<section class="footer">
		<p>&copy; The Idea Bureau</p>
	</section>
	</div>
	<!--
	TODO: Check latest jQuery and Formalize.js
	-->

	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="_assets/js/libs/formalize.min.js"></script>
	<script>window.jQuery || document.write('<script src="_assets/js/libs/jquery-1.10.1.min.js"><\/script>')</script>
	<script src="_assets/js/main-min.js"></script>

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