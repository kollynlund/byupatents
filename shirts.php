<?php include("inc/products.php"); ?><?php 
$pageTitle = "Mike's Full Catalog of Shirts";
$section = "shirts";
include('inc/header.php'); ?>

		<div class="section shirts page">

			<div class="wrapper">

				<h1>BYU&rsquo;s Full List of Patents</h1>
				<p>Here is BYU's full list of available patents. Feel free to <a href="#">contact us</a> with any questions or just browse the list.</p>
			<ul class="list">
			    <li class="list__item">
			      <label class="label--checkbox">
			          <input type="checkbox" class="checkbox" checked>
			            Item 1
			      </label>
			    </li>
			    <li class="list__item">
			      <label class="label--checkbox">
			          <input type="checkbox" class="checkbox">
			            Item 2
			      </label>
			    </li>
			    <li class="list__item">
			      <label class="label--checkbox">
			          <input type="checkbox" class="checkbox">
			            Item 3
			      </label>
			    </li>
			    <li class="list__item">
			      <label class="label--checkbox">
			          <input type="checkbox" class="checkbox">
			            Item 4
			      </label>
			    </li>
			</ul>


				<ul class="products">
					<?php foreach($products as $product_id => $product) { 
							echo get_list_view_html($product_id,$product);
						}
					?>
				</ul>

			</div>

		</div>

<?php include('inc/footer.php') ?>