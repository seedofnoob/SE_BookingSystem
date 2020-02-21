
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>

<body>

    <div class="container">
        <div class="row mt-4">  
            <div class="col-4 offset-4 mt-5">
                <div class="card">
                    <div class="card-header">
                        <div class="col-12 text-center">
                            <h2>ลงชื่อเข้าใช้
                            </h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <form action="../request/request.php">
                                <!-- ROW of textbox (email) -->
                                <div class="row mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control"  placeholder="Email">
                                    </div>
                                </div>
                                <!-- ROW of textbox (password) -->
                                <div class="row">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                        </div>
                                        <input type="password" class="form-control"  placeholder="password">
                                    </div>
                                </div>
                                <!-- ROW of button (button) -->
                                <div class="row text-center">
                                    <div class="col-12 mt-2">
          
                                            <button class="btn btn-primary"type="submit">Login</button>
              
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
       
            </div>
        </div>
       
    </div>
   
    
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