
  
  
  <table id="tb_borrow_incomplete" class="table table-bordered table-striped mt-5">
      <thead>
      <tr class="text-center">
        <th>ลำดับ</th>
        <th>ผู้อนุมัติยืม </th>
        <th>ผู้รับคืน</th>
        <th>เหตุผลที่ยืม</th>
        <th>วันที่เอาอุปกรณ์</th>
        <th>อุปกรณ์ที่ยืม</th>
        <th>สถานะ</th>
        <th>จำนวน</th>
        <th>เปลี่ยนสถานะ</th>
      </tr>
      </thead>
      <tbody>
      <?php for($id=0; $id <400; $id++) { ?>
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
          <?php 
          if($id%2==1){
            echo "รอ";
          }
         else{
           echo  "คืนแล้ว";
         }
           ?>
          </td>
          <td>
          <?php 
          if($id%2==1){
            echo "2";
          }
         else{
           if($id%4==0){

           }
           echo  "4";
         }
           ?>
           
          </td>
          <td>
              <button onclick="completeItem(<?php echo $id?>)" class="btn btn-info">คืนแล้ว</button>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
 


