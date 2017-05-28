<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 20%">ชื่อผู้ส่ง</th>
                                <th style="width: 55%">เนื้อหา</th>
                                <th style="width: 20%">วันเวลาที่ส่ง</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $r): ?>
                            <tr>
                                <td><?= $r['c_name'];?></td>
                                <td><?= $r['c_comment'];?></td>
                                <td><?= $r['c_created'];?></td>
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
