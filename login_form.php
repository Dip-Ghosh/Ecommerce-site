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
                <form class="col-md-6" method="POST" action="login.php">
                    &nbsp;
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Enter email" required>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password"  name = "password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    
                    <button type="submit" name = "login" class="btn btn-primary">Submit</button>
                      <label class="form-check-label" for="exampleCheck1"><a href="signUp_form.php">Have Not an Account</a></label>
                    
            
                </form>
            </div>

        </div>

    </body>
</html>
