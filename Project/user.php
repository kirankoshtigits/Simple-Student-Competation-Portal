<!DOCTYPE html>
<html>

<head>
	<title>User Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Estate Mark a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/owl.carousel.css" rel="stylesheet"><!-- Owl-carousel-CSS -->
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body>
<header>
	<div class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="student.php">Student Registration</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="school.php">School Registration</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="age.php">Age Group</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="Compatition.php">Compatition</a>
			  </li>
			   <li class="nav-item active">
				<a class="nav-link" href="user.php">User Registration</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="result.php">Results</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="mark.php">Marks</a>
			  </li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
			  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		  </div>
		</nav>
		<div>
			<form class="form" enctype="multipart/form-data" 
			action="database/userInsert.php" method="post">
			
			 <p class="add">User Registeration</p>
				
				<label class="label">Name:</label><br>
					<input 
						name="name" 
						type="text" 
						class="text" 
						placeholder="Name" 
						pattern="[A-Za-z]{3,20} [A-Za-z]{3,20} [A-Za-z]{3,20}"
						title="Please Enter Valid Full Name Ex.Sushant Appaso Mali"
						required
					><br><br>
				
				<label class="label">Mobile Number:</label><br>
					<input
						name="mnumber" 
						type="text" 
						class="text" 
						placeholder="Mobile Number" 
						pattern="[0-9]{10}"
						title="Please Enter Valid Mobile Number Ex.9922199289"
						required
					><br><br>
				
				<label class="label">Email Address:</label><br>
					<input 
						name="email" 
						type="Email" 
						class="text" 
						placeholder="Email Address" 
						title="Plaese Enter Valid Email Ex.Hello@gmail.com"
						required
					><br><br>
				
				<label class="label">Password:</label><br>
					<input 
						name="password" 
						type="password" 
						class="text" 
						placeholder="Password" 
						pattern="[A-Za-z0-9]{8-15}"
						title="Please Enter Valid Password Ex.Karan1234"
						required
					><br><br>
				
				<label class="label">Conform Password:</label><br>
				<input name="cpassword" type="password" class="text" placeholder="Conform Password" required><br>
				
				<input name="submit" type="submit" class="submit" value="Send">
			</form>
		</div>
		</div>
</head>