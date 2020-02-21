<table id="tb_user_history" class="table table-bordered table-striped mt-5">
      <thead>
        <tr class="text-center bg-secondary">
          <th>ลำดับ</th>
          <th>กำหนดคืน</th>
          <th>ผู้อนุมัติ</th>
          <th>ผู้รับคืน</th>
          <th>อุปกรณ์ที่ยืม</th>
          <th>เหตุผลที่ยืม</th>
          <th>วันที่นัดหมายรับอุปกณ์</th>
          <th>จำนวน</th>        
          <th>สถานะ</th>
        </tr>
      </thead>
      <tbody>
      <?php for($id=1; $id <=400; $id++) { ?>
        <tr>
          <td class="text-center"><?php echo $id; ?></td>
          <td class="text-center"><?php echo date("Y/m/d") . "<br>" . date("h:i:sa"); ?></td>
          <td class="text-center">Admin</td>
          <td class="text-center">Admin</td>
          <td class="text-center">ชื่ออุปกรณ์</td>
          <td class="text-center">เพราะว่า : เหตุผลที่ <?php echo $id; ?></td>
          <td class="text-center">
          <?php echo date("d/m/Y") . "<br>" . date("h:i:sa"); ?>
          </td>
          <td class="text-center">
          <?php 
            if($id%2==1){
              echo "3";
            }
            else{
              echo  "2";
            }
          ?>
          </td>
          <td class="text-center"><?php 
            if($id%2==1){
              echo "คืนแล้ว";
            }
            else{
              echo  "กำลังยืม";
            }
          ?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
 


