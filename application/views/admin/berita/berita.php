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
            <li class="active">Berita</li>
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
                                    Daftar Berita
                                </div>

                                <div class="col-md-1">
                                    <a href="<?php echo base_url('admin/c_news/tambah') ?>" class="btn btn-success btn-minier">Tambah</a>
                                </div>
                            </div>
                        </div>
        
                        <div class="modal-body no-padding">
                            <div class="row-fluid">
                                <table id="properti" class="table table-responsive table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                    <thead>
                                        <tr>
                                            <th class="hidden-480">Jenis Properti</th>
                                            <th class="hidden-480">Penulis</th>
                                            <th class="hidden-480">Tanggal</th>
                                            <th class="hidden-480"><center>Aksi</center></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <?php foreach($rows as $row){ ?>
                                            <td class="hidden-480"><?php echo $row['titlenews']; ?></td>
                                            <td class="hidden-480"><?php echo $row['userid']; ?></td>
                                            <td class="hidden-480"><?php echo pretty_date($row['postdate']); ?></td>
                                            <td class="hidden-480">
                                                <center>
                                                    <a href="<?php echo base_url('admin/c_news/ubah/'.$row['nID']) ?>" class="btn btn-primary btn-minier"><i class="fa fa-pencil-square-o"></i> Ubah</a>
                                                    <a href="<?php echo base_url('admin/c_news/delete/'.$row['nID']) ?>" class="btn btn-danger btn-minier">
                                                        <i class="ace-icon fa fa-times bigger-125"></i> Hapus
                                                    </a>
                                                </center>
                                            </td>
                                        </tr>
                                        <?php } ?>
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
        var oTable1 = $('#properti').dataTable( {
        "aoColumns": [
          { "bSortable": false },
          null, null, null, 
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
