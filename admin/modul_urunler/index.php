<?php
include("include/top.php");
$page_name = "Ürünlerimiz";
$vt = "urunler";

$subpage = $_GET["subpage"];
$cat_id = $_GET["cat_id"];

if($subpage == "items" and $cat_id != "") {
	include("items.php");
} else {
	include("category.php");
}

?>
