<!-- Content-->

    <div class="panel panel-primary">
        <div class="panel-body">
        <p><center><b>แก้ไขข้อมูล</b></center></p>
       	<hr>
            <?php echo form_open('admin_manage_status/edit'); ?>
            <div class="form-horizontal">

                <?php if (isset($_SESSION['success_edit'])) {?>
                <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['success_edit'];?></center></div>
                <?php }?>

                <input type="hidden" name="txtID" value="<?php echo $rs->s_id ?>" >
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">รหัสส่งซ่อม</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" disabled value="<?php echo $rs->s_id ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">สถานะ</label>
                    <div class="col-sm-6">
                          <select class="form-control" name="txtStatus">
                            <option><?php echo $rs->s_status ?></option>
                            <option>ซ่อมเสร็จเรียบร้อย</option>
                            <option>ติดปัญหา</option>
                          </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">รายละเอียด</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" rows="4" name="txtDetail" data-validation="required"><?php echo $rs->s_detail ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">ประเภท</label>
                    <div class="col-sm-6">
                          <select class="form-control" name="txtType">
                            <option><?php echo $rs->s_type ?></option>
                            <option>Computer</option>
                            <option>Notebook</option>
                            <option>Printer</option>
                            <option value="-">อื่นๆ กรุณาระบุในชื่อรุ่น</option>
                          </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">ชื่อรุ่น</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="txtName" value="<?php echo $rs->s_name ?>" data-validation="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">อาการเสีย</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" rows="4" name="txtIssue" data-validation="required"><?php echo $rs->s_issue ?></textarea>
                    </div>
                </div>
                <center>
                    <a href="<?php echo base_url('admin_manage_status/index') ?>" class="btn btn-success" role="button"><i class="fa fa-reply" aria-hidden="true"></i> กลับ</a>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> บันทึก</button>
                </center>
            </div>
        </div>
    </div>
                                            



