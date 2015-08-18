<?php include("inc/technologies-data.php"); ?><?php 
$pageTitle = "Technologies | BYU Tech Transfer";
$section = "patents";
include('inc/header.php'); 

$search=False;
$allresults = get_products_all();
$search_term = "";
if ($_GET["c"] != '') {
	$placeholder = $_GET["c"];
	$category = trim($_GET["c"]);
	if ($category != ""){
		$search=True;
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
	$search_term = trim($_GET["s"]);
	if ($search_term != "") {
		$search=True;
		$products = get_products_search($search_term);
	}
} ?>





	<div class="section shirts page">

		<div class="wrapper">
			<div class="breadcrumb"><a href="index.php">Home</a> &gt; <a href="technologies.php">Technologies</a> </div>

			<h1 style="margin-bottom: 0em;">BYU&rsquo;s Full List of Technologies</h1>
			<p style="text-align: center; margin-top: 0px;"><a class="featured-tech-pdf" href="http://techtransfer.byu.edu/Promising-Technologies.pdf" target="_blank" style="padding-top: 0px; font-size: 1em; text-align: center;">Download the list of promising technologies (pdf)</a></p>



			<p>Here is BYU's list of available technologies. Filter throught the technologies by category or by searching keywords. Click on any patent for more info.</p>







			<div class="search-container">
				<div class="group"><a id="clear-search" href="technologies.php">Clear Search</a></div>

			<form method="get">
				<?php // pre-populate the current search term in the search box; ?>
				<?php // if a search hasn't been performed, then that search term ?>
				<?php // will be blank and the box will look empty ?>
				<div class="group"><input class="search-box" placeholder="Search technologies..." type="text" name="s" value="<?php echo htmlspecialchars($search_term); ?>">
				<div class="select-style">
				  <select name="c" value ="<?php $placeholder?>">
				    <option value="">All categories</option>
				    <option value <?php if ($category == 'engineering') { ?>selected<?php }; ?>="engineering">Engineering</option>
				    <option value <?php if ($category == 'software') { ?>selected<?php }; ?>="software">Software</option>
				    <option value <?php if ($category == 'biology') { ?>selected<?php }; ?>="biology">Biology</option>
				    <option value <?php if ($category == 'medical') { ?>selected<?php }; ?>="medical">Medical</option>
				  </select>
				</div>
				<input id="search-go" type="submit" value="Update Search"></div>
			</form>

			<?php // if a search has been performed ... ?>
			<?php if ($search_term != "") : ?>

						<?php endif; ?>
				<?php // if there are products found that match the search term, display them; ?>
				<?php // otherwise, display a message that none were found ?>
				<?php if (!empty($products)) : ?>
					<ul class="products">
						<?php

												    // Find out how many items are in the table
							    $total = count($products);

							    If($total > 5){

							    // How many items to list per page
							    $limit = 5;

							    // How many pages will there be
							    $pages = ceil($total / $limit);

							    // What page are we currently on?
							    $page = min($pages, filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, array(
							        'options' => array(
							            'default'   => 1,
							            'min_range' => 1,
							        ),
							    )));

							    // Calculate the offset for the query
							    $offset = ($page - 1)  * $limit;

							    // Some information to display to the user
							    $start = $offset + 1;
							    $end = min(($offset + $limit), $total);
							    // Prepare the paged query
							    							    // The "back" link
							    $prevlink = ($page > 1) ? '<a href="?page=1" title="First page">&laquo;</a> <a href="?page=' . ($page - 1) . '" title="Previous page">&lsaquo;</a>' : '<span class="disabled">&laquo;</span> <span class="disabled">&lsaquo;</span>';

							    // The "forward" link
							    $nextlink = ($page < $pages) ? '<a href="?page=' . ($page + 1) . '" title="Next page">&rsaquo;</a> <a href="?page=' . $pages . '" title="Last page">&raquo;</a>' : '<span class="disabled">&rsaquo;</span> <span class="disabled">&raquo;</span>';

							    // Display the paging information
							    echo '<div id="paging"><p>', $prevlink, ' Page ', $page, ' of ', $pages, ' pages, displaying ', $start, '-', $end, ' of ', $total, ' results ', $nextlink, ' </p></div>';


							        // Display the results
							    $keys = array_keys($products);
							
							
							    for($i = $start; $i <= $end; $i++) {
							    		$key = $keys[$i-1];
										echo get_list_view_html($key,$products[$key]);
							}
														    // The "back" link
							    $prevlink = ($page > 1) ? '<a href="?page=1" title="First page">&laquo;</a> <a href="?page=' . ($page - 1) . '" title="Previous page">&lsaquo;</a>' : '<span class="disabled">&laquo;</span> <span class="disabled">&lsaquo;</span>';

							    // The "forward" link
							    $nextlink = ($page < $pages) ? '<a href="?page=' . ($page + 1) . '" title="Next page">&rsaquo;</a> <a href="?page=' . $pages . '" title="Last page">&raquo;</a>' : '<span class="disabled">&rsaquo;</span> <span class="disabled">&raquo;</span>';

							    // Display the paging information
							    echo '<div id="paging"><p>', $prevlink, ' Page ', $page, ' of ', $pages, ' pages, displaying ', $start, '-', $end, ' of ', $total, ' results ', $nextlink, ' </p></div>';
							}
							else{
							foreach ($products as $product_id => $product) {
	                          	$id_number = $product['id#'];
	                          	$array_space = searchForID($id_number, get_products_all());
	                          	echo get_list_view_html($array_space,$product);
							}}
						?>	
					</ul>
				<?php elseif($search==True): ?>
				<p class="warning"><i class="fa fa-exclamation-circle"></i> No technologies were found matching that search term.</p>
				<?php else:?>
					<?php
						    // Find out how many items are in the table
							    $total = count(get_products_all());

							    // How many items to list per page
							    $limit = 5;

							    // How many pages will there be
							    $pages = ceil($total / $limit);

							    // What page are we currently on?
							    $page = min($pages, filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, array(
							        'options' => array(
							            'default'   => 1,
							            'min_range' => 1,
							        ),
							    )));

							    // Calculate the offset for the query
							    $offset = ($page - 1)  * $limit;

							    // Some information to display to the user
							    $start = $offset + 1;
							    $end = min(($offset + $limit), $total);
							    // Prepare the paged query
							    							    // The "back" link
							    $prevlink = ($page > 1) ? '<a href="?page=1" title="First page">&laquo;</a> <a href="?page=' . ($page - 1) . '" title="Previous page">&lsaquo;</a>' : '<span class="disabled">&laquo;</span> <span class="disabled">&lsaquo;</span>';

							    // The "forward" link
							    $nextlink = ($page < $pages) ? '<a href="?page=' . ($page + 1) . '" title="Next page">&rsaquo;</a> <a href="?page=' . $pages . '" title="Last page">&raquo;</a>' : '<span class="disabled">&rsaquo;</span> <span class="disabled">&raquo;</span>';

							    // Display the paging information
							    echo '<div id="paging"><p>', $prevlink, ' Page ', $page, ' of ', $pages, ' pages, displaying ', $start, '-', $end, ' of ', $total, ' results ', $nextlink, ' </p></div>';


							        // Display the results
							    $alldata = get_products_all();
							    for($i = $start; $i <= $end; $i++) {
							    		$key = 100+$i;
										echo get_list_view_html($key,$alldata[$key]);
							}
														    // The "back" link
							    $prevlink = ($page > 1) ? '<a href="?page=1" title="First page">&laquo;</a> <a href="?page=' . ($page - 1) . '" title="Previous page">&lsaquo;</a>' : '<span class="disabled">&laquo;</span> <span class="disabled">&lsaquo;</span>';

							    // The "forward" link
							    $nextlink = ($page < $pages) ? '<a href="?page=' . ($page + 1) . '" title="Next page">&rsaquo;</a> <a href="?page=' . $pages . '" title="Last page">&raquo;</a>' : '<span class="disabled">&rsaquo;</span> <span class="disabled">&raquo;</span>';

							    // Display the paging information
							    echo '<div id="paging"><p>', $prevlink, ' Page ', $page, ' of ', $pages, ' pages, displaying ', $start, '-', $end, ' of ', $total, ' results ', $nextlink, ' </p></div>';

						?>
			<?php endif; ?>


			</div>

			<ul class="products">
			</ul>

		</div>

	</div>



<?php include('inc/footer.php') ?>











