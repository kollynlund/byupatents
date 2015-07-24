<?php


/* This file contains instructions for three different states of the form:
 *   - Displaying the initial search form
 *   - Handling a form submission and ...
 *       - ... displaying the results if matches are found.
 *       - ... displaying a "no results found" message if necessary.
 */

// if a non-blank search term is specified in
// the query string, perform a search
$search_term = "";
if (isset($_GET["s"])) {
	$search_term = trim($_GET["s"]);
	if ($search_term != "") {
		require_once("inc/products.php");
		$products = get_products_search($search_term);
	}
}

$pageTitle = "Search";
$section = "search";
include("inc/header.php"); ?>

	<div class="section shirts search page">

		<div class="wrapper">

			<h1>Search</h1>

			<form method="get" action="./">
				<?php // pre-populate the current search term in the search box; ?>
				<?php // if a search hasn't been performed, then that search term ?>
				<?php // will be blank and the box will look empty ?>
				<input type="text" name="s" value="<?php echo htmlspecialchars($search_term); ?>">
				<input type="submit" value="Go">
			</form>

			<?php // if a search has been performed ... ?>
			<?php if ($search_term != "") : ?>

				<?php // if there are products found that match the search term, display them; ?>
				<?php // otherwise, display a message that none were found ?>
				<?php if (!empty($products)) : ?>
					<ul class="products">
						<?php
							foreach($products as $product_id => $product) { 
							echo get_list_view_html($product_id,$product);
					    	}
						?>
					</ul>
				<?php else: ?>
					<p>No products were found matching that search term.</p>
				<?php endif; ?>

			<?php endif; ?>

		</div>

	</div>

<?php include("inc/footer.php"); ?>