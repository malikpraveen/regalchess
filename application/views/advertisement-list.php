<?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Advertisement Management</h1> 
    </div>

    <div class="content">
       <div class="card mb-4">
            <div class="card-header mb-4">
               <h5 class="card-title">Add Advertisement</h5>
           </div>
           <div class="card-body">
             <form method="POST"  enctype="multipart/form-data" action="{{url('admin/subscription/submit')}}" >
                 <div class="row mb-4 " style="margin-right: 412px; flex-wrap: nowrap;">
                        <div class="col-md-10">
                            <div class="form-group">
                                <input class="form-control validate alphanum" type="text" name="name" placeholder="Enter Company Name">
                                <p class="text-danger" id="nameError"></p>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <input class="form-control validate pricevalue" name="link" type="url" placeholder="Enter Company URL"> 
                                <p class="text-danger" id="linkError"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                     <p class="">(Preferred image dimension 200*200)</p>
                        <div class="form-group titleeventimage">
                            <div class="col-md-3 file-upload" style="max-width: 46%;">
                                <img id="blah1" src="<?php echo site_url();?>common/images/dummy.jpg" alt="your image" />
                                <label for="upload1"  class="file-upload__label text-small">Upload Logo</label>
                                 <input id="upload1" accept=".png" class="file-upload__input" type="file" name="category_image" onchange="readURL(this, 1); validImage(this, 200, 200);">
                                 <p class="text-danger" id="img_error"></p>
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
                <h5 class="card-title">Advertisement List</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Company Name</th>
                                <th>Company Logo</th>
                                <th>Company Website</th>
                                <th>Status</th>  
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Zomoto</td>
                                <td> <img id="blah1" width="150" height="150" src="<?php echo site_url();?>common/images/users/1.jpg" alt="your image" /></td>
                                <td>https://www.zomato.com/</td>
                                <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>
                              
                                <td>
                                <a href="#" class="composemail"><i class="fa fa-edit"></i></a> <a href="#" class="composemail"><i class="fa fa-trash"></i></a>
                            
                              </td> 
                            </tr>
                            <tr>
                            <td>2</td>
                                <td>Swiggy</td>
                                <td> <img id="blah1" width="150" height="150" src="<?php echo site_url();?>common/images/users/1.jpg" alt="your image" /></td>
                                <td>https://www.swiggy.com/</td>
                                <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>
                              
                                <td>
                                <a href="#" class="composemail"><i class="fa fa-edit"></i></a> <a href="#" class="composemail"><i class="fa fa-trash"></i></a>
                            
                              </td> 
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </div>
    <?php include 'include/footer.php';?>

<style>

.titleeventimage .file-upload__label {
    display: block;
    padding: 3px 10px;
    color: #fff!important;
    background: #389DFB;
    transition: background .3s;
    text-align: center !important;
    width: 100% !important;
    
}
</style>