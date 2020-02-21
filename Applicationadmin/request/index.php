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
    <title>dashboard</title>
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
                            รายการ-ยืมคืนอุปกรณ์
                        </h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mt-0">
                        <div class="col bg-primary mr-2">
                            <h5 class="text-center pt-2">
                                คำร้องทั้งหมด<br>400
                            </h5>
                        </div>
                        <div class="col bg-success mr-2">
                            <h5 class="text-center pt-2">
                                อนุมัติแล้ว<br>100
                            </h5>
                        </div>
                        <div class="col bg-warning mr-2">
                            <h5 class="text-white text-center pt-2">
                                รออนุมัติ<br>50
                            </h5>
                        </div>
                        <div class="col bg-danger">
                            <h5 class="text-center pt-2">
                                ยกเลิก/ไม่อนุมัติ<br>30
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 py-2">
                    <h2>
                        คำร้องทั้งหมด
                    </h2>
                    

                </div>
                
                <div class="col-xl-12 py-2">
                    <?php include_once('../model/tb/tbrequest.php') ?>
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