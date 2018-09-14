<?php
					$con=mysqli_connect("localhost","root","","Project1");
					
					if(isset($_POST['submit']))
					{
						$groupid=$_POST['groupid'];
						$cid=$_POST['cid'];
						$studentid=$_POST['studentid'];
						$mark1=$_POST['mark1'];
						$mark2=$_POST['mark2'];
						$mark3=$_POST['mark3'];
						
						$queue="insert into studentmarks values('$groupid','$cid','$studentid','$mark1','$mark2','$mark3')";
						
						$cout=mysqli_query($con,$queue);
						
						if($cout)
						{
							echo '<script type="text/javascript"> alert("Successfull Register") </script>';
						}
					}
			echo "<script> location.replace('../mark.php'); </script>";
?>