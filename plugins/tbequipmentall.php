<table id="dataTable" class="table table-bordered table-striped mt-5">
      <thead>
      <tr class="text-center">
        <th>ลำดับ</th>
        <th>หมวดหมู่ </th>
        <th>รูปภาพ</th>
        <th>รุ่น</th>
        <th>จำนวน</th>
        <th>แก้ไข</th>
        <th>ลบ</th>
      </tr>
      </thead>
      <tbody>
      <?php for($id=1; $id <4; $id++) { ?>
        <tr>
          <td class="text-center"><?php echo $id; ?></td>
          <td class="text-center">Esp Board</td>
          <td class="text-center"><img src="gf.jpg" class="rounded "style=" width:100px;" alt=""></td>
          <td class="text-center">ESP 8<?php echo $id; ?>66</td>
          <td class="text-center">10</td>
          <td class="text-center"><a href="equipmentmodify.php"> <button type="button" class="btn btn-warning " > แก้ไข</button></a></td>
          <td class="text-center"><a href="#" onclick="deleteItem(<?php echo $id; ?>);"><button type="button" class="btn btn-danger " > ลบ</button></a> </td>
          
          
        </tr>
      <?php } ?>
      </tbody>
    </table>
 


