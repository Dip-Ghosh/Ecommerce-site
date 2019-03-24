
<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
				integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
				crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
				integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
				crossorigin="anonymous"></script>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">

			<div class="col-md-6 offset-md-5">
				<form class="col-md-6" method="POST" action="cat_update.php">
					&nbsp;
					<input type="hidden" name = "cat_id" value="<?php echo $_GET['cat_id'] ?>" required>

					<div class="form-group">
						<label for="exampleInputName">Name</label>
						<input type="text" name = "name" class="form-control" id="exampleInputname" aria-describedby="nameHelp" value=" <?php echo $_GET['name']; ?>" required>

					</div>

					<div class="form-group">
						<label for="exampleInputName">Description</label>
						<input type="text" name = "description" class="form-control" id="exampleInputname" aria-describedby="nameHelp" value=" <?php echo $_GET['description']; ?>" required>
						</div>
			
					<button type="submit" name = "up" class="btn btn-primary">Update</button>
				</form>
			</div>

		</div>

	</body>
</html>
