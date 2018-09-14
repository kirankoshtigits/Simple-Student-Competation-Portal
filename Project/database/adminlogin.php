<?php 
					if(isset($_POST['login_btn']))
					{
						//echo '<script type="text/javascript">alert("Login Button Clicked") </script>';
						$username=$_POST['username'];
						$password=$_POST['password'];
							$query="SELECT * FROM admin WHERE username='$username' AND password='$password'";
							$query_run=mysqli_query($con,$query);
							
							if(mysqli_num_rows($query_run)==1)
							{
								header('location:adminlogin.php');
							}
							else
							{
									echo'<script type="text/javascript">alert("Wrong Username/Password")</script>';
							}
					}		
?>