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
            <li class="active">Profil</li>
        </ul><!-- .breadcrumb -->
    </div>

    <div class="page-content">

        <?php $this->load->view('notification') ?>
        <div class="table-header">
            Profil
        </div>

        <div class="modal-body no-padding">
            <div class="row-fluid">
                <form method="post" action="<?php echo base_url('admin/c_user/put') ?>">
                    <input type="hidden" name="nID" value="<?php echo $profil['nID']; ?>" />
                    <table id="properti" class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                        <tbody>
                            <tr>
                                <td class="hidden-480">Nama Panggilan</td>
                                <td class="hidden-480">
                                    <input type="text" class="form-control" name="strUserName" value="<?php echo $profil['strUserName'] ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td class="hidden-480">Password</td>
                                <td class="hidden-480">
                                    <input type="password" class="form-control" name="strUserPassword" value="<?php echo $profil['strUserPassword'] ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td class="hidden-480">Nama Lengkap</td>
                                <td class="hidden-480">
                                    <input type="text" class="form-control" name="strFLName" value="<?php echo $profil['strFLName'] ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td class="hidden-480">Email</td>
                                <td class="hidden-480">
                                    <input type="email" class="form-control" name="strEmail" value="<?php echo $profil['strEmail'] ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="btn btn-primary" value="Ubah" style="float:right" />
                                </td>
                            </tr>
                        </tbody>
                      </table>
                  </form>
            </div>
        </div>

    </div><!-- /.page-content -->
</div><!-- /.main-content -->
