<script type="text/javascript">
      
    function validate(){
		    check_firstname(); 
            check_lastname(); 
			check_username();
            check_password();
            check_re-password();			
            check_mail(); 
            check_address(); 
            check_contact(); 
			if(check_lastname()==true && check_firstname()==true && check_username()==true && check_password()==true && check_re-password()==true 
			&& check_mail()==ture && check_address()==true && check_contact()==true){
				return true;
			}
			else{
				return false;
			}
	  }
	  
	  
	  function displayMessage_firstname(message) {
            var err_fname = document.getElementById("errorMessage_firstname");
            err_fname.style.color = "red";
            err_fname.innerHTML = message;
            err_fname.style.visibility = 'visible';
            
        }

      function displayMessage_lastname(message) {
            var err_lname = document.getElementById("errorMessage_lastname");
            err_lname.style.color = "red";
            err_lname.innerHTML = message;
            err_lname.style.visibility = 'visible';
            
        }
       function displayMessage_username(message) {
            var err_uname = document.getElementById("errorMessage_username");
            err_uname.style.color = "red";
            err_uname.innerHTML = message;
            err_uname.style.visibility = 'visible';
            
        }

        function displayMessage_pass(message) {
            var err_pass = document.getElementById("errorMessage_pass");
            err_pass.style.color = "red";
            err_pass.innerHTML = message;
            err_pass.style.visibility = 'visible';
            
        }
     function displayMessage_re_pass(message) {
            var err_re-pass = document.getElementById("errorMessage_re-pass");
            err_re-pass.style.color = "red";
            err_re-pass.innerHTML = message;
            err_re-pass.style.visibility = 'visible';
            
        }

        function displayMessage_mail(message) {
            var err_mail = document.getElementById("errorMessage_email");
            err_mail.style.color = "red";
            err_mail.innerHTML = message;
            err_mail.style.visibility = 'visible';
            
        }
		
		function displayMessage_contact(message) {
            var err_contact = document.getElementById("errorMessage_contact");
            err_contact.style.color = "red";
            err_contact.innerHTML = message;
            err_contact.style.visibility = 'visible';
            
        }
    	function displayMessage_address(message) {
            var err_address = document.getElementById("errorMessage_address");
            err_address.style.color = "red";
            err_address.innerHTML = message;
            err_address.style.visibility = 'visible';
            
        }
		
    function check_firstname()
        {
            var firstname_field = document.getElementById('firstname').value;
            if(firstname_field == "")
            {
                displayMessage_firstname("Required !");
				return false;
            }
            else {
                //Todo something 
				var fname = /^[a-zA-Z .]*$/;
                if(!fname.test(firstname))
                {
                    displayMessage_firstname("Only letters,dot and whitespace are allowed !");
					return false;
                }
                else {
                     return true;
                }
            }
        }
		
    function check_lastname()
        {
            var lastname_field = document.getElementById('lastname').value;
            if(lastname_field == "")
            {
                displayMessage_lastname("Required !");
				return false;
            }
            else {
                //Todo something 
				var lname = /^[a-zA-Z]*$/;
                if(!lname.test(lastname))
                {
                    displayMessage_lastname("Only letters are allowed !");
					return false;
                }
                else {
					return true;
                }
            }
        }

		 function check_username()
        {
            var username_field = document.getElementById('username').value;
            if(username_field == "")
            {
                displayMessage_username("Required !");
				return false;
            }
            else {
                //Todo something 
				var uname = /^[a-zA-Z\d]*$/;
                if(!uname.test(username))
                {
                    displayMessage_username("Only letters and number is allowed as a UserName !");
					return false;
                }
                else {
					return true;
                }
            }
        }
		

		function check_password()
        {
            var passwordField = document.getElementById('password').value;
            if(passwordField == "")
            {
                displayMessage_pass("Required");
				return false;
            }
            else {
                //Todo something
                if (!/\d/.test(passwordField))
                {
                    displayMessage_pass("Required at least one digit");
					return false;
                }
                    
                if (!/[a-z]/.test(passwordField))
                {
                    displayMessage_pass("Required at least one lower character");
					return false;
                }
                   
                if (!/[A-Z]/.test(passwordField))
                {
                      displayMessage_pass("Required at least one upper character");
					  return false;
                }
                else{
					return true;
				}  
               
                
            }
        }
		
	   function check_re_password()
        {
            var re-passwordField = document.getElementById('re_password').value;
            if(re-passwordField == "")
            {
                displayMessage_re-pass("Required");
				return false;
            }
            elseif(re-passwordField != passwordField) {
             
                  displayMessage_re-pass("Password does not match");
				  return false;
            }
			else{
				return true;
			}
        }
		
	   function check_email()
        {
            var emailField = document.getElementById('email').value;
            if(emailField == "")
            {
                displayMessage_mail("Required");
				return false;
            }
            else{
				var email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if(!email.test(email))
                {
                    displayMessage_mail("Invalid Email Format !");
					return false;
                }
				else{
					return true;
				}
             
			}
        }
		
		
	   function check_contact()
        {
            var contactField = document.getElementById('contact').value;
            if(contactField == "")
            {
                displayMessage_contact("Required");
				return false;
            }
            else{
				var contact = /^[0-9]{11}$/;
                if(!contact.test(contact))
                {
                    displayMessage_contact("Invalid Contact Number Format !");
					return false;
                }
				else{
					return true;
				}
             
			}
        }	
		
	 function check_address()
        {
            var addressField = document.getElementById('address').value;
            if(addressField != "")
            {
				var contact = /^[0-9]{11}$/;
                if(!contact.test(contact))
                {
                    displayMessage_address("Invalid Contact Number Format !");
					return false;
                }
				else{
					return true;
				}
             
			}
			else{
				return false;
			}
        }	
	
		
		
      /*var check_firstname = /^[a-zA-Z .]*$/;
	  var check_lastname = /^[a-zA-Z]*$/;
	  var check_username = /^[a-zA-Z\d]*$/;
	  var check_password = 
		*/
		
		function hide_firstname()
        {
            document.getElementById('errorMessage_firstname').style.visibility = 'hidden';
        }
		function hide_lastname()
        {
            document.getElementById('errorMessage_lastname').style.visibility = 'hidden';
        }
	    function hide_username()
        {
            document.getElementById('errorMessage_username').style.visibility = 'hidden';
        }
	   function hide_password()
        {
            document.getElementById('errorMessage_pass').style.visibility = 'hidden';
        }
	   function hide_re_password()
        {
            document.getElementById('errorMessage_re-pass').style.visibility = 'hidden';
        }
	   function hide_email()
        {
            document.getElementById('errorMessage_email').style.visibility = 'hidden';
        }
		
	   function hide_specialty()
		{
            document.getElementById('errorMessage_specialty').style.visibility = 'hidden';
        } 
	  function hide_contact()
		{
            document.getElementById('errorMessage_contact').style.visibility = 'hidden';
        } 
    function hide_address()
		{
            document.getElementById('errorMessage_address').style.visibility = 'hidden';
        } 
		
		
    </script>
