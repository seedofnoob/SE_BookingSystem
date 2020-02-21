<table id="tb_consider" class="table table-bordered table-striped mt-5">
      <thead class="bg-secondary">
      <tr>
        <th>ลำดับ</th>
        <th>รหัสนิสิต</th>
        <th>ชื่ออุปกรณ์</th>
        <th>จำนวน</th>
        <th>วันที่ทำรายการ</th>
        <th>เหตุผลที่ยืม</th>
        <th>สถานะ</th>
        <th>ค้างคืน</th>
      </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center">1</td>
          <td class="text-center">รหัสนิสิต</td>
          <td class="text-center">ชื่ออุปกรณ์</td>
          <td class="text-center">1</td>
          <td class="text-center"><?php echo date("Y/m/d") . "<br>" . date("h:i:sa"); ?></td>
          <td class="text-center">เหตุผลที่ยืม:</td>
          <td class="text-center">กำลังรออนุมัติ</td>
          <td class="text-center text-danger">ค้างคืน</td>
        </tr>
      </tbody>
    </table>