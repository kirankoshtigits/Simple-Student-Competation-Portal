<?php
				$con=mysqli_connect("localhost","root","","Project1");
				
				if(isset($_POST['submit']))
				{
					
					//echo '<script type="text/javascript"> alert("Sign Up Button Clicked") </script>';
					
					$name=$_POST['name'];
					$email=$_POST['email'];
					$mnumber=$_POST['mnumber'];
					$password=$_POST['password'];
					$cpassword=$_POST['cpassword'];
					
						if($password==$cpassword)
						{

							$query="select * from user WHERE email='$email'";
							$query_run=mysqli_query($con,$query);
							
							if(mysqli_num_rows($query_run)>0)
							{
								//ther is already a user with the same username
								echo '<script type="text/javascript"> alert("Email is already use try to another") </script>';
							}
							else
							{
								//insert value on database
								$query="insert into user values('$name','$email','$mnumber','$password')";
								$query_run=mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript">alert("Successfull Register") </script>';
								}
							}
						}
						else
						{		
								echo '<script type="text/javascript">alert("Password And Conform Password does not match") </script>';
						}
				}
				echo "<script> location.replace('../user.php'); </script>";
?>