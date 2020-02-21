<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="dist/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="dist/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="dist/img/favicons/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>equipmentall</title>
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
                    <div class="col-12 text-center ">
                        <h2>เพิ่มอุปกรณ์</h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row ">
                        <div class="col-6  text-right pr-5">
                            <label for="exampleFormControlFile1">รูปภาพอุปกรณ์</label>
                            <label class="text-danger"> *</label>
                        </div>
                        <div class="col-6 text-left pl-5 ">
                            <input type="file" class="text-center">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-6 text-right pr-5">
                            <label for="exampleFormControlFile1">หมวดหมู่</label>
                        </div>
                        <div class="col-6 text-left  pl-5">
                            <div class="form-group" data-select2-id="13">
                                <select class="form-control select2 select2-hidden-accessible" style="width: 200px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option>ESP Board</option>
                                    <option>IC</option>
                                    <option>Relay Module</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 text-right pr-5">
                            <label for="exampleFormControlFile1">รุ่น </label>
                            <label class="text-danger"> *</label>
                        </div>
                        <div class="col-6 text-left pl-5">
                            <input type="text" style=" width:200px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 text-right pr-5">
                            <label for="exampleFormControlFile1">จำนวนอุปกรณ์</label>
                            <label class="text-danger"> *</label>
                        </div>
                        <div class="col-6 text-left pl-5">
                            <input type="int" style=" width:200px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="equipmentall.php"><button type="button" class="btn btn-primary ">ยืนยัน</button></a>
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
</body>

</html>