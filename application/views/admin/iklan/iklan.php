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
            <li class="active">Iklan</li>
        </ul><!-- .breadcrumb -->
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 widget-container-span">
                        <div class="table-header">
                            <div class="row">
                                <div class="col-md-11">
                                    Daftar Iklan
                                </div>

                                <div class="col-md-1">
                                    <a href="<?php echo base_url('admin/c_ads/tambah') ?>" class="btn btn-success btn-minier">Tambah</a>
                                </div>
                            </div>
                        </div>
        
                        <div class="modal-body no-padding">
                            <div class="row-fluid">
                                <table id="iklan" class="table table-responsive table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                    <thead>
                                        <tr>
                                            <th class="hidden-480">Nama</th>
                                            <th class="hidden-480">Deskripsi</th>
                                            <th class="hidden-480"><center>Aksi</center></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach($iklan as $row): ?>
                                        <tr>
                                            <td class="hidden-480">
                                                <a href="<?php echo $row['link'] ?>" target="_blank">
                                                    <?php echo $row['nama'] ?>
                                                </a>
                                            </td>
                                            <td class="hidden-480"><?php echo $row['deskripsi'] ?></td>
                                            <td class="hidden-480">
                                                <center>
                                                    <?php if($row['publish'] == 1){ ?>
                                                    <a href="<?php echo base_url('admin/c_ads/properti_unaprove/'.$row['nID']); ?>" class="btn btn-success btn-minier"><i class="icon-ok"></i>Publish</a>
                                                    <?php }else{ ?>
                                                    <a href="<?php echo base_url('admin/c_ads/properti_aprove/'.$row['nID']); ?>" class="btn btn-primary btn-minier"><i class="icon-exclamation-sign"></i>Tarik Publish</a>
                                                    <?php } ?>

                                                    <a href="<?php echo base_url('admin/c_ads/ubah/'.$row['nID']) ?>" class="btn btn-primary btn-minier"><i class="fa fa-pencil-square-o"></i> Ubah</a>
                                                    <a href="<?php echo base_url('admin/c_ads/delete/'.$row['nID']) ?>" class="btn btn-danger btn-minier">
                                                        <i class="ace-icon fa fa-times bigger-125"></i> Hapus
                                                    </a>
                                                </center>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.page-content -->
</div><!-- /.main-content -->

<script type="text/javascript">
    $(function() {
        var oTable1 = $('#iklan').dataTable( {
        "aoColumns": [
          { "bSortable": false },
          null, 
          { "bSortable": false }
        ] } );
        
        
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
