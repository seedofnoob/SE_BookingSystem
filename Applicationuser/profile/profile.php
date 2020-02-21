<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ข้อมูลส่วนตัว</title>
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
                <div class="row card-header">
                    <div class="col-4 offset-4 text-center ">
                        <h2>ข้อมูลส่วนตัว</h2>

                    </div>
                </div>
                <div class="row">
                    <div class="col-6 text-right mt-3 mb-3">
                        <img src="../img\6030301055.jpg" class="rounded-sm " alt="">
                    </div>
                    <div class="col-6 text-left  mt-3 mb-3">
                        <h5>ชื่อ : สหวัสส์ พวงเรืองศรี</h5>
                        <h5>รหัสประจำตัว : 6030301055</h5>
                        <h5>คณะ : วิศวกรรมศาสตร์ศรีราชา</h5>
                        <h5>รหัสสาขา : T12</h5>
                        <h5>สาขาวิชา : วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์</h5>
                        <h5>สิทธิ์การใช้งาน : <span class="badge badge-success"><?php echo "นิสิต" ?></span></h5>
                    <h5>สถานะ : กำลังศึกษาอยู่</h5>
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
</body>

</html>