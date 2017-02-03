<script type="text/javascript">
      
    function validate(){
			check_name();
            check_gender();		
            check_mail(); 
            check_address(); 
            check_contact(); 
			check_organ();
			check_blood();
if(check_name()==true && check_grnder()==true && check_mail()==ture && check_address()==true && check_contact()==true && check_blood()==true && check_organ()==true){
				return true;
			}
			else{
				return false;
			}
	  }
	  
	  
	  function displayMessage_name(message) {
            var err_name = document.getElementById("errorMessage_name");
            err_name.style.color = "red";
            err_name.innerHTML = message;
            err_name.style.visibility = 'visible';
            
        }
		
	  function displayMessage_address(message) {
            var err_address = document.getElementById("errorMessage_address");
            err_address.style.color = "red";
            err_address.innerHTML = message;
            err_address.style.visibility = 'visible';
            
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
		
		function displayMessage_blood(message) {
            var err_blood = document.getElementById("errorMessage_blood");
            err_blood.style.color = "red";
            err_blood.innerHTML = message;
            err_blood.style.visibility = 'visible';
            
        }
		
		function displayMessage_gender(message) {
            var err_gender = document.getElementById("errorMessage_gender");
            err_gender.style.color = "red";
            err_gender.innerHTML = message;
            err_gender.style.visibility = 'visible';
            
        }
		
		function displayMessage_organ(message) {
            var err_organ = document.getElementById("errorMessage_organ");
            err_organ.style.color = "red";
            err_organ.innerHTML = message;
            err_organ.style.visibility = 'visible';
            
        }
	
	
    function check_name()
        {
            var name_field = document.getElementById('name').value;
            if(name_field == "")
            {
                displayMessage_name("Required !");
				return false;
            }
            else {
                //Todo something 
				var name = /^[a-zA-Z .]*$/;
                if(!name.test(firstname))
                {
                    displayMessage_name("Only letters,dot and whitespace are allowed !");
					return false;
                }
                else {
                     return true;
                }
            }
        }
		

		
	   function check_email()
        {
            var emailField = document.getElementById('email').value;
            if(emailField != "")
            {
				var email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if(!email.test(email))
                {
                    displayMessage_mail("Invalid Email Format !");
					return false;
                }
				else{
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
            var address_field = document.getElementById('address').value;
            if(address_field == "")
            {
                displayMessage_address("Required !");
				return false;
            }
            else {
                  if (strlen($_POST["address"]) >= '20') {
						 //$addressError = "Your Address is too long, its contains maximum 20 characters !";
						 displayMessage_address("Your Address is too long, its contains maximum 20 characters !");
						 return false;
                        }
                    else {
                        return true;
                }
            }
        }
		
   function check_organ()
        {
            var organ_field = document.getElementById('organ_id').value;
            if(organ_field == "")
            {
                displayMessage_organ("Required !");
				return false;
            }
			else{
				return true;
			}
        }
		
 function check_blood()
        {
            var blood_field = document.getElementById('bloodgroup').value;
            if(blood_field == "")
            {
                displayMessage_blood("Required !");
				return false;
            }
			else{
				return true;
			}
        }
 function check_gender()
        {
            var gender_field = document.getElementById('gender').value;
            if(gender_field == "")
            {
                displayMessage_gender("Required !");
				return false;
            }
			else{
				return true;
			}
        }
		
		function hide_name()
        {
            document.getElementById('errorMessage_name').style.visibility = 'hidden';
        }

	   function hide_email()
        {
            document.getElementById('errorMessage_email').style.visibility = 'hidden';
        }
		
	   function hide_address()
		{
            document.getElementById('errorMessage_address').style.visibility = 'hidden';
        } 
	  function hide_contact()
		{
            document.getElementById('errorMessage_contact').style.visibility = 'hidden';
        } 
		
		function hide_gender(){
			document.getElementById('errorMessage_gender').style.visibility = 'hidden';
		}
		
	function hide_blood(){
			document.getElementById('errorMessage_blood').style.visibility = 'hidden';
		}
		
	function hide_organ(){
			document.getElementById('errorMessage_organ').style.visibility = 'hidden';
		}
		
		
    </script>
