
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" >Ecommere Site</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

         <div >
             <div id="navbar-cart" class="navbar-collapse collapse">
                 <ul class="nav navbar-nav float-md-right">
                     <li>
                         <a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
                             <span class="glyphicon glyphicon-shopping-cart"></span>
                            <button class="btn btn-primary navbar-btn  btn-md" id="btnCart">CART(0)</button>
                         </a>
                     </li>
                     <li>
                     <a href="Login/login_form.php" id="cart-popover" class="btn" data-placement="bottom">
                
                            <button class="btn btn-primary navbar-btn  btn-md" >Login</button>
                         </a>
                     </li>
                 </ul>

             </div>


		</div>

        <div id="popover_content_wrapper" style="display: none">
            <span id="scart_details"></span>
            <div align="right">
                <a href="#" class="btn btn-primary" id="check_out_cart">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Check out
                </a>
                <a href="#" class="btn btn-default" id="clear_cart">
                    <span class="glyphicon glyphicon-trash"></span> Clear
                </a>
            </div>
        </div>


    </div>
</nav>
 <script>
 document.getElementById("btnCart").onclick = function() {
     location.replace("cart/order_details.php");
 };

</script>