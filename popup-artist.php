	<?php 
   
    $toggleInfo = "active-info";
    $togglePic = "active-pic";
    
    if (!isset($artworkID)){
        
        $artworkID = 0;
    
    }
    if ($artworkID == 0){
        $toggleInfo = "non-active-info";
        $togglePic = "non-active-pic"; 
    }
    
    $query = "SELECT name, description, price, image_src, name_link FROM artworks WHERE artwork_id = " . $artworkID;
    
    $response = @mysqli_query($dbcon,$query);
    if($response) {
        $row = mysqli_fetch_array($response);
        
        $artworkHref = $row['name_link'];
        $piclink = $row['name_link'];
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
			<a id = "piclink" href="' . $piclink .'"><img id = "pic" src="' . $image_src .'"\></a>
		</div>
	</div>
    </div>
    ';
    } else {
        echo "Couldn't connect";
        echo mysqli_error($dbcon);
    }
    mysqli_close($dbcon);
    ?>