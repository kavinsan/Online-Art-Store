<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assignment2-Team4.css">
    <title>Online Art Store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='icon' href='http://icons.iconarchive.com/icons/elegantthemes/beautiful-flat/128/paint-brush-icon.png' type='image/x-icon'/ >
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'>
    <!-- Scripts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone-min.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<style>

.review {
    font-family: Quicksand;
    font-size 1vw;
}

</style>

<body>
    <!-- shopping cart -->
    <?php include("shopping-cart.php") ?>

    <!-- Header -->
    <?php include("header.php"); ?>

    <!-- Navbar -->
    <?php include("nav.php"); ?>

    <br>

    <form action="" method="post" accept-charset="utf-8" class="review">
        <fieldset><legend>Leave a Review</legend>   
            Review Name
            <input id="name" name="name" placeholder="Title Your Post" type="text" required><br><p>
            <p><label for="rating">Rating &nbsp; </label><input type="radio" name="rating"
              value="5" /> 5 <input type="radio" name="rating" value="4" /> 4
              <input type="radio" name="rating" value="3" /> 3 <input type="radio"
              name="rating" value="2" /> 2 <input type="radio" name="rating" value="1" /> 1</p>
              <p><label for="review">Review &nbsp; </label><textarea name="review" rows="8" cols="40">
              </textarea></p>
              <p><input type="submit" name="submitr" value="Submit Review"></p>
          </fieldset>
      </form>
      <br>
      <iframe src="reviews.php" style="position: relative; width:100%;height: 100vh; padding-top: 5px;"></iframe>

  <?php
      if (isset($_POST["submitr"])) {
        mysqli_query($dbcon, "insert into reviews (reviewer_name, rating, review) values('$_POST[name]','$_POST[rating]','$_POST[review]')");
        }
    ?>

    <!-- footer -->
    <?php include("footer.php") ?>


    <!-- scripts -->
    <script src="js/assignment2-Team4.js"></script>


</body>
</html>
