<img id="myBtn"class="icon2" src="shopping-cart.png" style="height:25px; width:25px;">
<a href="maintain/maintain-page.html"><img id="maintainBtn" class="icon2" src="https://cdn4.iconfinder.com/data/icons/single-width-stroke/24/oui-icons-50-128.png" style="height: 20px; width: 20px;"/></a>
<img id="searchBtn" onclick="openSearch()" class="icon2" title="Close Overlay" src="http://icons.iconarchive.com/icons/custom-icon-design/mono-general-2/256/search-icon.png" style="height:20px; width:20px;">
<p class="title"><a href="assignment2-Team4.php"/><img src="title.png"></a></p>
<?php
$output = NULL;
if (isset($_POST['submit']))
{
  require_once('connect.php');
  $row['name_link'];
  $search = $dbcon->real_escape_string($_POST['search']);
  $resultSet = $dbcon->query("SELECT * FROM artworks WHERE name = '$search'");
  $resultSet2 = $dbcon->query("SELECT * FROM artworks WHERE name LIKE '$search%'");
  if ($resultSet->num_rows > 0){
    while ($rows = $resultSet->fetch_assoc())
    {
      $name = $rows['name'];
      $namelink = $rows['name_link'];
      $output = "Artwork $name is available at <a href='$namelink'>This Link</a>";
    }
  }
  elseif ($resultSet2->num_rows > 0) {
    while ($rows = $resultSet2->fetch_assoc())
    {
      $name = $rows['name'];
      $namelink = $rows['name_link'];
      $output .= "$search is not available, did you mean <a href='$namelink'>$name</a>?</br>";
    }
  }
  else{
    $output = "No results";
  }
}
?>
    <div id="myOverlay" class="overlay">
      <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
      <div class="overlay-content">
        <form method = "POST">
        <input type="TEXT" name="search" placeholder="Search.."/>
        <input type="SUBMIT" name="submit" value="search">
        </form>
      </div>
    </div>

    <?php
    echo '<div id="search-popup">' . $output .'</div>';
    ?>
