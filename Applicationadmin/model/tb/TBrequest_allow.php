    <table id="tb_user_allow" class="table table-bordered table-striped mt-5">
      <thead>
        <tr class="text-center bg-secondary">
          <th>ลำดับ</th>
          <th>อุปกรณ์ที่ยืม</th>
          <th>เหตุผลที่ยืม</th>
          <th>จำนวน</th>        
          <th>สถานะ</th>
          <th>วันที่นัดหมายรับอุปกณ์</th>
        </tr>
      </thead>
      <tbody>
      <?php for($id=1; $id <=100; $id++) { ?>
        <tr>
          <td class="text-center"><?php echo $id; ?></td>
          <td class="text-center">ชื่ออุปกรณ์</td>
          <td class="text-center">เพราะว่า : เหตุผลที่ <?php echo $id; ?></td>
          <td class="text-center">
          <?php 
            if($id%2==1){
              echo "2";
            }
            else{
              echo  "4";
            }
          ?>
          </td>
          <td class="text-center"><?php echo "อนุมัติ";?></td>
          <td class="text-center">
          <?php echo date("d/m/Y") . "<br>" . date("h:i:sa"); ?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
 


