<?php
require_once('connect.php');

$query = "SELECT name, description, price, artist, date_produced, dimensions, location, genre, image_src, artwork_id FROM artworks";

$response = @mysqli_query($dbcon, $query);

if($response){
  echo '<table align="left"
  cellspacing="5" cellpadding="8">

  <tr><td align="left"><b>Artwork Name</b></td>
  <td align="left"><b>description</b></td>
  <td align="left"><b>Price</b></td>
  <td align="left"><b>Artist</b></td>
  <td align="left"><b>Date Produced</b></td>
  <td align="left"><b>Dimensions</b></td>
  <td align="left"><b>Location</b></td>
  <td align="left"><b>Genre</b></td>
  <td align="left"><b>Image Source</b></td>
  <td align="left"><b>Artwork ID</b></td></tr>';

  while($row = mysqli_fetch_array($response)){
    echo '<tr><td align="left">' .
    $row['name']. '</td><td align="left">' .
    $row['description']. '</td><td align="left">' .
    $row['price']. '</td><td align="left">' .
    $row['artist']. '</td><td align="left">' .
    $row['date_produced']. '</td><td align="left">' .
    $row['dimensions']. '</td><td align="left">' .
    $row['location']. '</td><td align="left">' .
    $row['genre']. '</td><td align="left">' .
    $row['image_src']. '</td><td align="left">' .
    $row['artwork_id']. '</td><td align="left">';
    echo '</tr>';
  }
  echo '<table>';
}else{
  echo "Couldnt issue database query";
  echo mysqli_error($dbcon);
}
mysqli_close($dbcon);
?>
