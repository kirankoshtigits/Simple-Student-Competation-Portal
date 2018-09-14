<?php
					$con=mysqli_connect("localhost","root","","Project1");
					
					if(isset($_POST['submit']))
					{
						$schoolname=$_POST['schoolname'];
						$principlename=$_POST['principlename'];
						$contactnumber=$_POST['contactnumber'];
						$address=$_POST['address'];
						$city=$_POST['city'];
						
						$queue="insert into school values('$schoolname','$principlename','$contactnumber','$address','$city')";
						
						$cout=mysqli_query($con,$queue);
						
						if($cout)
						{
							echo '<script type="text/javascript"> alert("Successfull Register") </script>';
						}
					}
			echo "<script> location.replace('../school.php'); </script>";
?>