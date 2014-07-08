/**
 * Created by Artur on 6/3/14.
 */

var asiatip = '<span>Asia is a great place to go.</span>';
// Should use when the DOM is loaded.
$(document).ready(function() {
    $("p:first").text("The book is on the table");
    $("#asia").css("color","red");
    $("#vacations li").last().css("color", "blue");
    $('.vacation-asia').after(asiatip);


});


