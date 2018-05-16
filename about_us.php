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
.text {
        font-family: Quicksand;
        font-size: 2vw;
}
</style>

<body>
    <?php 
        if(isset($_GET["artworkID"])){
            $artworkID = $_GET["artworkID"];
        }
        if(isset($_GET["artistID"])){
            $artistID = $_GET["artistID"];
        }
        if(isset($_GET["museumID"])){
            $museumID = $_GET["museumID"];
        }
        
    ?>
    <!-- shopping cart -->
    <?php include("shopping-cart.php") ?>
    
    <!-- Header -->
    <?php include("header.php"); ?>

	<!-- Navbar -->
    <?php include("nav.php"); ?>
    
    <br>
    <div class="aboutus">
        <img src="https://i.imgur.com/yJs24Wx.jpg" class="image" style="border-radius: 50%; width: 25%; padding: 20px;"><div class="text">Joanna Makary</div>
    </div>
    <div class="aboutus">
        <img src="https://i.imgur.com/Gz8xIyv.jpg" class="image" style="border-radius: 50%; width: 25%; padding: 20px;"><div class="text">Kelvin Liu</div>
    </div>
    <div class="aboutus">
        <img src="https://i.imgur.com/15rsAWN.jpg" class="image" style="border-radius: 50%; width: 25%; padding: 20px;"><div class="text">Kavinsan Thavanesan</div><br><br><br><br><br>
    </div>
    
    <!-- footer -->
    <?php include("footer.php") ?>
    

    <!-- scripts -->
	<script src="js/assignment2-Team4.js"></script>


</body>
</html>
