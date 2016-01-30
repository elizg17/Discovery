<?php require 'includes/config.php';?>
<?php include 'includes/header.php';?>

<style type="text/css">	
	
	
	
	
	
	h1 .sheader {
margin-top: 5px; 
 font: bold 200% 'Open Sans Condensed', sans-serif;
  color: #000;
  text-shadow: 1px 1px #CCC;
  letter-spacing: -1px;

	}
	
	
 

	
	
	fieldSet {
			
			border: 1px solid  #DAA520;
			border-radius:5px;
			width:80%;
			padding:20px;
		}
	
	#first {
	width:105%;
	float:left;
	font-size:17px;
	}
	
	
	#first .intro {
		font-size: 100%;
		line-height:1.7em;
		padding-bottom:5px;
		}
	
	input {
	width:300px;
	padding:10px;
	margin-top:10px;
	margin-bottom:15px;
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
	

form .left_label {
	float:left; 
	display: block;
	margin:0 25px 0 0;
	font-size:17px;
}


	
	#first textarea {
	
	width:350px;
	height:100px; 
	padding:10px;
	margin-top:10px;
	margin-bottom:35px;
	
	}
	
	#first .cs textarea {
	
	width:150px;
	height:100px; 
	padding:10px;
	margin-top:10px;
	margin-bottom:35px;
	
	}
	
span{

font-size:17px;
line-height:150%;

}
	
	
	
#first .female {
width:40px;
cursor:pointer;
height:17px;
}

#first .male { 
width:25px;
margin-left:3px;
margin-top:5px;
cursor:pointer;
height:17px;
}


#first .yes, .no, .maybe { 
width:25px;
margin-left:3px;
margin-top:5px;
cursor:pointer;
height:17px;
}


#vs. {

	font-size:17px;
	line-height:130%;
	

}


#first .check {
 position: absolute;
 display:block;
  height: 15px;
  margin-left:55px;
  overflow:hidden;
}
	
	#first .hear_about required {
		width:175px; 
	} 
	
#first .cs {
	float:left;
	margin:5px;
}
	

. hidden {
 display:none;	
}

.error {
 color:red;	
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
	  
	 .error {
	visibility:hidden;
	color:red;
	position:absolute;
	top:4px;
	padding-left:10px;
	font-weight:600;
} 

#first.submitted input:invalid + .error, #first.submitted select:invalid + .error {
	visibility:visible;
	color:red;
}
	  


	</style>
	

	
<h1 class="sheader">Please Take Our Survey</h1>
		

<?php
if(isset($_POST['first_name'])) 

{//if there's data, show it 
	//echo $_POST['FirstName'];
	
	$message = process_post();
	
	safeEmail('egriff04@seattlecentral.edu', 'test subject', $message);
		echo 'Thank you for taking our Survey! We appricate your feedback'; 
	
}else{//show the form
		
	echo '
	
	<div id="first">
	<p class="intro">
		 Danish jelly beans cookie cookie ice cream gingerbread sweet topping. 
		Ice cream bonbon liquorice applicake sesame snaps. </p>
	<fieldset>
	<form action="tj.php" method="post">
	<h3 class="contact">We want to hear from you!  </h3>
	
	<label for"name" class="left_label"><strong> Name: </strong></label></br>
	<input name="first_name"  required="required" placeholder"=Enter your full name" type="text" />
	<span class="error">*</span>

	<br>
	<label for"email" class="left_label"><strong> Email:</strong> </label>	</br>
	<input type="email" name-"email" required placeholder="abc@xyz.com" type="text" />
	<span class="error">*</span>

	<br>

 <label for"radio" class="left_label"><strong>Gender:</strong></label>
 <input type="radio"  name="gender" value="male" class="male" required>Male
<input type="radio" name="gender" value="female" class="female" required>Female
<span class="error">*</span>
</br>
</br>

 <label for"checkbox" class="left_label"><strong>Peferred Vacation Spot:</strong></label></br>
 <span id ="vs">
 </br>
 <input type="checkbox" name="vacation" value="place1" class="check" required >Europe</br>
  <input type="checkbox" name="vacation" value="place2"  class="check" >Hawaii</br>
   <input type="checkbox" name="vacation" value="place3"  class="check">South America</br>
   <input type="checkbox" name="vacation" value="place4"  class="check">South Pacfic Islands</br>
    <input type="checkbox" name="vacation" value="place5"  class="check" >Afican Safari</br>
     <input type="checkbox" name="vacation" value="place6"  class="check">Mexico </br>
     </span>
     <span class="error">*</span>
      <br>
     
 
 <label for"checkbox" class="left_label"><strong>Who do you travel with</strong></label></br>
 <span id ="vs" >
 </br>
 <input type="checkbox" name="vacation" value="number" class="check" required>Just me</br>
  <input type="checkbox" name="vacation" value="number2"  class="check">Companion</br>
   <input type="checkbox" name="vacation" value="number3"  class="check">Family</br>
   <input type="checkbox" name="vacation" value="number4"  class="check">Friend(s)</br>
     </span>
     <span class="error">*</span>
      </br>    
      
    <label for "email" class="left_label"><strong>How did you hear about us?</strong></label>
    <select name ="hear_about" required>
    <option></option>
    <option>Internet Ad</option>
    <option>Our Webstie</option>
    <option>Facebook</option>
    <option>Twitter</option>
     <option>Word of Mouth</option> 
     <span class="error">*</span>
 </select>
  </br>
   </br>
  
   <label for"radio" class="left_label"><strong>Would you recommed us?:</strong></label> </br>
 <input type="radio"  name="gender" value="male" class="yes"  required> Yes 
 <input type="radio" name="gender" value="female" class="no"> No
 <input type="radio" name="gender" value="female" class="maybe"> Maybe, I need another trip
 <span class="error">*</span>
 
 </br>
  <label for"message" class="left_label"><strong>Tell us your favorite desination and why:</strong></label></br>
  <textarea id ="message" name="Message" placeholder="Message">
	</textarea>
  
  <label for"comments" class="left_label"><strong>Comments and Suggestions:</strong></label></br>
   <textarea id ="message" name="Message" placeholder="Message">
	</textarea>
 </br>
 
 <input class="dsubmit" type="submit" value="Submit">
 </fieldset>
</form>
</div>
	
	';	
	}


?>

		
		
	<?php include 'includes/footer.php';?>