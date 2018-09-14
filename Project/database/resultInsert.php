<?php
					$con=mysqli_connect("localhost","root","","Project1");
					
					if(isset($_POST['submit']))
					{
						$age=$_POST['age'];
						$cid=$_POST['cid'];
						$num1=$_POST['num1'];
						$num2=$_POST['num2'];
						$num3=$_POST['num3'];
						$consolation1=$_POST['consolation1'];
						$consolation2=$_POST['consolation2'];
						
						$queue="insert into result values('$age','$cid','$num1','$num2','$num3','$consolation1','$consolation2')";
						
						$cout=mysqli_query($con,$queue);
						
						if($cout)
						{
							echo '<script type="text/javascript"> alert("Successfull Register") </script>';
						}
					}
			echo "<script> location.replace('../result.php'); </script>";
?>