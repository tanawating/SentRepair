<div class="container well">
    <div class="row">
        <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <center>
                        <i class="fa fa-user-o" aria-hidden="true"></i> <b><?php echo $_SESSION['name']?></b>
                        <?php if ($_SESSION['type'] == '1'): ?>
                            <b>(เจ้าของร้าน)</b>
                        <?php else: ?>
                            <b>(ช่างซ่อม)</b>
                        <?php endif; ?>
                        </center>                        
                    </div>
                    <div class="list-group">
                        <a href="<?php echo site_url("admin_manage_status/index")?>" class="list-group-item "><font color="#337ab7"> Home</font><span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a>
                        <a href="<?php echo site_url("admin_manage_status/index")?>" class="list-group-item"><font color="#337ab7"> จัดการการส่งซ่อม</font> <span class="pull-right hidden-xs showopacity glyphicon glyphicon-wrench"></span></a>
                        <a href="<?php echo site_url("admin_manage_comment/index")?>" class="list-group-item"><font color="#337ab7"> ดูคำติชม</font><span class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a>
                        <a href="<?php echo site_url("admin_manage_member/index")?>" class="list-group-item"><font color="#337ab7"> สมาชิก</font><span  class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                        <a href="<?php echo site_url("home/logout")?>" class="list-group-item"><font color="#337ab7"> ออกจากระบบ</font><span class="pull-right hidden-xs showopacity glyphicon glyphicon-log-out"></span></a>
                    </div>  
                </div>
        </div>
        <div class="col-md-9">