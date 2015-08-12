<?php include("inc/technologies-data.php");

if (isset($_GET["id"])) {
	$technology_id = $_GET["id"];
	if (isset(get_products_all()[$technology_id])) {
		$technology = get_products_all()[$technology_id];
	}
}
if (!isset($technology)) {
	header("Location: technologies.php");
	exit();
}

$section = "shirts";
$pageTitle = $technology["name"];
include("inc/header.php"); ?>

		<div class="section page">

			<div class="wrapper">

				<div class="breadcrumb"><a href="technologies.php">Technologies</a> &gt; <?php echo $technology["name"]; ?></div>

				<div class="shirt-details">
					<div class="group">
						<h1 id="ip-title"><?php echo $technology["name"];?></h1>
						<span id="ip-id">ID: <?php echo $technology["id#"];?></span>
						
					</div>

					<p class="ip-description"><?php echo $technology["long-description"]; ?></p>




				<div class="links-container">
					<p class="links-txt">Links and Resources</p>

					<?php if(!empty($technology["links"])): foreach($technology["links"] as $link) { ?>
					<li><a class="ip-link" href="<?php echo $link; ?>"><?php echo $link; ?> </a></li>
					<?php } endif;?>
				</div>
<!-- 
				<div class="media-container">
					<div class="shirt-picture ip-page">
						<span>
							<img src="<?php echo $technology["img"]; ?>" alt="<?php echo $technology["name"]; ?>">
						</span>
					</div>
				</div> -->

								<a href="contact.php?id=<?php echo $technology["id#"];?>">
				<button id="ip-contact">Inquire about this technology</button></a>



					<p class="note-designer"></p>

				</div>

			</div>

		</div>

<?php include("inc/footer.php"); ?>