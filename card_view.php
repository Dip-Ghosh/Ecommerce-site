<!DOCTYPE html>
<html lang="en">

	<head>
		<?php include('layouts/header.php'); ?>

	</head>

	<body>

		<?php include('layouts/nav.php'); ?>

		<div class="container">
			<div class="row offset-md-4">
				<div class="col-md-6">

					<div class="card md-6 shadow-sm">
						<div class="card-header">
							<h4 class="my-0 font-weight-normal">Product 3</h4>
						</div>
						<div class="card-body">
							<img src="/images/<?php echo $row['image'] ?>" alt="image1">
							<h1 class="card-title pricing-card-title" id="price">$15 <small class="text-muted">/ mo</small></h1>
							<ul class="list-unstyled mt-3 mb-4">
								<li>Good Sleep</li>
							</ul>
								<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
										<form  class="float-left">
											<div class="form-group">
												<label for="exampleInputQuantity">Quantity</label>
												<input type="number" class="form-control" id="exampleQuantity" placeholder="quantity">
											</div>
											<div class="form-group">
												<label for="exampleInputprice">Price</label>
												<input type="number" class="form-control" id="exampleprice" placeholder="price">
											</div>
										</form>
									</div>	
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<button type="button" class="btn btn-lg btn-block btn-warning"><a href="card_view.php">Add Cart</a></button>									
									</div>
									<div class="col-md-6">
										<button type="button" class="btn btn-lg btn-block btn-warning">Buy Now</button>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		
		
	</body>
	

</html>