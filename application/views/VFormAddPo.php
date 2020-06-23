<form action="<?php echo site_url('Welcome/AddDataPo'); ?>" method="post">


          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data PO</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
<div class="form-group">
<label class="col-sm-2 control-label">No Nota</label>
<div class="col-sm-10">
<input type="text" name="nota" class="form-control" placeholder="No Nota">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Nama</label>
<div class="col-sm-10">
<input type="text" name="nama" class="form-control" placeholder="Nama">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Tanggal</label>
<div class="col-sm-10">
<input type="text" name="tanggal" class="form-control" placeholder="Tanggal">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Motif</label>
<div class="col-sm-10">
<input type="text" name="motif" class="form-control" placeholder="Motif">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Warna</label>
<div class="col-sm-10">
<input type="text" name="warna" class="form-control" placeholder="Warna">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Quantity</label>
<div class="col-sm-10">
<input type="text" name="quantity" class="form-control" placeholder="Quantity">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Jumlah Total</label>
<div class="col-sm-10">
<input type="text" name="jumlah_total" class="form-control" placeholder="jumlah Total">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Jumlah DP Pembeli</label>
<div class="col-sm-10">
<input type="text" name="jumlah_dp" class="form-control" placeholder="Jumlah DP Pembeli">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Sisa Pembayaran</label>
<div class="col-sm-10">
<input type="text" name="sisa_pembayaran" class="form-control" placeholder="Sisa Pembayaran">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Pengkrajin</label>
<div class="col-sm-10">
<input type="text" name="pengkrajin" class="form-control" placeholder="Pengkrajin">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Jumlah DP ke Pengkrajin</label>
<div class="col-sm-10">
<input type="text" name="dp_pengkrajin" class="form-control" placeholder="Jumlah DP ke Pengkrajin">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Status</label>
<div class="col-sm-10">
<input type="text" name="status" class="form-control" placeholder="Status">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Keterangan</label>
<div class="col-sm-10">
<input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
</div></div>

</div>
              <div class="box-footer">
                <button type="submit" name="btn_simpan" class="btn btn-info pull-right">Simpan</button>
              </div>
</form>
</div></form>
