
  
  
  <table id="tb_borrow_complete" class="table table-bordered table-striped mt-5">
      <thead>
      <tr class="text-center">
        <th>ลำดับ</th>
        <th>ผู้ยืม </th>
        <th>ผู้รับคืน</th>
        <th>เหตุผลที่ยืม</th>
        <th>วันที่ทำรายการให้ไปเอาอุปกรณ์</th>
        <th>อุปกรณ์ที่ยืม</th>
        <th>จำนgวน</th>
      </tr>
      </thead>
      <tbody>
      <?php for($id=1; $id <400; $id++) { ?>
        <tr class="text-center">
          <td class="text-center"><?php echo $id; ?></td>
          <td class="text-center">Username<?php echo $id; ?></td>
          <td class="text-center">FirstName<?php echo $id; ?></td>
          <td class="text-center">เพราะว่า : เหตุผลที่ <?php echo $id; ?></td>
          <td class="text-center">
          <?php echo date("Y/m/d") . "<br>" . date("h:i:sa"); ?>
          </td>
          <td>
            อุปกรณ์ ชื่อ :<?php echo $id; ?>
          </td>
         
          <td>
          3
           
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
 


