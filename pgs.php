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
    <!--NAVIGATION bar START-->
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
            <a class="nav-link" aria-current="page" href="home.php">Home</a>
            <a class="nav-link" href="about.php">About</a>
            <a class="nav-link active" href="pgs.php">PGs</a>
            <a class="nav-link" href="contact.php">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
    <button class="btn btn-outline-light mx-1" type="button">Login</button>
  </div>
      </div>
        <button class="btn btn-outline-light mx-2" type="button">SignUp</button>
      </div>
      
    </nav>
    <!--NAVIGATION bar END-->
  
    <!--MAIN BODY START-->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <form class="d-flex mx-4" role="search" action="pgs.php" method="post">
            <input class="form-control me-2 my-2 " type="search" name = "search" placeholder="Search by Name" aria-label="Search">
            <button class="btn btn-outline-dark my-2" type="submit">Search</button>
          </form>
          <div class="dropdown">
            <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Budget
            </button>
            <ul class="dropdown-menu">
              <li><button class="dropdown-item" type="button">15000 & Above</button></li>
              <li><button class="dropdown-item" type="button">12000-15000</button></li>
              <li><button class="dropdown-item" type="button">10000-12000</button></li>
              <li><button class="dropdown-item" type="button">Below 10000 </button></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              PG Type
            </button>
            <ul class="dropdown-menu">
              <li><button class="dropdown-item" type="button">Girls</button></li>
              <li><button class="dropdown-item" type="button">Boys</button></li>
              <li><button class="dropdown-item" type="button">Others</button></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Room Type
            </button>
            <ul class="dropdown-menu">
              <li><button class="dropdown-item" type="button">Single</button></li>
              <li><button class="dropdown-item" type="button">Double</button></li>
              <li><button class="dropdown-item" type="button">Triple</button></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Amenities
            </button>
            <ul class="dropdown-menu">
              <li><button class="dropdown-item" type="button">Air Conditioner</button></li>
              <li><button class="dropdown-item" type="button">Wifi</button></li>
              <li><button class="dropdown-item" type="button">Flat TV</button></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              More Filters
            </button>
            <ul class="dropdown-menu">
              <li><button class="dropdown-item" type="button"></button></li>
            </ul>
          </div>
          
        </div>
   </nav>
     <!-- search table -->

<?php error_reporting(0); ?> 
<?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
if (!$con) {
  die("connection to db fail due to ". mysqli_connect_error());
}

$searchErr = '';
$pg_details='';


$search = $_POST['search'];
//$sql = "SELECT * FROM `feelslikehome`.`pg_details`";
$sql = "SELECT * FROM `feelslikehome`.`pg_details` WHERE Address like '%$search%' or PG_Name like '%$search%' or PGType like '%$search%' or Room_Type like '%$search%'";
//$stmt = $con->prepare("select * from pg_details where Address like '%$search%' or PG_Name like '%$search%'");
$result = $con->query($sql);
		

?>
<div class="containerSearch mx-4 my-2">
	<h3><center>Search Result</center></h3><br/>
	<div class="table-responsive">          
	  <table class="table">
	    <thead>
	      <tr>
	        <th>#</th>
	        <th>PG Name</th>
	        <th>Rent</th>
	        <th>Address</th>
	        <th>PG Type</th>
          <th>Room Type</th>
          <th>Facilities</th>
	      </tr>
	    </thead>
	    
      <tbody>
	    		<?php
		    	 if(!$result)
		    	 {
		    		echo '<tr>No data found</tr>';
		    	 }
		    	 else{
		    	 	foreach($result as $key=>$value)
		    	 	{
		    	 		?>
		    	 	<tr>
		    	 		<td><?php echo $key+1;?></td>
		    	 		<td><?php echo $value['PG_Name'];?></td>
		    	 		<td><?php echo $value['Rent'];?></td>
		    	 		<td><?php echo $value['Address'];?></td>
		    	 		<td><?php echo $value['PGType'];?></td>
              <td><?php echo $value['Room_Type'];?></td>
              <td><?php echo $value['Facilities'];?></td>
		    	 	</tr>
		    	 		
		    	 		<?php
		    	 	}
		    	 	
		    	 }
		    	?>
	    	
	     </tbody>
	    
	  </table>
	</div>
</div>
<!--search END-->
<h3 class = "heading2 my-4"><center>View More PGs</center></h3>
<div class="card my-2 mx-5 " style="max-width: 1200px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img1.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">RV PG</h5>
              <p class="card-text">Shivaji Park Metro, S-Block</p>
              <p class="card-text"><small class="text-body-secondary"></small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card my-2 mx-5 " style="max-width: 1200px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img7.jpg" width="400" height="50" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Narayan PG</h5>
              <p class="card-text">Karol Bagh</p>
              <p class="card-text"><small class="text-body-secondary"></small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card my-2 mx-5 " style="max-width: 1200px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img3.jpg" width="400" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Silver Residency</h5>
              <p class="card-text">Punjabi Bagh</p>
              <p class="card-text"><small class="text-body-secondary"></small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card my-2 mx-5 " style="max-width: 1200px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img4.jpg" width="400" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">HelloWorld Aerocity</h5>
              <p class="card-text">Dwarka Sector-21 Metro</p>
              <p class="card-text"><small class="text-body-secondary"></small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card my-2 mx-5 " style="max-width: 1200px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img5.jpg" width="400" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Welcome PG</h5>
              <p class="card-text">Rajouri Garden, Delhi</p>
              <p class="card-text"><small class="text-body-secondary"></small></p>
            </div>
          </div>
        </div>
      </div>
    <!-- Footer -->
  
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
  <!-- Footer -->
  
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

