<?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Rule And Quiz Management</h1> 
    </div>

    <div class="content">
       <div class="card mb-4">
            <div class="card-header mb-4">
               <h5 class="card-title">Add New Rule</h5>
           </div>
           <div class="card-body" >
              <form method="POST"  enctype="multipart/form-data" action="{{url('admin/subscription/submit')}}" >
                  <!-- <div class="col-md-3 text-right" style="max-width: 100%;">
                      <input type="button" class="btn btn-primary" value="+" onclick="addMoreAttribute();">
                  </div> -->
                  <div class="row" id="tableDiv" >
                    <div class="col-md-10 offset-1" >
                        <table class="table" id="attribute1" style="  border-left: 6px solid #389DFB; background-color: lightgrey;" >
                               <thead>
                                  <tr>           
                                      <td colspan="3" id="attribute1_image_preview">
                                          <textarea class="form-control validate" cols="3" maxlength="250" name="description" rows="3" placeholder="Add Rules"></textarea>
                                          <p style="text-align: center; display: none;" class="errorPrint" id="property_image1Error"></p>
                                      </td>
                                    </tr>
                                    
                                  <tr >
                                      <td  colspan="2"  >Question 1 <input type="button" class="btn btn-primary pull-right" value="Add Question" onclick="addMoreQuestion();"></td> 
                                  </tr>
                                
                                    <tr>
                                      <td colspan="2"><input type="text" class="form-control" placeholder="Enter Question" name="Question"></td>
                                  </tr>
                                
                                   <tr >
                                      <td  colspan="2">Options</td>
                                   </tr>
                                </thead>
                                 <tbody>
                                      <tr>
                                          <td><input type="text" class="form-control" placeholder="Option A" name="attribute1_title[]"></td>
                                          <td><input type="text" class="form-control" placeholder="Option B" name="attribute1_value[]"></td>
                                       </tr>
                                        <tr>
                                           <td><input type="text" class="form-control" name="attribute1_title[]" placeholder="Option C"></td>
                                           <td><input type="text" class="form-control" name="attribute1_value[]" placeholder="Option D"></td>
                                       </tr>
                               </tbody>
                                <tfoot>
                                       <tr>
                                            <td colspan="3" class="text-right"><input type="button" class="btn btn-primary" value="Add More" onclick="addMoreFeature(1);"></td>
                                                
                                        </tr>
                                </tfoot>
                        </table>
                   </div>
                  </div>
                   <div class="row mt-4">
                        <div class="col-md-12"> 
                            <button type="button" onclick="validate(this);" class="mybtns pull-center" style="margin-left: 401px">Submit</button>
                        </div>
                    </div>
             </form> 
         </div>
       </div>

        <div class="card mb-4">
            <div class="card-header mb-4">
                <h5 class="card-title">Rule List</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th> Rules</th>
                                <th>Status</th>  
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Rule 1</td>
                                <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>
                              
                                <td><a href="<?php echo site_url('quiz-rule-detail');?>" class="composemail"><i class="fa fa-eye"></i></a>
                                <a href="#" class="composemail"><i class="fa fa-edit"></i></a>
                            
                              </td> 
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rule 1</td>
                                <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>
                              
                                <td><a href="<?php echo site_url('quiz-rule-detail');?>" class="composemail"><i class="fa fa-eye"></i></a>
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
    <script>
          
          function addMoreFeature(attribute_id){
                
                var countRow=$("#attribute"+attribute_id+" tbody tr");     
                var row="<tr><td><input type='text' class='form-control' placeholder='Option' name='attribute"+(parseInt(countRow.length)+1)+"_title[]'></td><td><input type='text' class='form-control' placeholder='Option' name='attribute"+(parseInt(countRow.length)+1)+"_value[]'></td></tr>";
                $("#attribute"+attribute_id+" tbody").append(row);
            }
    </script>
    <!-- <script>
          function addMoreAttribute(){
              
                var tableCount=$("#tableDiv .col-md-10"); 
                var table='<div class="col-md-10 offset-1 ">'+
                          '<table class="table table-bordered" id="attribute'+(parseInt(tableCount.length)+1)+'">'+
                          '<thead><tr><td  colspan="3" > <textarea class="form-control validate" cols="3" maxlength="250" name="description" rows="3" placeholder="Add Rules"></textarea></td></tr>'+
                          '<tr><td  colspan="2">Question 2 <input type="button" class="btn btn-primary pull-right" value="Add Question" onclick="addMoreQuestion();"></td></tr>'+
                          '<tr>  <td colspan="2"><input type="text" class="form-control" placeholder="Enter Question" name="Question"></td></tr>'+
                          '<tr><td  colspan="2">Options</td>'+
                          '</tr></thead><tbody><tr>'+
                          '<td><input type="text" class="form-control" placeholder="Option" name="attribute'+(parseInt(tableCount.length)+1)+'_title[]"></td>'+
                          '<td><input type="text" class="form-control" placeholder="Option" name="attribute'+(parseInt(tableCount.length)+1)+'_value[]"></td>'+
                          '</tr></tbody>'+
                          '<tfoot><tr>'+
                          '<td colspan="3" class="text-right"><input type="button" class="btn btn-primary" value="Add More" onclick="addMoreFeature('+(parseInt(tableCount.length)+1)+');"></td>'+
                          '</tr></tfoot>'+
                          '</table></div>';
                
                $("#tableDiv").append(table);
            }
    </script> -->
    <script>
          function addMoreQuestion(){
              
                var tableCount=$("#tableDiv .col-md-10"); 
                var table='<div class="col-md-10 offset-1 ">'+
                          '<table class="table table-bordered" style="  border-left: 6px solid #389DFB; background-color: lightgrey;" id="attribute'+(parseInt(tableCount.length)+1)+'">'+
                          '<thead>'+
                          '<tr><td  colspan="2">Question 1</td></tr>'+
                          '<tr>  <td colspan="2"><input type="text" class="form-control" placeholder="Enter Question" name="Question"></td></tr>'+
                          '<tr><td  colspan="2">Options</td>'+
                          '</tr></thead><tbody><tr>'+
                          '<td><input type="text" class="form-control" placeholder="Option" name="attribute'+(parseInt(tableCount.length)+1)+'_title[]"></td>'+
                          '<td><input type="text" class="form-control" placeholder="Option" name="attribute'+(parseInt(tableCount.length)+1)+'_value[]"></td>'+
                          '</tr></tbody>'+
                          '<tfoot><tr>'+
                          '<td colspan="3" class="text-right"><input type="button" class="btn btn-primary" value="Add More" onclick="addMoreFeature('+(parseInt(tableCount.length)+1)+');"></td>'+
                          '</tr></tfoot>'+
                          '</table></div>';
                
                $("#tableDiv").append(table);
            }
    </script>