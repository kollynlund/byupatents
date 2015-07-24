<?php 
$pageTitle = "BYU Tech Transfer";
$section = "home";
include('inc/header.php'); ?>
		<div class="section banner">

			<div class="wrapper">

				
				<div class="button">
					<a href="patents.php">
						<h2>Welcome to BYU Tech Transfer</h2>
						<p>We create and liscence technologies in hopes of bettering mannkind</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2 class="home-title">BYU&rsquo;s Featured Patents</h2>

			</div>

			<div class="feature-wrapper">

				<?php include("inc/featured-products.php"); ?>

				<ul class="products featured-container">
					<?php foreach($products as $product_id => $product) { 
							echo get_list_view_html($product_id,$product);
						}
					?>
				</ul>

			</div>

		</div>

<?php include('inc/footer.php') ?>