<?php 
include ("../database/connection.php");
?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="css/main.css">

	</head>
	<body>
		<div class="container">
			<div> <h5 align="center"> User Information || <a href="../signUp_form.php".php>Add Users</a></h5></div>
			<div class="col-md-12">
				<table class="table table-hover table-dark ">
					<thead>
						<tr align = "center">
							<th scope="col">ID</th>
							<th scope="col">Name</th>
							<th scope="col">Email</th>
							<th scope="col">Password</th>
							<th scope="col">Role</th>
							<th scope="col">Action</th>

						</tr>
					</thead>
					<tbody>
						<?php 

						$data ="SELECT * FROM login";
						$show =mysqli_query($conn,$data);
						while($row = mysqli_fetch_assoc($show))
						{
						?>
						<tr align = "center">
							<td><?php  echo $row['id']?></td>
							<td><?php  echo $row['name']?></td>
							<td><?php  echo $row['email']?></td>
							<td><?php  echo $row['password']?></td>
							<td><?php  echo $row['user_role']?></td>
							<td><a href="admin_delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
							<?php 
							echo '<td><a href="admin_update_view.php?id=' . $row['id'] ."&name=" .$row['name'] ."&email=" .$row['email']. "&user_role=" . $row['user_role'].'">Edit</a></td>';
							?>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>

		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>