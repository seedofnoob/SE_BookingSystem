<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>คำร้องทั้งหมด</title>
  <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link rel="stylesheet" href="../include/style.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->

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
          <div class="col-12">
            <h2 class="text-center">สถานะคำร้อง</h2>
          </div>
        </div>
        <!-- End card header -->
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
          <div class="row">
            <div class="container mt-1">
              <div class="card-header">
                <div class="container">
                  <div class="row">
                    <ul class="nav nav-pills mb-1 " id="pills-tab" role="tablist">
					  <li class="nav-item text-center">
                        <a class="nav-link active" data-toggle="pill" href="#pills-history" role="tab" aria-controls="pills-history" aria-selected="false">ประวัติการยืม-คืน</a>
                      </li>
                      <li class="nav-item text-center">
                        <a class="nav-link " data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">รออนุมัติ</a>
                      </li>
                      <li class="nav-item text-center">
                        <a class="nav-link" data-toggle="pill" href="#pills-cancel" role="tab" aria-controls="pills-cancel" aria-selected="false">คำร้องไม่สำเร็จ</a>
                      </li>
                      <li class="nav-item text-center">
                        <a class="nav-link" data-toggle="pill" href="#pills-allow" role="tab" aria-controls="pills-allow" aria-selected="false">อนุมัติแล้ว</a>
                      </li>
                      <li class="nav-item text-center">
                        <a class="nav-link" data-toggle="pill" href="#pills-borrow" role="tab" aria-controls="pills-borrow" aria-selected="false">กำลังยืม</a>
                      </li>
                      <li class="nav-item text-center">
                        <a class="nav-link" data-toggle="pill" href="#pills-return" role="tab" aria-controls="pills-return" aria-selected="false">คืนแล้ว</a>
                      </li>
                      <li class="nav-item text-center">
                        <a class="nav-link" data-toggle="pill" href="#pills-not-return" role="tab" aria-controls="pills-not-return" aria-selected="false">ค้างคืน</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="tab-content mb-1" id="pills-tabContent">
                <div class="tab-pane fade " id="pills-home" role="tabpanel">
                  <?php include_once('../model/tb/TBrequest_wait.php') ?>
                </div>
                <div class="tab-pane fade" id="pills-cancel" role="tabpanel">
                  <?php include_once('../model/tb/TBrequest_cancel.php') ?>
                </div>
                <div class="tab-pane fade" id="pills-allow" role="tabpanel">
                  <?php include_once('../model/tb/TBrequest_allow.php') ?>
                </div>
                <div class="tab-pane fade show active" id="pills-history" role="tabpanel">
                  <?php include_once('../model/tb/TBrequest_history.php') ?>
                </div>
				<div class="tab-pane fade" id="pills-borrow" role="tabpanel">
                  <?php include_once('../model/tb/TBrequest_borrow.php') ?>
                </div>
                <div class="tab-pane fade" id="pills-return" role="tabpanel">
                  <?php include_once('../model/tb/TBrequest_return.php') ?>
                </div>
                <div class="tab-pane fade" id="pills-not-return" role="tabpanel">
                  <?php include_once('../model/tb/TBrequest_not_return.php') ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <?php include_once('../model/tb/TBrequest_wait.php') ?>
          </div>
        </div>
        <!-- End card body -->
      </div>
      <!-- End container card -->
    </div>
    <!-- End content wrapper -->
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