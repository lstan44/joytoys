<?php
require_once('head.php');
require_once('nav.php');
function getWishListJson($id){
  $url = "http://localhost/joytoys/wishlist.php?id=".$id;
  $raw = file_get_contents($url);
  $json = json_decode($raw,true);
  return $json;
  // var_dump($json);
}

$wishlist_id = array("1YV5N1HU2E901","F01K7CEUBOE3");
$idx = array_rand($wishlist_id);
$amaz_id = $wishlist_id[$idx];
    $json_data = getWishListJson($amaz_id);
    //Traverse array and get the data for amazon gifts in wishlist
    // var_dump($json_data[0]);
    if (is_array($json_data) || is_object($json_data)){ // silences error
      // echo '<div class="card" style="width: 18rem;">';
      echo '<center><table>';
      foreach ($json_data as $key => $val) {
        if($val['num']>3) break; // upto 3 items
        $link = $val['link'];
        echo '<tr>';
      echo '<img src="'.$val['picture'].'" class="card-img-top" alt="Image"style=" max-height: 300px; max-width: 300px;">';
        echo '<h5 class="card-title">'. $price.'</h5>';
        echo '<p class="card-text">'. $val['name']. '</p>';
        echo '<tr><a href="'.$link.'" class="btn btn-primary">BUY</a></tr>';
      // echo '</span></div>';
        echo '<br>';
        echo '</tr>';
      }
      echo '</table></center>';
    }

?>
<?php
  require_once 'footer.php'
?>