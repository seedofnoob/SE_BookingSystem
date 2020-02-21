<table id="tb_admin_equipmentall" class="table table-bordered table-striped mt-5">
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
    <?php for ($id = 1; $id < 4; $id++) { ?>
      <tr>
        <td class="text-center"><?php echo $id; ?></td>
        <td class="text-center">Esp Board</td>
        <td class="text-center"><img src="../img/gf.jpg" class="rounded " style=" width:100px;" alt=""></td>
        <td class="text-center">ESP 8<?php echo $id; ?>66</td>
        <td class="text-center">10</td>
        <td class="text-center"><a href="equipmentmodify.php"> <button type="button" class="btn btn-warning "> แก้ไข</button></a></td>
        <td class="text-center">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">
            ลบ
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-danger" id="exampleModalLabel2">ยืนยันการลบ</h5>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                  <a href="../equipment/equipmentall.php">
                    <button type="button" class="btn btn-primary">ยืนยัน</button>
                  </a>

                </div>
              </div>
            </div>
          </div>
        </td>


      </tr>
    <?php } ?>
  </tbody>
</table>