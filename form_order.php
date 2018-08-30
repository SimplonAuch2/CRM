<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>form_order</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

		<!-- liste champs table orders bdd :

		order_id : auto_increment
		order_products : varchar
		order_quantity : int
		order_price : money
		order_reduction : int
		order_postal_charges : money
		order_totalprice : money
		order_taxes : money
		order_delivery_adresse : varchar
		order_billing_adresse : varchar
		order_date : date
		order_state : varchar
		order_delivery_date : date -->

<h2>Form orders</h2>

<form action="" method="get" class="form_order">
	
	<div class="zone_order_products">
		<label for="order_products">products</label>
		<input type="text" name="order_products" id="order_products" required>
	</div>

	<div class="zone_order_quantity">
		<label for="order_quantity">quantity</label>
		<input type="int" name="order_quantity" id="order_quantity" required>
	</div>

	<div class="zone_order_price">
		<label for="order_price">price</label>
		<input type="money" name="order_price" id="order_price" required>
	</div>

	<div class="zone_order_reduction">
		<label for="order_reduction">reduction</label>
		<input type="int" name="order_reduction" id="order_reduction" required>
	</div>

	<div class="zone_order_postal_charges">
		<label for="order_postal_charges">postal charge</label>
		<input type="money" name="order_postal_charges" id="order_postal_charges" required>
	</div>

	<div class="zone_order_totalprice">
		<label for="order_totalprice">order_totalprice</label>
		<input type="money" name="order_totalprice" id="order_totalprice" required>
	</div>

	<div class="zone_order_taxes">
		<label for="order_taxes">order_taxes</label>
		<input type="money" name="order_taxes" id="order_taxes" required>
	</div>

	<div class="zone_order_delivery_adresse">
		<label for="order_delivery_adresse">delivery adresse</label>
		<input type="text" name="order_delivery_adresse" id="order_delivery_adresse" required>
	</div>

	<div class="zone_order_billing_adresse">
		<label for="order_billing_adresse">billing adresse</label>
		<input type="text" name="order_billing_adresse" id="order_billing_adresse" required>
	</div>

	<div class="zone_order_state">
		<label for="order_date">order tate</label>
		<input type="date" name="order_date" id="order_date" required>
	</div>

	<div class="zone_order_state">
		<label for="order_state">order state</label>
		<input type="text" name="order_state" id="order_state" required>
	</div>

	<div class="zone_order_delivery_date">
		<label for="order_delivery_date">delivery date</label>
		<input type="date" name="order_delivery_date" id="order_delivery_date" required>
	</div>

	<div class="zone_submit_order">
		<label for="submit_order"></label>
		<input type="submit" name="submit_order" id="submit_order" value="submit order">
	</div>

	<div class="zone_request a quote">
		<label for="request_a_quote"></label>
		<input type="submit" name="request_a_quote" id="request_a_quote" value="request a quote">
	</div>

</form>

</body>
</html>