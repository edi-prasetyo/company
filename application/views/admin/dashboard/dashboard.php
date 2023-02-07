<div class="row">


  <div class="col-lg-6">
    <div class="small-box bg-purple">
      <div class="inner">
        <h3><?php echo count($company) ?></h3>

        <p>Total Perusahan</p>
      </div>
      <div class="icon">
        <i class="fa fa-coins"></i>
      </div>
    </div>
  </div>


  <div class="col-lg-3">
    <div class="small-box bg-olive">
      <div class="inner">
        <h3><?php echo count($send_success); ?></h3>

        <p>Total Email Terkirim</p>
      </div>
      <div class="icon">
        <i class="fa fa-paper-plane"></i>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="small-box bg-danger">
      <div class="inner">
        <h3><?php echo count($send_failed); ?></h3>

        <p>Total Email Gagal</p>
      </div>
      <div class="icon">
        <i class="fa fa-times"></i>
      </div>
    </div>
  </div>
</div>