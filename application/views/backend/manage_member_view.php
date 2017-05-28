<!-- Content-->

    <div class="panel panel-primary">
        <div class="panel-body">
        <p><center><b>เพิ่มสมาชิก</b></center></p>
       	<hr>
            <?php echo form_open('admin_manage_member/add'); ?>
            <div class="form-horizontal">

                <?php if (isset($_SESSION['successAdd'])) {?>
                <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['successAdd'];?></center></div>
                <?php }?>

                <?php if (isset($_SESSION['Error'])) {?>
                <div class="alert alert-warning"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['Error'];?></center></div>
                <?php }?>

                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">ชื่อ</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="txtName" value="" data-validation="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">Username</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="txtUsername" value="" data-validation="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="txtPassword" value="" data-validation="required">
                    </div>
                </div>
                <center><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> บันทึก</button> <?php echo form_close(); ?> <button onclick="window.location.reload();" type="button" class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span> Refresh หน้า</button></center>
            </div>
            <hr>

            <?php if (isset($_SESSION['successRemove'])) {?>
            <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span></span> <?php echo $_SESSION['successRemove'];?></center></div>
            <?php }?>

        	<div class="content-wrapper">
	      	<?php $this->view($content);?>
	  		</div>
        </div>
    </div>
                                            



