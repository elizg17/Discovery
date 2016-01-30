<?php require 'includes/config.php';?>
<?php include 'includes/header.php';?>

	<style type="text/css">	
		img {
		width: 900px;
  		height: 300px;
  		margin:20px 0 0 20px;
  		float: left; 
		background:transparent url(images/header.jpg) no-repeat;
	}
	
	fieldSet {
			
			border: 1px solid  #DAA520;
			border-radius:5px;
			width:30em;
			padding:30px;
		}
	
	#first {
	
	width:400px;
	height:610px;
	float:left;
	padding:10px 50px 0;
	}
	
	
	label {
	font-size:16px;
	}
	
	input {
	width:300px;
	padding:10px;
	margin-top:10px;
	margin-bottom:35px;
	border-radius:5px;
	border:1px solid #cbcbcb;
	box-shadow:inset 0 1px 2px rgba(0,0,0,0,18);
	font-size:16px;
	}
	
	#first input[type="dname"],#first input [type="email"],  #first [type="dmsg"] {
	width:350px;
	height:100px; 
	padding:10px;
	margin-top:10px;
	margin-bottom:35px;
	border-radius:5px;
	border:1px; solid #cbcbcb;
	box-shadow:inset 0 1px 2px rgba (0,0,0,0.18);
	font-size:16px;
	}
	
	
	#first textarea {
	
	width:450px;
	height:100px; 
	padding:10px;
	margin-top:10px;
	margin-bottom:35px;
	
	}
	
	
	
	#first .dsubmit {
	background-color:black;
	 border: 1px solid #ffff;
	 color:#DAA520;
	 font-size:19px;
	 cursor:pointer;
	 text-shadow: 0 1px 0 #13506D;
	 }
	 
	#first .dsubmit: hover {
	 background:gold;
	 }
	  

	</style>

	
		<h1>Contact Us to Begin Your Journey!</h1>
		<p>
		Cupcake ipsum dolor. Sit amet wafer danish jelly-o sesame snaps candy canes marzipan. Souffle souffle sesame snaps dessert. Icing pie chocolate bar dessert tiramis. 
		Chocolate cake muffin tootsie roll fruitcake jelly-o. Applicake applicake candy. Danish jelly beans cookie cookie ice cream gingerbread sweet topping. 
		</p>

		
<?php
if(isset($_POST['first_name'])) 

{//if there's data, show it 
	//echo $_POST['FirstName'];
	
	$message = process_post();
	
	safeEmail('egriff04@seattlecentral.edu', 'test subject', $message);
		echo 'Thank you for your email!'; 
	
}else{//show the form
		
	echo '
	
	<div id="first">
	<fieldset>
	<form action="contact.php" method="post">
	<h3 class="contact">Conact Informaiton</h3>
	
	<label> Name: </label></br>
	<input name="first_name"  required="required" placeholder"=Enter your full name" type="text" />
	<br>
	<label> Email: </label>	</br>
	<input type="email" name-"email" required="required" placeholder="Enter a valid email" type="text" />
	<br>
	<label>Message: </label></br>
	<textarea id ="message" name="Message" placeholder="Message">
	</textarea>
	
	<input class="dsubmit" type="submit" value="Submit">
</fieldset>
</form>

</div>
	
	';	
	}


?>		
		
		
		
	<?php include 'includes/footer.php';?>