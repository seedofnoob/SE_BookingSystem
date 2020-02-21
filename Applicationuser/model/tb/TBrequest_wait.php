    <table id="tb_user_wait" class="table table-bordered table-striped mt-5">
      <thead>
        <tr class="text-center bg-secondary">
          <th>ลำดับ</th>
          <th>อุปกรณ์ที่ยืม</th>
          <th>เหตุผลที่ยืม</th>
          <th>จำนวน</th>        
          <th>สถานะ</th>
          <th>ยกเลิกคำร้อง</th>
        </tr>
      </thead>
      <tbody>
      <?php for($id=1; $id <=50; $id++) { ?>
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
          <td class="text-center"><span class="badge badge-warning"><?php echo "รออนุมัติ" ?></span></td>
          <td class="text-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        ลบ
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> ยืนยันการลบ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">ยืนยัน</button>
                                </div>
                            </div>
                        </div>
                    </div>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
 


