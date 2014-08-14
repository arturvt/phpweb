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

    $('#ember-page').click(function () {
        location.href="tutorialember/starter-kit-1.5.1/index.html";
    });

    $('#ember-tutorial').click(function () {
        location.href="tutorialember/bloggr-client-master/index.html";
    });

});