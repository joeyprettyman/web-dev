$(document).ready(function() {
    // Optimalisation: Store the references outside the event handler:
    var $window = $(window);
    var $pane = $('#pane1');

    function checkWidth() {
        var windowsize = $window.width();
        if (windowsize > 440) {
            //if the window is greater than 440px wide then turn on jScrollPane..
            $pane.jScrollPane({
               scrollbarWidth:15, 
               scrollbarMargin:52
            });
        }
    }
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);
});

//=============================================================
// LINK HANDLER
//=============================================================
// handle links with @href started with '#' only
$(document).on('click', 'a[href^="#"]', function(e) {
    // target element id
    var id = $(this).attr('href');
    
    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }
    
    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();
    
    // top position relative to the document
    var pos = $(id).offset().top;
    
    // animated top scrolling
    $('body, html').animate({scrollTop: pos}, 1000);
});


//=============================================================
// RESIZE WINDOW UPDATE SIZES
//=============================================================
// jQuery
function jqUpdateSize(){
    // Get the dimensions of the viewport
    var width = $(window).width() + 17;
    var height = $(window).height();

    $('#jqWidth').html(width);
    $('#jqHeight').html(height);
};
$(document).ready(jqUpdateSize);    // When the page first loads
$(window).resize(jqUpdateSize);     // When the browser changes size


//=============================================================
// SNOW ANIMATION / CANVAS
//=============================================================
window.onload = function(){
	//canvas init
	var canvas = document.getElementById("canvas");
	var ctx = canvas.getContext("2d");
	
	//canvas dimensions
	var W = window.innerWidth;
	var H = window.innerHeight;
	canvas.width = W;
	canvas.height = H;
	
	//snowflake particles
	var mp = 50; //max particles
	var particles = [];
	for(var i = 0; i < mp; i++)
	{
		particles.push({
			x: Math.random()*W, //x-coordinate
			y: Math.random()*H, //y-coordinate
			r: Math.random()* 2 + Math.random(), //radius
			d: Math.random()*mp //density
		})
	}
	
	//Lets draw the flakes
	function draw()
	{
		ctx.clearRect(0, 0, W, H);
		
		ctx.fillStyle = "rgba(255, 255, 255, 0.8)";
		ctx.beginPath();
		for(var i = 0; i < mp; i++)
		{
			var p = particles[i];
			ctx.moveTo(p.x, p.y);
			ctx.arc(p.x, p.y, p.r, 0, Math.PI*2, true);
		}
		ctx.fill();
		update();
	}
	
	//Function to move the snowflakes
	//angle will be an ongoing incremental flag. Sin and Cos functions will be applied to it to create vertical and horizontal movements of the flakes
	var angle = 0;
	function update()
	{
		angle += 0.01;
		for(var i = 0; i < mp; i++)
		{
			var p = particles[i];
			//Updating X and Y coordinates
			//We will add 1 to the cos function to prevent negative values which will lead flakes to move upwards
			//Every particle has its own density which can be used to make the downward movement different for each flake
			//Lets make it more random by adding in the radius
			p.y += Math.cos(angle+p.d) + 1 + p.r/2;
			p.x += Math.sin(angle) * 2;
			
			//Sending flakes back from the top when it exits
			//Lets make it a bit more organic and let flakes enter from the left and right also.
			if(p.x > W+5 || p.x < -5 || p.y > H)
			{
				if(i%3 > 0) //66.67% of the flakes
				{
					particles[i] = {x: Math.random()*W, y: -10, r: p.r, d: p.d};
				}
				else
				{
					//If the flake is exitting from the right
					if(Math.sin(angle) > 0)
					{
						//Enter from the left
						particles[i] = {x: -5, y: Math.random()*H, r: p.r, d: p.d};
					}
					else
					{
						//Enter from the right
						particles[i] = {x: W+5, y: Math.random()*H, r: p.r, d: p.d};
					}
				}
			}
		}
	}
	
	//animation loop
	setInterval(draw, 33);
}
window.addEventListener("load", function(){
	var width = window.innerWidth;
	var target = 1110;
	
	if( width < target ) {
		document.getElementById( "piggyPic" ).src="./imgs/winking-pig-smaller.png";
		document.getElementsByClassName( "greeting-text" )[1].innerHTML = "Happy and Prosperous <br> Lunar New Year";
	}
	
	else {
		document.getElementById( "piggyPic" ).src="./imgs/winking-pig.png";
	}
});

function swapper() {
	
	var width = window.innerWidth;
	var target = 1110;
	
	if( width < target ) {
		document.getElementById( "piggyPic" ).src="./imgs/winking-pig-smaller.png";
		document.getElementsByClassName( "greeting-text" )[1].innerHTML = "Happy and Prosperous <br> Lunar New Year";
	}
	
	else {
		document.getElementById( "piggyPic" ).src="./imgs/winking-pig.png";
		document.getElementsByClassName( "greeting-text" )[1].innerHTML = "Happy and<br>Prosperous Lunar<br>New Year";
	}
}




