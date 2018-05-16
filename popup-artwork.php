	<?php 
    require_once('connect.php');
    $toggleInfo = "active-info";
    $togglePic = "active-pic";
    
    if (!isset($artworkID)){
        $artworkID = 0;
    }
    if (!isset($artistID)){
        $artistID = 0;
    }
    if (!isset($museumID)){
        $museumID = 0;
    }
    if ($artworkID == 0){
        $toggleInfo = "non-active-info";
        $togglePic = "non-active-pic"; 
    } else if ($artworkID != 0){
        $artistID = 0;
        $museumID = 0;
      
    
        $query = "SELECT name, description, price, image_src, name_link FROM artworks WHERE artwork_id = " . $artworkID;

        $response = @mysqli_query($dbcon,$query);
        if($response) {
            $row = mysqli_fetch_array($response);

            $artworkHref = $row['name_link'];
            $type = $row['description'];
            $price = $row['price'];
            $image_src = $row['image_src'];  

            $func = array(0 => '',1 => 'addGuernica();', 2 => 'addMona();', 3 => 'addStarry();', 4 => 'addVenus();', 5 => 'addScream();', 6 => 'addLily();');

        echo'
        <div id="popup-bg">
             <!-- Guernica Windows -->

        <div class="window-container">
            <div id="information" class="' . $toggleInfo .' window-two">
                <i><strong><big><a id = "artworkName" href="' . $artworkHref .'">' . $row['name'] . '</a></big></strong></i><br>
                <span id = "type">' . $type . '</span><br>
                <strong>Price:</strong> <span id="price">' . $price .'</span><br>
                <a class="add-cart" onClick="' . $func[$artworkID] . ' updatePrice();"><img src="add-to-cart.png" class="add-cart-main" ></a>
            </div>
            <div id="" class="' . $togglePic .' window-one" >
                <a id = "piclink" href="' . $artworkHref .'"><img id = "pic" src="' . $image_src .'"\></a>
            </div>
        </div>
        </div>
        ';
        } else {
            echo "Couldn't connect";
            echo mysqli_error($dbcon);
        }
        mysqli_close($dbcon);
        
    } if ($artistID == 0){
        $toggleInfo = "non-active-info";
        $togglePic = "non-active-pic"; 
    } else if ($artistID != 0){
        $artworkID = 0;
        $museumID = 0;
        
        $query = "SELECT name, date, genres, image_src, name_link FROM artists WHERE artist_id = " . $artistID;

        $response = @mysqli_query($dbcon,$query);
        if($response) {
            $row = mysqli_fetch_array($response);

            $artworkHref = $row['name_link'];
            $genres = $row['genres'];
            $name = $row['name'];
            $image_src = $row['image_src'];
            $date = $row['date'];

        echo'
        <div id="popup-bg">
            <div class="window-container">

            <div id="monet-info" class="active-info window-two">
                <i><strong><big><a href="' . $artworkHref .'">' . $name .'</a></big</strong></i><br>
                ' . $date .'<br><br>
                ' . $genres .'<br><br>
            </div>
            <div id="monet-pic" class="active-pic window-one">
                <a id = "piclink" href="' . $artworkHref .'"><img id = "pic" src="' . $image_src .'"\></a>
            </div>
            </div>
        </div>
        ';
        } else {
            echo "Couldn't connect";
            echo mysqli_error($dbcon);
        }
        mysqli_close($dbcon);
        
    } if ($museumID == 0){
        $toggleInfo = "non-active-info";
        $togglePic = "non-active-pic"; 
    } else if ($museumID != 0){
        $artworkID = 1;
        $artistID = 0;
      
    
        $query = "SELECT name, description, date, location, people, history, artworks, image_src, name_link FROM museums WHERE museum_id = " . $museumID;

        $response = @mysqli_query($dbcon,$query);
        if($response) {
            $row = mysqli_fetch_array($response);

            $artworkHref = $row['name_link'];
            $description = $row['description'];
            $date = $row['date'];
            $image_src = $row['image_src'];  


        echo'
        <div id="popup-bg">
             <!-- Guernica Windows -->

        <div class="window-container">
            <div id="information" class="active-info window-two">
                <i><strong><big><a id = "artworkName" href="' . $artworkHref .'">' . $row['name'] . '</a></big></strong></i><br>
                ' . $date .'<br><br>
                ' . $description .'<br><br>
            </div>
            <div id="" class="active-pic window-one">
                <a id = "piclink" href="' . $artworkHref .'"><img id = "pic" src="' . $image_src .'"\></a>
            </div>
        </div>
        </div>
        ';
        } else {
            echo "Couldn't connect";
            echo mysqli_error($dbcon);
        }
        mysqli_close($dbcon);
    }
    ?>



 
