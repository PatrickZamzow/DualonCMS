<!-- Frame to integrate the elements -->
<?php 
	//CALL stylesheet
	echo $this->Html->css('webshop/webshop');
?>

<div id="webshop_content">
	<?php echo $this->element($data['Element'], array('data' => $data['data']) ); ?>
</div>