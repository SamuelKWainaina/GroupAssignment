<?php

// Connect syntax
$connect = mysqli_connect("localhost",
	"root", "", "blog_db");

// Display data from geeksdata table
$query ="SELECT * FROM author_tbl  ORDER BY author_id ASC";

// Storing it in result variable
$result = mysqli_query($connect, $query);
?>


<html>

<head>
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
	</script>
	
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
	<style>
	body{
		background-image: url(''); 
	}
		</style>

</head>

<body>
	<div class="container" style="width:900px;">
		<h2 align="center">USERS</h2>

		<h3 align="center">
			Author database
		</h3>
		<br />
		
		<!-- After clicking on submit button
			export.php code is revoked -->
		<form method="post" action=""
			align="center">
			
		</form>
		<br />

		<!-- Code for table because our data is
			displayed in tabular format -->
		<div class="table-responsive" id="employee_table">
			<table class="table table-bordered">
				<tr>
					

					<th width="35%">author_id</th>
					<th width="35%">full_name</th>
					<th width="35%">email</th>
					<th width="35%">username</th>
					
				</tr>
				<?php
				
				// Fetching all data one by one using
				// while loop
				while($row = mysqli_fetch_array($result)) {
				?>
				
				<!-- taking attributes and storing
					in table cells -->
				<tr>
					<!-- column names in table -->
					<td><?php echo $row["author_id"]; ?></td>
					<td><?php echo $row["full_name"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["username"]; ?></td>
					
				</tr>
				<?php	
				}?>
			</table>
			<!-- Closing table tag -->
		</div>
		<!-- Closing div tag -->
	</div>
</body>

</html>
