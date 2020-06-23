<form action="<?php echo site_url('Welcome/UpdateDataMonitoring'); ?>" method="post">

 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update Data PO</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
<div class="form-group">
<label class="col-sm-2 control-label">Status 1</label>
<div class="col-sm-10">
<input type="hidden" name="no_po" class="form-control" value="<?php echo $detail['no_po']; ?>">
<input type="text" name="FU_1" class="form-control" value="<?php echo $detail['FU_1']; ?>">
</div></div>


<div class="form-group">
<label class="col-sm-2 control-label">Status 2</label>
<div class="col-sm-10">
<input type="text" name="FU_2" class="form-control" value="<?php echo $detail['FU_2']; ?>">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Status 3</label>
<div class="col-sm-10">
<input type="text" name="FU_3" class="form-control" value="<?php echo $detail['FU_3']; ?>">
</div></div>
	
	
</div>

 <div class="box-footer">
                <button type="submit" name="btn_simpan" class="btn btn-info pull-right">Simpan</button>
              </div>
          </form></div></form>