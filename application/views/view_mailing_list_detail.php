<?php
  //views/mailling_list/view_mailing_list.php
  if($query->num_rows() > 0):
?>


<?php
	foreach($query->result() as $row) : ?>
	<p>
	<?= $row->userid?>
    </p><p>
	<?= $row->first_name?>
    </p><p>
    
	<?= $row->last_name?>
    </p><p>
	<?= $row->email?>
    </p><p>
	<?= $row->address?>
    </p><p>
	<?= $row->state_code?>
    </p><p>
	
<?= $row->zip_postal?>
    </p><p>
	<?= $row->bio?>
   
	
	</p>
  
<?php endforeach; ?>

<?php endif; ?>