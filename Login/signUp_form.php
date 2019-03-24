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
        <form class="col-md-6" method="POST" action="signUp.php">
            &nbsp;
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" name = "name" class="form-control" id="exampleInputname" aria-describedby="nameHelp"
                       placeholder="Enter Name" required>

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Enter email" required>

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password"  name = "password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="exampleInputRole">Role</label>
                <input type="user_role"  name = "user_role" class="form-control" id="exampleInputRole" placeholder="User Role" required>
            </div>

            <button type="submit" name = "signup" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>

</body>
</html>
