<section class="content-header">
	<h1>
		Jurnal
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('daftar_jurnal');?>"><i class="fa fa-dashboard"></i>Jurnal</a></li>
		<li class="active">Daftar Jurnal</li>
	</ol>
</section>
<!-- /.content -->	
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Daftar Jurnal</h3>
					<a style="float:right;margin-right:1%;margin-top:-0.5%;" alt="Add New" title="Add New" href="<?php echo base_url('daftar_jurnal/create');?>">
						<button type="button" class="btn btn-default btn-sm" ><i class="fa fa-plus fa-2x"></i></button>
					</a>
				</div>
				<div class="box-body">
					<table class="table table-bordered table-hover" id="jurnal-Daftar">
						<thead>
							<tr>
								<th style="text-align: center; vertical-align: middle">No.</th>
								<th style="text-align: center; vertical-align: middle">Tanggal</th>
								<th style="text-align: center; vertical-align: middle">Rincian</th>
								<th style="text-align: center; vertical-align: middle">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no = 1;
								foreach ($daftarJurnal as $jurnal) 
								{
									$idJurnal 	= 	str_replace(array('+','/','='), array('-','_','~'), $this->encryption->encrypt($jurnal['id_jurnal']));
							?>
							<tr>
								<td style="text-align: center; vertical-align: middle;"><?php echo $no;?></td>
								<td style="white-space: nowrap; text-align: center; vertical-align: middle;"><a href="<?php echo base_url('daftar_jurnal/read'.'/'.$idJurnal);?>"><?php echo $jurnal['tanggal_jurnal'];?></a></td>
								<td style="vertical-align: middle;">
									<?php echo $jurnal['jurnal_detail'];?>
								</td>
								<td style="white-space: nowrap; text-align: center; vertical-align: middle;">
									<a type="button" class="btn btn-warning btn-sm" href="<?php echo base_url('daftar_jurnal/update'.'/'.$idJurnal);?>" >
										Update
									</a>
									<a type="button" class="btn btn-danger btn-sm" onclick="hapusJurnal('<?php echo $idJurnal;?>', '<?php echo date('d-m-Y' , strtotime($jurnal['tanggal_jurnal']));?>')">
										Hapus
									</a>
								</td>
							</tr>
	    				</tbody>
							<?php
									$no++;
								}
							?>
	    			</table>
	    		</div>
	    	</div>
	    </div>
	</div>
	<div id="hapusJurnal" class="modal fade modal-danger" role="dialog">
	    <div class="modal-dialog">
	    	<div class="modal-content">
	    		<form method="post" action="<?php echo base_url('daftar_jurnal/delete');?>">
	    			<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					    <h4 class="modal-title">Hapus Jurnal</h4>
	    			</div>
	    			<div class="modal-body">
	    				<h5>
	    					Apakah Anda ingin menghapus jurnal untuk <span id="txtTanggalJurnalHapus"></span>?
	    				</h5>	 	    			
	    				<strong>
	    					<h4>
	    						<center>
	    							<input class="form-control hidden" type="text" name="txtIDJurnalHapus" value="" >
	    						</center>
	    					</h4>
	    				</strong>  									
    				</div>
    				<div class="modal-footer">
    					<button type="submit" class="btn btn-danger">Hapus</button>
    				</div>
    			</form>
    		</div>
    	</div>
   	</div>	
</section>