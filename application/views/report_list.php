<?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
        <div class="content-wrapper">
            <div class="content-header sty-one">
                <h1>Report List</h1> 
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
        <div class="col-lg-4 col-xs-6 mt-4">
      <button class="btn btn-primary pt-2 pb-2 w-100 mt-1">Search</button>
        </div> 
        <div class="col-md-4 col-xs-6 mt-1">
      <button class="btn btn-primary pt-2 pb-2 w-100 mt-1">Reset</button>
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
                                        <th>Shared by</th>
                                        <th>Video Title</th>
                                        <th>Report For</th>
                                        <th>Posted On</th>  
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Alex Smith</td>
                                        <td>lorem ipsm</td>
                                        <td>Issue Name</td>
                                        <td>10/07/2020</td>  
                                        <td>
                                        <a href="<?php echo site_url('report-detail');?>" class="edit-composemail"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="edit-composemail"><i class="fa fa-trash"></i></a></td> 
                                    </tr> 
                                    <tr>
                                        <td>01</td>
                                        <td>Alex Smith</td>
                                        <td>lorem ipsm</td>
                                        <td>Issue Name</td>
                                        <td>10/07/2020</td>  
                                        <td>
                                        <a href="<?php echo site_url('report-detail');?>" class="edit-composemail"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="edit-composemail"><i class="fa fa-trash"></i></a></td> 
                                    </tr> 
                                    <tr>
                                        <td>01</td>
                                        <td>Alex Smith</td>
                                        <td>lorem ipsm</td>
                                        <td>Issue Name</td>
                                        <td>10/07/2020</td>  
                                        <td>
                                        <a href="<?php echo site_url('report-detail');?>" class="edit-composemail"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="edit-composemail"><i class="fa fa-trash"></i></a></td> 
                                    </tr> 
                                    <tr>
                                        <td>01</td>
                                        <td>Alex Smith</td>
                                        <td>lorem ipsm</td>
                                        <td>Issue Name</td>
                                        <td>10/07/2020</td>  
                                        <td>
                                        <a href="<?php echo site_url('report-detail');?>" class="edit-composemail"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="edit-composemail"><i class="fa fa-trash"></i></a></td> 
                                    </tr> 
                                    <tr>
                                        <td>01</td>
                                        <td>Alex Smith</td>
                                        <td>lorem ipsm</td>
                                        <td>Issue Name</td>
                                        <td>10/07/2020</td>  
                                        <td>
                                        <a href="<?php echo site_url('report-detail');?>" class="edit-composemail"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="edit-composemail"><i class="fa fa-trash"></i></a></td> 
                                    </tr> 
                                </tbody>
                            </table>
                    </div>
                </div> 
            </div>
            </div>

            <?php include 'include/footer.php';?>