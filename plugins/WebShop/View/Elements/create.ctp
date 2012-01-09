<!-- Create new products for the catalog -->
<?php 
	//TITLE
	echo '<div id ="webshop_create">';
	echo '<h2>Artikel erstellen</h2>';
	
	//PRINT error/success messages
	$validationErrors = $this->Session->read('Validation.Product.validationErrors');
	//echo $this->Html->div('validation_error',$validationErrors);
	echo $this->Session->flash('Product');

	echo $this->Form->create('Product', array('enctype' => 'multipart/form-data')); ?>
	<table>
		<tr>
			<td>
			<?php
		    	echo $this->Form->label('Name:');
		    ?>
			</td>
			<td>
			<?php
				echo $this->Form->input('name', array('label' => false, 'div' => ''));
			?>
			</td>
		</tr>
		<tr>
		<td>
			<?php
		    	echo $this->Form->label('Beschreibung:');
		    ?>
			</td>
			<td>
			<?php
				echo $this->Form->input('description', array('rows' => '4', 'label' => false, 'div' => ''));
			?>
			</td>
		</tr>
		<tr>
			<td>
			<?php
		    	echo $this->Form->label('Preis:');
		    ?>
			</td>
			<td>
			<?php
				echo $this->Form->input('price', array('label' => false, 'div' => ''));
			?>
			</td>
		</tr>
		<tr>
			<td>
			<?php
		    	echo $this->Form->label('Bild:');
		    ?>
			</td>
			<td>
			<?php
				echo $this->Form->file('Product.submittedfile', array('label' => false, 'div' => ''));
			?>
			</td>
		</tr>
	</table>
<?php
	echo $this->Form->end('Speichern');
	
	echo '</div>';
 ?>