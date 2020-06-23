<form action="<?php echo site_url('Welcome/UpdateDataPo'); ?>" method="post">


          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update Data PO</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">


<div class="form-group">
<label class="col-sm-2 control-label">Nama</label>
<div class="col-sm-10">
<input type="hidden" name="nota" class="form-control" value="<?php echo $detail['nota']; ?>">
<input type="text" name="nama" class="form-control" value="<?php echo $detail['nama']; ?>">
</div></div>


<div class="form-group">
<label class="col-sm-2 control-label">Tanggal</label>
<div class="col-sm-10">
<input type="text" name="tanggal" class="form-control" value="<?php echo $detail['tanggal']; ?>">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Motif</label>
<div class="col-sm-10">
<input type="text" name="motif" class="form-control" value="<?php echo $detail['motif']; ?>">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Warna</label>
<div class="col-sm-10">
<input type="text" name="warna" class="form-control" value="<?php echo $detail['warna']; ?>">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Quantity</label>
<div class="col-sm-10">
<input type="text" name="quantity" class="form-control" value="<?php echo $detail['quantity']; ?>">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Jumlah Total</label>
<div class="col-sm-10">
<input type="text" name="jumlah_total" class="form-control" value="<?php echo $detail['jumlah_total']; ?>">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Jumlah DP Pembeli</label>
<div class="col-sm-10">
<input type="text" name="jumlah_dp" class="form-control" value="<?php echo $detail['jumlah_dp']; ?>">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Sisa Pembayaran</label>
<div class="col-sm-10">
<input type="text" name="sisa_pembayaran" class="form-control" value="<?php echo $detail['sisa_pembayaran']; ?>">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Pengkrajin</label>
<div class="col-sm-10">
<input type="text" name="pengkrajin" class="form-control" value="<?php echo $detail['pengkrajin']; ?>">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Jumlah DP ke Pengkrajin</label>
<div class="col-sm-10">
<input type="text" name="dp_pengkrajin" class="form-control" value="<?php echo $detail['dp_pengkrajin']; ?>">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Status</label>
<div class="col-sm-10">
<input type="text" name="status" class="form-control" value="<?php echo $detail['status']; ?>">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Keterangan</label>
<div class="col-sm-10">
<input type="text" name="keterangan" class="form-control" value="<?php echo $detail['keterangan']; ?>">
</div></div>

</div>

 <div class="box-footer">
                <button type="submit" name="btn_simpan" class="btn btn-info pull-right">Simpan</button>
              </div>
          </form></div></form>