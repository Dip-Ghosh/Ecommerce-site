<?php include "../database/connection.php";
include "../Layouts/header.php";
include "../Layouts/nav.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<div class="container">
	<div class="row justify-content-center">

		<div class="col-lg-6 offset-md-3">
<?php

$pro_id = $_GET['pro_id'];

$data = "SELECT * FROM product where pro_id ='$pro_id'";

$show = mysqli_query($conn, $data);
$row  = mysqli_fetch_assoc($show);
?>
			<div class="card" style="width:22rem;display:inline-block" >
				<img class="card-img-top" src="../images/<?php echo $row['image']; ?>" alt="Card image cap">
				<div class="card-body" id="cart_button">
					<h5 class="card-name">Product Name: <?php echo $row['name']; ?></h5>
					<p class="card-id">ProductId: <?php echo $row['pro_id'] ?></p>
					<p class="card-price">CatagoryId: <?php echo $row['cat_id'] ?></p>
					<p class="card-price">Price: <?php echo $row['price'] ?></p>
					<p class="num" id= "availQty">Stock: <?php echo $row['stock'] ?></p>
					<p class="card-date">Created Date: <?php echo $row['created_date'] ?></p>
					<input type="number" id="txtQty" name="number" value ="1">

					<div class="row-md-4 justify">
						<button type="button" class="btn btn-warning add_to_cart"  onclick="addProduct(<?php echo $row['pro_id']; ?>)" >
                         Add to cart</button>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$( document ).ready(function() {
    showCart();
});
function addProduct(id){

$.ajax({
   type: "GET",
   url: "http://localhost/ecommerce/cart/add_to_cart.php?id=" + id,
   contentType: "application/json",
   success: function (data) {
   console.log(data);
   }
});

showCart();
}

function showCart(){
   var cart_value = 0;
   $.ajax({
   type: "GET",
   url: "http://localhost/ecommerce/cart/store_cart.php" ,
   contentType: "application/json",
   success: function (data) {
   var obj = jQuery.parseJSON(data);
   cart_value =  obj.cart;
   console.log(cart_value);
	var str1 =  "CART(" ;
	var str2 = ")";
	str1 = str1.concat(cart_value);
	str1 = str1.concat(str2);
	document.getElementById('btnCart').innerText = str1 ;
   }
});
}
</script>

<!--Ajax CART END -->

