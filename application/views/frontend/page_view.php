<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 8%">รหัสส่งซ่อม</th>
                                <th style="width: 15%">วัน-เวลาที่ส่งซ่อม</th>
                                <th style="width: 10%">ประเภท</th>
                                <th style="width: 10%">ชื่อรุ่น</th>
                                <th style="width: 20%">อาการเสีย</th>
                                <th style="width: 13%">สถานะซ่อม</th>
                                <th style="width: 25%">รายละเอียด</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $r): ?>
                            <tr>
                                <td><?= $r['s_id'];?></td>
                                <td><?= $r['s_created'];?></td>
                                <td><?= $r['s_type'];?></td>
                                <td><?= $r['s_name'];?></td>
                                <td><?= $r['s_issue'];?></td>
                                <td>
                                    <?php if ($r['s_status'] == 'กำลังซ่อม'):?>
                                        <font color="#FFCC00"><b>กำลังซ่อม</b></font>
                                    <?php elseif ($r['s_status'] == 'ซ่อมเสร็จเรียบร้อย'):?>
                                        <font color="green"><b>ซ่อมเสร็จเรียบร้อย</b></font>
                                    <?php else: ?>
                                        <font color="red"><b>ติดปัญหา</b></font>
                                    <?php endif; ?>
                                </td>
                                <td><?= $r['s_detail'];?></td>
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
