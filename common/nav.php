<nav>
	
	<a id="logo" href="index.php"><img src="fav.jpg"></a>
	<span id="menu_small" onclick="shownav()">
		<?xml version="1.0" standalone="no"?><!-- Generator: Gravit.io --><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="isolation:isolate" viewBox="0 0 50 50" width="50" height="50"><defs><clipPath id="_clipPath_hvwL8LwkF5tP3WSt1q8xTQfYJBZJ3eN6"><rect width="50" height="50"/></clipPath></defs><g clip-path="url(#_clipPath_hvwL8LwkF5tP3WSt1q8xTQfYJBZJ3eN6)"><g><line x1="9.444" y1="13" x2="40.556" y2="13" vector-effect="non-scaling-stroke" stroke-width="5" stroke="rgb(0,0,0)" stroke-linejoin="miter" stroke-linecap="square" stroke-miterlimit="3"/><line x1="9.444" y1="25" x2="40.556" y2="25" vector-effect="non-scaling-stroke" stroke-width="5" stroke="rgb(0,0,0)" stroke-linejoin="miter" stroke-linecap="square" stroke-miterlimit="3"/><line x1="9.444" y1="37" x2="40.556" y2="37" vector-effect="non-scaling-stroke" stroke-width="5" stroke="rgb(0,0,0)" stroke-linejoin="miter" stroke-linecap="square" stroke-miterlimit="3"/></g></g></svg>
	</span>
	<ul id="navbar" class="navbar">
	  <li class="nav-item">
	    <a class="nav-link" href="index.php">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="about.php">About Us</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="contact.php">Contact</a>
	  </li>
	</ul>
	<script>
function shownav(){
    var navbar = document.getElementById('navbar');
    if (navbar.className === "navbar"){
				navbar.className += " mob";
    } else {
				navbar.className = "navbar";
    }
}
		</script>
</nav>