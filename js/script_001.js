
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
	

