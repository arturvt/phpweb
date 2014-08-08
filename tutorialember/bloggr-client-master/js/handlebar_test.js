
	var source   = $("#entry-template").html();
	var template = Handlebars.compile(source);
	
	var context = {title: "My New Post", body: "This is my first post!"}
	var html    = template(context);

	$('#result').append(html);

	var context = {
		title: "All about <p> Tags",
		body: "This is a post about &lt;p&gt; tags</p>"
	}

	var html    = template(context);

	$('#other').append(html);


var listContent = {
  people: [
    {firstName: "YYYehuda", lastName: "Katz"},
    {firstName: "Carl", lastName: "Lerche"},
    {firstName: "Alan", lastName: "Johnson"}
  ]
}

Handlebars.registerHelper('list', function(items, options) {
  var out = "<ul>";

  for(var i=0, l=items.length; i<l; i++) {
    out = out + "<li>" + options.fn(items[i]) + "</li>";
  }

  return out + "</ul>";
});


var source   = $("#list-template").html();
var template = Handlebars.compile(source);

var html = template(listContent);

$('#list').append(html);


console.log('Printing the JSON');
$.getJSON('./json/content.json', function(data) {
    var items = [];
    $.each(data.people, function (key, val){
        items.push("<li>"+val.firstName+' ' + val.lastName+"</li>");
    });
    $('#list').append("<h1>More bellow</h1>");

    $( "<ul/>", {
        "class": "my-new-list",
        html: items.join( "" )
    }).appendTo( "body" );$('#list').append();
});


$.ajax({
    type: "POST",
    url: "./backend/php/request.php?q=",

    beforeSend: function() {
        console.log('before');
    },

    success: function successExpandedPortfolio(response) {
        console.log('Success! Response: ', response);

    },

    error: function errorExpandedPortfolio(response) {
        console.log('Error! Response: ', response);

    },

    timeout: function timeoutReached(response) {
        console.log(response);
    },

    complete: function () {
        console.log('Complete!');
    }
});


//console.log('Calling request');
//$.getJSON('./backend/php/request.php?q=a', function(data) {
//    console.log('Result of hint: ', data);
//});





