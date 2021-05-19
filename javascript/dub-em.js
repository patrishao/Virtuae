	let span = document.getElementsByTagName('i');
	let product = document.getElementsByClassName('slider')
	let product_page = Math.ceil(product.length/3);
	let l = 0;
	let movePer = 35;
	let maxMove = 90;
	

	let right_mover = ()=>{
		l = l + movePer;
		if (product == 1){l = 0; }
		for(const i of product)
		{
			if (l > maxMove){l = l - movePer;}
			i.style.left = '-' + l + '%';
		}

	}
	let left_mover = ()=>{
		l = l - movePer;
		if (l<=0){l = 0;}
		for(const i of product){
			if (product_page>1){
				i.style.left = '-' + l + '%';
			}
		}
	}
	span[1].onclick = ()=>{right_mover();}
	span[0].onclick = ()=>{left_mover();}

	
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