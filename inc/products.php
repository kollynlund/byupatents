<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";


    $output = $output . "<li " . "class='patent-list-details'" . '>';
    $output = $output . '<a href="shirt.php?id=' . $product_id . '">';
//    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "<p " . "class='patent-name'" . ">" . $product["name"] . "</p>";
    $output = $output . "<span>" . " #: " . $product["patent-#"] . "</span>";
    $output = $output . "<p>" . "* " . $product["description"] . "</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";


    return $output;
}

$products = array();
$products[101] = array(
	"name" => "Isotruss",
    "patent-#" => "7,423,332",
	"img" => "img/shirts/shirt-101.jpg",
	"price" => 11,
    "description" => "This patent is the best in the world! Created by Kollyn Lund and Joe. It helps balance weight on the left side 
    and on the right. It has two wheels and moves fast.",
	
    
);
$products[102] = array(
	"name" => "CVT-1",
    "patent-#" => "7,223,322",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20,
    "paypal" => "SXKPTHN2EES3J",
    "description" => "This patent is the best in the world! Created by Kollyn Lund and Joe. It helps balance weight on the left side 
    and on the right. It has two wheels and moves fast.",
);
$products[103] = array(
    "name" => "CVT-2",
    "patent-#" => "4,423,777",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 20,
    "description" => "This patent is the best in the world! Created by Kollyn Lund and Joe. It helps balance weight on the left side 
    and on the right. It has two wheels and moves fast.",
);
$products[104] = array(
    "name" => "Search Software",
    "patent-#" => "7,667,554",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 18,
    "description" => "This patent is the best in the world! Created by Kollyn Lund and Joe. It helps balance weight on the left side 
    and on the right. It has two wheels and moves fast.",
);
$products[105] = array(
    "name" => "Patent 2342344",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 25,
    "description" => "This patent is the best in the world! Created by Kollyn Lund and Joe. It helps balance weight on the left side 
    and on the right. It has two wheels and moves fast.",

);
$products[106] = array(
    "name" => "Patent 777675654",
    "img" => "img/shirts/shirt-106.jpg",    
    "price" => 20,
    "description" => "This patent is the best in the world! Created by Kollyn Lund and Joe. It helps balance weight on the left side 
    and on the right. It has two wheels and moves fast.",
);
$products[107] = array(
    "name" => "Patent 554443433",
    "img" => "img/shirts/shirt-107.jpg",    
    "price" => 20,
    "description" => "This patent is the best in the world! Created by Kollyn Lund and Joe. It helps balance weight on the left side 
    and on the right. It has two wheels and moves fast.",
);
$products[108] = array(
    "name" => "Patent 4433343",
    "img" => "img/shirts/shirt-108.jpg",    
    "price" => 25,
    "description" => "This patent is the best in the world! Created by Kollyn Lund and Joe. It helps balance weight on the left side 
    and on the right. It has two wheels and moves fast.",
);

?>