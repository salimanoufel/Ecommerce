<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Woocomerce Projet</title>
	<link rel="icon" href="../../favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php  
		$orders = file_get_contents('http://localhost/WordpressProject/orders.php');
		$orders = json_decode($orders, true);
		$customers = file_get_contents('http://localhost/WordpressProject/customers.php');
		$customers = json_decode($customers, true);
		$products = file_get_contents('http://localhost/WordpressProject/products.php');
		$products = json_decode($products, true);
		
	
	?>
	

<div class="container">
<h2 class="sub-header">Customers List</h2>
		<div class="table-responsive">
			<table class='table table-striped table-bordered'>
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Email</th>
						<th>Actions</th>
						
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ( $customers as $customer ) { 
						echo "<tr><td>" . $customer["id"]."</td>
                                        <td>" . $customer['first_name']." ".$customer['last_name']."</td>
                                        <td>" . $customer["email"]."</td>
                                        <td><a class='btn btn-primary' href='EditCustomer.php?id=".$customer['id']."'>Update</a>
                                        <a class='btn btn-danger' onclick=\"myFunction()\" href='DeleteCustomer.php?id=".$customer['id']."'>Delete</a></td></tr>";
					 $i++; 
					 } ?>
				</tbody>
			</table>
			<a class="btn btn-success" href="AddCustomer.php">Add Customer</a>
		</div>
	</div>


	
<div class="container">
<h2 class="sub-header">Orders List</h2>
		<div class="table-responsive">
			<table class='table table-striped table-bordered'>
				<thead>
					<tr>
						<th>No</th>
						<th>Order</th>
						<th>Date</th>
						<th>Status</th>
						<th>Total</th>
						<th>Actions</th>
					
					</tr>
				</thead>
				<tbody>
				<?php
                                foreach($orders as $order){
                                    echo "<tr><td>" . $order["id"]."</td>
                                        <td>" . $order['billing']['first_name']." ".$order['billing']['last_name']."</td>
										<td>" . $order["date_created"]."</td>
                                        <td>" . $order["status"]."</td>
										<td>" . $order["total"]."</td>
                                
                                       
                                        
                                        <td><a class='btn btn-primary' href='EditOrder.php?id=".$order['id']."'>Update</a></button>
                                        <a class='btn btn-danger'onclick=\"myFunction()\" href='deleteOrder.php?id=".$order['id']."'>Delete</a></td></tr>";
                                }
                            ?>
				</tbody>
			</table>
			<a class="btn btn-success" href="AddOrder.php">Add Order</a>
		</div>
	</div>
	<div class="container">
                                    <h2 class="sub-header">Products List</h2>
            <div class='table-responsive'>
                <table id='myTable' class='table table-striped table-bordered'>
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Total Sales</th>
                            <th>Picture</th>
                            <th>Actions</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                foreach($products as $product){
                                    echo "<tr><td>" . $product["id"]."</td>
                                        <td>" . $product["name"]."</td>
                                        <td>" . $product["status"]."</td>
                                        <td>" . $product["price"]."</td>
                                        <td>" . $product["total_sales"]."</td>
                                        <td><img height='50px' width='50px' src='".$product["images"][0]["src"]."' ></td>
                                        <td><a class='btn btn-primary' href='EditProduct.php?id=".$product['id']."'>Update</a>
                                        <a class='btn btn-danger' onclick=\"myFunction()\"  href='delete.php?id=".$product['id']."'>Delete</a></td></tr>";
                                }
                            ?>
                    </tbody>
                </table>
				<a class="btn btn-success" href="AddProduct.php">Add Product</a>
							</div>
							</div>
               
                <script>
function myFunction() {
  confirm("do you want delete this item?");
}
</script>
</body>
</html>