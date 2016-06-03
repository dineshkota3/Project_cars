var flag = 0;
var x_down = 0;
var y_down = 0;
var x_up = 0;
var y_up = 0;
var count;
var el = 0;
var d = 0;
d = document.getElementsByClassName("buddy");
count = d.length;
el = document;



el.addEventListener("mousedown", function(event){
     x_down = event.clientX;
     y_down = event.clientY;
     
}, false);
el.addEventListener("mouseup", function(upevent){	
    x_up = upevent.clientX;
    y_up = upevent.clientY;
    
    if((x_down - x_up)>20){
		
		d[count-1].innerHTML = d[count-1].innerHTML + '<div class="status dislike">Dislike!</div>';
		
		d[count -1].className += " rotate-right";
		count = count - 1;
		
		
	}
	else if((x_down - x_up)<-20){
		d[count-1].innerHTML = d[count-1].innerHTML + '<div class="status like">Like!</div>';
		d[count -1].className += " rotate-left";
		var url = d[count -1].getAttribute("href");
		count = count - 1;
		setTimeout(function(){window.location = url;}, 1000);
		
		
	}
}, false);

