<?php include "database/connection.php";
?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-12">

	<?php
include "database/product_load_query.php";
while ($row = mysqli_fetch_assoc($show)) {
    ?>
			<div class="card" style="width:22rem;display:inline-block">
				<img class="card-img-top" src="images/<?php echo $row['image'] ?>" alt="Card image cap">
				<div class="card-body" id="cart_button">
					<h5 class="card-name">Product Name: <?php echo $row['name'] ?></h5>
					<p class="card-id">ProductId: <?php echo $row['pro_id'] ?></p>
					<p class="card-price">CatagoryId: <?php echo $row['cat_id'] ?></p>
					<p class="card-price">Price: <?php echo $row['price'] ?></p>
					<p class="num" id="avail<?php echo $row['pro_id']; ?>" type = "num" value="<?php echo $row['stock'];?>">Available Quantity: <?php echo $row['stock'] ?></p>
					<p class="card-date">Created Date: <?php echo $row['created_date'] ?></p>
					<input type="hidden"  name="number" value ="1">
					
					<div class="row-md-4 justify">
						<button type="button" id = "cart"  class="btn btn-warning add_to_cart"  onclick="addProduct(<?php echo $row['pro_id']; ?>)" >
                         Add to cart</button>
						<button type="button" name = "sub" class="btn btn-primary" onclick="document.location.href='Layouts/product_load_preview.php?pro_id='+ <?php echo $row['pro_id'];?>">See More</button>
					</div>
				</div>
			</div>
			<?php
}?>
</div>
	</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$( document ).ready(function() {

    showCart();
});

function addProduct(id){
    console.log(id);


        var x = "avail";
        x = x.concat(id);
        console.log("final"+x);
        //var q = document.getElementById(x).getAttribute('value');
    var q  = document.getElementById(x).value;
        console.log(q);
        if (q == 0) {
            alert("This P Is Out Of Stock");

        }

$.ajax({
   type: "GET",
   url: "http://localhost/ecommerce/cart/add_to_cart.php?id=" + id,
   contentType: "application/json",
   success: function (data) {
  // console.log(data);
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
   	//console.log(cart_value);
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

