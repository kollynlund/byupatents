<?php include("inc/technologies-data.php"); ?><?php 
$pageTitle = "BYU's Full Catalog of Technologies";
$section = "patents";
include('inc/header.php'); 

$search=False;
$allresults = get_products_all();
$search_term = "";
if ($_GET["c"] != '') {
	$search=True;
	$placeholder = $_GET["c"];
	$category = trim($_GET["c"]);
	if ($category != ""){
		$cresults = get_category_search($category);
		$products = $cresults;
		if (isset($_GET["s"])) {
			$search_term = trim($_GET["s"]);
			if ($search_term != "") {
				$products = get_category_results($search_term,$cresults);
			}
		}
	}
}
elseif (isset($_GET["s"])) {
	$search=True;
	$search_term = trim($_GET["s"]);
	if ($search_term != "") {
		$products = get_products_search($search_term);
	}
} ?>

<!-- <div class="patent-filter">
	<h1>Filter Results</h1>
	<input type="search">
			<ul class="list">
			    <li class="list__item">
			      <label class="label--checkbox">
			          <input type="checkbox" class="checkbox" checked>
			            Medical Devices
			      </label>
			    </li>
			    <li class="list__item">
			      <label class="label--checkbox">
			          <input type="checkbox" class="checkbox">
			            Software
			      </label>
			    </li>
			    <li class="list__item">
			      <label class="label--checkbox">
			          <input type="checkbox" class="checkbox">
			            Manufacturing
			      </label>
			    </li>
			    <li class="list__item">
			      <label class="label--checkbox">
			          <input type="checkbox" class="checkbox">
			            Biology
			      </label>
			    </li>
			</ul>
<div> -->




	<div class="section shirts page">

		<div class="wrapper">

			<h1>BYU&rsquo;s Full List of Technologies</h1>
			<p>Here is BYU's list of available Technologies. Click on any patent for more info. Look at our <a href="featured-technologies.php">featured technologies</a> or just browse the list.</p>







			<div class="search-container">

			<h1>Search</h1>

			<form method="get">
				<?php // pre-populate the current search term in the search box; ?>
				<?php // if a search hasn't been performed, then that search term ?>
				<?php // will be blank and the box will look empty ?>
				<input type="text" name="s" value="<?php echo htmlspecialchars($search_term); ?>">
				<div class="select-style">
				  <select name="c" value ="<?php $placeholder?>">
				    <option value="">Filter by category</option>
				    <option value="">- All categories -</option>
				    <option value <?php if ($category == 'engineering') { ?>selected<?php }; ?>="engineering">Engineering</option>
				    <option value <?php if ($category == 'software') { ?>selected<?php }; ?>="software">Software</option>
				    <option value <?php if ($category == 'biology') { ?>selected<?php }; ?>="biology">Biology</option>
				    <option value <?php if ($category == 'medical') { ?>selected<?php }; ?>="medical">Medical</option>
				  </select>
				</div>
				<input type="submit" value="Go">
			</form>

			<?php // if a search has been performed ... ?>
			<?php if ($search_term != "") : ?>

						<?php endif; ?>
				<?php // if there are products found that match the search term, display them; ?>
				<?php // otherwise, display a message that none were found ?>
				<?php if (!empty($products)) : ?>
					<ul class="products">
						<?php
							foreach ($products as $product_id => $product) {
	                          	$id_number = $product['id#'];
	                          	$array_space = searchForID($id_number, $technologies);
	                          	echo get_list_view_html($array_space,$product);
							}
						?>	
					</ul>
				<?php elseif($search==True): ?>
				<p>No products were found matching that search term.</p>
				<?php foreach($technologies as $technology_id => $technology) { 
					echo get_list_view_html($technology_id,$technology);
				}?>
				<?php else:?>
					<?php foreach($technologies as $technology_id => $technology) { 
						echo get_list_view_html($technology_id,$technology);
						}?>
			<?php endif; ?>

			</div>

			<ul class="products">
			</ul>

		</div>

	</div>

<?php include('inc/footer.php') ?>











