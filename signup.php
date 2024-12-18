
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="link/bootstrap.css">
	<script src="link/jquery.js"></script>
	<script src="link/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Signup</title>
  </head>
  <body>
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('images/shelf.avif');"></div>
        <div class="contents order-2 order-md-1">
    
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-7">
                <h3>Registration Form <strong>CeramicShop</strong></h3>
                <p class="mb-4">Unearth the beauty of crockery.</p>
                <form action="signup_data.php" method="post">
                  <div class="form-group">
                    <label for="fname">First name</label>
                    <input type="text" required class="form-control" name="fname" placeholder="First name" id="fname" required>
                  </div>
                  <div class="form-group">
                    <label for="lname">Last name</label>
                    <input type="text" required class="form-control" name="lname" placeholder="Last name" id="lname" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" required class="form-control" name="email" placeholder="Email" id="email" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" required class="form-control" name="pass" placeholder="Your Password" id="password" required>
                  </div>
                  <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" required class="form-control" name="cpass" placeholder="Confirm Password" id="cpassword" required>
                  </div>  
                  <span class="mb-5">Are you an existing user? <a href="login.html" class="forgot-pass">Log in here</a></span>
                  <input type="submit" value="Submit" class="btn btn-block btn-primary mb-3 mt-4" id="login">
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script>
     
      </script>
  

  
</body>
</html>