<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
 		<title>customer</title>
</head>

    
 <body>
        
	<h2>PHP coursework</h2>
	<form action="customer.php" method="post">
	<table>
	<tr>
	<td>
	First Name:
	</td>
	<td>
	<input type="text" name="name" id="name">
	</td>
	
	</tr>
	<tr>
	<td>
	Select a cinema:
	</td>
	<td>
	<input type="text" name="cinema" id="cinema">
	</td>	
	</tr>
	<tr>
	<td><input type="submit" value="submit"></td>
	<td><input type="reset" value="Reset"></td>
	
	</tr>
	
	</table>
	</form>
	
	
	<?php
         $Fname="";
		 $cinema="";
		 $Final="";
		 
		 if ($_SERVER["REQUEST_METHOD"] == "POST") 
		 {
		 $Fname=$_POST["name"];
		 $cinema=$_POST["cinema"];
		 
		 if ($Fname==""&&$cinema=="")
		 {
			 print "<style> p {color:red;}</style>" ."<p> please fill all the fields </p>";
			 
		 }
		 
		 else if ($Fname=="")
		 {
			 print "<style> p {color:red;} </style>". "<p> please enter a valid username </p>";
		 }
		 else if($cinema==""){
			 
			 print "<style> p {color:red;}</style>"."<p> please enter a valid cinema </p>";
		 
		 }
		 else 
			 
		 {
		 
		 $userID= substr($Fname,0,2) . $cinema . strlen($cinema);
		 
		 echo "thanks for chosing us " . $Fname . "<br> your user ID is: " . 
		 $userID . "<br> your password is:" . str_shuffle($Fname) . "<br> <a href='tickets.html'> Book a ticket here! </a>" ;
		 
		 
		 }
		 
		 }
		 
		   ?>
	
	
	
	
	
 
 </body>


</html>