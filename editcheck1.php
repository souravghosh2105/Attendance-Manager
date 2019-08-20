<?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body class="body">

	<img src="img/ssn.png" width="200" height="100">



	<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item ">
      <a class="nav-link" href="editcheck.php">Edit Attendance</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="editcheck1.php">Check Attendance</a>
    </li>
     </ul>
</nav>
<form>
<div class="form-group col-md-4">
      <label for="inputYear">Year</label>
      <select id="inputYear" class="form-control">
        <option selected>I</option>
        <option>II</option>
        <option>III</option>
        <option>IV</option>
      </select>
    </div>
<div class="form-group col-md-4">
      <label for="inputSec">Year</label>
      <select id="inputSec" class="form-control">
        <option selected>A</option>
        <option>B</option>
        <option>C</option>
      </select>
    </div>
<div class="form-group col-md-4">
      <label for="inputSub">Subject</label>
      <select id="inputSub" class="form-control">
        <option selected>..</option>
        <option>x</option>
        <option>y</option>
        <option>z</option>
      </select>
    </div>


</form>
<p align="center">
<a href="" class="btn btn-primary btn-lg " role="button" >Proceed</a>
<a class="btn btn-success btn-lg"  href="editcheck.php?logout=true" >Logout</a>
</p>
</body>
</html>

