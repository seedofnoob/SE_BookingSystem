<div class="container mt-1">
  <div class="card-header">
    <div class="container">
      <div class="row">
        <ul class="nav nav-pills mb-1 " id="pills-tab" role="tablist">
        <li class="nav-item text-center">
          <a class="nav-link active" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">User</a>
        </li>
        <li class="nav-item text-center">
          <a class="nav-link" data-toggle="pill" href="#pills-cancel" role="tab" aria-controls="pills-cancel" aria-selected="false">Admin</a>
        </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="card-body">
    <div class="container text-right mb-2">
        <a href="addAdmin.php"><button class="btn btn-warning">เพิ่ม Admin</button></a>
    </div>
    <div class="tab-content mb-1" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" >
            <?php include_once('../model/tb/TBshowuser.php') ?>
        </div>
        <div class="tab-pane fade" id="pills-cancel" role="tabpanel" >
            <?php include_once('../model/tb/TBshowadmin.php') ?>
        </div>
    </div>
</div>