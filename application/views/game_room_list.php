<?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Game Room Management</h1> 
    </div>

    <div class="content">
       <div class="card mb-4">
            <div class="card-header mb-4">
               <h5 class="card-title">Add New Game Room</h5>
           </div>
           <div class="card-body">
             <form method="POST"  enctype="multipart/form-data" action="{{url('admin/subscription/submit')}}" >
                 <div class="row mb-4 " style="margin-right: 412px; flex-wrap: nowrap;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control validate alphanum" type="text" name="roomnane" placeholder="Enter Room Name">
                                <p class="text-danger" id="roomnaneError"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control validate" type="text" name="fee" placeholder="Enter Fee">
                                <p class="text-danger" id="feeError"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control validate pricevalue" name="price" type="text" placeholder="Enter Price"> 
                                <p class="text-danger" id="priceError"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4" style="margin-right: 5px;">
                        <div class="col-md-10">
                            <div class="form-group">
                                <textarea class="form-control validate" cols="3" maxlength="250" name="description" rows="3" placeholder="Add description"></textarea>
                                <p class="text-danger" id="descriptionError"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12"> 
                            <button type="button" onclick="validate(this);" class="mybtns pull-right" style="margin-top: -157px; margin-right: 26px;">Submit</button>
                        </div>
                    </div>
             </form> 
         </div>
       </div>

        <div class="card mb-4">
            <div class="card-header mb-4">
                <h5 class="card-title">Game Room List</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th> Room Name</th>
                                <th>Entry Fee (Token)</th>
                                <th>Price (Token)</th>
                                <th>Description</th>
                                <th>Status</th>  
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>ankit</td>
                                <td>22</td>
                                <td>231</td>
                                <td>dummy data</td>
                                <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>
                              
                                <td><a href="<?php echo site_url('game-detail');?>" class="composemail"><i class="fa fa-eye"></i></a>
                                <a href="#" class="composemail"><i class="fa fa-edit"></i></a>
                            
                              </td> 
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>ankit</td>
                                <td>22</td>
                                <td>231</td>
                                <td>dummy data</td>
                                <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>
                              
                                <td><a href="#" class="composemail"><i class="fa fa-eye"></i></a>
                                <a href="#" class="composemail"><i class="fa fa-edit"></i></a>
                            
                              </td> 
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </div>
    <?php include 'include/footer.php';?>
