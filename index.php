<?php 
$pageTitle = "BYU Tech Transfer";
$section = "home";
include('inc/header.php'); ?>

	<div class="section banner">
		<div class="wrapper">
			<div class="button">
				<div class="btn-txt">
					<h2 style="font-size: 1.3em">Welcome to BYU Technology Transfer</h2>
					<p>We create and license technologies in hopes of bettering mankind</p>
				</div>
					<p><a class="featured-tech-pdf" href="http://techtransfer.byu.edu/Promising-Technologies.pdf" target="_blank" style="padding-top: 0px;"><i class="fa fa-angle-double-right"></i> Promising Technologies (pdf)</a></p>
				
			</div>
		</div>
	</div>

	<div class="section shirts latest">
		<div class="wrapper">
			<h2 class="home-title"></h2>
			
		</div>
		<div class="feature-wrapper">
			<a href="technologies.php"><button id="ip-contact" style="margin-top: 0em; margin-bottom: 1em;">SEARCH ALL TECHNOLOGIES</button></a>

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