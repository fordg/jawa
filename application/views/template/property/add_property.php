<!-- START NOO WRAPPER -->
<div class="noo-wrapper">
    <!-- START NOO MAINBODY -->
    <div class="container noo-mainbody">
        <div class="noo-mainbody-inner">
            <div class="row clearfix">
                <!-- START SIDEBAR -->
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
                                <a href="<?php echo base_url();?>c_profile" class="user-link"><i class="fa fa-user"></i>My Profile</a>
                                <a href="<?php echo base_url();?>c_property" class="user-link active"><i class="fa fa-home"></i>My Properties</a>
                            </div>
                            <div class="user-menu-links user-menu-logout">
                                <a href="<?php echo base_url();?>c_login/logout" class="user-link" title="Logout"><i class="fa fa-sign-out"></i>Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SIDEBAR -->

                <!-- START MAIN CONTENT -->
                <div class="noo-content col-xs-12 col-md-8">
                    <div class="submit-content">
                        <?php echo  form_open_multipart('c_property/add_proccess')?>
                        <div class="noo-control-group">
                            <div class="group-title">Seputar Hunian</div>
                            <div class="group-container row">
                                <div class="col-md-8">
                                    <div class="form-group s-prop-title">
                                        <label for="title">Nama Properti&nbsp;&#42;</label>
                                        <br><br>
                                        <input type="text" id="nama" class="form-control" value="" name="nama" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="title">Tipe&nbsp;</label>
                                    <br><br>
                                    <div class="dropdown label-select">
                                        <select class="form-control" id="tipe2" name="tipe2">
                                        <?php foreach($jenis as $k): ?>
                                            <option value="<?php echo $k['nID']; ?>"><?php echo $k['nama_subkat']; ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label for="textarea">Alamat&nbsp;&#42;</label>
                                        <br><br>
                                        <textarea id="textarea" name="alamat" id="alamat" rows="10" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group s-prop-desc">
                                        <label for="textarea">Deskripsi&nbsp;&#42;</label>
                                        <br><br>
                                        <textarea  name="deskripsi"  id="deskripsi" rows="10" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group s-prop-price row">
                                        <div class="price col-md-6">
                                            <label for="price">Luas Kamar&nbsp;&#42;</label>
                                            <br><br>
                                            <input type="text" id="luas_kamar" class="form-control" value="" name="luas_kamar" required="">
                                        </div>
                                        <div class="price_label col-md-6">
                                            <label for="price_label">Jumlah Kamar&nbsp;&#42;</label>
                                            <br><br>
                                            <input type="text" id="jumlah_kamar" class="form-control" value="" name="jumlah_kamar">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group s-prop-status">
                                        <label>Status</label>
                                        <br><br>
                                        <div class="dropdown label-select">
                                            <select class="form-control" id="status" name="status">
                                                <option>Sale</option>
                                                <option>Open house</option>
                                                <option>Rent</option>
                                                <option>Sold</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="noo-control-group">
                            <div class="group-title">Gambar Properti</div>
                            <div class="group-container row">
                                <div class="col-md-12">
                                    <div id="upload-container">
                                        <div id="aaiu-upload-container">
                                            <div class="moxie-shim moxie-shim-html5">
                                                <label for="input-upload" class="btn btn-secondary btn-lg">Select Image</label>
                                                <input id="input-upload" name="userfile" type="file" multiple="" accept="image/jpeg,image/gif,image/png">
                                            </div>
                                            <p>
                                                Setidaknya 1 gambar diperlukan untuk pengajuan. Gambar ini akan digunakan untuk dispaly pada halaman properti.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="noo-control-group">
                            <div class="group-title">
                                Seputar Penghuni
                            </div>
                            <div class="group-container row">
                                <div class="col-md-7">
                                    <div class="group-title">
                                        Peruntukan Penghuni
                                    </div>
                                    <div class="group-container row">
                                        <div class="col-md-6">
                                            <div class="form-group s-prop-_noo_property_feature_attic">
                                                <input type="hidden" name="noo_property_feature[attic]" class="" value="0">
                                                <label for="_noo_property_feature_attic" class="checkbox-label">
                                                <input type="checkbox" id="penghuni_pria" name="penghuni_pria" class="" value="1">&nbsp;Pria  <i></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group s-prop-_noo_property_feature_gas-heat">
                                                <input type="hidden" name="noo_property_feature[gas-heat]" class="" value="0">
                                                <label for="_noo_property_feature_gas-heat" class="checkbox-label">
                                                <input type="checkbox" id="penghuni_wanita" name="penghuni_wanita" class="" value="1">&nbsp;Wanita    <i></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group s-prop-_noo_property_feature_balcony">
                                                <input type="hidden" name="noo_property_feature[balcony]" class="" value="0">
                                                <label for="_noo_property_feature_balcony" class="checkbox-label">
                                                <input type="checkbox" id="penghuni_keluarga" name="penghuni_keluarga" class="" value="1">&nbsp;Keluarga  <i></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group s-prop-_noo_property_feature_wine-cellar">
                                                <input type="hidden" name="noo_property_feature[wine-cellar]" class="" value="0">
                                                <label for="_noo_property_feature_wine-cellar" class="checkbox-label">
                                                <input type="checkbox" id="penghuni_suami_istri" name="penghuni_suami_istri" class="" value="1">&nbsp;Suami Istri <i></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group s-prop-_noo_property_feature_basketball-court">
                                                <input type="hidden" name="noo_property_feature[basketball-court]" class="" value="0">
                                                <label for="_noo_property_feature_basketball-court" class="checkbox-label">
                                                <input type="checkbox" id="penghuni_pria_wanita" name="penghuni_pria_wanita" class="" value="1">&nbsp;Pria Wanita <i></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-title">
                                    Peruntukan Penghuni
                                </div>
                                <div class="group-container row">
                                    <div class="col-md-3">
                                        <div class="form-group s-prop-_noo_property_feature_attic">
                                            <input type="hidden" name="noo_property_feature[attic]" class="" value="0">
                                            <label for="_noo_property_feature_attic" class="checkbox-label">
                                            <input type="checkbox" id="untuk_pria" name="untuk_pria" class="" value="1">&nbsp;Pria    <i></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group s-prop-_noo_property_feature_gas-heat">
                                            <input type="hidden" name="noo_property_feature[gas-heat]" class="" value="0">
                                            <label for="_noo_property_feature_gas-heat" class="checkbox-label">
                                            <input type="checkbox" id="untuk_wanita" name="untuk_wanita" class="" value="1">&nbsp;Wanita  <i></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group s-prop-_noo_property_feature_balcony">
                                            <input type="hidden" name="noo_property_feature[balcony]" class="" value="0">
                                            <label for="_noo_property_feature_balcony" class="checkbox-label">
                                            <input type="checkbox" id="untuk_keluarga" name="untuk_keluarga" class="" value="1">&nbsp;Keluarga    <i></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group s-prop-_noo_property_feature_wine-cellar">
                                            <input type="hidden" name="noo_property_feature[wine-cellar]" class="" value="0">
                                            <label for="_noo_property_feature_wine-cellar" class="checkbox-label">
                                            <input type="checkbox" id="untuk_sumai_istri" name="untuk_sumai_istri" class="" value="1">&nbsp;Suami Istri   <i></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="noo-control-group">
                                <div class="group-title">
                                    Seputar Fasilitas
                                </div>
                                <!-- -->
                                <div class="group-container row">
                                    <div class="col-md-7">
                                        <div class="group-title">
                                            Umum
                                        </div>
                                        <div class="group-container row">
                                            <div class="col-md-6">
                                                <div class="form-group s-prop-_noo_property_feature_attic">
                                                    <input type="hidden"  name="noo_property_feature[attic]" class="" value="0">
                                                    <label for="_noo_property_feature_attic" class="checkbox-label">
                                                    <input type="checkbox" id="umum_dapur" name="umum_dapur" class="" value="1">&nbsp;Dapur   <i></i>
                                                    </label>
                                                </div>
                                                <div class="form-group s-prop-_noo_property_feature_gas-heat">
                                                    <input type="hidden" name="noo_property_feature[gas-heat]" class="" value="0">
                                                    <label for="_noo_property_feature_gas-heat" class="checkbox-label">
                                                    <input type="checkbox" id="umum_balkon" name="umum_balkon" class="" value="1">&nbsp;Balkon    <i></i>
                                                    </label>
                                                </div>
                                                <div class="form-group s-prop-_noo_property_feature_balcony">
                                                    <input type="hidden" name="noo_property_feature[balcony]" class="" value="0">
                                                    <label for="_noo_property_feature_balcony" class="checkbox-label">
                                                    <input type="checkbox" id="umum_kulkas" name="umum_kulkas" class="" value="1">&nbsp;Kulkas    <i></i>
                                                    </label>
                                                </div>
                                                <div class="form-group s-prop-_noo_property_feature_wine-cellar">
                                                    <input type="hidden" name="noo_property_feature[wine-cellar]" class="" value="0">
                                                    <label for="_noo_property_feature_wine-cellar" class="checkbox-label">
                                                    <input type="checkbox" id="umum_tv" name="umum_tv" class="" value="1">&nbsp;Ruang TV  <i></i>
                                                    </label>
                                                </div>
                                                <div class="form-group s-prop-_noo_property_feature_basketball-court">
                                                    <input type="hidden" name="noo_property_feature[basketball-court]" class="" value="0">
                                                    <label for="_noo_property_feature_basketball-court" class="checkbox-label">
                                                    <input type="checkbox" id="umum_tamu" name="umum_tamu" class="" value="1">&nbsp;Ruang Tamu    <i></i>
                                                    </label>
                                                </div>
                                                <div class="form-group s-prop-_noo_property_feature_basketball-court">
                                                    <input type="hidden" name="noo_property_feature[basketball-court]" class="" value="0">
                                                    <label for="_noo_property_feature_basketball-court" class="checkbox-label">
                                                    <input type="checkbox" id="umum_km" name="umum_km" class="" value="1">&nbsp;Kamar Mandi   <i></i>
                                                    </label>
                                                </div>
                                                <div class="form-group s-prop-_noo_property_feature_basketball-court">
                                                    <input type="hidden" name="noo_property_feature[basketball-court]" class="" value="0">
                                                    <label for="_noo_property_feature_basketball-court" class="checkbox-label">
                                                    <input type="checkbox" id="umum_lain" name="umum_lain" class="" value="1">&nbsp;Lainnya   <i></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group-title">
                                        Peruntukan Penghuni
                                    </div>
                                    <div class="group-container row">
                                        <div class="col-md-3">
                                            <div class="form-group s-prop-_noo_property_feature_attic">
                                                <input type="hidden" name="noo_property_feature[attic]" class="" value="0">
                                                <label for="_noo_property_feature_attic" class="checkbox-label">
                                                <input type="checkbox" id="privat_kasur" name="privat_kasur" class="" value="1">&nbsp;Kasur   <i></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group s-prop-_noo_property_feature_gas-heat">
                                                <input type="hidden" name="noo_property_feature[gas-heat]" class="" value="0">
                                                <label for="_noo_property_feature_gas-heat" class="checkbox-label">
                                                <input type="checkbox" id="privat_almari" name="privat_almari" class="" value="1">&nbsp;Almari    <i></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group s-prop-_noo_property_feature_balcony">
                                                <input type="hidden" name="noo_property_feature[balcony]" class="" value="0">
                                                <label for="_noo_property_feature_balcony" class="checkbox-label">
                                                <input type="checkbox" id="privat_meja" name="privat_meja" class="" value="1">&nbsp;Meja  <i></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group s-prop-_noo_property_feature_wine-cellar">
                                                <input type="hidden" name="noo_property_feature[wine-cellar]" class="" value="0">
                                                <label for="_noo_property_feature_wine-cellar" class="checkbox-label">
                                                <input type="checkbox" id="privat_kursi" name="privat_kursi" class="" value="1">&nbsp;Kursi   <i></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group s-prop-_noo_property_feature_wine-cellar">
                                                <input type="hidden" name="noo_property_feature[wine-cellar]" class="" value="0">
                                                <label for="_noo_property_feature_wine-cellar" class="checkbox-label">
                                                <input type="checkbox" id="privat_ac" name="privat_ac" class="" value="1">&nbsp;AC    <i></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group s-prop-_noo_property_feature_wine-cellar">
                                                <input type="hidden" name="noo_property_feature[wine-cellar]" class="" value="0">
                                                <label for="_noo_property_feature_wine-cellar" class="checkbox-label">
                                                <input type="checkbox" id="privat_kmd" name="privat_kmd" class="" value="1">&nbsp;Kamar Mandi Dalam   <i></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group s-prop-_noo_property_feature_wine-cellar">
                                                <input type="hidden" name="noo_property_feature[wine-cellar]" class="" value="0">
                                                <label for="_noo_property_feature_wine-cellar" class="checkbox-label">
                                                <input type="checkbox" id="privat_tv" name="privat_tv" class="" value="1">&nbsp;TV<i></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- -->
                                <div class="noo-control-group">
                                    <div class="group-title">Lokasi Hunian</div>
                                    <div class="group-container row">
                                        <div class="col-md-4">
                                            <div class="form-group s-prop-lat">
                                                <label for="_noo_property_gmap_latitude">Latitude </label>
                                                <br><br>
                                                <input type="text" id="lat" class="form-control"  name="lat">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group s-prop-long">
                                                <label for="_noo_property_gmap_longitude">Longitude </label>
                                                <br><br>
                                                <input type="text" id="lon" class="form-control"  name="lon">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="noo_property_google_map">
                                                <div id="noo_property_google_map" class="form-group noo_property_google_map" style="height: 300px; margin-top: 25px; overflow: hidden;position: relative;width: 100%;">
                                                </div>
                                                <div class="noo_property_google_map_search">
                                                    <input placeholder="Search your map" type="text" autocomplete="off" id="noo_property_google_map_search_input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="noo-control-group">
                                    <div class="group-title">Seputar Harga</div>
                                    <div class="group-container row">
                                        <div class="col-md-6">
                                            <div class="form-group s-prop-lat">
                                                <label for="_noo_property_gmap_latitude">Harian</label>
                                                <br><br>
                                                <input type="text" id="harian" class="form-control" name="harian">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group s-prop-long">
                                                <label for="_noo_property_gmap_longitude">Mingguan</label>
                                                <br><br>
                                                <input type="text" id="mingguan" class="form-control"  name="mingguan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group s-prop-long">
                                                <label for="_noo_property_gmap_longitude">Bulanan</label>
                                                <br><br>
                                                <input type="text" id="bulanan" class="form-control"  name="bulanan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group s-prop-long">
                                                <label for="_noo_property_gmap_longitude">Tahunan</label>
                                                <br><br>
                                                <input type="text" id="tahunan" class="form-control"  name="tahunan">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="noo-control-group">
                                    <div class="group-title">Seputar Pengelola</div>
                                    <div class="group-container row">
                                        <div class="col-md-6">
                                            <div class="form-group s-prop-lat">
                                                <label for="_noo_property_gmap_latitude">Nama</label>
                                                <br><br>
                                                <input type="text" id="nama_pengelola" class="form-control" name="nama_pengelola">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group s-prop-long">
                                                <label for="_noo_property_gmap_longitude">No HP</label>
                                                <br><br>
                                                <input type="text" id="no_hp" class="form-control"  name="no_hp">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="noo-control-group">
                                    <div class="group-title">Seputar Kebijakan Hunian</div>
                                    <div class="group-container row">
                                        <div class="col-md-12">
                                            <textarea id="kebijakan" class="form-control" name="kebijakan"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="noo-submit row">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-secondary" id="property_submit" value="Add Property">
                                        <label>Your submission will be reviewed by Administrator before it can be published</label>
                                    </div>
                                </div>
                                <?php echo form_close();?>
                            </div>                      
                        </div>          
                        <!-- END MAIN CONTENT -->
                    </div>
                </div>
            </div>
            <!-- END NOO MAINBODY -->
        </div>
        <!-- END NOO WRAPPER -->
    </div>
</div>
