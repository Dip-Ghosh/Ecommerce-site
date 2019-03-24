
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
        <form class="col-md-6" method="POST" action="product_addition.php" enctype="multipart/form-data">
            &nbsp;
             <div class="form-group">
                <label for="exampleInputName">Catagory ID</label>
                <input type="cat_id" name = "cat_id" class="form-control" id="exampleInputname" aria-describedby="nameHelp"
                       placeholder="Enter Catagory ID" required>

            </div>
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="name" name = "name" class="form-control" id="exampleInputname" aria-describedby="nameHelp"
                       placeholder="Enter product Name" required>

            </div>

            <div class="form-group">
                <label for="exampleInputName">Price</label>
                <input type="price" name = "price" class="form-control" id="exampleInputname" aria-describedby="nameHelp"
                       placeholder="Enter Price" required>

            </div>
             <div class="form-group">
                <label for="exampleInputName">Stock</label>
                <input type="stock" name = "stock" class="form-control" id="exampleInputname" aria-describedby="nameHelp"
                       placeholder="Enter amount of Stock" required>

            </div>

              <div class="form-group">
                <label for="exampleInputName">file UpLoad</label>
                <input type="file" name ="image">

            </div>

            <div class="form-group">
                <label for="exampleInputName">Created Date</label>
                <input type="date" name = "created_date" class="form-control" id="exampleInputname" aria-describedby="nameHelp"
                       placeholder="Enter created Date" required>

            </div>
            <div class="form-group">
            	<button type="submit" name ="add" class="btn btn-primary">ADD</button>
            </div>

        </form>
    </div>

</div>

</body>
</html>
