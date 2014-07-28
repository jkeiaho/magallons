		<div class="main clearfix">
			<h1>Add Product</h1>
			
			
				<div class="product_detail">

					<?=Form::open_upload()?>
					
					<div class="edit_row">
						<?=Form::label('name', 'Product Name:')?><br>
						<?=Form::text('name')?><br>
					</div>	

					<div class="edit_row">	
						

						<?=Form::label('file', 'Upload Image:')?><br>
						<?=Form::file()?>
					</div>	

					<div class="edit_row">	
						<?=Form::label('description', 'Product Description:')?><br>
						<?=Form::textarea('description')?>
						<br>
					</div>	

					<div class="edit_row">	
						<?=Form::label('price', 'Product Price:')?>
						<?=Form::number('price')?><br>
					</div>	

					<!-- <div class="edit_row">	
						<?=Form::label('category_id', 'Category:')?> 
						<?=Form::number('category_id')?> <br>
					</div>	 -->

					<div class="edit_row">	
						<?=Form::label('category_id', 'Category:')?> 
						<?=Form::select('category_id', $categories)?>
					</div>

						
					<div class="edit_row">		
						<?=Form::submit('Add Product')?><br>
					</div>

					

					<?=Form::close()?>
					
				</div>	
		</div>



		