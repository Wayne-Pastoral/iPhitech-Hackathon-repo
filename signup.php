<?php 
session_start();

	include("connection.php");


    if (isset($_POST["submit"])) {
      $user=$_POST["username"];
      $password=$_POST["password"];
      
        $sql="INSERT into users(username,passwords) values ('$user','$password')";
        $result=mysqli_query($con,$sql);
 
      }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<section class="h-100" style="background-color: #0032A1;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img
                src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/img4.jpg"
                alt="Sample photo"
                class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
              />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Student registration form</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Last name</label>
                    </div>
                  </div>
                </div>
                <form method="post">

                    <input id="text" type="text" name="username" class="form-control form-control-lg">
                    <label class="form-label" for="username">Username</label>
                    <input id="text" type="password" name="password" class="form-control form-control-lg">
                    <label class="form-label" for="password">Password</label>

                    <input class="btn btn-dark btn-lg btn-block mb-3" id="button" type="submit" name="submit" value="Signup">
                    <a class="text-dark mt-5" href="login.php">Click to Login</a>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>