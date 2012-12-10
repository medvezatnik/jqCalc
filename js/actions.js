$(function() {
        	var display="";
        	var newCalc=true;
      	   $(".button").click(function() {
			   
			   if ($(this).text() != '=') {
				   display += $(this).text(); 
				   $("#nums").text(display);
				   
		       }
		     console.log(newCalc);
		 
		  });
		  
		  $("#equal").click(function() {
			  $.ajax({
				  url: 'calculate.php',
				  type: 'POST',
				  data: {'calcStr':  display},
				  
				  success: function(result) {
					  $("#nums").text(result);
					  display = "";
				  }
				  
				  
				  });
		  });
			  
		
	
	  
	
	    })
