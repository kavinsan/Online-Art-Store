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
      
    
        $query = "SELECT name, description, price, artist, date_produced, dimensions, location, genre, image_src, name_link FROM artworks WHERE artwork_id = " . $artworkID;

        $response = @mysqli_query($dbcon,$query);
        if($response) {
            $row = mysqli_fetch_array($response);

            $artworkHref = $row['name_link'];
            $type = $row['description'];
            $price = $row['price'];
            $image_src = $row['image_src'];
            $name = $row['name'];
            $artist = $row['artist'];
            $date = $row['date_produced'];
            $dimensions = $row['dimensions'];
            $location = $row['location'];
            $genre = $row['genre'];

            $func = array(0 => '',1 => 'addGuernica();', 2 => 'addMona();', 3 => 'addStarry();', 4 => 'addVenus();', 5 => 'addScream();', 6 => 'addLily();');

        echo'
        <div id="popup-bg">
            <div class="window-container">
                <div id="birthvenus-info" class="product-desc">
                    <strong><big><big><big>' . $name .'</big></big></big></strong><br>
                    ' . $type .'<br>
                    by <strong>' . $artist .'</strong><br><br>
                    <strong>Date of production:</strong> 1484–1486<br>
                    <strong>Dimensions:</strong> ' . $dimensions .'<br>
                    <strong>Location:</strong> ' . $location .'<br>
                    <strong>Price:</strong> <i>' . $price .'</i><br>
                    <strong>Genre:</strong> ' . $genre .'<br>
                    <a class="add-cart" onClick="' . $func[$artworkID] .' updatePrice();"><img src="add-to-cart.png" class="add-cart" ></a>
                </div>
                <div id="birthvenus-pic" class="product-pic" >
                    <img src="' . $image_src .'"\>
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
        $artworkID = 1;
        $museumID = 0;
        
        $query = "SELECT name, date, location, genres, famous_pieces, image_src, name_link FROM artists WHERE artist_id = " . $artistID;

        $response = @mysqli_query($dbcon,$query);
        if($response) {
            $row = mysqli_fetch_array($response);

            $artworkHref = $row['name_link'];
            $genres = $row['genres'];
            $name = $row['name'];
            $image_src = $row['image_src'];
            $date = $row['date'];
            $location = $row['location'];
            $famous_pieces = $row['famous_pieces'];
            $fp = explode("*", $famous_pieces);
            $length = sizeof($fp);
            $list = "";
            
         
            for ( $i = 0; $i < $length; $i++ ){
                $list .= "<li>".$fp[$i]."</li>";
            }

        echo'
        <div id="popup-bg">
            <div class="window-container">
                <div id="munch-info" class="product-desc">
                    <strong><big><big><big>' . $name .'</big></big></big></strong><br>
                    ' . $date .'<br><br>
                    <strong>Lived in:</strong> ' . $location .'<br>
                    <strong>Genres:</strong> ' . $genres .'<br><br>
                    <strong>Famous Pieces:</strong>
                    <ul>
                        ' . $list .'
                    </ul>
                </div>
                <div id="munch-pic" class="product-pic" >
                    <img src="' . $image_src .'"\>
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
            
            $name = $row['name'];
            $date = $row['date'];
            $description = $row['description'];
            $location = $row['location'];
            $people = $row['people'];
            $history = $row['history'];
            $artworks = $row['artworks'];
            $image_src = $row['image_src'];
            $artworkHref = $row['name_link'];    
            
            $fp = explode("*", $artworks);
            $length = sizeof($fp);
            $list = "";
            
         
            for ( $i = 0; $i < $length; $i++ ){
                $list .= "<li>".$fp[$i]."</li>";
            }

        echo'
        <div id="popup-bg">
             <!-- Guernica Windows -->

            <div class="window-container">
                <div id="louvre-info" class="product-desc">
                    <strong><big><big><big>' . $name . '</big></big></big></strong><br>
                    ' . $description . '<br><br>
                    <strong>Date of Establishment:</strong> ' . $date . '<br>
                    <strong>Location and Address:</strong> ' . $location . '<br>
                    <strong>Architects:</strong> ' . $people . '<br>
                    <strong>History:</strong> ' . $history . '<br><br>
                    <strong>Famous Artworks saved there:</strong>
                    <ul>
                        ' . $list .'
                    </ul>
                </div>
                <div id="louvre-pic" class="product-pic" >
                    <img src="' . $image_src . '"\>
                </div>
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



 
