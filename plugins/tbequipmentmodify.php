<table id="dataTable" class="table table-bordered table-striped mt-5">
      <thead>
      <tr class="text-center">
        <th>ลำดับ</th>
        <th>หมวดหมู่ </th>
        <th>รุ่น</th>
        <th>จำนวน</th>
        <th>เพิ่มจำนวน</th>
        <th>ลดจำนวน</th>
      </tr>
      </thead>
      <tbody>
        <?php for($id=1; $id <2; $id++) { ?>
            <tr >
                <td class="text-center"><?php echo $id; ?></td>
                <td class="text-center">
                  <div class="form-group " data-select2-id="13">
                      <select class="form-control select2 select2-hidden-accessible text-center" style="width: 200px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option >ESP Board</option>
                      <option >IC</option>
                      <option >Relay Module</option>
                      </select>
                  </div>
                </td>
                <td class="text-center"><input type="text" class="text-center" value="ESP 8<?php echo $id; ?>66" ></td>
                <td class="text-center">10</td>
                <td class="text-center"><input type="int" class="text-center" style=" width:100px;" ></td>
                <td class="text-center"><input type="int" class="text-center" style=" width:100px;" ></td>
            </tr>
        <?php } ?>
      </tbody>
    </table>
 
