<!DOCTYPE html>
<html lang="en" dir='ltr'>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="style2.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>

	
table,th,td{
	border: 1px ;
	width: 700px;
	text-align: center;
	padding: 5px;
	font-family: sans-serif;
	background: linear-gradient(to right,Antiquewhite,grey);
	border-radius: 8px;
	transition: all .5s ease-in-out;
	color: Black;
	font-weight: bold;
	margin-right: auto;
	margin-right: auto;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
}

 .button4 {background-color: #e7e7e7; color: black; border-radius:12px;} 	


</style>
<body style="color: AntiqueWhite; font-family: Italic" bgcolor="Black">
	<form method="post" action="viewphp.php" enctype="multipart/form-data">
	 <h2 style="font-family: Italic; color:AntiqueWhite;"><center>VIEW STUDENTS DETAILS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></h2>
	 <div class="main">
    	<div class="register">
    		<form action="" method="POST">
    		<table class="center">
    			<tr>
    				<th>Name</th>
    				<th>Roll Number</th>
    				<th>Department</th>
    				<th>Section</th>
					<th>Batch</th>
					<th>Email</th>
    				<th>Domain</th>
    				<th>College/Company Name</th>
					<th>Date of domain From</th>
					<th>Date of domain To</th>
					<th>Prize if any</th>
					<th>Certificate</th>
					
    			</tr> <br>
			
    		</form></form>
			<?php
				if(isset($_POST["submit"]))
    			{
    			$link = mysqli_connect("localhost", "root", "", "usersinfo");
 
                // Check connection
                if($link === false){
               die("ERROR: Could not connect. " . mysqli_connect_error());
               }
               
    			
    				$Roll_Number=$_POST["Roll_Number"];

    				$query="SELECT Name, Roll_Number, department, section ,batch ,email, paper , college ,from_ ,to_ ,prize ,certificate FROM paperpresentation WHERE Roll_Number='$Roll_Number' ";
    				$query_run=mysqli_query($link,$query);

    				while($row=mysqli_fetch_array($query_run))
    				{
                       ?>
                       <tr>
                       	<td><?php echo $row['Name'];?></td>
                       	<td><?php echo $row['Roll_Number'];?></td>
                       	<td><?php echo $row['department'];?></td>
                       	<td><?php echo $row['section'];?></td>
                       	<td><?php echo $row['batch'];?></td>
                       	<td><?php echo $row['email'];?></td>
						<td><?php echo $row['paper'];?></td>
						<td><?php echo $row['college'];?></td>
						<td><?php echo $row['from_'];?></td>
						<td><?php echo $row['to_'];?></td>
						<td><?php echo $row['prize'];?></td>
						<td><?php echo $row['certificate'];?></td>
                       </tr>
                       <?php
    				}
    			}
    		?>
			
			<?php
			if(isset($_POST["submit"]))
    			{
			$link = mysqli_connect("localhost", "root", "", "usersinfo");
 
                // Check connection
                if($link === false){
               die("ERROR: Could not connect. " . mysqli_connect_error());
               }
    			
    			
    				$Roll_Number=$_POST["Roll_Number"];

    				$query="SELECT Name, Roll_Number, department, section ,batch ,email, paper ,college,from_,to_,prize,certificate FROM technicalevent WHERE Roll_Number='$Roll_Number' ";
    				$query_run=mysqli_query($link,$query);

    				while($row=mysqli_fetch_array($query_run))
    				{
                       ?>
                       <tr>
                       	<td><?php echo $row['Name'];?></td>
                       	<td><?php echo $row['Roll_Number'];?></td>
                       	<td><?php echo $row['department'];?></td>
                       	<td><?php echo $row['section'];?></td>
                       	<td><?php echo $row['batch'];?></td>
                       	<td><?php echo $row['email'];?></td>
						<td><?php echo $row['paper'];?></td>
						<td><?php echo $row['college'];?></td>
						<td><?php echo $row['from_'];?></td>
						<td><?php echo $row['to_'];?></td>
						<td><?php echo $row['prize'];?></td>
						<td><?php echo $row['certificate'];?></td>
                       </tr>
                       <?php
    				}
    			}
				?>
    		<?php
			if(isset($_POST["submit"]))
    			{
    			$link = mysqli_connect("localhost", "root", "", "usersinfo");
 
                // Check connection
                if($link === false){
               die("ERROR: Could not connect. " . mysqli_connect_error());
               }
    			
    				$Roll_Number=$_POST["Roll_Number"];

    				$query="SELECT Name, Roll_Number, department, section ,batch ,email, paper ,college,from_,to_,prize,certificate FROM nontechnical WHERE Roll_Number='$Roll_Number' ";
    				$query_run=mysqli_query($link,$query);

    				while($row=mysqli_fetch_array($query_run))
    				{
                       ?>
                       <tr>
                       	<td><?php echo $row['Name'];?></td>
                       	<td><?php echo $row['Roll_Number'];?></td>
                       	<td><?php echo $row['department'];?></td>
                       	<td><?php echo $row['section'];?></td>
                       	<td><?php echo $row['batch'];?></td>
                       	<td><?php echo $row['email'];?></td>
						<td><?php echo $row['paper'];?></td>
						<td><?php echo $row['college'];?></td>
						<td><?php echo $row['from_'];?></td>
						<td><?php echo $row['to_'];?></td>
						<td><?php echo $row['prize'];?></td>
						<td><?php echo $row['certificate'];?></td>
                       </tr>
                       <?php
    				}
    			}
    		?>
    		<?php
			if(isset($_POST["submit"]))
    			{
    			$link = mysqli_connect("localhost", "root", "", "usersinfo");
 
                // Check connection
                if($link === false){
               die("ERROR: Could not connect. " . mysqli_connect_error());
               }
    			
    				$Roll_Number=$_POST["Roll_Number"];

    				$query="SELECT Name, Roll_Number, department, section ,batch ,email, paper ,college,from_,to_,prize,certificate FROM intenship WHERE Roll_Number='$Roll_Number' ";
    				$query_run=mysqli_query($link,$query);

    				while($row=mysqli_fetch_array($query_run))
    				{
                       ?>
                       <tr>
                       	<td><?php echo $row['Name'];?></td>
                       	<td><?php echo $row['Roll_Number'];?></td>
                       	<td><?php echo $row['department'];?></td>
                       	<td><?php echo $row['section'];?></td>
                       	<td><?php echo $row['batch'];?></td>
                       	<td><?php echo $row['email'];?></td>
						<td><?php echo $row['paper'];?></td>
						<td><?php echo $row['college'];?></td>
						<td><?php echo $row['from_'];?></td>
						<td><?php echo $row['to_'];?></td>
						<td><?php echo $row['prize'];?></td>
						<td><?php echo $row['certificate'];?></td>
                       </tr>
                       <?php
    				}
    			}
    		?>
    		<?php
			if(isset($_POST["submit"]))
    			{
    			$link = mysqli_connect("localhost", "root", "", "usersinfo");
 
                // Check connection
                if($link === false){
               die("ERROR: Could not connect. " . mysqli_connect_error());
               } 
    			
    				$Roll_Number=$_POST["Roll_Number"];

    				$query="SELECT Name, Roll_Number, department, section ,batch ,email, paper ,college,from_,to_,prize,certificate FROM workshop WHERE Roll_Number='$Roll_Number' ";
    				$query_run=mysqli_query($link,$query);

    				while($row=mysqli_fetch_array($query_run))
    				{
                       ?>
                       <tr>
                       	<td><?php echo $row['Name'];?></td>
                       	<td><?php echo $row['Roll_Number'];?></td>
                       	<td><?php echo $row['department'];?></td>
                       	<td><?php echo $row['section'];?></td>
                       	<td><?php echo $row['batch'];?></td>
                       	<td><?php echo $row['email'];?></td>
						<td><?php echo $row['paper'];?></td>
						<td><?php echo $row['college'];?></td>
						<td><?php echo $row['from_'];?></td>
						<td><?php echo $row['to_'];?></td>
						<td><?php echo $row['prize'];?></td>
						<td><?php echo $row['certificate'];?></td>
                       </tr>
                       <?php
    				}
    			}
    		?>    
			   
				<p><button type="button" class="button button4"  name="button" onclick="document.location='view.html'"><span>Go Back</span></button>
						</p>