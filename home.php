<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FeelsLikeHome - Online PG Accommodation System</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
  </head>  
  <body>
<!-- navigation bar start-->
<nav
      class="navbar sticky-top navbar-expand-lg navbar-dark"
      style="background-color: #310202"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="logo2.png" alt="Bootstrap" width="280" height="65" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-center"
          id="navbarNavAltMarkup"
        >
          <div class="navbar-nav fs-5">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            <a class="nav-link" href="about.php">About</a>
            <a class="nav-link" href="pgs.php">PGs</a>
            <a class="nav-link" href="contact.php">Contact Us</a>
          </div>
        </div>
      </div>
      </div>
        <button class="btn btn-outline-light mx-1" type="button" data-bs-toggle="modal" data-bs-target="#LoginModal">Login</button>
      </div>
      </div>
        <button class="btn btn-outline-light mx-2" type="button" data-bs-toggle="modal" data-bs-target="#SignUpModal">SignUp</button>
      </div>
</nav> 
<!-- navigation bar start-->

<!--sign up start-->
<div>
  <div class="modal fade" id="SignUpModal" tabindex="-1" aria-labelledby="universityLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-3 fw-bold" id="ModalLabel">Sign Up</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3" action="home.php" method="post">
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Name</label>
              <input type="text" class="form-control" id="inputAddress2" name = "name" placeholder="abc">
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name = "email">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword4" name = "password">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputAddress" name = "address"placeholder="1234 Main St">
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity" name = "city">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <input type="text" class="form-control" id="inputState" name = "state">
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip" name ="zip">
            </div>
            
            <div class="col-12 d-md-flex justify-content-md-center">
              <button type="submit" class="btn btn-primary" >Sign in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- signup end-->

<!--log in start-->
<div>
  <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="universityLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-3 fw-bold" id="ModalLabel">Log In</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-1 needs-validation" novalidate>           
            <div class="col-12">
              <label for="validationCustomEmailId" class="form-label">Email Id</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="validationCustomEmailId" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  Please provide correct Email Id.
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <label for="validationCustom03" class="form-label">Password</label>
              <input type="text" class="form-control" id="validationCustom03" required>
              <div class="invalid-feedback">
                Please provide a valid password.
              </div>
            </div>
            
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Log In</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- login end-->

<!--carousal start-->
<div
      id="carouselExampleInterval"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
          <img src="img0.jpg" width="250"
          height="450" class="d-block w-100" alt="Pictures of PG" />
          <div class="carousel-caption d-none d-md-block" style="color: #310202;">
            <h3>Book Your PG Now!</h3>
            <p> Have a wonderful experience guarantied !!</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img2.jpg" width="250"
          height="450" class="d-block w-100" alt="Pictures of PG" />
          <div class="carousel-caption d-none d-md-block" style="color: white;">
            <h3>Grab Your PG!</h3>
            <p>Choose whatever you want from your dream PG</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img1.jpg" width="250"
          height="450" class="d-block w-100" alt="Pictures of PG" />
          <div class="carousel-caption d-none d-md-block" style="color: #310202;">
            <h3>Your Expectations Meet Here !</h3>
            <p>Be one of those who enjoys our facilities.</p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleInterval"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleInterval"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
</div>
<!--carousal end-->

<!-- search box start-->
<div class = "coro my-4">
    <h2><center>Find Your PG !</center></h2>
      <div class="container-fluid">
        <form class="d-flex mx-4" role="search" action = "pgs.php"method = "post">
          <input class="form-control me-2 my-2 " type="search" name = "search" placeholder="Search by Name, Area..." aria-label="Search">
          <button class="btn btn-outline-dark my-2" type="submit">Search</button>
        </form>

      </div>
  <!-- search box end-->  
  
<!-- cards start-->
<div class="row row-cols-1 row-cols-md-3 g-4 my-4 mx-2">
      <div class="col">
          <div class="card h-100">
            <img src="img3.jpg" style="height: 250px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Void PG</h5>
              <p class="card-text">Near ESI Hospital, E-Block, Punjabi Bagh</p>
            </div>
            <div class="card-footer">
              <a href="pgs.php" class="card-link">View Details</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img5.jpg" style="height: 250px; class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">S.M.P. PG</h5>
              <p class="card-text">Punjabi Bagh, New Delhi</p>
            </div>
            <div class="card-footer">
              <a href="pgs.php" class="card-link">View Details</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Dwarka PG</h5>
              <p class="card-text">Dwarka Sector-21 Metro, New Delhi</p>
            </div>
            <div class="card-footer">
              <a href="pgs.php" class="card-link">View Details</a>
            </div>
          </div>
        </div>
      </div>
</div>
<!-- cards start-->
      
  <!-- Footer start-->
  <footer class="text-center text-white" style="background-color: #310202">
    
    <!-- Grid container -->
    <div class="container ">      
      <hr class="my-5" />

      <!--Can add something in footer later-->
      
      </section>
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2023 Copyright :
      <a class="text-white" href="#"
         >FeelsLikeHome.co.in</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer end-->
  
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

<!--for registration -->
<?php error_reporting(0); ?> 
<?php
        $server = "localhost";
        $username = "root";
        $password = "";
    
        $con = mysqli_connect($server, $username, $password);
        $insert = false;
        if (!$con) {
            die("connection to db fail due to ". mysqli_connect_error());
        }
        //echo "Success";
        
        // Collect post variables
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        

    // echo $sql;
    $sql = "INSERT INTO `feelslikehome`.`customer` (`name`, `email`, `password`, `address`, `city`, `state`) VALUES ( '$name', '$email', '$password', '$address', '$city', '$state')";
    // Execute the query
    if($con->query($sql) == true){
         echo "Registration Successful !!";
         echo '<script>alert("Welcome to Feels Like Home")</script>';

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();

?>

