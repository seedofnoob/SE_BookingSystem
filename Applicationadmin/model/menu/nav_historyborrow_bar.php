
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
    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" >
      <?php include_once('../model/tb/tb_borrow_all.php') ?>
      </div>
      <div class="tab-pane fade show" id="pills-complete" role="tabpanel" >
      <?php include_once('../model/tb/tb_borrow_complete.php') ?>
      </div>
      <div class="tab-pane fade" id="pills-incomplete" role="tabpanel" >
      <?php include_once('../model/tb/tb_borrow_incomplete.php') ?>
      </div>
      <div class="tab-pane fade" id="pills-wait" role="tabpanel" >
      <?php include_once('../model/tb/tb_borrow_wait.php') ?>
      </div>
      <div class="tab-pane fade" id="pills-cancel" role="tabpanel" >
      <?php include_once('../model/tb/tb_borrow_cancel.php') ?>
      </div>
    </div>
  </div>
</div>