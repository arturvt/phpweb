/**
 * Created by Artur on 6/4/14.
 */
// Should use when the DOM is loaded.
$(document).ready(function() {

    $("#italy > li:first").css("color","blue");

    $("#greek:even").css("color","green");

    $("#france > li").last().addClass("highlight");

    $(function() {
        $( "#check" ).button();
        $( "#format" ).buttonset();
    });

    $("button").click(function() {
        $("h1").hide();
    });



    $("#button-back").click(function() {
       window.history.go(-1);
    });

      navigator.getUserMedia({
        video:true
      }, onSuccess, onFail);

        function onSuccess(stream) {
          var video = document.querySelector('video');
          video.src = window.URL.createObjectURL(stream);
          video.onloadedmetadata = function(e) {
            
          }
          alert('HEEY');
        };

        function onFail() {
          alert('Fail');
        };

        


});


 function showDateAction() {
     document.getElementById("demo").innerHTML = Date();
}