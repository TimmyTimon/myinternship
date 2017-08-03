<!doctype html>
<html>
<head>
	<title>Table</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link href="css/bootstrap.min.css" rel="stylesheet">
<script text="type/javascript" src="jquery-3.0.0.min.js"></script>
</head>
<body>
  <div>
	 <h2>The table below shows the records of the Registered Persons</h2>
           <table class="table table-hover">
           	<tr>
           		<th>First Name</th><br>
           		<th>Last Name</th><br>
           		<th>Date of Birth</th><br>
           		<th>Gender</th><br>
           		<th>College</th><br>
           		<th>Course</th><br>
              <th>Phone Number</th><br>
              <th>P.O BOX</th><br>
              <th>Email</th><br>
               </tr>

               <?php 
               foreach ($details as $row) {
               	?>
               	<tr>
               		<td><?php echo $row['fname']; ?></td>
               		<td><?php echo $row['lname']; ?></td>
               		<td><?php echo $row['dob']; ?></td>
               		<td><?php echo $row['sex']; ?></td>
                  <td><?php echo $row['college']; ?></td>
                  <td><?php echo $row['degree']; ?></td>
                  <td><?php echo $row['phone_no']; ?></td>
                  <td><?php echo $row['po_box']; ?></td>
                  <td><?php echo $row['email']; ?></td>
               	</tr>
                          <?php	# code...
                          }   
                          ?>
                          </table> 
                        </div>

</body>
</html>