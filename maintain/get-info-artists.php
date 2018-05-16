<?php
require_once('connect.php');

$query = "SELECT name, date, location, genres, famous_pieces, image_src, name_link, artist_id FROM artists";

$response = @mysqli_query($dbcon, $query);

if($response){
  echo '<table align="left"
  cellspacing="5" cellpadding="8">

  <tr><td align="left"><b>Artists Name</b></td>
  <td align="left"><b>Date</b></td>
  <td align="left"><b>Location</b></td>
  <td align="left"><b>Genres</b></td>
  <td align="left"><b>Famous Pieces</b></td>
  <td align="left"><b>Image Source</b></td>
  <td align="left"><b>Name Link</b></td>
  <td align="left"><b>Artists ID</b></td></tr>';

  while($row = mysqli_fetch_array($response)){
    echo '<tr><td align="left">' .
    $row['name']. '</td><td align="left">' .
    $row['date']. '</td><td align="left">' .
    $row['location']. '</td><td align="left">' .
    $row['genres']. '</td><td align="left">' .
    $row['famous_pieces']. '</td><td align="left">' .
    $row['image_src']. '</td><td align="left">' .
    $row['name_link']. '</td><td align="left">' .
    $row['artist_id']. '</td><td align="left">';
    echo '</tr>';
  }
  echo '<table>';
}else{
  echo "Couldnt issue database query";
  echo mysqli_error($dbcon);
}
mysqli_close($dbcon);
?>
