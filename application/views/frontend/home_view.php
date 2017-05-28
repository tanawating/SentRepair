<br><br><br>

<div class="container">

    <?php if (isset($_SESSION['successAdd'])) {?>
    <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['successAdd'];?></center></div>
    <?php }?>

	  <div class="content-wrapper">
	      <?php $this->view($content);?>
	  </div>

</div>

<!-- Modal Addcomment-->
  <div class="modal fade" id="addcomment" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><center><b>ส่งคำติชม</b></center></h3>
        </div>
        <div class="modal-body">
        	<?php echo form_open('home/addcomment'); ?>
			<div class="form-group">
				<label for="usr">Name :</label>
				<input type="text" class="form-control" name="txtName" data-validation="required">
			</div>
			<div class="form-group">
				<label for="comment">Comment :</label>
				<textarea class="form-control" rows="5" name="txtComment" data-validation="required"></textarea>
			</div>
			<center><button type="submit" class="btn btn-primary"><b>ตกลง</b></button>
			<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button></center>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

<!-- Modal IF-->
<div class="modal fade" id="if" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title"><b><center>เงื่อนไขการซ่อมของร้านเขตต์ปริ้นเตอร์</center></b></h3>
			</div>
			<div class="modal-body">
				<p>1. รายการซ่อมปริ้นเตอร์,คอมพิวเตอร์ เสนอราคาซ่อมภายใน 1 วัน แต่ไม่เกิน 3 วัน</p>
				<p>2. รายการที่เสนอซ่อมแล้วลูกค้าไม่ติดต่อทางร้านระยะเวลา 60 วันทุกกรณี ข้าพเจ้าได้อ่านข้อความ</p>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;ทั้งหมดแล้วและยินยอมให้ดำเนินการตามเงื่อนไขทุกประการ</p>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">ทางร้านจะถือว่าอุปกรณ์ที่นำมาซ่อมตกเป็นของร้านโดยทันทีจากวันที่ส่งซ่อม</font></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal Contact-->
<div class="modal fade" id="contact" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title"><b><center>ติดต่อร้าน</center></b></h3>
			</div>
			<div class="modal-body">
				<center>
					<p>ร้านเขตต์ปริ้นเตอร์ : จำหน่ายซ่อมอุปกรณ์คอมพิวเตอร์และปริ้นเตอร์</p>
					<p>92 หมู่ที่ 2 ต.หนองหาน อำเภอหนองหาน จังหวัดอุดรธานี 41130</p>
					<p>Line : xxxxxxx</p>
					<p>Tel : 084-5112207 | 093-4164422</p>
				</center>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
