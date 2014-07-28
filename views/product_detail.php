		<div class="main clearfix">
			<h1>Products</h1>
			
			<div class="product_detail">
				<h2><?=$product->name?></h2>
				<img src="<?=$product->image?>" alt="">
				<p><?=$product->description?></p><br>
				<p>Price: $<?=$product->price?></p>
				
				<a href="javascript:javascript:history.go(-1)">BACK...</a>
			</div>	
		</div>