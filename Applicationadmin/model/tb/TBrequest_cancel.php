  <table id="tb_user_cancel" class="table table-bordered table-striped mt-5">
    <thead>
      <tr class="text-center bg-secondary">
        <th>ลำดับ</th>
        <th>อุปกรณ์ที่ยืม</th>
        <th>เหตุผลที่ยืม</th>
        <th>จำนวน</th>
        <th>สถานะ</th>
        <th>เหตุผลที่ไม่อนุมัติ</th>
      </tr>
    </thead>
    <tbody>
    <?php for($id=1; $id <=30; $id++) { ?>
      <tr>
        <td class="text-center"><?php echo $id; ?></td>
        <td class="text-center">ชื่ออุปกรณ์</td>
        <td class="text-center">เพราะว่า : เหตุผลที่ <?php echo $id; ?></td>
        <td class="text-center">
        <?php 
          if($id%2==1){
            echo "1";
          }
          else{
            echo  "2";
          }
        ?>
        </td>
        <td class="text-danger text-center"><?php echo "ไม่สำเร็จ";?></td>
        <td class="text-center">เพราะว่า : เหตุผลที่ <?php echo $id; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
 


