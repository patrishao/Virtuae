// Tab views js code
function openTab(event, tabPages) {
	var i, x, tablinks;
  
	x = document.getElementsByClassName("acc-tabs");
	for (i = 0; i < x.length; i++) {
	  x[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablink");
	for (i = 0; i < x.length; i++) {
	  tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
	}
	document.getElementById(tabPages).style.display = "block";
	evt.currentTarget.className += " w3-red";
  }
  
  // Show container on click 
  function toggleShow(){
	  var x = document.getElementById("categ");
	  if (x.style.display === "none") {
		x.style.display = "block";
	  } 
  }



