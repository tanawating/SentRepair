<!-- Content-->

    <div class="panel panel-primary">
        <div class="panel-body">
        <p><center><b>เพิ่มการซ่อม</b></center></p>
       	<hr>
            <?php echo form_open('admin_manage_status/add'); ?>
            <div class="form-horizontal">

                <?php if (isset($_SESSION['successAdd'])) {?>
                <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['successAdd'];?></center></div>
                <?php }?>

                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">ประเภท</label>
                    <div class="col-sm-6">
						  <select class="form-control" name="txtType">
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
                        <input type="text" class="form-control" name="txtName" value="" data-validation="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">อาการเสีย</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" rows="4" name="txtIssue" data-validation="required"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">อุปกรณ์ที่ติดมากับเครื่อง</label>
                    <div class="col-sm-6">
                    <div class="checkbox">
                        <label><input type="checkbox" value="">สายชาร์จ</label>
                        <label><input type="checkbox" value="">กระเป๋า</label>
                        <label><input type="checkbox" value="">สายไฟ</label>
                        <label><input type="checkbox" value="">สาย USB</label>
                    </div>
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
                                            



