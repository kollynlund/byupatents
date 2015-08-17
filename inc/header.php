

<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="sass/styles.css" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome to BYU's Technology Transfer Office.">




    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/scripts.js"></script>

</head>
<body>

	<div class="header">

		

			<a href="index.php"><h1 class="branding-title"></h1></a>

			<ul class="nav">
				<li class="nav-item patents <?php if ($section == "patents") { echo "on"; } ?>"><a href="technologies.php">Technologies</a></li>
				<li class="nav-item resources <?php if ($section == "resources") { echo "on"; } ?>"><a href="resources.php">Resources</a></li> 				
				<li class="nav-item contact <?php if ($section == "contact") { echo "on"; } ?>"><a href="contact.php">Contact</a></li>
				<li class="nav-item about <?php if ($section == "about") { echo "on"; } ?>"><a href="about.php">About</a></li>
			</ul>

		

	</div>

	<div id="content">