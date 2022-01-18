<?php include 'include/header.php';?>
<?php include 'include/sidebar.php';?>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<div class="content-wrapper">
  <div class="content-header sty-one">
    <h1>User Detail</h1> 
  </div>
  <div class="content userdetails">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="box-profile text-white">
              <div class="user-flag">
                <img class="profile-user-img img-responsive img-circle m-b-1" src="<?php echo site_url();?>common/images/user.png" alt="User profile picture">
              </div>
              <h3 class="profile-username text-center text-black">Alex Smith</h3> 
              <p class="text-dark text-center">India
                <img src="<?php echo site_url();?>common/images/flag.png" class="flag-icon">
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-lg-4 col-xs-6 m-b-3">
        <div class="card">
          <div class="card-body"><span class="info-box-icon bg-green"><i class="icon-phone"></i></span>
            <div class="info-box-content"> <span class="info-box-number f-14">Mobile number</span>  <span class="info-box-text">
 (+966) 9345678926  </span> 
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-6 m-b-3">
        <div class="card">
          <div class="card-body"><span class="info-box-icon bg-red"><i class="icon-envelope"></i></span>
            <div class="info-box-content"> <span class="info-box-number f-14">Email Id </span>  <span class="info-box-text">
alex123@gmail.com</span> 
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-6 m-b-3">
        <div class="card">
          <div class="card-body"><span class="info-box-icon bg-yellow"><i class="icon-user"></i></span>
            <div class="info-box-content"> <span class="info-box-number f-14">Unique ID</span>  <span class="info-box-text">
 10</span> 
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-6 m-b-3">
        <div class="card">
          <div class="card-body"><span class="info-box-icon bg-green"><i class='fas fa-chess-board'></i></span>
            <div class="info-box-content"> <span class="info-box-number f-14">Total Game Room</span>  <span class="info-box-text">
 10</span> 
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-6 m-b-3">
        <div class="card">
          <div class="card-body"><span class="info-box-icon bg-red"><i class='fas fa-coins'></i></span>
            <div class="info-box-content"> <span class="info-box-number f-14">Total Token</span>  <span class="info-box-text">
 10000</span> 
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-6 m-b-3">
        <div class="card">
          <div class="card-body"><span class="info-box-icon bg-yellow"><i class='fas fa-trophy'></i></span>
            <div class="info-box-content"> <span class="info-box-number f-14">Total Tournamanet</span>  <span class="info-box-text">
 2</span> 
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--  <div class="card mt-4">
      <div class="card-header mb-4">
        <h5 class="card-title">Uploaded Videos</h5>
      </div>
      <div class="card-body">
        <div class="row mb-2">
          <div class="col-lg-4 col-xs-6 m-b-3">
            <div class="form-group">
              <label>From</label>
              <input type="date" name="" class="form-control">
            </div>
          </div>
          <div class="col-lg-4 col-xs-6 m-b-3">
            <div class="form-group">
              <label>To</label>
              <input type="date" name="" class="form-control">
            </div>
          </div>
          <div class="col-lg-4 col-xs-6 mt-4">
            <button class="btn btn-primary pt-2 pb-2 mt-1 w-100">Search</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="example1" class="table table-bordered">
            <thead>
              <tr>
                <th>Sr. No.</th>
                <th>Video Title</th>
                <th>Video Type</th>
                <th>Category</th>
                <th>Posted On</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>My Journey</td>
                <td>Challenge</td>
                <td>ABC</td>
                <td>10/07/2020</td>
                <td><a href="<?php echo site_url('video-detail');?>" class="edit-composemail"><i class="fa fa-eye"></i></a>
                  <a href="#" class="edit-composemail"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>01</td>
                <td>My Journey</td>
                <td>Challenge</td>
                <td>ABC</td>
                <td>10/07/2020</td>
                <td><a href="<?php echo site_url('video-detail');?>" class="edit-composemail"><i class="fa fa-eye"></i></a>
                  <a href="#" class="edit-composemail"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>01</td>
                <td>My Journey</td>
                <td>Challenge</td>
                <td>ABC</td>
                <td>10/07/2020</td>
                <td><a href="<?php echo site_url('video-detail');?>" class="edit-composemail"><i class="fa fa-eye"></i></a>
                  <a href="#" class="edit-composemail"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>01</td>
                <td>My Journey</td>
                <td>Challenge</td>
                <td>ABC</td>
                <td>10/07/2020</td>
                <td><a href="<?php echo site_url('video-detail');?>" class="edit-composemail"><i class="fa fa-eye"></i></a>
                  <a href="#" class="edit-composemail"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>01</td>
                <td>My Journey</td>
                <td>Challenge</td>
                <td>ABC</td>
                <td>10/07/2020</td>
                <td><a href="<?php echo site_url('video-detail');?>" class="edit-composemail"><i class="fa fa-eye"></i></a>
                  <a href="#" class="edit-composemail"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div> -->
    </div>
  </div>
  <?php include 'include/footer.php';?>