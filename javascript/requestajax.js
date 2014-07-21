/**
 * Created by Artur on 7/18/14.
 */
/**Ajax Request (Submits the form below through AJAX
 *               and then calls the ajax_response function)
 */
function ajax_request() {
    var submitTo = '/htmlfolder/phpweb/php/requests/ajax_request.php';
//    location.href = submitTo; //uncomment if you need for debugging




    $.get(
        submitTo,
        function(data) {
            ajax_response(data);
        }
    );
}


/**Ajax Response (Called when ajax data has been retrieved)
 *
 * @param   object  data   Javascript (JSON) data object received
 *                         through ajax call
 */
function ajax_response(data) {
    for(var key in data) {
        document.form1[key].value = data[key];
    }
}


