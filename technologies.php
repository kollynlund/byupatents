<?php include("inc/technologies-data.php"); ?><?php 
$pageTitle = "BYU's Full Catalog of Technologies";
$section = "patents";
include('inc/header.php'); ?>


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

			    <input class="search-patents-input" type="search" placeholder=" Search">
				<a href="featured-patents.php"><i class="fa fa-search search-patents-icon"></i></a>

				<div class="select-style">
				  <select>
				    <option value="all">Filter by category</option>
				    <option value="all">----------</option>
				    <option value="all">- All categories -</option>
				    <option value="engineering">Engineering</option>
				    <option value="software">Software</option>
				    <option value="biology">Biology</option>
				    <option value="medical">Medical</option>
				  </select>
				</div>

			</div>

			<ul class="products">
				<?php foreach($technologies as $technology_id => $technology) { 
						echo get_list_view_html($technology_id,$technology);
					}
				?>
			</ul>

		</div>

	</div>

<?php include('inc/footer.php') ?>











