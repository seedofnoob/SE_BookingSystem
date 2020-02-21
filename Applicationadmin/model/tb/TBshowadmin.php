<div class="col-12 text-right mb-3">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">
        เพิ่ม admin
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel2">เพิ่ม admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">ชื่อ - นามสกุล</span>
                            </div>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">Username</span>
                            </div>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">Password</span>
                            </div>
                            <input type="password" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                    </form>
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
</div>

<table id="tb_admin_show" class="table table-bordered table-striped mt-2">
    <thead>
        <tr class="text-center bg-secondary">
            <th>ลำดับ</th>
            <th>ชื่อ-นามสกุล</th>
            <th>Username</th>
           
            <th>ลบ</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($id = 1; $id <= 5; $id++) { ?>
            <tr>
                <td class="text-center"><?php echo $id; ?></td>
                <td class="text-center">Firstname Lastname</td>
                <td class="text-center">admin <?php echo $id; ?></td>
               
                <td class="text-center ">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteadmin" data-whatever="@mdo">
                        ลบ
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteadmin" tabindex="-1" role="dialog" aria-labelledby="deleteadmin" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-danger" id="deleteadmin">ลบ User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                               
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    <a href="index.php">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">ยืนยัน</button>
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