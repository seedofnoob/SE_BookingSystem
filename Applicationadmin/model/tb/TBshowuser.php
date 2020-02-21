<div class="col-12">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>

        </div>

    </div>
    <div class="col-12 text-right"> <a href="#">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#adduser" data-whatever="@mdo">
                Import
            </button>

            <!-- Modal -->
            <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="adduser" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="adduser">ยืนยันการเพิ่ม</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                            <a href="index.php">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">ยืนยัน</button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </a></div>
</div>
<table id="tb_user_show" class="table table-bordered table-striped mt-2">
    <thead>
        <tr class="text-center bg-secondary">
            <th>ลำดับ</th>
            <th>ชื่อ-นามสกุล</th>
            <th>Username</th>
            <th>ดูข้อมูล</th>
        </tr>

    </thead>
    <tbody>
        <?php for ($id = 1; $id <= 5; $id++) { ?>
            <tr>
                <td class="text-center"><?php echo $id; ?></td>
                <td class="text-center">Firstname Lastname</td>
                <td class="text-center">user <?php echo $id; ?></td>


                <td class="text-center">
                    <a href="../profile/userprofile.php">
                        <i class="fas fa-search"></i>
                    </a>

                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>