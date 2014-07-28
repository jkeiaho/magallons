		<div class="main clearfix">
			<h1>Edit Product</h1>
			
			
				<div class="product_detail">

					<?=Form::open_upload()?>

					<?=Form::hidden('id', $product->id)?>
					
					<div class="edit_row">
						<?=Form::label('name', 'Product Name:')?><br>
						<?=Form::text('name', $product->name)?><br>
					</div>	

					<img src="<?=$product->image?>" alt="">

					<div class="edit_row">	
						<?=Form::label('file', 'Upload Image:')?><br>
						<?=Form::file()?>
					</div>	

					<div class="edit_row">	
						<?=Form::label('description', 'Product Description:')?><br>
						<?=Form::textarea('description', $product->description)?>
						<br>
					</div>	

					<div class="edit_row">	
						<?=Form::label('price', 'Product Price:')?>
						<?=Form::number('price', $product->price)?><br>
					</div>	

					<!-- <div class="edit_row">	
						<?=Form::label('category_id', 'Category:')?> 
						<?=Form::select('category_id', $categories)?>
					</div> -->

						
					<div class="edit_row">		
						<?=Form::submit('Edit Product')?><br>
					</div>

					<div class="edit_row">
						<? if($_GET['id']): ?>
							<a href="delete_product.php?id=<?=$product->id?>">
								<b>DELETE PRODUCT</b>
							</a>
						<? endif; ?>
					</div>

					<?=Form::close()?>
					
					<a href="javascript:javascript:history.go(-1)">BACK...</a>
				</div>	
		</div>



		