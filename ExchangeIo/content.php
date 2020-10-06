<?php
    $pages = array("dashboard", "converter", "converter_request", "converter_result", 
    "historical_data", "historical_data_request", "historical_data_result", "latest", "latest_request", 
    "latest_result", "time_series", "time_series_request", "time_series_result", "about");

    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    }else {
        $page = "dashboard";
    }

    foreach($pages as $p){
        if($page == $p){
            include "src/contents/$p.php";
            break;
        }
    }

?>