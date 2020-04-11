<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<?php

$host="localhost";
$user="root";
$password="";
$dbname="userdata";

$conn = new mysqli($host, $user, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
  }

  if (isset($_POST['submit'])){

$uname = isset($_POST['user']) ? $_POST['user'] : null;
$pass = isset($_POST['pass']) ? $_POST['pass'] : null;



$sql = " select * from userinfo where user = '".$uname."' AND pass = '".$pass."' limit 1";

$result = $conn->query($sql);
	
	
		
		if($result->num_rows ==1){
		
				header("location: home.php");
			}
			else{
        $error= "Invalid Password!!!";
        echo $error;
				
      }
      $conn->close();
    }

?>


<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">TravelGuide</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">SignUp</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<section class="my-5">
  <div class="my-5">
   
  </div>

  <div class="w-50 m-auto">
    <form  method="POST">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" placeholder="Enter Username" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="Password" name="pass" autocomplete="off" placeholder="Enter Password" class="form-control" required>
      </div>
      <div><button type="submit" name="submit" class="btn btn-success">Submit</button></div>
</form>
</div>
</section>
</body>
</html>

