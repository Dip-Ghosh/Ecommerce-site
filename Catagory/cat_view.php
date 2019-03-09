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
			<div> <h5 align="center"> Catagory Information || <a href="../Catagory/cat_add_view.php">Add Catagory</a></h5></div>
			<div class="col-md-12">
				<table class="table table-hover table-dark ">
					<thead>
						<tr align = "center">
							<th scope="col">ID</th>
							<th scope="col">Name</th>
							<th scope="col">Description</th>
							<th scope="col">Action</th>

						</tr>
					</thead>
					<tbody>
						<?php 

						$data ="SELECT * FROM catagory`";
						$show =mysqli_query($conn,$data);
						while($row = mysqli_fetch_assoc($show))
						{
						?>
						<tr align = "center">
							<td><?php  echo $row['cat_id']?></td>
							<td><?php  echo $row['name']?></td>
							<td><?php  echo $row['description']?></td>
							<td><a href="cat_delete.php?cat_id=<?php echo $row['cat_id'] ?>">Delete</a></td>
							<?php 
							echo '<td><a href="cat_update_view.php?cat_id=' . $row['cat_id'] ."&name=" .$row['name'] ."&description=" .$row['description']. '">Edit</a></td>';
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