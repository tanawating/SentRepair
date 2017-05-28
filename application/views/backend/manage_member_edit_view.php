<?php if($_SESSION['type']=='2' ):?>
    <?php if($rs->m_type=='1' ):?>
        <script>
            window.history.back();
        </script>
        <?php exit; ?>
    <?php endif; ?>
<?php endif; ?>

<!-- Content-->
    <div class="panel panel-primary">
        <div class="panel-body">
        <p><center><b>แก้ไขข้อมูล</b></center></p>
       	<hr>
            <?php echo form_open('admin_manage_member/edit'); ?>
            <div class="form-horizontal">

                <?php if (isset($_SESSION['success_edit'])) {?>
                <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['success_edit'];?></center></div>
                <?php }?>

                <input type="hidden" name="txtID" value="<?php echo $rs->m_id ?>" >
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">รหัสสมาชิก</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" disabled value="<?php echo $rs->m_id ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">ชื่อ</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="txtName" value="<?php echo $rs->m_name ?>" data-validation="required">
                    </div>
                </div>
                <?php if($_SESSION['type'] == 1): ?>
                    <?php if($_SESSION['type'] == $rs->m_type): ?>
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Username</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" disabled name="txtUsername" value="<?php echo $rs->m_username ?>" data-validation="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Password</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" disabled name="txtPassword" value="<?php echo $rs->m_password ?>" data-validation="required">
                            </div>
                        </div>
                    <?php else:?>
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Username</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="txtUsername" value="<?php echo $rs->m_username ?>" data-validation="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Password</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="txtPassword" value="<?php echo $rs->m_password ?>" data-validation="required">
                            </div>
                        </div>
                    <?php endif;?>
                <?php endif;?>
                <?php if($_SESSION['type'] == 2): ?>
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Username</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="txtUsername" value="<?php echo $rs->m_username ?>" data-validation="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Password</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="txtPassword" value="<?php echo $rs->m_password ?>" data-validation="required">
                        </div>
                    </div>
                <?php endif;?>
                <center>
                    <a href="<?php echo base_url('admin_manage_member/index') ?>" class="btn btn-success" role="button"><i class="fa fa-reply" aria-hidden="true"></i> กลับ</a>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> บันทึก</button>
                </center>
            </div>
        </div>
    </div>
                                            



