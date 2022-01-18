<?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Referral Management</h1> 
    </div>

    <div class="content">
       <div class="card mb-4">
            <div class="card-header mb-4">
               <h5 class="card-title">Add Referral</h5>
           </div>
           <div class="card-body">
             <form method="POST"  enctype="multipart/form-data" action="{{url('admin/subscription/submit')}}" >
                 <div class="row mb-4 ">
                        <div class="col-md-6 offset-3">
                            <div class="form-group " >
                                <input class="form-control validate"  type="text" name="number" placeholder="Update Token">
                                <p class="text-danger" id="numberError"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12 text-center"> 
                            <button type="button" onclick="validate(this);" class="mybtns pull-center">Update</button>
                        </div>
                    </div>
             </form> 
         </div>
       </div>

        <div class="card mb-4">
            <div class="card-header mb-4">
                <h5 class="card-title">Token Purchase List</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Reward Coins</th>
                                <th>Status</th>  
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>1000 coins</td>
                                <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>
                              
                                <td>
                                <!-- <a href="#" class="composemail"><i class="fa fa-edit"></i></a> -->
                                <a href="#" class="composemail"><i class="fa fa-trash"></i></a>
                            
                              </td> 
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>1000 coins</td>
                                <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>
                              
                                <td>
                                <!-- <a href="#" class="composemail"><i class="fa fa-edit"></i></a> -->
                                <a href="#" class="composemail"><i class="fa fa-trash"></i></a>
                            
                              </td> 
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </div>
    <?php include 'include/footer.php';?>
