		<div class="main clearfix">
			
			<h1>Customer Orders</h1>
				
				<div class="customer-orders">
					<table>
						<tr>
							<th width="50">Order ID:</th>
							<th width="100">Order Date:</th>
							<th width="150">Customer Name:</th>
							<th width="200">Customer Email:</th>
							<th width="300">Products:</th>
						</tr>
						<tr>
							<td>Example</td>
							<td>Example</td>
							<td>Example</td>
							<td>Example</td>
							<td>Example</td>
						</tr>
						
						<?php if(count($orders)): ?>
							<?php foreach($orders as $order): ?>
								<tr>
									<td><?=$order['id']?></td>
									<td><?=$order['date']?></td>
									<td><?=$order['name']?></td>
									<td><?=$order['email']?></td>
									<td>
										<ul>
											<?php foreach($product): ?>
												<li><?=$product['name']?>(<?=$order['quantity']?>)</li>
											<?php endforeach ?>
										</ul>
									</td>
								</tr>
							<?php endforeach ?>
						
						<?php else: ?>
							<tr>
								<td colspan="5">There are currently no orders.</td>
							</tr>
						<?php endif; ?>

					</table>
				</div>

			


		</div>