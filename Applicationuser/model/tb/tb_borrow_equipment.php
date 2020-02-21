
  
  
  <table id="tb_borrow_equipment" class="table table-bordered table-striped mt-5">
      <thead class="bg-secondary">
      <tr class="text-center">
          <th class="text-center">เลือก</th>
          <th class="text-center">ลำดับ</th>
	<th class="text-center">รูปภาพ</th>
          <th class="text-center">หมวดหมู่</th>
          <th class="text-center">ชื่ออุปกรณ์</th>
          <th class="text-center">จำนวน</th>
      </tr>
      </thead>
      <tbody>
      <?php for($id=1; $id <5; $id++) { ?>
        <tr class="text-center">
        <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                            <td class="text-center"><?php echo $id?></td>
				<td class="text-center"><img src="../img/gf.jpg"style="width:100px"></td>
                            <td class="text-center">
                            <?php 
                                  if ($id%2==0) {
                                    echo "ESP Board";
                                    }
                                  else {echo "IC";}
                            ?>
                            </td>
                            <td class="text-center">
                            <?php 
                                  if ($id%2==0) {
                                    echo "ESP-WROOM-32";
                                    }
                                  else {echo "IC 7404";}
                            ?>

                            </td>
                            <td class="text-center">
                              <?php
                              echo(rand(5,20));
                              ?>
                            </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
 


