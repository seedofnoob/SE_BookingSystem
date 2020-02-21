<table id="tb_request" class="table table-bordered table-striped mt-5 " >
      <thead class="bg-secondary">
      <tr>
        <th>ลำดับ</th>
        <th>รหัสนิสิต</th>
        <th>ชื่ออุปกรณ์</th>
        <th>จำนวน</th>
        <th>วันที่ทำรายการ</th>
        <th>เหตุผลที่ยืม</th>
        <th>สถานะ</th>
        <th>ค้างคืน</th>
        <th>รับคำร้อง</th>
      </tr>
      </thead>
      <tbody>
      <?php for($id=1; $id <=10; $id++) { ?>
        <tr>
          <td class="text-center"><?php echo $id; ?></td>
          <td class="text-center">รหัสนิสิต<?php echo $id; ?></td>
          <td class="text-center">ชื่ออุปกรณ์<?php echo $id; ?></td>
          <td class="text-center"><?php echo $id; ?></td>
          <td class="text-center"><?php echo date("Y/m/d") . "<br>" . date("h:i:sa"); ?></td>
          <td class="text-center">เหตุผลที่ยืม:<?php echo $id; ?></td>
          <td class="text-center">กำลังรออนุมัติ</td>
          <td class="text-center">
            <?php 
              if($id==1){ 
                echo "ค้างคืน" ;
              }
              else{
                echo "-";
              }
            ?>
          </td>
          <td class="text-center"><a href="consider.php"><button type="button" class="btn btn-warning" >รับคำร้อง</button></a></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
 


