<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";


    $output = $output . "<li>";
    $output = $output . '<a href="shirt.php?id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "<p>Patent 123</p>";
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";


    return $output;
}

$products = array();
$products[101] = array(
	"name" => "Patent 123123",
	"img" => "img/shirts/shirt-101.jpg",
	"price" => 11,
    "description" => "This patent is the best in the world! Created by Kollyn Lund and Joe. It helps balance weight on the left side 
    and on the right. It has two wheels and moves fast.",
    
);
$products[102] = array(
	"name" => "Patent 5435435",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20,
    "paypal" => "SXKPTHN2EES3J",
);
$products[103] = array(
    "name" => "Patent 234323",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 20,
    "paypal" => "7T8LK5WXT5Q9J",
);
$products[104] = array(
    "name" => "Patent 3242323",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 18,
    "paypal" => "YKVL5F87E8PCS",
);
$products[105] = array(
    "name" => "Patent 2342344",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 25,
    "paypal" => "4CLP2SCVYM288",
);



?>