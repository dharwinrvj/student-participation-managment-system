
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.js">
	<link rel="stylesheet" type="text/css" href="css/styles2.css">
  <title>Conformation</title>

</head>
<body style="color: AntiqueWhite; font-family: Italic" bgcolor="Black">

    <div class="main">
    	<div class="register">
    		

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "usersinfo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $Name = $_POST['Name'];  
$Roll_Number= $_POST['Roll_Number'];   
$department = $_POST['department'];   
$section= $_POST['section'];   
$batch = $_POST['batch'];   
$email = $_POST['email'];   
$paper = $_POST['paper'];   
$college = $_POST['college'];   
$from = $_POST['from'];   
$to = $_POST['to'];   
$prize = $_POST['prize'];   
$fileName = $_FILES["certificate"]["name"];
$tmp_name=$_FILES["certificate"]["tmp_name"];

// Attempt insert query execution
$sql = "INSERT INTO workshop(Name,Roll_Number, department, section, batch, email, paper, college,prize,from_,to_, certificate) VALUES ('$Name','$Roll_Number','$department','$section','$batch','$email','$paper','$college','$prize','$from','$to', '$fileName') ";  


if(mysqli_query($link, $sql)){

   echo "<h2>Details Uploaded Successfully</h2>";
   		
	if (!file_exists('certified')) {
		mkdir('certified', 0777, true);
	}
	move_uploaded_file($tmp_name, "certified/".$fileName);
} else{
    echo "<h2>ERROR: Could not able to execute $sql.</h2> " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?> 

<button type="button" class="button-hover"  name="button" onclick="document.location='index.html'"style="background-color:yellow;margin-left:auto;margin-right:19%;display:block;margin-top:10%;margin-bottom:0%"><span>OK</span></button>
     </form></form>
    	</div>
    </div>
</body>
</html>
