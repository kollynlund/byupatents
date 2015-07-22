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
	"paypal" => "9P7DLECFD4LKE",
    
);
$products[102] = array(
	"name" => "Patent 5435435",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20,
    "paypal" => "SXKPTHN2EES3J",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[103] = array(
    "name" => "Patent 234323",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 20,
    "paypal" => "7T8LK5WXT5Q9J",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[104] = array(
    "name" => "Patent 3242323",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 18,
    "paypal" => "YKVL5F87E8PCS",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[105] = array(
    "name" => "Patent 2342344",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 25,
    "paypal" => "4CLP2SCVYM288",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[106] = array(
    "name" => "Patent 777675654",
    "img" => "img/shirts/shirt-106.jpg",    
    "price" => 20,
    "paypal" => "TNAZ2RGYYJ396",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[107] = array(
    "name" => "Patent 554443433",
    "img" => "img/shirts/shirt-107.jpg",    
    "price" => 20,
    "paypal" => "S5FMPJN6Y2C32",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[108] = array(
    "name" => "Patent 4433343",
    "img" => "img/shirts/shirt-108.jpg",    
    "price" => 25,
    "paypal" => "JMFK7P7VEHS44",
    "sizes" => array("Large","X-Large")
);

?>