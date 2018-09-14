<?php
		
		//require 'dbconfig/config.php';
					$con=mysqli_connect("localhost","root","","Project1");
					
					
					if(isset($_POST['submit']))
					{
						//echo '<script type="text/javascript"> alert("Successfull Register") </script>';
						
						$age=$_POST['age'];
				
						$queue="insert into agegroup values('$age')";
						
						$cout=mysqli_query($con,$queue);
						
						if($cout)
						{
							echo '<script type="text/javascript"> alert("Successfull Register") </script>';
						}
									
					}
		echo "<script> location.replace('../age.php'); </script>";

?>