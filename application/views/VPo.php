<div class="box box-info">
            <div class="box-header with-border">
              <h2 class="box-title">Data PO</h2>
            </div>
    

<table class="table">

			<div class="navbar-form">
				<a href="<?php echo site_url('Welcome/VFormAddPo'); ?>"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>  Tambah Data PO</button></a>
			 
		</div>

	<tr>
		<th>No Nota</th>
		<th>Nama</th>
		<th>Tanggal</th>
		<th>Motif</th>
		<th>Warna</th>
		<th>Quantity</th>
		<th>Jumlah Total</th>
		<th>Jumlah DP Pembeli</th>
		<th>Sisa Pembayaran</th>
		<th>Pengkrajin</th>
		<th>Jumlah DP ke Pengkrajin</th>
		<th>Status</th>
		<th>Keterangan</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataPo))
	{
		foreach($DataPo as $ReadDS)
		{
	?>

	<tr>
 		<td><?php echo $ReadDS->nota; ?></td>
    
		<td><?php echo $ReadDS->nama; ?></td>
		<td><?php echo $ReadDS->tanggal; ?></td>
		<td><?php echo $ReadDS->motif; ?></td>
		<td><?php echo $ReadDS->warna; ?></td>
		<td><?php echo $ReadDS->quantity; ?></td>
		<td><?php echo $ReadDS->jumlah_total; ?></td>
		<td><?php echo $ReadDS->jumlah_dp; ?></td>
		<td><?php echo $ReadDS->sisa_pembayaran; ?></td>
		<td><?php echo $ReadDS->pengkrajin; ?></td>
		<td><?php echo $ReadDS->dp_pengkrajin; ?></td>
		<td><?php echo $ReadDS->status; ?></td>
		<td><?php echo $ReadDS->keterangan; ?></td>

		<td>
			<a href="<?php echo site_url('Welcome/DataPo/'.$ReadDS->nota.'/view') ?>"><button type="button" class="btn btn-success">Update</button></a>
			<a href="<?php echo site_url('Welcome/DeleteDataPo/'.$ReadDS->nota) ?>"><button type="button" class="btn btn-danger">Delete</button></a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>