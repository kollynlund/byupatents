<?php 
$pageTitle = "BYU Tech Transfer";
$section = "home";
include('inc/header.php'); ?>

	<div class="section banner">
		<div class="wrapper">
			<div class="button">
				<a href="technologies.php">
					<h2>Welcome to BYU Tech Transfer</h2>
					<p>We create and liscence technologies in hopes of bettering mannkind</p>
				</a>
			</div>
		</div>
	</div>

	<div class="section shirts latest">
		<div class="wrapper">
			<h2 class="home-title">BYU&rsquo;s Featured Tech</h2>
			<p><a href="featured-technologies.php">Click here for the full list of featured technologies</a></p>
		</div>
		<div class="feature-wrapper">
			<?php include("inc/featured-technologies-home.php"); ?>
			<ul class="products featured-container">
				<?php foreach($technologies as $technology_id => $technology) { 
						echo get_list_view_html($technology_id,$technology);
					}
				?>
			</ul>
		</div>
	</div>

<?php include('inc/footer.php') ?>