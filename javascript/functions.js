/**
 * Created by Artur on 6/3/14.
 */

var asiatip = '<span>Asia is a great place to go.</span>';
// Should use when the DOM is loaded.
$(document).ready(function() {
    var firstP = $('p:first');
    firstP.text('Setting text using jQuery').css('color', 'red');
    $("#asia").css("color","red");
    $("#vacations li").last().css("color", "blue");
    $('.vacation-asia').after(asiatip);

    $('button.continue').html('Next step...');
    $("#php-up").click(function() {
        location.href="pages/responsive.php";
    });

});



$.ajax({
    url: "/api/getWeather",
    data: {
        zipcode: 97201
    },
    success: function( data ) {
        $( "#weather-temp" ).html( "<strong>" + data + "</strong> degrees" );
    },
    fail: function() {
        $( "#weather-temp" ).html( "<strong>" + "No weather" + "</strong> degrees" );
    },
    default: function() {
        $( "#weather-temp" ).html( "<strong>" + 'Default nothing' + "</strong> degrees" );
    }
});