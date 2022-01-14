<?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?> 
        <div class="content-wrapper">
            <div class="content-header sty-one">
                <h1>Transaction Management</h1> 
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
  <div class="row">  
   <div class="col-md-12"> 
        <div class="card"> 
        <div class="card-header mb-4">
                <h5 class="card-title">Transaction List</h5>
            </div> 
                    <div class="card-body"> 
                        <div class="table-responsive table-image">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                       <th>S.no</th>
                                        <th>User Id</th>  
                                        <th>User Name</th>
                                        <th>Plan </th>    
                                        <th>Amount</th>  
                                        <th>Date and Time</th> 
                                        <th>Status</th> 
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr> 
                                        <td>1</td>
                                           <td class="property-link">1</td>
                                           <td>Ankit</td>
                                        <td class="property-link">Package 1</td> 
                                        <td>100 USD</td>
                                       <td>20/05/2020 10:10 AM</td>
                                        <td><span class="text-success">Successful</span></td> 
                                        <!-- <td><a href="<?php echo site_url('query-detail');?>" class="composemail"><i class="fa fa-eye"></i></a></td> -->
                                    </tr> 
                                    <tr>
                                        <td>2</td>
                                     <td class="property-link">2</td>
                                     <td>Ankit</td>
                                        <td class="property-link">Package 2</td> 
                                        <td>100 USD</td>
                                       <td>20/05/2020 10:10 AM</td>
                                        <td><span class="text-danger">Failed</span></td> 
                                        <!-- <td><a href="<?php echo site_url('query-detail');?>" class="composemail"><i class="fa fa-eye"></i></a></td> -->
                                    </tr> 
                                    <tr>
                                        <td>3</td>
                                     <td class="property-link">3</td>
                                     <td>Ankit</td>
                                        <td class="property-link">Package 3</td> 
                                        <td>100 USD</td>
                                       <td>20/05/2020 10:10 AM</td>
                                        <td><span class="text-success">Successful</span></td> 
                                        <!-- <td><a href="<?php echo site_url('query-detail');?>" class="composemail"><i class="fa fa-eye"></i></a></td> -->
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