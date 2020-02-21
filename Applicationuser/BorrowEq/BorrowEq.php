<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  <title>Document</title>
</head>

<body>
  <div class="wrapper">
    <?php include_once('../model/menu/sidebar.php') ?>
    <div class="content-wrapper">
      <br>
      <br>
      <br>
      <div class="container card">
        <div class="row card-header bg-header">
          <div class="col-12">
            <div class="text-center">
              <h2>อุปกรณ์</h2>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <?php require_once("../model/tb/tb_borrow_equipment.php") ?>
          </div>
          <div class="row">

            <div class="col-4 offset-4 mt-4">
              <a href="BorrowConfirm.php">
                <button type="button" class="container-fluid btn btn-lg btn-primary" style="height:55px">ยืม</button>
              </a>
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