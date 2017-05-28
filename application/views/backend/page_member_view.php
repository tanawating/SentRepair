<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 5%">รหัสสมาชิก</th>
                                <th style="width: 10%">ชื่อ</th>
                                <th style="width: 10%">ตำแหน่ง</th>
                                <th style="width: 10%">Username</th>
                                <th style="width: 10%">Password</th>
                                <th style="width: 5%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $r): ?>
                            <tr>
                                <td><center><?= $r['m_id'];?></center></td>
                                <td><?= $r['m_name'];?></td>
                                <td>
                                    <?php if ($r['m_type'] == '1' ):?>
                                        เจ้าของร้าน
                                    <?php else: ?>
                                        ช่างซ่อม
                                    <?php endif;?>
                                </td>
                                <td>
                                <?php if($_SESSION['type'] == 2): 
                                        if ($_SESSION['id'] !== $r['m_id']): ?>
                                        ********
                                        <?php endif; 
                                        if ($_SESSION['id'] == $r['m_id']): ?>
                                        <?= $r['m_username'];?>
                                        <?php endif; ?>
                                <?php else: ?>
                                    <?= $r['m_username'];?>
                                <?php endif; ?>    
                                </td>
                                <td>
                                <?php if($_SESSION['type'] == 2): 
                                        if ($_SESSION['id'] !== $r['m_id']): ?>
                                        ********
                                        <?php endif; 
                                        if ($_SESSION['id'] == $r['m_id']): ?>
                                        <?= $r['m_password'];?>
                                        <?php endif; ?>
                                <?php else: ?>
                                    <?= $r['m_password'];?>
                                <?php endif; ?>    
                                </td>
                                <td>
                                    <?php if($_SESSION['type'] == 2):
                                        if ($_SESSION['id'] == $r['m_id']): ?>
                                        <a type="button" class="btn btn-warning btn-xs" href="<?php echo base_url('admin_manage_member/view_edit/'.$r['m_id']);?>" role="button"><span class="glyphicon glyphicon-edit"></span> แก้ไข </a>
                                        <?php endif ?>    
                                    <?php endif ?>                                                      
                                <?php if ($_SESSION['type'] == 1): ?>
                                    <a type="button" class="btn btn-warning btn-xs" href="<?php echo base_url('admin_manage_member/view_edit/'.$r['m_id']);?>" role="button"><span class="glyphicon glyphicon-edit"></span> แก้ไข </a>
                                    <?php if ($_SESSION['type'] != $r['m_type']): ?>
                                        <button type="button" class="btn btn-danger btn-xs">
                                            <a href="#myModal" class="trash" data-id="<?= $r['m_id'];?>"  data-toggle="modal" class="btn btn-info" role="button" ><font color="#FFFFF">ลบ </font></a>
                                        </button>
                                    <?php endif; ?> 

    
                                <?php endif; ?>                                                                
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
