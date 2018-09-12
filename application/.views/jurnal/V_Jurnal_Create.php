<section class="content-header">
	<h1>
		Jurnal
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-child"></i>Jurnal</a></li>
		<li><i class="fa fa-database"></i> Daftar Jurnal</li>
		<li class="active"><i class="fa fa-database"></i> Buat Jurnal</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<form method="post" action="<?php echo base_url('daftar_jurnal/create');?>" class="form-horizontal" enctype="multipart/form-data">			
					<div class="box-header with-border">
						<h3 class="box-title">Buat Jurnal</h3>
					</div>
					<div class="box-body">
						<div class="panel-body">
							<div class="form-group">
								<label for="txtTanggalJurnal">Tanggal Jurnal</label>
								<input type="text" class="form-control Prakerin-daterangepickersingledate" name="txtTanggalJurnal" value="<?php echo date('d-m-Y');?>" required="" />
								<small style="color: red;"><i>Pastikan tanggal jurnal yang dimasukkan belum ada data.</i></small>
							</div>
							<div class="form-group">
								<label for="txaRincianJurnal">Rincian</label>
								<textarea name="txaRincianJurnal" id="Prakerin-textareaJurnal" required="">
								</textarea>
								<script>
									CKEDITOR.replace('Prakerin-textareaJurnal');
								</script>
							</div>
						</div>
						<div class="panel-footer">
							<div class="row text-right">
								<a href="javascript:history.back(1)" class="btn btn-primary btn-lg btn-rect">Kembali</a>
									&nbsp;&nbsp;
								<button type="submit" class="btn btn-primary btn-lg btn-rect">Simpan</button>
							</div>							
						</div>
	    			</div>
	    		</form>
	    	</div>
	    </div>
	</div>
</section>