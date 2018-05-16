<style>
.container-fluid {
	border: 2px dashed rgba(0, 0, 0, 0.2);
    background-color: rgba(255, 255, 255, 0.4);
    margin-left: 2.5vw;
    margin-right: 2vw;
    padding: 20px;
}

.review {
	font-family: Quicksand;
    font-size 1vw;
}
</style>

<div class="container-fluid">     
      <?php require_once('connect.php');
  $sql = "SELECT * FROM reviews";
  $result = $dbcon->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	echo "<pre><span class=\"review\">";
  echo "<b>Review Title:</b> " . $row["reviewer_name"]. "<br><b>Rating:</b> " . $row["rating"]. "<br><b>Comments:</b> " . $row["review"]. "<br>" . $row["review_date"]. "<br><br>";
  echo "</span></pre>";
}
} else {
echo "There are no reviews available. Leave one above!";
}
?>
</div>
</div>
</div>
