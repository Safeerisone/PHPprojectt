<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
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
    <h2 class="text-center">Register Yourself</h2>
  </div>

  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" placeholder="Enter Username" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" placeholder="Enter Email" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="Password" name="pass" placeholder="Enter Password" autocomplete="off" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Confirm Password</label>
        <input type="Password" name="cpass" autocomplete="off" placeholder="Enter Password Again" class="form-control" required>
      </div>
      <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> I agree to the Terms & Condition.
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
      <div><button type="submit" class="btn btn-success">Submit</button></div>
    </form>
  </div>
  
</section>
</body>
</html>