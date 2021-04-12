



<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "usersinfo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $Name = $_POST['Name'];  
$Number= $_POST['Number'];   
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
$sql = "INSERT INTO technicalevent(Name, Number, department, section, batch, email, paper, college,prize,from_,to_, certificate) VALUES ('$Name','$Number','$department','$section','$batch','$email','$paper','$college','$prize','$from','$to', '$fileName') ";  


if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
	if (!file_exists('certified')) {
		mkdir('certified', 0777, true);
	}
	move_uploaded_file($tmp_name, "certified/".$fileName);
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?> 