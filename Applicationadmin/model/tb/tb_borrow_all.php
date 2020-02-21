<table id="tb_borrow_all" class="table table-bordered table-striped mt-5">
    <thead>
        <tr class="text-center">
            <th>ลำดับ</th>
            <th>ผู้ยืม</th>
            <th>ผู้รับคืน</th>
            <th>เหตุผลที่ยืม</th>
            <th>วันนัดรับอุปกรณ์</th>
            <th>อุปกรณ์ที่ยืม</th>
            <th>จำนวน</th>
            <th>สถานะ</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($id = 1; $id < 400; $id++) { ?>
            <tr class="text-center">
                <td class="text-center"><?php echo $id; ?></td>
                <td class="text-center">Username<?php echo $id; ?></td>
                <td class="text-center">admin<?php echo $id; ?></td>
                <td class="text-center">เพราะว่า : เหตุผลที่ <?php echo $id; ?></td>
                <td class="text-center">
                <?php
                    if ($id % 2 == 1) {
                        echo date("Y/m/d") . "<br>" . date("h:i:sa");
                    } else {
                        if ($id % 4 == 0) {
                        }
                        echo  "-";
                    }
                    ?>
                    
                </td>
                <td>
                    อุปกรณ์ ชื่อ :<?php echo $id; ?>
                </td>
                <td>
                    <?php
                    if ($id % 2 == 1) {
                        echo "2";
                    } else {
                        if ($id % 4 == 0) {
                        }
                        echo  "4";
                    }
                    ?>

                </td>
                <td>
                    
                        <?php
                        if ($id % 2 == 1) {?>
                            <span class="badge badge-success">อนุมัติ</span>
                            <?php
                        } else 
                            {?>
                            <span class="badge badge-danger">ไม่อนุมัติ</span>
                            <?php } ?>

                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>