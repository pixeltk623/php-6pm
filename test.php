<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

		for ($i=0; $i < 5; $i++) { 
			?>

			<input type="number" value="1" name="" id="add_<?php echo $i; ?>" >

			<button onclick="plusItem(<?php echo $i ?>)">+</button>

			<button onclick="addToCart(<?php echo $i ?>)">Add To Cart</button>

			<?php
		}

	?>

	<script type="text/javascript">

		var cart = [];

		function plusItem(id) {
			var qty = document.getElementById('add_'+id).value;

			qty++;

			document.getElementById('add_'+id).value = qty;
		}
		function addToCart(pid) {
			var qtyvalue = document.getElementById('add_'+pid).value;

			if (cart.length>=1) {
				console.log(cart[0].qty++);
				console.log(cart['qty']);
			}

			

			//cart[pid]['qty']++;

			if (cart[pid]) {

			} else {
				cart.push({'id':pid, 'qty': qtyvalue});
			}
			//console.log(cart);
		}
	</script>
</body>
</html>