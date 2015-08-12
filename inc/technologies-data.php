<?php

function get_list_view_html($technology_id, $technology) {
    
    $output = "";



    $output = $output . '<a ' . "class='patent-info'" . 'href="technology.php?id=' . $technology_id . '">';
    $output = $output . "<div " . "class='patent-list'" . ">";
    $output = $output . "<div " . "class='patent-container'" . ">";
    $output = $output . "<h2 " . "id='patent-name'" . ">" . $technology["name"] . "</h2>";
    $output = $output . "<span>" . " ID: " . $technology["id#"] . "</span>";
    $output = $output . "<p " . "class='patent-description'" . ">" . $technology["short-description"] . "</p>";
    $output = $output . "</div>";
    $output = $output . "</div>";
    $output = $output . "</a>";



    return $output;
}

function searchForId($id, $array) {
   foreach ($array as $key => $val) {
       if ($val['id#'] === $id) {
           return $key;
       }
   }
   return null;
}



function get_products_all(){
    $technologies = array();

    $technologies[101] = array(
        "name" => "Isotruss",
        "id#" => "2014-032",
        "img" => "img/ip/ip-101.jpg",
        "short-description" => "This patent will change the world of composite structures.",
        "long-description" => "This invention discloses a spinal implant that restores healthy motion to a degenerated spinal segment.  The device is unique in that it is capable of distracting and supporting an intervertebral disc, while supplying a tailorable force-deflection response based on individual patient need.  The device leverages principles of compliant mechanism design that provides motion in a similar manner to that of the spine itself.  Based on surgeon feedback, the device has been designed to fit within the space between adjacent pedicles on the spine and be approximately the same circumference as the pedicle screw heads used to fixate the device.",    
        "tags" => "struts bridges cars",
        "categories" => "engineering, technology",
        "links" => array("http://www.pinkbike.com","http://www.ebay.com"),
    );

    $technologies[102] = array(
        "name" => "CVT-1",
        "patent-#" => "7,223,322",
        "img" => "img/ip/ip-102.jpg",
        "price" => 20,
        "short-description" => "An awesome car part.  It will make your car faster",
        "long-description" => "This invention discloses a spinal implant that restores healthy motion to a degenerated spinal segment.  The device is unique in that it is capable of distracting and supporting an intervertebral disc, while supplying a tailorable force-deflection response based on individual patient need.  The device leverages principles of compliant mechanism design that provides motion in a similar manner to that of the spine itself.  Based on surgeon feedback, the device has been designed to fit within the space between adjacent pedicles on the spine and be approximately the same circumference as the pedicle screw heads used to fixate the device.", 
    );
    $technologies[103] = array(
        "name" => "CVT-2",
        "patent-#" => "4,423,777",
        "img" => "img/ip/ip-103.jpg",    
        "price" => 20,
        "short-description" => "This patent is the best in the world! Created by Kollyn Lund and Joe. It helps balance weight on the left side 
        and on the right. It has two wheels and moves fast.",
        "long-description" => "This invention discloses a spinal implant that restores healthy motion to a degenerated spinal segment.  The device is unique in that it is capable of distracting and supporting an intervertebral disc, while supplying a tailorable force-deflection response based on individual patient need.  The device leverages principles of compliant mechanism design that provides motion in a similar manner to that of the spine itself.  Based on surgeon feedback, the device has been designed to fit within the space between adjacent pedicles on the spine and be approximately the same circumference as the pedicle screw heads used to fixate the device.",
    );
    $technologies[104] = array(
        "name" => "Search Software",
        "patent-#" => "7,667,554",
        "img" => "img/ip/ip-104.jpg",    
        "price" => 18,
        "categories" => "software",
        "short-description" => "A more efficient search",
        "long-description" => "This invention discloses a spinal implant that restores healthy motion to a degenerated spinal segment.  The device is unique in that it is capable of distracting and supporting an intervertebral disc, while supplying a tailorable force-deflection response based on individual patient need.  The device leverages principles of compliant mechanism design that provides motion in a similar manner to that of the spine itself.  Based on surgeon feedback, the device has been designed to fit within the space between adjacent pedicles on the spine and be approximately the same circumference as the pedicle screw heads used to fixate the device.",
    );
    $technologies[105] = array(
        "name" => "Patent 2342344",
        "img" => "img/ip/ip-105.jpg",   
        "price" => 25, 
        "short-description" => "This patent is the best in the world! Created by Kollyn Lund and Joe. It helps balance weight on the left side 
        and on the right. It has two wheels and moves fast.",
        "long-description" => "This invention discloses a spinal implant that restores healthy motion to a degenerated spinal segment.  The device is unique in that it is capable of distracting and supporting an intervertebral disc, while supplying a tailorable force-deflection response based on individual patient need.  The device leverages principles of compliant mechanism design that provides motion in a similar manner to that of the spine itself.  Based on surgeon feedback, the device has been designed to fit within the space between adjacent pedicles on the spine and be approximately the same circumference as the pedicle screw heads used to fixate the device.",
    );
    $technologies[106] = array(
        "name" => "Patent 777675654",
        "img" => "img/ip/ip-106.jpg",    
        "price" => 20,
        "short-description" => "This patent is the best in the world! Created by Kollyn Lund and Joe. It helps balance weight on the left side 
        and on the right. It has two wheels and moves fast.",
        "long-description" => "This invention discloses a spinal implant that restores healthy motion to a degenerated spinal segment.  The device is unique in that it is capable of distracting and supporting an intervertebral disc, while supplying a tailorable force-deflection response based on individual patient need.  The device leverages principles of compliant mechanism design that provides motion in a similar manner to that of the spine itself.  Based on surgeon feedback, the device has been designed to fit within the space between adjacent pedicles on the spine and be approximately the same circumference as the pedicle screw heads used to fixate the device.",
    );
    $technologies[107] = array(
        "name" => "Patent 554443433",
        "img" => "img/ip/ip.jpg",    
        "price" => 20,
        "categories" => "medical",
        "short-description" => "This is a great medical patent",
        "long-description" => "This invention discloses a spinal implant that restores healthy motion to a degenerated spinal segment.  The device is unique in that it is capable of distracting and supporting an intervertebral disc, while supplying a tailorable force-deflection response based on individual patient need.  The device leverages principles of compliant mechanism design that provides motion in a similar manner to that of the spine itself.  Based on surgeon feedback, the device has been designed to fit within the space between adjacent pedicles on the spine and be approximately the same circumference as the pedicle screw heads used to fixate the device.",
    );
    $technologies[108] = array(
        "name" => "Patent 4433343",
        "img" => "img/ip/ip-108.jpg",    
        "price" => 25,
        "categories" => "biology",
        "short-description" => "This patent is the best in the world! Created by Kollyn Lund and Joe. It helps balance weight on the left side 
        and on the right. It has two wheels and moves fast.",
        "long-description" => "This invention discloses a spinal implant that restores healthy motion to a degenerated spinal segment.  The device is unique in that it is capable of distracting and supporting an intervertebral disc, while supplying a tailorable force-deflection response based on individual patient need.  The device leverages principles of compliant mechanism design that provides motion in a similar manner to that of the spine itself.  Based on surgeon feedback, the device has been designed to fit within the space between adjacent pedicles on the spine and be approximately the same circumference as the pedicle screw heads used to fixate the device.",
    );

    return $technologies;
}


function get_products_search($s) {
    $results = array();
    $all = get_products_all();

    foreach($all as $product) {
        if (stripos($product["name"],$s) !== false or stripos($product["short-description"],$s) !== false or stripos($product["tags"],$s) !== false or stripos($product["long-description"],$s) !== false) {
            $results[] = $product;
        }
    }
    return $results;
}

function get_category_results($s,$c){
    $results = array();

    foreach($c as $product) {
        if (stripos($product["name"],$s) !== false or stripos($product["description"],$s) !== false or stripos($product["tags"],$s) !== false) {
            $results[] = $product;
        }
    }
    return $results;
}

function get_category_search($s) {
    $results = array();
    $all = get_products_all();

    foreach($all as $product) {
        if (stripos($product["categories"],$s) !== false) {
            $results[] = $product;
        }
    }
    return $results;
}

?>