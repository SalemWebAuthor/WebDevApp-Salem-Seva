<!DOCTYPE html>
<html>
	<head>
		<title>Dormitory Reservation Homepage</title>
		<link rel="stylesheet" href="css/style.css?<?php echo time();?>">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col">
					<h3>List of Records</h3>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="table-responsive">
					
					<table class="table table-bordered table-striped">
						<thead>
							<th>Customer ID&nbsp&nbsp</th> 
							<th>First Name&nbsp&nbsp</th>
							<th>Middle Name&nbsp&nbsp</th>
							<th>Last Name&nbsp&nbsp</th>
							<th>Email Address&nbsp&nbsp</th>
							<th>Contact Number&nbsp&nbsp</th>
							<th>Room Reserved&nbsp&nbsp</th>
						</thead>
						<tbody>
							<?php
							$conn = mysqli_connect("localhost", "root", "", "test");

							$query = "SELECT * FROM reserve";
							$query_run = mysqli_query($conn, $query);

							if(mysqli_num_rows($query_run) > 0)
							{
								foreach($query_run as $row)
								{
									?>
										<tr>
											<td><?= $row['cust_id']; ?></td>
											<td><?= $row['fname']; ?></td>
											<td><?= $row['mname']; ?></td>
											<td><?= $row['lname']; ?></td>
											<td><?= $row['email']; ?></td>
											<td><?= $row['cnumber']; ?></td>
											<td><?= $row['room']; ?></td>
										</tr>
									<?php
								}
							}
							else
							{
								?>
									<tr>
										<td colspan="7"No Record Found</td>		
									</tr>
								<?php
							}
										
							?>
						</tbody>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>