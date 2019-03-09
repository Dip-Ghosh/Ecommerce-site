<?php include ("database/connection.php"); ?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-12">
			<?php
			$data ="SELECT * FROM product";
			$show =mysqli_query($conn,$data);
			while($row = mysqli_fetch_assoc($show))
			{
			?>
			<div class="card" style="width:22rem;display:inline-block">
				<img class="card-img-top" src="images/<?php echo $row['image'] ?>" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-name">Product Name: <?php echo $row['name'] ?></h5>
					<p class="card-id">ProductId: <?php echo $row['pro_id'] ?></p>
					<p class="card-price">CatagoryId: <?php echo $row['cat_id'] ?></p>
					<p class="card-price">Price: <?php echo $row['price'] ?></p>
					<p class="num">Stock: <?php echo $row['stock'] ?></p>
					<p class="card-date">Created Date: <?php echo $row['created_date'] ?></p>

					<div class="row-md-4 justify">
						<button type="button" class="btn btn-warning"><a href="card_view.php">Add to cart</a></button>
						<button type="button" class="btn btn-primary">See More</button>
					</div>
					
				</div>

			</div>
			<?php }
			?>

		</div>



	</div>

</div>
