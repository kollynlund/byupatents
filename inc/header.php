<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
	<link href="../css/screen.css" rel="stylesheet" />
    <link href="../css/print.css" rel="stylesheet" />
    <link href="../css/ie.css" rel="stylesheet" />
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="./">Shirts 4 Mike</a></h1>

			<ul class="nav">
				<li class="shirts <?php if ($section == "shirts") { echo "on"; } ?>"><a href="shirts.php">Patents</a></li>
				<li class="contact <?php if ($section == "contact") { echo "on"; } ?>"><a href="contact.php">Contact</a></li>
				<li class="resources <?php if ($section == "resources") { echo "on"; } ?>"><a href="resources.php">Resources</a></li>
				<li class="about <?php if ($section == "about") { echo "on"; } ?>"><a href="about.php">About</a></li>
				<!-- <li class="cart"><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=Q6NFNPFRBWR8S&amp;display=1">Shopping Cart</a></li> -->
			</ul>

		</div>

	</div>

	<div id="content">