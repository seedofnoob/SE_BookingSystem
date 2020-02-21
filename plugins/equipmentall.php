<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="dist/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="dist/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="dist/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="dist/img/favicons/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>equipmentall</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="asset.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="style.css">  
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
  
</head>
<body >
<div class="wrapper">
  <?php include_once('sidebar.php') ?>
  <div class="content-wrapper">
  <br>
    <div class="container card mt-5 elevation-2">
            <div class="row card-header bg-header" >
                <div class="col-12">
                    <h2 class="text-center">อุปกรณ์ทั้งหมด</h2>
                </div>

            </div>
            <div class="card-body">
                <div class="row text-right">
                    <div class="col-12 pr-3">
                        <a href="equipmentadd.php"><button type="button" class="btn btn-primary " >เพิ่มอุปกรณ์</button></a>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <?php include_once('tbequipmentall.php') ?>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>

    







    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- DataTables -->
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <script>
    $(function () {
        $('#dataTable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true
        });
    });

    function deleteItem (id) { 
        if( confirm('Are you sure, you want to delete this item?') == true){
        window.location=`delete.php?id=${id}`;
        // window.location='delete.php?id='+id;
        }
    };

</script>
</body>
</html>