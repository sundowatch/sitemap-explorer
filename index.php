<?php 
include 'sitemap-explorer.php';

$result = explore('sitemap.xml');

if($result)
    echo "DONE";


?>