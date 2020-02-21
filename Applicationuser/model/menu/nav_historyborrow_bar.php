
<div class="container-fluid card mt-5">
  <div class="card-header">
    <div class="row">
      <div class="row mt-2">
        <ul class="nav nav-pills mb-2 bg-customt" id="pills-tab" role="tablist"> 
        <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">ทั้งหมด</a>
          </li>         
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">รออนุมัติ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">ยังไม่คืน</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-tb" role="tab" aria-controls="pills-home" aria-selected="true">คืนแล้ว</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#pills-contact1" role="tab" aria-controls="pills-contact" aria-selected="false">ไม่อนุมัติ</a>
          </li>
        </ul>
      </div>
    </div>
    
  </div>
  <div class="card-body">
    <div class="tab-content mb-2" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-tb" role="tabpanel" >
      <?php include_once('../model/tb/tb_borrow_complete.php') ?>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" >
      <?php include_once('../model/tb/tb_borrow_incomplete.php') ?>
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" >
      <?php include_once('../model/tb/tb_borrow_wait.php') ?>
      </div>
      <div class="tab-pane fade" id="pills-contact1" role="tabpanel" >
      <?php include_once('../model/tb/tb_borrow_cancel.php') ?>
      </div>
    </div>
  </div>
</div>