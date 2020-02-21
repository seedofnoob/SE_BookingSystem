<table id="tb_delay_not_return" class="table table-bordered table-striped mt-5">
      <thead>
        <tr class="text-center bg-secondary">
          <th>ลำดับ</th>
          <th>อุปกรณ์ที่ยืม</th>
          <th>เหตุผลที่ยืม</th>
          <th>จำนวน</th>        
          <th>ผู้อนุมัติ</th>        
          <th>สถานะ</th>
          <th>ยืดเวลาการยืม</th>
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
          <td class="text-center"><?php echo "admin";?></td>
          <td class="text-center text-danger"><?php echo "ค้างคืน";?></td>
          <td class="text-center"><a href="#" onclick=""><button type="button" class="btn btn-warning text-white" >ยืดเวลา</button></a> </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
 


