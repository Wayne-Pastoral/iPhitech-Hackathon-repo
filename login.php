<?php 
    session_start();

    include("connection.php");

    if (isset($_POST["login"])) {
        $user=$_POST["username"];
        $password=$_POST["password"];
        $sql="SELECT * from users where username='$user' and passwords='$password'";
        $result=mysqli_query($con,$sql);
        if (mysqli_num_rows($result) != 0) {
            while ($conn=mysqli_fetch_assoc($result)) {
                $_SESSION["uid"]=$conn["adminid"];
                $_SESSION["uname"]=$conn["username"];

                header("Location:index.php");
            }
        }else{
            echo "<div class='text-danger' id='warning'>Incorrect Password or Email</div>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<section class="h-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-flex justify-content-center">
              <img
                src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <img
                       width="150" src="https://i.ibb.co/p31kSgb/242569621-205365198351760-2066676084820781993-n-png.webp"
                        alt="logo" style="border-radius: 1rem 0 0 1rem;"
                    />
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                  <input id="text" class="form-control form-control-lg" type="text" name="username">
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                     <input id="text"  class="form-control form-control-lg" type="password" name="password">
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <a class="btn btn-dark btn-lg btn-block" href="index.php">Login</a>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p  class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="signup.php"  style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>