<?php
require "authentication.php";
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
$regular_price = $_POST['regular_price'];

$data = [
    'name' => $name,
    'regular_price' => $regular_price
];
$woocommerce->post('products', $data);
header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<title>Add Product</title>
</head>
<body>
<h3 class="h3">Ajouter Un Produit</h3>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="regular_price">Price</label>
                <input type="number" class="form-control" name="regular_price" placeholder="Price">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="ADD">
        </form>
</body>
</html>