<!-- no wrapper -->
<div class="noo-wrapper">
    <!-- noo main body -->
    <div class="container-fluid noo-mainbody">
        <div class="noo-mainbody-inner">
            <div class="row clearfix">
                <!--main content -->
                <div class="noo-content col-xs-12">
                    <div class="page-content row">
                        <div class="col-md-12">
                            <div class="noo-logreg both">
                                <div class="logreg-container">
                                    <div class="row clearfix logreg-content">
                                        <div class="col-md-6 login-form">
                                            <form method="post" role="form" action="<?php echo base_url('c_auth/login_proccess') ?>">
                                                <div class="logreg-title">Masuk</div>
                                                <p class="logreg-desc">Jika sudah memiliki akun silahkan login untuk masuk ke situs.</p>
                                                <div class="form-message"></div>
                                                <div class="logreg-content">
                                                    <div class="form-group">
                                                    <input type="text" class="form-control" id="log" name="username" placeholder="Nama Panggilan *" required="">
                                                    </div>
                                                    <div class="form-group">
                                                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Kata Kunci *" required="">
                                                    </div>
                                                </div>
                                                <div class="logreg-action">
                                                    <button type="submit" class="btn navbar-btn">Masuk</button>
                                                </div>
                                                <p class="logreg-desc">
                                                    Lost your password? <a href="#">Click here to reset</a>
                                                </p>
                                            </form>
                                        </div>

                                        <div class="col-md-6 register-form">
                                            <form method="post" action="<?php echo base_url('c_auth/post') ?>">
                                                <div class="logreg-title">Daftar</div>
                                                <p class="logreg-desc">
                                                    Sudah memiliki akun? Jika belum, silahkan isi form dibawah ini untuk melakukan pendaftaran.
                                                </p>
                                                <div class="form-message"></div>
                                                <div class="logreg-content">
                                                    <input type="hidden" name="nUserPrivilage" value="1" />
                                                    <input type="hidden" name="bVerified" value="0" />
                                                    <input type="hidden" name="create_date" value="<?php echo gmdate("Y-m-d H:i:s", time()+60*60*7) ?>" />
                                                    <div class="form-group">
                                                        <label for="user_login" class="sr-only">Nama Lengkap</label>
                                                        <input type="text" class="form-control" name="namalengkap" placeholder="Nama Lengkap *" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user_login" class="sr-only">Nama Pengguna</label>
                                                        <input type="text" class="form-control" name="namapengguna" placeholder="Nama Pengguna *" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user_login" class="sr-only">No. Telepon</label>
                                                        <input type="text" class="form-control" name="notelp" placeholder="Nomor Telepon *" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user_login" class="sr-only">Alamat</label>
                                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat *" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user_login" class="sr-only">Email</label>
                                                        <input type="email" class="form-control" name="email" placeholder="Email *" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user_login" class="sr-only">Password</label>
                                                        <input type="password" class="form-control" name="password" placeholder="Password *" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user_email" class="sr-only">Konfirmasi Password</label>
                                                        <input type="password" class="form-control" name="konfpassword" placeholder="Konfirmasi Password *" required="">
                                                    </div>
                                                </div>
                                                <div class="logreg-action">
                                                    <button type="submit" class="btn navbar-btn">Daftar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>          
                <!-- end main content -->
            </div>
        </div>
    </div>
    <!-- end noo main body -->
</div>
<!-- end noo wrapper -->