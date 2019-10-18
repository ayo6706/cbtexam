<?php include 'inc/header.php'; ?>



<?php
     
   $server = "localhost";
   $user = "root";
   $pass = "";
   $database = "db_exam";
   $conn = mysqli_connect ($server, $user, $pass, $database);
   
     
     
     
     if(isset($_POST["submit"])){
     $fullname = $_POST['name'];
     $email = $_POST['email'];
     $password = md5($_POST['password']);
     $username = $_POST['username'];
        
     $sql= "INSERT  INTO tbl_user (name, email, password, username) VALUES('$fullname','$email', '$password', '$username')";
     if(mysqli_query($conn, $sql))
     header("location: Register.php");
     else
     $msg='error:'.mysqli_error();
     
     }
     
    ?>

<script type="text/javascript" src="js/validator.js"></script>
		
		<script type="text/javascript">
		$(function(){
		// highlight
			var elements = $("input[type!='submit'], textarea, select");
			elements.focus(function(){
				$(this).parents('tr').addClass('highlight');
			});
			elements.blur(function() {
				$(this).parents('tr').removeClass('highlight');
			});

			

			$("#login").validate();
			
			$('#login').submit(function(e){
				e.preventDefault();
				
				
				var isValid = $('#login').valid();
				
				if(isValid){
					var data = $('#login').serialize();
					
					$.post('php/dataHandler.php',data,function(data2){
						
						var feedBack = JSON.parse(data2);
						
						var success = String(feedBack.success);
						
						if(success == 'pass'){
							$('#login').each(function(){
    						this.reset();
							});
							
							var email = String(feedBack.email);
							
							if( email== 'admin@admin.com'){
						  	location.replace('redirect.php');
						 }
						 else{
						 	location.replace('index.php');
						 }
						}
						else if(success == 'fail'){
							$('#error_message').html('<div style="background-color:#FFE0FF; padding:5px 10px;border-radius:5px;font-family:Verdana; border:2px solid #FFC2FF;">Wrong email and password combination.Try again</div>');
							$('#password').val("");
						}
						
					});
					
					
				}
				
				return false;
			});
		});
		</script>
		
<div class="main">
<h1>Online Exam System - User Registration</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/regi.png"/>
	</div>
	<div class="segment">






<form action="" method="post" class="needs-validation" novalidate>
	<tr class="form-ow">
	<td class="col-m-4 b-3 md-orm">
	<label for="validationCustom012">FullName</label></td>
<td>	<input pattern="[a-zA-Z]+" oninvalid="setCustomValidity('only letters allowed') type="text" class="form-control fullname"  name="name" id="name validationCustom012" placeholder="First name" 
	required></td>
	<div class="invalid-feedback"><p>
	please only letters allowed!</p>
	</div>
	</tr>

	<tr class="colmd-4 mb3 md-orm">
	<td><label for="validationCustomUsername2">Username</label></td>
	<td><input type="text" class="form-control" name="username" id="username validationCustomUsername2" aria-describedby="inputGroupPrepend2"
	required></td>
	<div class="invalid-feedback">
	Please choose a username.
	</div>
	
	</tr>
	
	

	
		<tr class="colmd-4 mb3 md-orm">
	<td><label for="validationCustomUsername2">Password</label></td>
	<td><input type="text" class="form-control" name="password" id="password validationCustomUsername999" aria-describedby="inputGroupPrepend2"
	required></td>
	<div class="invalid-feedback">
	Please choose a password.
	</div>
	
	</tr>
	
	
	
	
	<tr class="frm-row">
	<td class="ol-md-6 b-3 m-form">
	<label for="validationCustom032">Email</label></td>
	<td><input type="text" class="form-control" name="email" id="email validationCustom032" required></td>
	<div class="invalid-feedback">
	Please provide a valid email.
	</div>
	</tr>
	<tr class="colmd-3 m-3 md-orm">
	<td><label for="validationCustom042">Phone Number</label></td>
	<td><input type="text" class="form-control" name="phone" id="phone validationCustom042" required></td>
	<div class="invalid-feedback">
	Please provide a valid phone number.
	</div>
	</tr>
	
	
	<tr class="co-md-3 m-3 m-form">
	<td><label for="validationCustom042">State of Origin</label></td>
	<td><input type="state" class="form-control" name=" " id="SOR validationCustom052" required></td>
	<div class="invalid-feedback">
	Please provide a valid state.
	</div>
	</tr>
	
	
	

	
	<input type="submit" name="submit" class="btn btn-primary btn-sm btn-rounded" id="regSubit" value="Register">
	
	</form>
</div>






        <br/>
        <p style="font-size: 16px; text-align: center">Already Registered? <a style="text-decoration: none" href="index.php">Login</a> Here</p>
        <br/>
        <p style="font-size: 14px; text-align: center;"><span id="state"></span></p>
	</div>

</div>



<?php include 'inc/footer.php'; ?>