<!DOCTYPE html>
<html lang="en">

<head>
    meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="dist/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="dist/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="dist/img/favicons/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>consider</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../include/style.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
</head>

<body>
    <div class="wrapper">
        <?php include_once('../model/menu/sidebar.php') ?>
        <div class="content-wrapper">
            <br>
            <div class="container card mt-5 elevation-2">
                <div class="row card-header bg-header">
                    <div class="col-12 ">
                        <h2 class="text-center">
                            พิจารณาคำร้อง
                        </h2>
                    </div>
                    <div class="row mb-3">
                        <div class="col-xl-12 py-2">
                            <?php include_once('../model/tb/tbconsider.php') ?>
                        </div>
                        <div class="col-xl-12 py-2 ">
                            <div>
                                **กรณีอนุมัติ**
                            </div>
                            <div>
                                ปฏิทิน <input type="datetime-local" class="input input-html5-datetime-local">
                            </div>
                        </div>
                        <div class="col-12 text-right">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">
                                อนุมัติ
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">อนุมัติ</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                            <a href="history.php">
                                                <button type="button" class="btn btn-primary">ยืนยัน</button>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">
                                ไม่อนุมัติ
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="exampleModalLabel2">ไม่อนุมัติ</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>

                                            <div class="form-group text-center">
                                                    <label for="message-text" class="col-form-label">เหตุผล:</label>
                                                    <textarea class="form-control" id="message-text"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                            <a href="index.php">
                                                <button type="button" class="btn btn-primary">ยืนยัน</button>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- jQuery -->
                <script src="../../plugins/jquery/jquery.min.js"></script>
                <!-- Bootstrap 4 -->
                <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- SlimScroll -->
                <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
                <!-- FastClick -->
                <script src="../../plugins/fastclick/fastclick.js"></script>
                <!-- AdminLTE App -->
                <script src="../../dist/js/adminlte.min.js"></script>
                <!-- AdminLTE for demo purposes -->
                <script src="../../dist/js/demo.js"></script>
                <!-- DataTables -->
                <script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
                <script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
                <script src="../config/tb_config.js"></script>

</body>

</html>