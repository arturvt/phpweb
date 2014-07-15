/**
 * Created by Artur on 7/15/14.
 */

function detectmob() {
    if( navigator.userAgent.match(/Android/i)
        || navigator.userAgent.match(/webOS/i)
        || navigator.userAgent.match(/iPhone/i)
        || navigator.userAgent.match(/iPad/i)
        || navigator.userAgent.match(/iPod/i)
        || navigator.userAgent.match(/BlackBerry/i)
        || navigator.userAgent.match(/Windows Phone/i)
        ){
        return true;
    }
    else {
        return false;
    }
}

$(document).ready(function(){
    var isMobile = detectmob()?'Yeah':'No';
    $("p").text('Browser is mobile? '+isMobile);
    $("#navigation-mobile").remove();
});


