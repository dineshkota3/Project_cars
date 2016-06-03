//document.addEventListener('touchstart', handleTouchStart, false);        
//document.addEventListener('touchmove', handleTouchMove, false);

var xDown = null;            

d = document.getElementsByClassName("buddy");
count = d.length;               

for(var i = 0;i<d.length;i++){
	  d[i].addEventListener('touchstart', handleTouchStart, false);        
		d[i].addEventListener('touchmove', handleTouchMove, false); 
	}                         
                                                     

function handleTouchStart(evt) {                                         
    xDown = evt.touches[0].clientX;                                                                         
};                                                

function handleTouchMove(evt) {
    if ( ! xDown ) {
        return;
    }

    var xUp = evt.touches[0].clientX;                                    
    

    var xDiff = xDown - xUp;
   

         if ( xDiff > 0 ) {
            d[count-1].innerHTML = d[count-1].innerHTML + '<div class="status dislike">Dislike!</div>';
		
		d[count -1].className += " rotate-right";
		count = count - 1;
        } else {
           d[count-1].innerHTML = d[count-1].innerHTML + '<div class="status like">Like!</div>';
		d[count -1].className += " rotate-left";
		var url = d[count -1].getAttribute("href");
		count = count - 1;
		setTimeout(function(){window.location = url;}, 1000);
        }                       

    /* reset values */
    xDown = null;
                                             
};
