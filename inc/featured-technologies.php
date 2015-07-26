<?php

function get_list_view_html($technology_id, $technology) {
    
    $output = "";


    $output = $output . "<li>";
    $output = $output . '<a href="technology.php?id=' . $technology_id . '">';
    $output = $output . "<p " . "class='featured-name'" . ">" . $technology["name"] . "</p>";
    $output = $output . '<img src="' . $technology["img"] . '" alt="' . $technology["name"] . '">';
    $output = $output . "<p " . "class='featured-view'" . ">View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";


    return $output;
}

$technologies = array();
$technologies[101] = array(
	"name" => "Isotruss",
	"img" => "img/ip/ip-101.jpg",
	"price" => 11,
    "description" => "This patent is the best in the world! Created by Kollyn Lund and Joe. It helps balance weight on the left side 
    and on the right. It has two wheels and moves fast.",
    
);
$technologies[102] = array(
	"name" => "CVT",
    "img" => "img/ip/ip-102.jpg",
    "price" => 20,
    "paypal" => "SXKPTHN2EES3J",
);
$technologies[103] = array(
    "name" => "Search software",
    "img" => "img/ip/ip-103.jpg",    
    "price" => 20,
    "paypal" => "7T8LK5WXT5Q9J",
);
$technologies[104] = array(
    "name" => "Medical Device",
    "img" => "img/ip/ip-104.jpg",    
    "price" => 18,
    "paypal" => "YKVL5F87E8PCS",
);




?>