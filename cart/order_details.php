<?php
$subtotal = 0;
include "../database/connection.php";
include "../Layouts/head.php";
include "../Layouts/nav.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<div class="container">
    <div class="row">

        <legend id=specs>ORDER DETAILS</legend>
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>QUANTITY</th>
                        <th class="text-center">PRICE</th>
                        <th class="text-center">TOTAL</th>

                    </tr>
                    <?php
$ses_id = session_id();
$sql = "select * from product p , temp_card t where p.pro_id=t.pro_id and ses_id='$ses_id'";

$result = mysqli_query($conn, $sql);

while ($S = mysqli_fetch_assoc($result)):
    $total = $S["quantity"] * $S["price"];
    $pro_id = $S["pro_id"];
    ?>
	    <tr>
	      <td class="col-sm-8 col-md-8">
				<div class="media">
				  <a class="thumbnail pull-left" > <img class="media-object" id="odpicimg" src="../images/<?php echo $S['image'] ?> " style="width:100px; height: 100px;"> </a>
				     <div class="media-body">
						 <h4 class="media-heading"><?php echo $S["name"]; ?></h4>
						    <span style="font-family:initial;">Available Quantity:<?php echo $S["stock"]; ?> </span><br>
						      <span style="font-family:initial;">Status: </span><span class="text-success">
	                 <strong>
	                <?php
    if ($S["stock"] > 0) {
        echo "Available";
    } else {
        echo "Not Available";
    }

    ?>
	                </strong>
	                        </span>
	                         <br>
		         </div>
	       </div>
			</td>
			<td class="col-sm-2" style="text-align: center">
			<form action="update_quantity.php" method="POST">
             <?php $ses_id = session_id();?>

	        	<input type="hidden" class="form-control" name="stock" value="<?php echo $S["stock"]; ?>">
                <input type="hidden" class="form-control" name="pro_id" value="<?php echo $S["pro_id"]; ?>">
			<input type="number" class="form-control" name="quantity" value="<?php echo $S["quantity"]; ?>">
	        <button type="submit" class="btn btn-primary btn-sm"  name="update" value ="<?php echo $pro_id; ?>">UPDATE</button>

		  </td>
			    <td class="col-sm-2  text-center"><strong><?php echo $S["price"]; ?></strong></td>
			     <td class="col-sm-1  text-center"><strong><?php echo $total; ?></strong></td>
				 <td class="col-sm-1 ">
				<button type="button" class="btn btn-danger" onclick="document.location.href='remove_cart.php?pro_id='+ <?php echo $pro_id; ?>">
				 <span class="glyphicon glyphicon-remove"></span> Remove
				</button>
		</td>
	    </form>

	</tr>

	 <?php $subtotal += $total;?>
		<?php endwhile;?>

                    <tr >
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><h4>SUBTOTAL</h4></td>
                        <td class="text-right"><h5><strong>BDT <?php echo $subtotal; ?></strong></h5></td>
                    </tr>
                    <tr >
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><h4>SHIPPING COST</h4></td>
                        <td class="text-right"><h5><strong>BDT 10</strong></h5></td>
                    </tr>

                    <tr >
                        <td></td>
                        <td></td>
                        <td></td>
                        <td ><h4 >TOTAL</h4></td>
                        <td class="text-right"><h3><strong>BDT <?php echo $subtotal + 10; ?></strong></h3></td>
                    </tr>

                    <tr>
                    <td></td><td></td>
                        <td>
                            <button type="button" class="btn btn-default" onClick="document.location.href='../index.php'">
                                <span class="glyphicon glyphicon-shopping-cart" ></span> Continue Shopping
                            </button>
                        </td>
                       <td></td>

                        <td>
                            <button type="button" class="btn btn-success" onClick="document.location.href='../Login/login_form.php?'">
                                CHECKOUT <span class="glyphicon glyphicon-play"></span>
                            </button>
                        </td>
                        <td></td>
                    </tr>
                </thead>

            </table>
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
</body>
</html>