<div class="box box-info">
            <div class="box-header with-border">
              <h2 class="box-title">Data Monitoring</h2>
            </div>
    
<table class="table">

			<div class="navbar-form">
				<a href="<?php echo site_url('Welcome/VFormAddMonitoring'); ?>"><button type="button" class="btn btn-primary ">+ Tambah Data Monitoring</button></a>
		</div>
			
		</td>
	</tr>
	<tr>
		<th>No Nota</th>
		<th>Status 1</th>
		<th>Status 2</th>
		<th>Status 3</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataMonitoring))
	{
		foreach($DataMonitoring as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->no_po; ?></td>
		<td><?php echo $ReadDS->FU_1; ?></td>
		<td><?php echo $ReadDS->FU_2; ?></td>
		<td><?php echo $ReadDS->FU_3; ?></td>
		<td>


			<a href="<?php echo site_url('Welcome/DataMonitoring/'.$ReadDS->no_po.'/view') ?>"><button type="button" class="btn btn-success ">Update</button></a>
			<a href="<?php echo site_url('Welcome/DeleteDataMonitoring/'.$ReadDS->no_po) ?>"><button type="button" class="btn btn-danger">Delete</button></a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>



<?php
$t = date("d");

if ($t == 7 ) {
     alert();
     
} elseif ($t == 21) {
	 alert();
}
elseif ($t == 28) {
	 alert();
}


function alert(){
?>
<script>
alert('ingatkan pengkrajin');
</script>
<?php
} 
?>





