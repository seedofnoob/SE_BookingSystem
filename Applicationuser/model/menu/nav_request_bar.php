<div class="container mt-1">
  <div class="card-header">
    <div class="container">
      <div class="row">
        <ul class="nav nav-pills mb-1 " id="pills-tab" role="tablist">
        <li class="nav-item text-center">
          <a class="nav-link active" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">รออนุมัติ</a>
        </li>
        <li class="nav-item text-center">
          <a class="nav-link" data-toggle="pill" href="#pills-cancel" role="tab" aria-controls="pills-cancel" aria-selected="false">คำร้องไม่สำเร็จ</a>
        </li>
        <li class="nav-item text-center">
          <a class="nav-link" data-toggle="pill" href="#pills-allow" role="tab" aria-controls="pills-allow" aria-selected="false">อนุมัติแล้ว</a>
        </li>
        <li class="nav-item text-center">
          <a class="nav-link"  data-toggle="pill" href="#pills-history" role="tab" aria-controls="pills-history" aria-selected="false">ประวัติการยืม-คืน</a>
        </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="card-body">
  <div class="tab-content mb-1" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" >
      <?php include_once('../model/tb/TBrequest_wait.php') ?>
    </div>
    <div class="tab-pane fade" id="pills-cancel" role="tabpanel" >
      <?php include_once('../model/tb/TBrequest_cancel.php') ?>
    </div>
    <div class="tab-pane fade" id="pills-allow" role="tabpanel" >
      <?php include_once('../model/tb/TBrequest_allow.php') ?>
    </div>
    <div class="tab-pane fade" id="pills-history" role="tabpanel" >
      <?php include_once('../model/tb/TBrequest_history.php') ?>
    </div>
  </div>
</div>