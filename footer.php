<button class="collapsible">Our Team</button>
<div class="content">
	<p>Joanna Makary - 500623846<br>
		Kavinsan Thavanesan - 500632698<br>
		Kelvin Liu - 500643293</p>
</div>	

<script>
	var coll = document.getElementsByClassName("collapsible");
	var i;

	for (i = 0; i < coll.length; i++) {
		 coll[i].addEventListener("click", function() {
		   this.classList.toggle("active");
		   var content = this.nextElementSibling;
		   if (content.style.maxHeight){
		     content.style.maxHeight = null;
		   } else {
		     content.style.maxHeight = content.scrollHeight + "px";
		   }
		 });
	}

	/*Shopping cart script*/
	var modal = document.getElementById('cart');
	var btn = document.getElementById("myBtn");
	var span = document.getElementsByClassName("close")[0];
	btn.onclick = function() {
		   modal.style.display = "block";
	}
	span.onclick = function() {
		   modal.style.display = "none";
	}
	window.onclick = function(event) {
		   if (event.target == modal) {
		       modal.style.display = "none";
		   }
	}
</script>