<?php
function getWishListJson($id){
$url = urlencode(utf8_encode("/joytoys/wishlist.php?id=".$id));
$raw = file_get_contents($url);
$json = json_decode($raw,true);
//return $json;
var_dump($json);
}
