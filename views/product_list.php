		<!-- <div class="product-side">
			<form action="">
				
				<input type="radio" name="category" value="all products">All Products <br>
				<input type="radio" name="category" value="chocolates">Chocolates <br>
				<input type="radio" name="category" value="boxes">Boxes <br>
				<input type="radio" name="category" value="sauces and liqueurs">Sauces &amp; Liqueurs <br>
				
			</form>
		</div> -->

		<div class="main clearfix">
			<h1>Products</h1>
			<p>We have a wide range of assortments, flavours and tastes to suit your needs. Whether is be a gift or for your own pleasure, have a look at our range and and have the option to order one of our box assortments or customize your own assortment. </p>

			<div class="product-cat">
				<ul>
					<li><a href="products.php">All Products</a></li>
					<li><a href="products.php?id=1">Chocolates</a></li>
					<li><a href="products.php?id=2">Boxes</a></li>
					<li><a href="products.php?id=3">Sauces &amp; Liqueurs</a></li>
				</ul>
			</div>


			<? foreach($products->items as $product): ?>

				<div class="product">
					<div class="product-name">
						<h2><?=$product['name']?></h2>
					</div>
					<a href="view_product.php?id=<?=$product['id']?>"><img src="<?=$product['image']?>" alt="<?=$product['name']?>"></a>
					<a href="view_product.php?id=<?=$product['id']?>">View more details...</a>
					<p>Price: $<?=$product['price']?></p>
			
					<?=Form::open('add_to_cart.php')?>
						<?=Form::hidden('id', $product['id'])?>
						<?=Form::label('quantity', 'Quantity:')?>
						<?=Form::number('quantity', '1', 'min="1"')?><br><br>
						<?=Form::submit('Order')?>
					<?=Form::close()?>
				</div>

			<? endforeach; ?>
			
			<!-- end of clearfix-->
			<div> 	<!--pagination-->
				<ul class="pagination-links">
					<?php for($i = 1; $i <= ceil($products->count() / 6); $i++): ?>
						<li class="<? if($i == $_GET['page']) echo 'current'?>"><a href="products.php?id=<?=$_GET['id']?>&page=<?=$i?>"><?=$i?></a></li>
					<?php endfor; ?>
				</ul>
			</div>


		</div>

		