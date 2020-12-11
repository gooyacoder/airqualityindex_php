
(function($) { 

	if($(document).width() > 1000){
		document.getElementById("navigation").setAttribute("class", "navbar-xs navbar navbar-expand-lg navbar-light links"); 
		document.getElementById("page_title").setAttribute("class", "page_title_1");
	}
	else {
		document.getElementById("navigation").setAttribute("class", "navbar navbar-expand-lg navbar-light links"); 
		document.getElementById("page_title").setAttribute("class", "page_title_2");
	}




	$(window).resize(function(){
	  
		if($(document).width() > 1000){
			document.getElementById("navigation").setAttribute("class", "navbar-xs navbar navbar-expand-lg navbar-light links"); 
			document.getElementById("page_title").setAttribute("class", "page_title_1");
		}
		else {
			document.getElementById("navigation").setAttribute("class", "navbar navbar-expand-lg navbar-light links"); 
			document.getElementById("page_title").setAttribute("class", "page_title_2");
		}

	});


 }) (jQuery);

 $(document).ready(function() {
    setInterval(timestamp, 1000);
});

function timestamp() {
    $.ajax({
        url: 'http://airqualityindex.ir/timestamp.php',
        success: function(data) {
            $('#timestamp').html(data);
        },
    });
}
	

