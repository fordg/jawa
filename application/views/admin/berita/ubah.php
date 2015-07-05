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
            <li><a href="#">Berita</a></li>
            <li class="active">Tambah</li>
        </ul><!-- .breadcrumb -->
    </div>

    <div class="page-content">
        <div class="row">
            <form method="post" action="<?php echo base_url('admin/c_news/put') ?>" enctype="multipart/form-data">
                <input type="hidden" name="nID" />
                <input type="hidden" name="userid" value="<?php echo $this->session->userdata('id'); ?>" />
                <input type="hidden" name="postdate" value="<?php echo gmdate("Y-m-d H:i:s", time()+60*60*7) ?>" />

                <div class="col-md-9">
                    <h4 class="header green clearfix">
                        Judul Berita
                    </h4>
                    <input type="text" class="form-control" name="titlenews" placeholder="<?php echo $rows->titlenews ?>" />
                </div>

                <div class="col-md-3">
                    <h4 class="header green clearfix">
                        Gambar Berita
                    </h4>
                    <label for="input-upload" class="btn btn-info btn-sm">Pilih Gambar</label>
                    <input id="input-upload" name="userfile" type="file"  accept="image/jpeg,image/gif,image/png" style="display:none" />
                </div>

                <div class="col-md-9">
                    <h4 class="header green clearfix">
                        Isi Berita
                    </h4>
                    <textarea id="txtEditor" class="form-control" name="contentnews"><?php echo $rows->contentnews ?></textarea>
                </div>

                <div class="col-md-12">
                    <div class="hr hr-double dotted"></div>

                    <div class="btn-group pull-right">
                        <button class="btn btn-sm btn-danger btn-white btn-round">
                            <i class="ace-icon fa fa-floppy-o bigger-125"></i>
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div><!-- /.main-content -->