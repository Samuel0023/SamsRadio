var last_scroll_position = 0;
var ticking = false;
var showing=false;

function  cambiarVisualizacion(scroll_pos) {
  if(scroll_pos>0){
  	document.getElementById('navegador').className = "black";
  	console.log("baja");
  }
  else{
  	document.getElementById('navegador').className = "";
  	console.log("sube");
  }
}


window.addEventListener('scroll', function(e) {
  last_known_scroll_position = window.scrollY;
  if (!ticking) {
    window.requestAnimationFrame(function() {
      cambiarVisualizacion(last_known_scroll_position);
      ticking = false;
    });
  }
  ticking = true;
});

window.onload=function(){
	document.querySelector(".menu-icon").onclick=function(){
    if(!showing){
      		document.querySelector("ul").className= "showing";	
      		showing=true;
   	}else{
   		document.querySelector("ul").className="";
   		showing=false;
   	}
  }
};
