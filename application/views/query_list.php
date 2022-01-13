<?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?> 
        <div class="content-wrapper">
            <div class="content-header sty-one">
                <h1>Help & Support List</h1> 
            </div>
            <div class="content"> 

<div class="row">  
 <div class="col-md-12"> 
        <div class="card">  
                    <div class="card-body"> 
                        <div class="table-responsive table-image">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Query Id</th>  
                                        <th>User Name </th>    
                                        <th>Email Id </th>  
                                        <th>Query Date and Time</th> 
                                        <th>Status</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr> 
                                           <td class="property-link"><a href="<?php echo site_url('query-detail');?>">#123</a></td>
                                        <td class="property-link"><a href="<?php echo site_url('user-detail');?>">Saleem</a></td> 
                                        <td>abc@gmail.com</td>
                                       <td>20/05/2020 10:10 AM</td>
                                        <td><span class="text-success">Seen</span></td> 
                                    </tr> 
                                    <tr>
                                     <td class="property-link"><a href="<?php echo site_url('query-detail');?>">#123</a></td>
                                        <td class="property-link"><a href="<?php echo site_url('user-detail');?>">Saleem</a></td> 
                                        <td>abc@gmail.com</td>
                                       <td>20/05/2020 10:10 AM</td>
                                        <td><span class="text-danger">Unseen</span></td> 
                                    </tr> 
                                    <tr>
                                     <td class="property-link"><a href="<?php echo site_url('query-detail');?>">#123</a></td>
                                        <td class="property-link"><a href="<?php echo site_url('user-detail');?>">Saleem</a></td> 
                                        <td>abc@gmail.com</td>
                                       <td>20/05/2020 10:10 AM</td>
                                        <td><span class="text-success">Seen</span></td> 
                                    </tr>  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
                </div>
              </div>
          <?php include 'include/footer.php';?>