<?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
        <div class="content-wrapper">
            <div class="content-header sty-one">
                <h1>User List</h1> 
            </div>

            <div class="content">   

            <div class="card mb-2">
            <div class="card-body">
            <div class="row"> 
        <div class="col-lg-4 col-xs-6">
        <div class="form-group">
      <label>From </label>
      <input type="date" name="" class="form-control">
        </div>
        </div>
        <div class="col-lg-4 col-xs-6">
        <div class="form-group">
      <label>To </label>
      <input type="date" name="" class="form-control">
        </div>
        </div> 
        <div class="col-md-4 col-xs-6 mt-1 offset-1 ">
      <button class="btn btn-primary1 pt-2 pb-2 w-100 mt-1 ">Search</button>
        </div> 
        <div class="col-md-4 col-xs-6 mt-1 ">
      <button class="btn btn-primary1 pt-2 pb-2 w-100 mt-1">Reset</button>
        </div>      
      </div>   
      </div>   
      </div>   
                <div class="card">
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
                                        <th>status</th>  
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
                                        <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>  
                                          <td><a href="<?php echo site_url('user-detail');?>" class="composemail"><i class="fa fa-eye"></i></a></td> 
                                       
                                    </tr> 
                                    <tr>
                                        <td>01</td>
                                        <td>Alex Smith</td>
                                        <td>AlexSmith@gmail.com</td>
                                        <td></td>
                                        <td>10/07/2020</td>
                                        <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>  
                                          <td><a href="<?php echo site_url('user-detail');?>" class="composemail"><i class="fa fa-eye"></i></a></td> 
                                      
                                    </tr> 
                                    <tr>
                                        <td>01</td>
                                        <td>Alex Smith</td>
                                        <td>AlexSmith@gmail.com</td>
                                        <td></td>
                                        <td>10/07/2020</td>
                                        <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>  
                                          <td><a href="<?php echo site_url('user-detail');?>" class="composemail"><i class="fa fa-eye"></i></a></td> 
                                        
                                    </tr> 
                                    <tr>
                                        <td>01</td>
                                        <td>Alex Smith</td>
                                        <td>AlexSmith@gmail.com</td>
                                        <td></td>
                                        <td>10/07/2020</td>
                                        <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>  
                                          <td><a href="<?php echo site_url('user-detail');?>" class="composemail"><i class="fa fa-eye"></i></a></td> 
                                       
                                    </tr> 
                                    <tr>
                                        <td>01</td>
                                        <td>Alex Smith</td>
                                        <td>AlexSmith@gmail.com</td>
                                        <td></td>
                                        <td>10/07/2020</td>
                                        <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>  
                                          <td><a href="<?php echo site_url('user-detail');?>" class="composemail"><i class="fa fa-eye"></i></a></td> 
                                        
                                    </tr> 
                                </tbody>
                            </table>
                    </div>
                </div> 
            </div>
            </div>

            <?php include 'include/footer.php';?>