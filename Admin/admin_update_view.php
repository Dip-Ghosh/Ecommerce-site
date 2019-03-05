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
        <form class="col-md-6" method="POST" action="admin_update.php">
            &nbsp;
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" name = "name" class="form-control" id="exampleInputname" aria-describedby="nameHelp"
                       value="<?php echo $_GET['name'] ?>" required>

            </div>
             <input type="hidden" name = "id" value="<?php echo $_GET['id'] ?>" required>
           
            

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       value="<?php echo $_GET['email'] ?>" required>

            </div>
            <div class="form-group">
                <label for="exampleInputRole">Role</label>
                <input type="user_role"  name = "user_role" class="form-control" id="exampleInputRole"  
                value="<?php echo $_GET['user_role'] ?>" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" name = "submit" class="btn btn-primary">Update</button>
        </form>
    </div>

</div>

</body>
</html>
