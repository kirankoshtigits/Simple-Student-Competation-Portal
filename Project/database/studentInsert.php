<?php
		
		//require 'dbconfig/config.php';
					$con=mysqli_connect("localhost","root","","Project1");
					
					
					if(isset($_POST['submit']))
					{
						//echo '<script type="text/javascript"> alert("Successfull Register") </script>';
						
						$schoolname=$_POST['schoolname'];
						$age=$_POST['age'];
						$cname=$_POST['cname'];
						$studentname=$_POST['studentname'];
						
						$queue="insert into student values('$schoolname','$age','$cname','$studentname')";
						
						$cout=mysqli_query($con,$queue);
						
						if($cout)
						{
							echo '<script type="text/javascript"> alert("Successfull Register") </script>';
						}
									
					}
		echo "<script> location.replace('../student.php'); </script>";

?>