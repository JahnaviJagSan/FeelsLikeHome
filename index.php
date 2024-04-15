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
<div class="containerSearch mx-4">
	<h3><u>Search Result</u></h3><br/>
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
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>