
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
  <form id="contactForm">
    
    
    	<div class="g-recaptcha" data-sitekey="6LfkJTYUAAAAAPYDj0YilYgYbqfB_frL_zGNctKy"></div>
    	
    	<input type="button" value="Enviar" onclick="enviar();"/>
    	
  </form>
  
  
  <script>

	function enviar()
	{
		$.ajax(
				{
		      		type: "POST",
		      		url: "Captcha/admin-post.php",
		      		data: {
		        		captcha: grecaptcha.getResponse()
		      		},
    		      	success: function(response) {
    		        	console.log("THE FORM SUBMITTED CORRECTLY");
    		        	alert(response);
    		      	},
    		      	error: function() {		        
    		        	alert("sdsd");
    		      	}
		    	}
		);
	}

  </script>
  
  
</body>
</html>