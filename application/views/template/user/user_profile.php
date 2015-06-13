<!-- start wrapper -->
<div class="noo-wrapper">
    <!-- start noo mainbody -->
    <div class="container noo-mainbody">
        <div class="noo-mainbody-inner">
            <div class="row clearfix">
                <!-- start sidebar -->
                <div class="noo-sidebar noo-sidebar-left col-xs-12 col-md-4">
                    <div class="noo-sidebar-inner">
                        <div class="user-sidebar-menu dashboard-sidebar">
                            <div class="user-avatar content-thumb">
                                <?php if($profil['photo'] == null ) {?>
                                <img src="<?php echo base_url('fe/images/agent/agent1.jpg') ?>" alt="">
                                <?php } else { ?>
                                <img src="<?php echo base_url('upload/profile/') ?>/<?php echo $profil['photo'] ?>" class="img-responsive" alt="">
                                <?php }?>
                            </div>
                            <div class="user-menu-links">
                                <a href="<?php echo base_url() ?>c_profile" class="user-link active">
                                    <i class="fa fa-user"></i>
                                    Profil Saya
                                </a>
                                <a href="<?php echo base_url() ?>c_property" class="user-link">
                                    <i class="fa fa-home"></i>
                                    Properti Saya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end sidebar -->

                <!-- start main content -->
                <div class="noo-content col-xs-12 col-md-8 left-sidebar">
                    <div class="submit-content">
                        <?php echo  form_open_multipart('c_profile/update')?>
                        <div class="noo-control-group">
                            <input type="hidden" name="userid" value="<?php echo $profil['nID']; ?>" />
                            <div class="group-title">Selamat datang, <?php echo $profil['strFLName']; ?></div>
                            <div class="group-container row">
                                <div class="form-message"></div>
                                <div class="col-md-12">
                                    <div class="form-group s-profile-title">
                                        <label for="title">Nama&nbsp;</label>
                                        <input type="text" id="nama" class="form-control" value="<?php echo $profil['strFLName']; ?>" name="nama" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group s-profile-title">
                                        <label for="title">Alamat&nbsp;</label>
                                        <textarea id="alamat" class="form-control"  name="alamat"><?php echo $profil['strAddress']; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group s-profile-email">
                                        <label for="email">Email&nbsp;</label>
                                        <input type="text" id="email" class="form-control" value="<?php echo $profil['strEmail']; ?>" name="email" required="">
                                    </div>
                                    <div class="form-group s-profile-phone">
                                        <label for="phone">No Telepon</label>
                                        <input type="text" id="phone" class="form-control" value="<?php echo $profil['strTelNumber']; ?>" name="phone">
                                    </div>

                                    <div class="form-group s-profile-skype">
                                        <label for="skype">Skype</label>
                                        <input type="text" id="skype" class="form-control" value="<?php echo $profil['skype']; ?>" name="skype">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="upload-container">
                                        <label>Avatar</label>
                                        <div id="aaiu-upload-container" class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <div id="aaiu-upload-imagelist">
                                                    <ul id="aaiu-ul-list" class="aaiu-upload-list"></ul>
                                                </div>
                                                <div id="uploaded-images">
                                                    <div class="uploaded-img">
                                                        <?php if($profil['photo'] == null ) {?>
                                                        <img src="<?php echo base_url();?>assets/images/agent/agent1.jpg" alt="">
                                                        <?php } else { ?>
                                                        <img src="<?php echo base_url('upload/profile/') ?>/<?php echo $profil['photo'] ?>"class="img-responsive" alt="">
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="hidden" name="avatar" id="avatar" value="6609">
                                                <div class="moxie-shim moxie-input moxie-shim-html5">
                                                    <label for="input-upload" class="btn btn-secondary">Pilih Gambar</label>
                                                    <input id="input-upload" name="userfile" type="file"  accept="image/jpeg,image/gif,image/png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="noo-control-group">
                            <div class="group-title">Media Sosial</div>
                            <div class="group-container row">
                                <div class="col-md-6">
                                    <div class="form-group s-profile-facebook">
                                        <label for="facebook">Facebook Url</label>
                                        <input type="text" id="facebook" class="form-control" value="<?php echo $profil['fb']; ?>" name="facebook">
                                    </div>
                                    <div class="form-group s-profile-twitter">
                                        <label for="twitter">Twitter Url</label>
                                        <br><br>
                                        <input type="text" id="twitter" class="form-control" value="<?php echo $profil['twitter']; ?>" name="twitter">
                                    </div>
                                    <div class="form-group s-profile-google_plus">
                                        <label for="google_plus">Google Plus Url</label>
                                        <input type="text" id="google_plus" class="form-control" value="<?php echo $profil['goplus']; ?>" name="google_plus">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="noo-submit">
                                        <input type="submit" class="btn btn-secondary" id="profile_submit" value="Update">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close();?>
                        <form id="password_form" name="password_form" class="noo-form profile-form" role="form">
                            <div class="noo-control-group">
                                <div class="group-title">
                                    Ganti Password
                                </div>
                                <div class="group-container row">
                                    <div class="form-message"></div>
                                    <div class="col-md-6">
                                        <div class="form-group s-profile-old_pass">
                                            <label for="old_pass">Password Lama</label>
                                            <input type="password" id="old_pass" class="form-control" value="" name="old_pass">
                                        </div>
                                        <div class="form-group s-profile-new_pass">
                                            <label for="new_pass">Password Baru</label>
                                            <input type="password" id="new_pass" class="form-control" value="" name="new_pass">
                                        </div>
                                        <div class="form-group s-profile-new_pass_confirm">
                                            <label for="new_pass_confirm">Konfirmasi Password Baru</label>
                                            <input type="password" id="new_pass_confirm" class="form-control" value="" name="new_pass_confirm">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="noo-submit">
                                            <input type="submit" class="btn btn-secondary" id="password_submit" value="Change Password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>                                              
                </div>          
                <!-- end main content -->
            </div>
        </div>
    </div>
</div>