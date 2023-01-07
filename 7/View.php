<!DOCTYPE html>
<html lang="en">
<head>
	<title>Volunteer data</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">



</head>
<body>
<section>
      
  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">Student <b> Dropout reports </b> Recieved</h2>
      

      <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>
            
              <th scope="col">Name</th>
              <th scope="col">StateName</th>
              <th scope="col">Class</th>
			  <th scope="col">Phoneno</th>
			  
             
            </tr>
          </thead>
          <?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "dropout");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$sql = " SELECT * FROM student ";
		$result = mysqli_query($conn,$sql);
	
		mysqli_close($conn);
		?>
	
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
      <tbody>
        
			<tr scope="row">
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><a><?php echo $rows['name'];?></a></td>
				<td><a><?php echo $rows['statename'];?></td></a>
				<td><a><?php echo $rows['class'];?></a></td>
				<td><a><?php echo $rows['phone'];?></a></td>
				
			  
			</tr>
        
			<?php
				}
			?>
		</table>

	</center>
      
    </table>
  </div>
  
</section>
 <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

