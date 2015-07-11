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
            <li>Belanja</li>
            <li class="active">Tambah</li>
        </ul><!-- .breadcrumb -->
    </div>

    <div class="page-content">
        <div class="row">
            <form method="post" action="<?php echo base_url('admin/c_belanja/post') ?>" enctype="multipart/form-data">
                <input type="hidden" name="username" value="<?php echo $this->session->userdata('username'); ?>" />
                <input type="hidden" name="create_date" value="<?php echo gmdate("Y-m-d H:i:s", time()+60*60*7) ?>" />
                <input type="hidden" name="verified" value="1" />
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="header green clearfix">
                                Nama Properti
                            </h4>
                            <input class="form-control" type="text" name="nama" />
                        </div>

                        <div class="col-md-6">
                            <h4 class="header green clearfix">
                                Tipe
                            </h4>
                            <select class="form-control" id="tipe2" name="tipe2">
                            <?php foreach($jenis as $k): ?>
                                <option value="<?php echo $k['nID']; ?>"><?php echo $k['nama_subkat']; ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <h4 class="header green clearfix">
                                Photo
                            </h4>
                            <label for="input-upload" class="btn btn-info btn-sm">Pilih Gambar</label>
                            <input id="input-upload" name="userfile" type="file"  accept="image/jpeg,image/gif,image/png" style="display:none" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="header green clearfix">
                                Alamat
                            </h4>
                            <textarea class="form-control" name="alamat"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="header green clearfix">
                                Deskripsi
                            </h4>
                            <textarea class="form-control" name="deskripsi"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="header green clearfix">
                                Latitude
                            </h4>
                            <input class="form-control" type="text" name="lat" />
                        </div>

                        <div class="col-md-6">
                            <h4 class="header green clearfix">
                                Longitude
                            </h4>
                            <input class="form-control" type="text" name="lon" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="header green clearfix">
                                Nama Pengelola
                            </h4>
                            <input class="form-control" type="text" name="nama_pengelola" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="header green clearfix">
                                Contact Person Pengelola
                            </h4>
                            <input class="form-control" type="text" name="no_hp" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="header green clearfix">
                                Kebijakan
                            </h4>
                            <textarea class="form-control" name="kebijakan"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="hr hr-double dotted"></div>

                            <div class="btn-group pull-right">
                                <button class="btn btn-sm btn-danger btn-white btn-round">
                                    <i class="ace-icon fa fa-floppy-o bigger-125"></i>
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.page-content -->
</div><!-- /.main-content -->