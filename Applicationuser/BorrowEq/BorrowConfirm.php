<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  <title>Document</title>
  <link rel="stylesheet" href="../include/style.css">
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
          <div class="col">
            <div class="text-center">
              <h2>หน้ายืนยันคำร้อง</h2>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <?php require_once("../model/tb/tb_borrow_confirm.php") ?>
            </div>
          </div>

          <div class="row">
            <div class="col-12 text-center mt-4 mb-4">


              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" style="width:250px;height:55px" data-toggle="modal" data-target="#exampleModal">
              ยืนยันการรับของ
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"> ยืนยันการรับของ</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                      <a href="../request/request.php">
                        <button type="button" class="btn btn-primary">ยืนยัน</button>
                      </a>

                    </div>
                  </div>
                </div>
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

  <!-- DataTables -->
  <script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
  <script src="../config/tb_config.js"></script>
</body>

</html>