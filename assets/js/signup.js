$(document).ready(function(){


	var name ="";
	var email="";
	var password="";
	var confirm="";
	var name_reg=/^[a-z]+$/i;
	var email_reg=/^[a-z]+[0-9a-zA-Z_\.]*@[a-z_]+\.[a-z]+$/;
	var password_reg=/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]{8,}$/;  //At least 8 char , 1 little, 1 big, 1 char



	// *******Name Validation *******



	$("#name").focusout(function(){
		var store= $("#name").val();
		if(store.length == "")
		{
			$(".name-error").html("Name is required!");
			$("#name").addClass("border-red");
			$("#name").removeClass("border-green");
			name="";
		}else if(name_reg.test(store)){
			$(".name-error").html("");
			$("#name").addClass("border-green");
			$("#name").removeClass("border-red");
			name=store;
			
			
		}else{
			$(".name-error").html("Number or Space is not allowed!");
			$("#name").addClass("border-red");
			$("#name").removeClass("border-green");
			name="";

		}

	})
	// *******Close Name Validation *******


	// *******Email Validation *******
		$("#email").focusout(function(){

			var email_store= $.trim($("#email").val());
			if(email_store.length==""){
				$(".email-error").html("Email is required");
				$("#email").addClass("border-red");
				$("#email").removeClass("border-green");
			email="";
			}else if(email_reg.test(email_store)){
					
				
				$.ajax({
					type: 'POST',
					url : 'ajax/signup.php',
					dataType: 'JSON',
					beforeSend: function(){  //before sending POST action, i want u to run this methode.
						$(".email-error").html('<i class="fas fa-spinner fa-pulse fa-3x fa-fw"></i>'); //add spinner to under #email
					},
					data :{'check_email' : email_store},
					success: function(feedback){
						setTimeout(function(){
								if(feedback['error']=='email_success'){
									$(".email-error").html("<div class='text-success'><i class='fas fa-check-circle'>Available</i></div>");
									$("#email").addClass("border-green");
									$("#email").removeClass("border-red");
									email=email_store;
								}else if(feedback['error']=='email_fail'){
									$(".email-error").html("Sorry, this email already exist!");
									$("#email").addClass("border-red");
									$("#email").removeClass("border-green");
									email="";
								}

						},3000); // cause of localhost is really fast, i have to wait 3sec to send data and check data in server.
					
					}

				});
			}else{
				$(".email-error").html("Invalid format");
				$("#email").addClass("border-red");
				$("#email").removeClass("border-green");
				email="";
			}



		})

	// *******Close Email Name Validation *******

	// validate password ***
	$("#password").focusout(function(){
		var password_store = $.trim($("#password").val());
		if(password_store.length ==""){
			$(".password-error").html("Password is required");
			$("#password").addClass("border-red");
			$("#password").removeClass("border-green");
			password="";
		}else if(password_reg.test(password_store)){
			$(".password-error").html("<div class='text-success'><i class='fas fa-check-circle'>Your password is strong</i></div>");
			$("#password").addClass("border-green");
			$("#password").removeClass("border-red");
			password=password_store;
		}else{

			$(".password-error").html("8 char or longer. Upper-lowercase, number needed");
			$("#password").addClass("border-red");
			$("#password").removeClass("border-green");
			password="";
		}

	})

// *******Close validate password Validation *******

	//validate Confirm password
	$("#confirm").focusout(function(){
		var confirm_store = $.trim($("#confirm").val());
		if(confirm_store.length ==""){
			$(".confirm-error").html("Password can not be empty");
			$("#confirm").addClass("border-red");
			$("#confirm").removeClass("border-green");
			confirm="";
		}else if(confirm_store != password){
			$(".confirm-error").html("Password is Not matched");
			$("#confirm").addClass("border-red");
			$("#confirm").removeClass("border-green");
		}else{
			$(".confirm-error").html("<div class='text-success'><i class='fas fa-check-circle'>Passwords Matched</i></div>");
			$("#confirm").addClass("border-green");
			$("#confirm").removeClass("border-red");
			confirm=confirm_store;
		}


	})

	//CLOSE validate confirm password


	// Submit the form SIGN UP

	$("#submit").click(function(){
		if(name.length == ""){
			$(".name-error").html("Name is required!");
			$("#name").addClass("border-red");
			$("#name").removeClass("border-green");
			name="";
		}

		if(email.length == ""){
			$(".email-error").html("Email is required!");
			$("#email").addClass("border-red");
			$("#email").removeClass("border-green");
			email="";
		}

		if(password.length == ""){
			$(".password-error").html("Password is required!");
			$("#password").addClass("border-red");
			$("#password").removeClass("border-green");
			password="";
		}

		if(confirm.length == ""){
			$(".confirm-error").html("Confirm Password is required!");
			$("#confirm").addClass("border-red");
			$("#confirm").removeClass("border-green");
			confirm="";
		}


		if(name.length != "" && email.length != "" && password.length != "" && confirm.length != "" ){
				$.ajax({
					type: 'POST',
					url : 'ajax/signup.php?signup=true',  //signup=true
					data: $("#signup_submit").serialize(),
					dataType:'JSON',
					beforeSend: function () {
						$(".show-progress").addClass('progress')
					},
					success: function(feedback){
						setTimeout(function(){
							if(feedback['error'] == "success"){
								$(".button-error").html("<div class='text-success'><i class='fas fa-check-circle'>Your account Successfully created</i></div>");
								location=feedback.msg; //go to success.php 
							}else{
								console.log("not created");
							}
						},3000)


					}
				})
		}



	})
})