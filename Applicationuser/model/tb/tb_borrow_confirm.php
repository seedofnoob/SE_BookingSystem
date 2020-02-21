<table id="tb_borrow_confirm" class="table table-bordered table-striped mt-5">
  <thead class="bg-secondary">
    <tr class="text-center">
      <th class="text-center">รายการที่</th>
      <th class="text-center">รูปภาพ</th>
      <th class="text-center">อุปกรณ์ที่ยืม</th>

      <th class="text-center">จำนวน<label class="text-danger">*</label></th>
      <th class="text-center">กำหนดวันที่คืนอุปกรณ์<label class="text-danger">*</label></th>
      <th class="text-center">เหตุผลการยืม<label class="text-danger">*</label></th>

    </tr>
  </thead>
  
  <tbody class="text-center">
  <?php for($id=1; $id <3; $id++) { ?>
    <tr class="text-center">
    <td class="text-center"><?php echo $id?></td>
      <td><img src="../img/gf.jpg" style="width:100px"></td>
      <td>ESP-WROOM-32</td>
      <td>
        <div class="form-group text-center" data-select2-id="13">
          <div class="container text-center">
            <div class="row ">
              <div class="col-4 offset-2 ">
                <select class="form-control select2 select2-hidden-accessible " style="width: 90px" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option data-select2-id="18">1</option>
                  <option data-select2-id="19">2</option>
                  <option data-select2-id="20">3</option>
                  <option data-select2-id="21">4</option>
                  <option data-select2-id="22">5</option>
                  <option data-select2-id="23">6</option>
                </select>
              </div>
            </div>
          </div>
        </div>

      </td>
      <td>
        <div class="row">
          <div class="col">
            <input type="datetime-local" class="input input-html5-datetime-local" style="width:220px ;height:20px;">
          </div>
        </div>
      </td>
      <td>
        <div class="row ">
          <div class="col-12">
            <div class="text-center  ">
              <textarea class=" " style="width:100px ;height:70px;" aria-label="With textarea"></textarea>
            </div>
          </div>
        </div>
      </td>

    </tr>
  </tbody>
  <?php } ?>
</table>