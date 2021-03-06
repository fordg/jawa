<div class="main-content">
	<div class="breadcrumbs" id="breadcrumbs">
		<script type="text/javascript">
			try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
		</script>

		<ul class="breadcrumb">
			<li>
				<i class="icon-home home-icon"></i>
				<a href="#">Home</a>
			</li>
			<li class="active">Dashboard</li>
		</ul><!-- .breadcrumb -->
	</div>

	<div class="page-content">
		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 widget-container-span">
						<div class="widget-box light-border">
							<div class="widget-header header-color-dark">
								<h5 class="smaller">Daftar Properti Baru</h5>
							</div>

							<div class="widget-body">
								<div class="widget-main padding-6">
									<table id="properti" class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
										<thead>
											<tr>
												<th class="center">
													<label class="pos-rel">
														<input type="checkbox" class="ace" />
														<span class="lbl"></span>
													</label>
												</th>
												<th class="hidden-480">Jenis Properti</th>
												<th class="hidden-480">Nama Properti</th>
												<th class="hidden-480">Alamat Properti</th>
												<th class="hidden-480">Deskripsi</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<?php foreach($properti_baru as $row){ ?>
												<td class="center">
													<label class="pos-rel">
														<input type="checkbox" class="ace" />
														<span class="lbl"></span>
													</label>
												</td>

												<td class="hidden-480"><?php echo $row['nama_subkat']; ?></td>
												<td class="hidden-480"><?php echo $row['nama']; ?></td>
												<td class="hidden-480"><?php echo $row['alamat']; ?></td>
												<td class="hidden-480"><?php echo $row['deskripsi']; ?></td>
												<td class="hidden-480"><?php echo $row['status']; ?></td>
												<td class="hidden-480">
													<?php if($row['verified'] == 1){ ?>
													<a href="<?php echo base_url('admin/c_properti/properti_unaprove/'.$row['idProperti']); ?>" class="btn btn-success btn-minier"><i class="icon-ok"></i>Terverifiksi</a>
													<?php }else{ ?>
													<a href="<?php echo base_url('admin/c_properti/properti_aprove/'.$row['idProperti']); ?>" class="btn btn-primary btn-minier"><i class="icon-exclamation-sign"></i>Belum di Verifikasi</a>
													<?php } ?>
												</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.row -->

				<!-- hit counter -->
			    <div class="row">
			        <div class="col-xs-12 col-sm-12 widget-container-span">
			        	<div class="widget-box light-border">
			        		<div class="widget-header header-color-dark">
								<h5 class="smaller">Daftar Pengunjung</h5>
							</div>

							<div class="widget-body">
								<div class="widget-main padding-6">
						            <table class="table table-striped table-hover">
						            <tr>
						                <th>Pengunjung</th>             
						                <th>Jumlah</th>            
						            </tr>
						            <tr>
						                <td>Pengunjung Hari ini</td>           
						                <td><?php echo $hari_ini['hari_ini']; ?></td>            
						            </tr>
						            <tr>
						                <td>Pengunjung Kemarin</td>             
						                <td><?php echo $kemarin['kemarin']; ?></td>            
						            </tr>  
						           	<tr>
						                <td>Total Pengunjung</td>             
						                <td><?php echo $total['total']; ?></td>            
						            </tr>
						            </table>
								</div><!-- /.widget-main padding-6 -->
							</div><!-- /.widget-body -->
			            </div><!-- /.widget-box light border -->
			        </div>
			    </div>
			    <!-- /.hit counter -->

				<div class="space-24"></div>
			</div><!-- /.col-xs-12 -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->
</div><!-- /.main-content -->

<script type="text/javascript">
	$(function() {
		var oTable1 = $('#properti').dataTable({
			"aoColumns": [
		    	{ "bSortable": false },
		      		null, null,null, null, null,
			  	{ "bSortable": false }
			] 
		});
		
		$('table th input:checkbox').on('click' , function(){
			var that = this;
			$(this).closest('table').find('tr > td:first-child input:checkbox')
			.each(function(){
				this.checked = that.checked;
				$(this).closest('tr').toggleClass('selected');
			});
				
		});
	
		$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
		function tooltip_placement(context, source) {
			var $source = $(source);
			var $parent = $source.closest('table')
			var off1 = $parent.offset();
			var w1 = $parent.width();
	
			var off2 = $source.offset();
			var w2 = $source.width();
	
			if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
			return 'left';
		}
	})
</script>