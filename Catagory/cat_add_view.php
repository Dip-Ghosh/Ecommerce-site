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
        <form class="col-md-6" method="POST" action="cat_addition.php">
            &nbsp;
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="name" name = "name" class="form-control" id="exampleInputname" aria-describedby="nameHelp"
                       placeholder="Enter Name" required>

            </div>

            <div class="form-group">
						<label for="exampleFormControldescription">Description</label>
						<textarea type ="text" class="form-control" name ="description" placeholder="Enter description"></textarea>
					</div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" name ="add" class="btn btn-primary">ADD</button>
        </form>
    </div>

</div>

</body>
</html>
