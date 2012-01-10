<h1>
	Produkte
	<?php 
    	echo $this->Html->link(
    				$this->Html->image("/WebShop/img/add_product.png", array('width' => '32px')), 
    				array('action' => 'create', $contentID),
    				array('escape' => False)
    	);
    ?>
</h1>

<table>
	<tr>
		<th>Name</th>
		<th>Preis</th>
		<th></th>
		<th></th>
	</tr>
	<?php foreach ($products as $product): ?>
	    <tr>
		    <td>
		    	<?php echo $product['Products']['name']; ?>
		    </td>
		    <td>
		    	<?php echo $product['Products']['price']; ?>
		    </td>
		    <td>
		    	<?php 
		    		echo $this->Html->link(
		    					$this->Html->image("/WebShop/img/edit.png", array('width' => '32px')), 
		    					array('action' => 'edit', $contentID, $product['Products']['id']),
		    					array('escape' => False)
		    		);
		    	?>
		    </td>
		    <td>
		    	<?php 
		    		echo $this->Html->link(
		    					$this->Html->image("/WebShop/img/remove.png", array('width' => '32px')), 
		    					array('action' => 'remove', $contentID, $product['Products']['id']),
		    					array('escape' => False)
		    		);
		    	?>
		    </td>
	    </tr>
	<?php endforeach; ?>
</table>