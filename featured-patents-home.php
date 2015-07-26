<?php 
$pageTitle = "BYU Tech Transfer";
$section = "home";
include('inc/header.php'); ?>

	<div class="section shirts latest page">
		<div class="wrapper">
			<h2 class="home-title">BYU&rsquo;s Featured Patents</h2>
			<div class="breadcrumb"><a href="technologies.php">Technologies</a> &gt; <a href="featured-technologies.php">Featured-Technologies</a> &gt; <?php echo $technology["name"]; ?></div>
		</div>
		<div class="feature-wrapper">
			<?php include("inc/featured-technologies.php"); ?>
			<ul class="technologies featured-container">
				<?php foreach($technologies as $technology_id => $technology) { 
						echo get_list_view_html($technology_id,$technology);
					}
				?>
			</ul>
		</div>
	</div>

<?php include('inc/footer.php') ?>