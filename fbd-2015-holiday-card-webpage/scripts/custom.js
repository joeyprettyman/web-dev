// With the element initially shown, we can dim it slowly:
$("html").delay(5500).queue(function() {
    $("#spring").fadeTo(5000, 1.0, function() {
        $("#summer").fadeTo(5000, 1.0, function() {
            $("#fall").fadeTo(5000, 1.0, function() {});
        });
    });
});

/* BODY
 * When page is loaded...
 * Wait 12 seconds to begin 3 second separate fade in.
 * Wait 14.5 seconds to begin 0.5 second parralax showing.
 */
$("body").ready(function() {
    $("#separator").delay(18000).fadeTo(3000, 1.0, function() {});
    $("#parralax").delay(20500).show(500, function() {});
});

// GREETING: Seasons change...
$(".container").ready(function() {
    // Fade In...
    $(".greeting#first").fadeTo(3000, 1.0, function() {});
    $(".greeting#first").fadeOut(2000, 0, function() {});
});


$(".container").delay(6000).queue(function() {
    // With the element initially shown, we can dim it slowly:
    $("body").ready(function() {
        $(".greeting#second").fadeTo(3000, 1.0, function() {});
    });

    // With the element initially shown, we can dim it slowly:
    $("body").ready(function() {
        $(".greeting#second").fadeOut(2000, 0, function() {
            // Animation complete.
        });
    });

    // With the element initially shown, we can dim it slowly:
    $("body").ready(function() {
        $(".greeting#third").delay(5000).fadeTo(3000, 1.0, function() {});
    });

    // With the element initially shown, we can dim it slowly:
    $("body").ready(function() {
        $(".greeting#third").delay(1000).fadeOut(2000, 0, function() {
            // Animation complete.
        });
    });


    $("body").ready(function() {
        $(".greeting#fourth").delay(12000).fadeTo(2000, 1.0, function() {});
        $("#click-arrow").delay(12000).fadeTo(2000, 1.0, function() {});
        $("#click-here").delay(12000).fadeTo(2000, 1.0, function() {});
    });
});




// Smooth Scrolling		
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});



if (window.addEventListener) window.addEventListener('load', wheel, false);
window.onload = document.onload = wheel;

var time = 0;
var distance = 50;

function wheel(event) {


    handle();
    if (event.preventDefault) event.preventDefault();
    event.returnValue = false;
}

function handle() {

    $('html, body').stop().animate({
        scrollTop: $(window).scrollTop() - (distance * delta)
    }, time);
}


$(document).keydown(function(e) {

    switch (e.which) {
        //up
        case 38:
            $('html, body').stop().animate({
                scrollTop: $(window).scrollTop() - distance
            }, time);
            break;

            //down
        case 40:
            $('html, body').stop().animate({
                scrollTop: $(window).scrollTop() + distance
            }, time);
            break;
    }
});



$('#click-arrow').mouseover(function() {
    $('#click-arrow').fadeOut('slow').attr('src', './img/click-here-hover.png').fadeIn('slow');

    $('#click-arrow').mouseout(function() {
        $('#click-arrow').fadeOut('slow').attr('src', './img/click-here.png').fadeIn('slow');
    });
});