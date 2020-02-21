<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>สรุปการยืมอุปกรณ์</title>
  <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
</head>

<body>
  <div class="wrapper">
    <?php include_once('../model/menu/sidebar.php') ?>
    <div class="content-wrapper">


      <div class="container card mt-5">
        <div class="card-header">
          <div class="row">
            <div class="row mt-2">
              <ul class="nav nav-pills mb-2 bg-customt" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="false">ทั้งหมด</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#pills-complete" role="tab" aria-controls="pills-complete" aria-selected="false">รออนุมัติ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#pills-incomplete" role="tab" aria-controls="pills-incomplete" aria-selected="false">ยังไม่คืน</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-wait" role="tab" aria-controls="pills-wait" aria-selected="true">คืนแล้ว</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#pills-cancel" role="tab" aria-controls="pills-cancel" aria-selected="false">ไม่อนุมัติ</a>
                </li>
              </ul>
            </div>
          </div>

        </div>
        <div class="card-body">
          <div class="tab-content mb-2" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel">
              <?php include_once('../model/tb/tb_borrow_all.php') ?>
            </div>
            <div class="tab-pane fade show" id="pills-complete" role="tabpanel">
              <?php include_once('../model/tb/tb_borrow_complete.php') ?>
            </div>
            <div class="tab-pane fade" id="pills-incomplete" role="tabpanel">
              <?php include_once('../model/tb/tb_borrow_incomplete.php') ?>
            </div>
            <div class="tab-pane fade" id="pills-wait" role="tabpanel">
              <?php include_once('../model/tb/tb_borrow_wait.php') ?>
            </div>
            <div class="tab-pane fade" id="pills-cancel" role="tabpanel">
              <?php include_once('../model/tb/tb_borrow_cancel.php') ?>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="card-body">
      <div class="tab-content mb-2" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-tb" role="tabpanel">
          <?php include_once('../model/tb/tb_borrow_complete.php') ?>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel">
          <?php include_once('../model/tb/tb_borrow_incomplete.php') ?>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel">
          <?php include_once('../model/tb/tb_borrow_wait.php') ?>
        </div>
        <div class="tab-pane fade" id="pills-contact1" role="tabpanel">
          <?php include_once('../model/tb/tb_borrow_cancel.php') ?>
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

  <!-- DataTables -->
  <script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>

  <script src="../config/tb_config.js"></script>


</body>

</html>