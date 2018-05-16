<?php
require_once('connect.php');

$query = "SELECT name, description, date, location, people, history, artworks, image_src, name_link, museum_id FROM museums";

$response = @mysqli_query($dbcon, $query);

if($response){
  echo '<table align="left"
  cellspacing="5" cellpadding="8">

  <tr><td align="left"><b>Museum Name</b></td>
  <td align="left"><b>Description</b></td>
  <td align="left"><b>Date</b></td>
  <td align="left"><b>Location</b></td>
  <td align="left"><b>People</b></td>
  <td align="left"><b>History</b></td>
  <td align="left"><b>Artworks/b></td>
  <td align="left"><b>Image Source</b></td>
  <td align="left"><b>Name Link</b></td>
  <td align="left"><b>Museum ID</b></td></tr>';

  while($row = mysqli_fetch_array($response)){
    echo '<tr><td align="left">' .
    $row['name']. '</td><td align="left">' .
    $row['description']. '</td><td align="left">' .
    $row['date']. '</td><td align="left">' .
    $row['location']. '</td><td align="left">' .
    $row['people']. '</td><td align="left">' .
    $row['history']. '</td><td align="left">' .
    $row['artworks']. '</td><td align="left">' .
    $row['image_src']. '</td><td align="left">' .
    $row['name_link']. '</td><td align="left">' .
    $row['museum_id']. '</td><td align="left">';
    echo '</tr>';
  }
  echo '<table>';
}else{
  echo "Couldnt issue database query";
  echo mysqli_error($dbcon);
}
mysqli_close($dbcon);
?>
