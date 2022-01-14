<?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Content</h1> 
    </div>

    <div class="content">
       <div class="card mb-2">
            <div class="card-header mb-4">
               <h5 class="card-title">Edit Content</h5>
           </div>
           <form method="Post" id="addForm" enctype="multipart/form-data" action="{{url('admin/content/content_update',[base64_encode($edit_content->id)])}}" >
               
           <div class="card-body">
            
              <div class="col-md-6 mb-4 offset-3">
                 <div class="col-md-12 mb-4" style="postion: relative; right:50%">
                     <label><h2><u>About Us</u></h2></label>
                   </div>
                   <div class="col-md-12 mb-4 " style="position: relative; right: 50%;">
                     <label>Description</label>
                     <textarea  name="editor" class="form-control validate" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore quibusdam provident voluptas vero, maxime laborum qui culpa inventore debitis dolorum recusandae praesentium libero quia, labore amet aut odio sit! Provident</textarea><br/>
                      <p class="text-danger" id="editorError"></p>
                   </div>
                   <div class="text-center col-md-12 mb-4">
                        <button type="button" onclick="validate(this);" class="btn btn-primary">Submit</button>
                
                    </div>
           
                </div>
                
           </div>
           </form>
       </div>
  </div>
</div>
<?php include 'include/footer.php';?>
<script src="https://cdn.ckeditor.com/4.17.1/standard-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor', {
      fullPage: true,
      extraPlugins: 'docprops',
      allowedContent: true,
      height: 320,
      width: 800,
      removeButtons: 'PasteFromWord'
    });
  </script>
<script>
            function validate(obj) {
            $(".text-danger").html('');
            var flag = true;
            var formData = $("#addForm").find(".validate:input").not(':input[type=button]');
            $(formData).each(function () {
                var element = $(this);
                var val = element.val();
                var name = element.attr("name");
                if (val == "" || val == "0" || val == null) {
                    
                $("#" + name + "Error").html("This field is required");
                flag = false;
                    
                    
                } else {

                }
            });
           
            if (flag) {
                $("#addForm").submit();
            } else {
                return false;
            }

            
        }
    </script>