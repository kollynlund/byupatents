<?php include("inc/technologies-data.php");

if (isset($_GET["id"])) {
	$technology_id = $_GET["id"];
	if (isset($technologies[$technology_id])) {
		$technology = $technologies[$technology_id];
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
						<h1 class="ip-title"><?php echo $technology["name"];?></h1>
						<span>ID# <?php echo $technology["id#"];?></span>
						<button class="ip-contact"><a href="contact.php?id=<?php echo $technology["id#"];?>">Contact</a></button>
					</div>

					<p class="ip-description"><?php echo $technology["long-description"]; ?></p>


				<div class="links-container">
					<p class="links-txt">Links</p>
					<?php foreach($technology["links"] as $link) { ?>
					<li><a class="ip-link" href="<?php echo $link; ?>"><?php echo $link; ?> </a></li>
					<?php } ?>
				</div>

				<div class="media-container">
					<div class="shirt-picture ip-page">
						<span>
							<img src="<?php echo $technology["img"]; ?>" alt="<?php echo $technology["name"]; ?>">
						</span>
					</div>
				</div>



					<p class="note-designer"></p>

				</div>

			</div>

		</div>

<?php include("inc/footer.php"); ?>