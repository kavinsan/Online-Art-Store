	<!-- The Modal -->
	<div id="cart" class="modal">
	    <div class="modal-content">
	      <span class="close">&times;</span>
	      <h2>Shopping Cart</h2>
				<br>
				<div id="emptyCart" class="empty"><p>Your Cart is Currently Empty</p></div>
				<div id="art1"class="art1shop non-active-shop">
					<img src="https://upload.wikimedia.org/wikipedia/en/7/74/PicassoGuernica.jpg" alt="" style="height:25px; width:25px;">
					<label class="label-price">$500.00</label>
					<label class="label-x">X</label>
					<input class="input-art" id="artQuant1" name="quant" type="text" onChange="updatePrice()"/>
					<span id="garbage1" class="glyphicon glyphicon-trash" onclick="removeCart1();"></span>
				</div>

				<div id="art2"class="art2shop non-active-shop">
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Mona_Lisa%2C_by_Leonardo_da_Vinci%2C_from_C2RMF_retouched.jpg/687px-Mona_Lisa%2C_by_Leonardo_da_Vinci%2C_from_C2RMF_retouched.jpg" alt="" style="height:25px; width:25px;">
					<label class="label-price">$1000.00</label>
					<label class="label-x">X</label>
					<input class="input-art" id="artQuant2" name="quant" type="text" onChange="updatePrice()"/>
					<span id="garbage2" class="glyphicon glyphicon-trash" onclick="removeCart2();"></span>
				</div>

				<div id="art3"class="art3shop non-active-shop">
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg/600px-Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg" alt="" style="height:25px; width:25px;">
					<label class="label-price">$800.00</label>
					<label class="label-x">X</label>
					<input class="input-art" id="artQuant3" name="quant" type="text" onChange="updatePrice()"/>
					<span id="garbage3" class="glyphicon glyphicon-trash" onclick="removeCart3();"></span>
				</div>

				<div id="art4"class="art4shop non-active-shop">
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Sandro_Botticelli_-_La_nascita_di_Venere_-_Google_Art_Project_-_edited.jpg/900px-Sandro_Botticelli_-_La_nascita_di_Venere_-_Google_Art_Project_-_edited.jpg" alt="" style="height:25px; width:25px;">
					<label class="label-price">$600.00</label>
					<label class="label-x">X</label>
					<input class="input-art" id="artQuant4" name="quant" type="text" onChange="updatePrice()"/>
					<span id="garbage4" class="glyphicon glyphicon-trash" onclick="removeCart4();"></span>
				</div>

				<div id="art5"class="art5shop non-active-shop">
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/The_Scream.jpg/440px-The_Scream.jpg" alt="" style="height:25px; width:25px;">
					<label class="label-price">$900.00</label>
					<label class="label-x">X</label>
					<input class="input-art" id="artQuant5" name="quant" type="text" onChange="updatePrice()"/>
					<span id="garbage5" class="glyphicon glyphicon-trash" onclick="removeCart5();"></span>
				</div>

				<div id="art6"class="art6shop non-active-shop">
					<img src="https://images.metmuseum.org/CRDImages/ep/web-large/DT1854.jpg" alt="" style="height:25px; width:25px;">
					<label class="label-price">$700.00</label>
					<label class="label-x">X</label>
					<input class="input-art" id="artQuant6" name="quant" type="text" onChange="updatePrice()"/>
					<span id="garbage6" class="glyphicon glyphicon-trash" onclick="removeCart6();"></span>
				</div>

				<div id="totalLabel"class="total non-active-shop">
					<label class="total-label"> <p class="total-p">Subtotal:</p></label><input class="price" id="subfinalPrice" readonly="readonly" value=""/>
					<br>
					<label class="total-label2"> <p class="total-p">Shipping:</p></label><input class="price" id="shipping" readonly="readonly" value=""/>
					<br>
					<label class="total-label2"> <p class="total-p">Tax:</p></label><input class="price" id="tax" readonly="readonly" value=""/>
					<br>
					<label class="total-label2"> <p class="total-p">Total:</p></label><input class="price" id="finalPrice" readonly="readonly" value=""/>

				</div>
	  	</div>
	</div>
