		<div class="main clearfix">
			
			<h1>Cart</h1>

			<?php if(count($cart_products)): ?>
			<?php foreach($cart_products as $product): ?>
				<div class="cart_list">
					<div class="cart_row">
						<a href="view_product.php?id=<?=$product['id']?>"><img src="<?=$product['image']?>" alt="<?=$product['name']?>"></a>
						<a href="view_product.php?id=<?=$product['id']?>">View more details...</a>
					</div>
					
					<div class="cart_row">
						<h2><?=$product['name']?></h2>
						<p>Quantity: 
							<?=Form::open('update_quantity.php')?>
							<?=Form::hidden('id', $product['id'])?>
							<?=Form::number('quantity', $product['quantity'], 'min="1"')?>
							<?=Form::submit('Save')?>
							<?=Form::close()?>
						</p>
						
					</div>
					
					<div class="cart_row">
						<p><u>Price: $<?=$product['price']?></u></p>
						<p><b><u>Total Price: $<?=$product['total_price']?></u></b></p><br>
						<a href="remove_from_cart.php?id=<?=$product['id']?>">REMOVE</a>
					</div>
				</div>

			<?php endforeach ?>
			<?php else: ?>
				<div class="cart_list"><p>There are no items in your cart.</p></div>

			<?php endif; ?>

			<h2 class="grand_total">Grand Total: $<?=$grand_total?></h2>

			<div class="checkout">
				<a href="checkout.php">CHECKOUT</a>
			</div>


		</div>