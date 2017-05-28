<!DOCTYPE html>
<html>
    <head>
        <title>เข้าสู่ระบบ</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Login -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css">
        <!-- Font -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font.css">
        <!-- Icon -->
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/image/icon.jpg">
    </head>
    <body background="<?php echo base_url();?>assets/image/bg_login.jpg">
        <div class="login-page">
            <?php if (isset($_SESSION['error'])) {?>
              <div class="alert alert-warning">
              <center><p class="login-box-msg" style="color:#FF9900;"><?php echo $_SESSION['error'];?> </p></center>
              </div>
            <?php } ?> 
          <div class="form">
            <form class="login-form" method="post" action="<?php echo base_url(); ?>home/checklogin">
              <input type="text" placeholder="username" name="txtusername" />
              <input type="password" placeholder="password" name="txtpassword" />
              <button><span>Sign in</span></button>
              <p><a href="<?php echo base_url('home/index');?>"><font color="#FFFFFF">กลับ</font></a></p>
            </form>
          </div>
        </div>
    </body>
</html>