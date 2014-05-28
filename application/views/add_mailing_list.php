<?php
  //views/mailing_list/add_mailing_list.php
  //an add form to add an item to the table
  
  echo validation_errors();
	
  
?>

<?=form_open('mailing_list/insert');?>
<br/>
<p>


<?php
	$firstname = array(
		'name' => 'first_name',
		'id' => 'first_name',
	);
	
	echo form_label('First Name', 'first_name') . ": ";
	echo form_input($firstname);
echo "</p><p>";	
	$lastname = array(
		'name' => 'last_name',
		'id' => 'last_name',
	);
	
	echo form_label('Last Name', 'last_name') . ": ";
	echo form_input($lastname);
echo "</p><p>";		
	$email = array(
		'name' => 'email',
		'id' => 'email',
	);
	
	echo form_label('Email', 'email') . ": ";
	echo form_input($email);
echo "</p><p>";		
	$address = array(
		'name' => 'address',
		'id' => 'address',
	);
	
	echo form_label('Address', 'address') . ": ";
	echo form_input($address);

echo "</p><p>";		
	$num_tours1 = array(
		'name' => 'num_tours',
		'id' => 'num_tours',
		'value' => '0',
		'checked' => TRUE,

	);
	

echo "</p><p>";		
	$num_tours2 = array(
		'name' => 'num_tours',
		'id' => 'num_tours2',
		'value' => '1-3',
		'checked' => TRUE,

	);
	
	


echo "</p><p>";		
	$num_tours3 = array(
		'name' => 'num_tours',
		'id' => 'num_tours3',
		'value' => '4-6',
		'checked' => TRUE,

	);
	
	echo '<fieldset>';
	echo '<legend>Number of tours</legend>';	
	echo form_label('None', 'num_tours') . ": ";
	echo form_radio($num_tours1) . '<br/>';

	echo form_label('1-3', 'num_tours') . ": ";
	echo form_radio($num_tours2) . '<br/>';

	echo form_label('4-6', 'num_tours') . ": ";
	echo form_radio($num_tours3) . '<br/>';

	echo '</fieldset>';




?>
	

<?=form_close();?>