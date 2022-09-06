<?php
session_start();

require 'Config.php';
?>

<html>

<head>
	<title>Test SMK ICUBE by SIRCLO</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>

<body>
	<form action="index.php" method="POST">
		<img src="img/ICUBEbySIRCLO.jpg" alt="icube" width=200 />
		<label for="product_name">Product Name</label>
		<input type="text" name="product_name" value="" />
		<label for="customer_group">Customer Group</label>
		<input type="radio" name="cg_id" value="1" /> Retail
		<input type="radio" name="cg_id" value="2" /> Wholesale
		<label for="price">Price</label>
		<input type="number" name="price" value="" />
		<button type="submit" name="submit" value="submit">Save</button>
	</form>
	<table>
		<thead>
			<tr>
				<th>Product Name</th>
				<th>Customer Group</th>
				<th>Price</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="product-name">Mouse</td>
				<td class="customer-group">Retail</td>
				<td class="price">$10</td>
				<td class="edit"><button class="edit" name="edit[]">Edit</button></td>
			</tr>
		</tbody>
	</table>

</body>

</html>