<?php include("inc/products.php"); ?><?php 
$pageTitle = "BYU's Full Catalog of Patents";
$section = "patents";
include('inc/header.php'); ?>



		<div class="section shirts page">
			<div class="wrapper">

				<h1>BYU&rsquo;s Full List of Patents</h1>
				<p>Here is BYU's list of available patents. Click on any patent for more info. Look at our <a href="featured-patents.php">featured patents</a> or just browse the list.</p>
			


<div class="search-container">

<input class="search-patents-input" type="search" placeholder=" Search"><a href="featured-patents.php"><i class="fa fa-search search-patents-icon"></i></a>

<div class="select-style">
  <select>
    <option value="volvo">Filter by category</option>
    <option value="volvo">----------</option>
    <option value="engineering">Engineering</option>
    <option value="software">Software</option>
    <option value="biology">Biology</option>
  </select>
</div>

</div>

			<a class="patent-info" href="#">
				<div class="patent-list">
					<div class="patent-container">
						<h2 class="patent-name">Isotruss </h2> <span> #: 7,342,333</span>
						<p class="patent-description">* A new manufaturing material for poles.</p>
				    </div>
			    </div>
			</a>

			<a class="patent-info" href="#">
				<div class="patent-list">
					<div class="patent-container">
						<h2 class="patent-name">CVT Clutch </h2> <span> #: 6,342,223</span>
						<p class="patent-description">* A new way to make cars faster and better.</p>
				    </div>
			    </div>
			</a>

			<a class="patent-info" href="#">
				<div class="patent-list">
					<div class="patent-container">
						<h2 class="patent-name">Search Software </h2> <span> #: 5,332,223</span>
						<p class="patent-description">* A new way to make cyour search engine for reliable.</p>
				    </div>
			    </div>
			</a>



<!-- 
				<ul class="products">
					<?php foreach($products as $product_id => $product) { 
							echo get_list_view_html($product_id,$product);
						}
					?>
				</ul> -->

			</div>

		</div>


<?php include('inc/footer.php') ?>


<!-- 

<div class="patent-filter">
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