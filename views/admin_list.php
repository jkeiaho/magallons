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
			<p>Please choose a product to edit.</p>
			<div class="product-cat">
				<ul>
					<li><a href="admin_products.php">All Products</a></li>
					<li><a href="admin_products.php?id=1">Chocolates</a></li>
					<li><a href="admin_products.php?id=2">Boxes</a></li>
					<li><a href="admin_products.php?id=3">Sauces &amp; Liqueurs</a></li>
				</ul>
			</div>


			<? foreach($products->items as $product): ?>

				<div class="product">
					<div class="product-name">
						<h2><?=$product['name']?></h2>
					</div>
					<a href="admin_edit.php?id=<?=$product['id']?>"><img src="<?=$product['image']?>" alt="<?=$product['name']?>"></a>
					
					<p>Price: $<?=$product['price']?></p>

					<a href="admin_edit.php?id=<?=$product['id']?>"><b>EDIT PRODUCT</b></a>
			
				</div>

			<? endforeach; ?>
			
			<!-- end of clearfix-->
			<div> 	<!--pagination-->
				<ul class="pagination-links">
					<?php for($i = 1; $i <= ceil($products->count() / 6); $i++): ?>
						<li class="<? if($i == $_GET['page']) echo 'current'?>"><a href="admin_products.php?id=<?=$_GET['id']?>&page=<?=$i?>"><?=$i?></a></li>
					<?php endfor; ?>
				</ul>
			</div>


		</div>

		