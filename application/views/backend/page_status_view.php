<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10%">รหัสส่งซ่อม</th>
                                <th style="width: 2%">ประเภท</th>
                                <th style="width: 10%">ชื่อรุ่น</th>
                                <th style="width: 18%">อาการเสีย</th>
                                <th style="width: 13%">สถานะซ่อม</th>
                                <th style="width: 21%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $r): ?>
                            <tr>
                                <td><center><?= $r['s_id'];?></center></td>
                                <td><?= $r['s_type'];?></td>
                                <td><?= $r['s_name'];?></td>
                                <td><?= $r['s_issue'];?></td>
                                <td>
                                    <?php if ($r['s_status'] == 'กำลังซ่อม'):?>
                                        <font color="#FFCC00">กำลังซ่อม</font>
                                    <?php elseif ($r['s_status'] == 'ซ่อมเสร็จเรียบร้อย'):?>
                                        <font color="green">ซ่อมเสร็จเรียบร้อย</font>
                                    <?php else: ?>
                                        <font color="red">ติดปัญหา</font>
                                    <?php endif; ?>
                                </td>
                                <td>                                                                
                                <a type="button" class="btn btn-info btn-xs" target="_blank" href="<?php echo base_url('admin_manage_status/report/'.$r['s_id']);?>" role="button"><span class="glyphicon glyphicon-save-file"></span> ออกใบส่งซ่อม
                                </a>
                                <a type="button" class="btn btn-warning btn-xs" href="<?php echo base_url('admin_manage_status/view_edit/'.$r['s_id']);?>" role="button"><span class="glyphicon glyphicon-edit"></span> แก้ไข </a>

                                <button type="button" class="btn btn-danger btn-xs">
                                    <a href="#myModal" class="trash" data-id="<?= $r['s_id'];?>"  data-toggle="modal" class="btn btn-info" role="button" ><font color="#FFFFF">ลบ </font></a>
                                </button>                                                              
                                <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel"><center><span class="glyphicon glyphicon-bell"></span> ข้อความแจ้งเตือน</center> </h3>

                                            </div>
                                            <div class="modal-body">
                                                <p class="error-text"><center><h5><i class="fa fa-warning modal-icon"></i> คุณต้องการลบข้อมูลจริงหรือไม่ ?</h5></center>
                                            </div>
                                            <div class="modal-footer">
                                               <button class="btn btn-default"data-dismiss="modal" aria-hidden="true">ยกเลิก</button> <a class="btn btn-danger"  id="modalDelete" >ยืนยัน</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>

                </div>
                <div class="box-footer">
                    <center><?php echo $pagination; ?></center>
                </div>
            </div>
        </div>
    </div> 
</section>
