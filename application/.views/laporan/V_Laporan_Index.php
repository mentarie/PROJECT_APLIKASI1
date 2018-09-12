<section class="content-header">
	<h1>
		Laporan
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('daftar_jurnal');?>"><i class="fa fa-dashboard"></i>Laporan</a></li>
		<li class="active">Bab III</li>
	</ol>
</section>
<!-- /.content -->	
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Laporan Bab 3</h3>
<!-- 					<a style="float:right;margin-right:1%;margin-top:-0.5%;" alt="Add New" title="Add New" href="<?php echo base_url('daftar_jurnal/create');?>">
						<button type="button" class="btn btn-default btn-sm" ><i class="fa fa-plus fa-2x"></i></button>
					</a> -->
				</div>
				<div class="box-body">
					<form method="post" action="<?php echo base_url('laporan_bab3_modification');?>">				
						<div class="panel-body">
								<?php
									if(empty($bab3))
									{
										$bab3_id 	=	str_replace(array('+','/','='), array('-','_','~'), $this->encryption->encrypt('-'));
								?>
								<textarea name="txaRincianBab3" id="Prakerin-textareaLaporan" required="" >
								</textarea>
								<script type="text/javascript">
									CKEDITOR.replace('Prakerin-textareaLaporan');
									CKEDITOR.editorConfig = function( config ) {
										config.toolbarGroups = [
											{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
											{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
											{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
											{ name: 'forms', groups: [ 'forms' ] },
											'/',
											{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
											{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
											{ name: 'links', groups: [ 'links' ] },
											{ name: 'insert', groups: [ 'insert' ] },
											'/',
											{ name: 'styles', groups: [ 'styles' ] },
											{ name: 'colors', groups: [ 'colors' ] },
											{ name: 'tools', groups: [ 'tools' ] },
											{ name: 'others', groups: [ 'others' ] },
											{ name: 'about', groups: [ 'about' ] }
										];

										config.removeButtons = 'Save,NewPage';
									};									
								</script>
								<input type="text" class="hidden form-control" name="idBab3" value="<?php echo $bab3_id;?>" />
								<?php
									}
									else
									{
										foreach ($bab3 as $Bab3) 
										{
											$bab3_id 	=	str_replace(array('+','/','='), array('-','_','~'), $this->encryption->encrypt($Bab3['bab3_id']));
								?>
								<textarea name="txaRincianBab3" id="Prakerin-textareaLaporan" required="" >
									<?php echo $Bab3['bab3_detail'];?>
								</textarea>
								<script type="text/javascript">
									CKEDITOR.replace('Prakerin-textareaLaporan');
									CKEDITOR.editorConfig = function( config ) {
										config.toolbarGroups = [
											{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
											{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
											{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
											{ name: 'forms', groups: [ 'forms' ] },
											'/',
											{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
											{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
											{ name: 'links', groups: [ 'links' ] },
											{ name: 'insert', groups: [ 'insert' ] },
											'/',
											{ name: 'styles', groups: [ 'styles' ] },
											{ name: 'colors', groups: [ 'colors' ] },
											{ name: 'tools', groups: [ 'tools' ] },
											{ name: 'others', groups: [ 'others' ] },
											{ name: 'about', groups: [ 'about' ] }
										];

										config.removeButtons = 'Save,NewPage';
									};									
								</script>
								<input type="text" class="hidden form-control" name="idBab3" value="<?php echo $bab3_id;?>" />
								<?php
										}							
									}
								?>
							
						</div>
						<div class="panel-footer">
							<div class="row text-right">
								<button type="submit" class="btn btn-primary btn-lg btn-rect">Simpan</button>
							</div>
						</div>
					</form>				
	    		</div>
	    	</div>
	    </div>
	</div>
<!-- 	<div id="hapusJurnal" class="modal fade modal-danger" role="dialog">
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
   	</div>	 -->
</section>