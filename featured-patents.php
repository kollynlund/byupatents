<?php 
$pageTitle = "BYU Tech Transfer";
$section = "home";
include('inc/header.php'); ?>


			<div class="wrapper">

				<div class="section shirts latest">

				<h2>BYU&rsquo;s Featured Patents</h2>

				<div class="breadcrumb"><a href="patents.php">Patents</a> &gt; <a href="featured-patents.php">Featured-Patents</a> &gt; <?php echo $product["name"]; ?></div>

				<?php include("inc/featured-products.php"); ?>

				<ul class="products">
					<?php foreach($products as $product_id => $product) { 
							echo get_list_view_html($product_id,$product);
						}
					?>
				</ul>

			</div>

		</div>
		</div>


<?php include('inc/footer.php') ?>