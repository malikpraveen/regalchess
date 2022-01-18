<?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <div class="content-wrapper">
            <div class="content-header sty-one">
                <h1>Dashboard</h1> 
            </div>

            <div class="content"> 
          <div class="row">
        <div class="col-lg-6 col-xs-6 m-b-3">
          <div class="card">
            <div class="card-body"><span class="info-box-icon bg-green"><i class="icon-user"></i></span>
              <div class="info-box-content"> <span class="info-box-number">100</span> <span class="info-box-text">
Total Users </span> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xs-6 m-b-3">
          <div class="card">
            <div class="card-body"><span class="info-box-icon bg-green"><i class='fas fa-chess-board'></i></span>
              <div class="info-box-content"> <span class="info-box-number">100</span> <span class="info-box-text">
Total Game Rooms </span> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xs-6 m-b-3">
          <div class="card">
            <div class="card-body"><span class="info-box-icon bg-green"><i class='fas fa-chess'></i></span>
              <div class="info-box-content"> <span class="info-box-number">100</span> <span class="info-box-text">
Total Tournament </span> </div>
            </div>
          </div>
        </div>  
      </div>  
      <div class="card mb-4">
                  <div class="card-header mb-4">
                          <h5 class="card-title">Recent Users</h5>
                        </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>User Name</th>
                                        <th>Email/Facebook</th>
                                        <th>History</th>
                                        <th>Registered On</th>  
                                        <th>Status</th> 
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Alex Smith</td>
                                        <td>AlexSmith@gmail.com</td>
                                        <td></td>
                                        <td>10/07/2020</td>
                                        <td>
                                          <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div>
                                        </td> 
                                        <td><a href="<?php echo site_url('user-detail');?>" class="composemail"><i class="fa fa-eye"></i></a></td> 
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Alex Smith</td>
                                        <td>AlexSmith@gmail.com</td>
                                        <td></td>
                                        <td>10/07/2020</td>
                                        <td>
                                          <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div>
                                        </td> 
                                        <td><a href="<?php echo site_url('user-detail');?>" class="composemail"><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Alex Smith</td>
                                        <td>AlexSmith@gmail.com</td>
                                        <td></td>
                                        <td>10/07/2020</td>
                                        <td>
                                          <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div>
                                        </td> 
                                        <td><a href="<?php echo site_url('user-detail');?>" class="composemail"><i class="fa fa-eye"></i></a></td> 
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Alex Smith</td>
                                        <td>AlexSmith@gmail.com</td>
                                        <td></td>
                                        <td>10/07/2020</td>
                                        <td>
                                          <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div>
                                        </td> 
                                        <td><a href="<?php echo site_url('user-detail');?>" class="composemail"><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Alex Smith</td>
                                        <td>AlexSmith@gmail.com</td>
                                        <td></td>
                                        <td>10/07/2020</td>
                                        <td>
                                          <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div>
                                        </td> 
                                        <td><a href="<?php echo site_url('user-detail');?>" class="composemail"><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>   
            </div>

            <?php include 'include/footer.php';?>