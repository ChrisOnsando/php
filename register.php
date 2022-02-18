<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <!--Google font-->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="dash.css">
    <!-- font awesome icons -->
    <link
      rel="stylesheet"
      href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
</head>
<body class="bg-primary">
<div class="container ">
    <div class="card m-3">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5 bg-register-image">
                    image here
                </div>
                 <div class="col-lg-7">
                     <div class="text-center">
                         <h1 class="h4 grey mb-4">Create an Account</h1>
                     </div>
                     <form action="handle_register.php" method="post">
                         <div class="row m-3">
                             <div class="col-sm-6">
                                 <input class="form-control rounded-pill" type="text" name="firstname" placeholder="First name" required>
                             </div>
                             <div class="col-sm-6">
                                 <div class="col-sm-12">
                                 <input  class="form-control rounded-pill" type="text" name="secondname" placeholder="Second name" required>
                                 </div>
                             </div>
                         </div>
                         <div class="row m-3">
                             <input class="form-control rounded-pill" type="email" name="emailaddress" placeholder="Email address" required>
                         </div>
                         <div class="row m-3">
                             <div class="col-sm-6">
                                 <input class="form-control rounded-pill" type="password" name="password" placeholder="password" required>
                             </div>
                             <div class="col-sm-6">
                                 <input class="form-control rounded-pill" type="password" name="confirmpassword" placeholder="Confirm Password" required>
                             </div>
                         </div>
                         <div class="row m-3">
                             <input type="submit" class="rounded-pill btn btn-primary" name="register" value="Register">
                         </div>
                         <hr>
                         <div class="row m-3">
                             <a href="" class="rounded-pill  btn btn-danger">Register with Google? </a>
                         </div>
                         <div class="row m-3">
                             <a href="" class="small text-center" >Forgot Password? </a>
                         </div>
                         <div class="row m-3">
                             <a href="login.php" class="text-primary small text-center">Already Have an account? Login</a>
                         </div>
                     </form>
                 </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>