<?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Token Purchase Management</h1> 
    </div>

    <div class="content">
       <div class="card mb-2">
            <div class="card-header mb-4">
               <h5 class="card-title">Add Token</h5>
           </div>
           <div class="card-body">
             <form method="POST"  enctype="multipart/form-data" action="{{url('admin/subscription/submit')}}" >
                 <div class="row mb-4 " style="margin-right: 412px; flex-wrap: nowrap;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control validate alphanum" type="text" name="name" placeholder="Enter Token Name">
                                <p class="text-danger" id="nameError"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control validate" type="text" name="number" placeholder="Enter Token Number">
                                <p class="text-danger" id="numberError"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control validate pricevalue" name="price" type="text" placeholder="Enter Token Price"> 
                                <p class="text-danger" id="priceError"></p>
                            </div>
                        </div>
                    </div>
                 
                    <div class="row mt-4">
                        <div class="col-md-12 text-center"> 
                            <button type="button" onclick="validate(this);" class="mybtns pull-center">Submit</button>
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
                                <th>Token Name</th>
                                <th>Token Number</th>
                                <th>Token Price</th>
                                <th>Status</th>  
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Package 1</td>
                                <td>1,00,00 Tokens</td>
                                <td>100 USD/Month</td>
                                <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>
                              
                                <td>
                                <a href="#" class="composemail"><i class="fa fa-edit"></i></a><a href="#" class="composemail"><i class="fa fa-trash"></i></a>
                            
                              </td> 
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>Package 2</td>
                                <td>1,00,000 Tokens</td>
                                <td>1000 USD/Month</td>
                                <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>
                              
                                <td>
                                <a href="#" class="composemail"><i class="fa fa-edit"></i></a><a href="#" class="composemail"><i class="fa fa-trash"></i></a>
                            
                              </td> 
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </div>
    <?php include 'include/footer.php';?>
