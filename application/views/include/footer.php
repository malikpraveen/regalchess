
</div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div> 
    Copyright © 2020 Upvade.com. Designed by TECHGROPSE All rights reserved. 
 </footer>

<div class="modal fade modal-design" id="exampleModal-out" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header"> 
        <button type="button" class="close cross-btn" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div> 
      <div class="modal-body">
        <div class="for-center pl-4 pr-4 mb-4  text-center continue-payment">
          <div class="mb-4">
                     <h4>Continue to logout?</h4> 
                   </div>
                      <a href="<?php echo site_url('');?>" data-direction="finish" class="mybtns">Yes</a>
                       <a href="#" data-direction="finish" class="mybtns" aria-label="Close" data-dismiss="modal">No</a>  
                    </div> 
      </div>
    </div>
  </div>
</div>
    <script src="<?php echo site_url('common/js/jquery.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="<?php echo site_url('common/js/bootstrap.min.js'); ?>"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
    <script src="<?php echo site_url('common/js/bizadmin.js'); ?>"></script>
    <script src="<?php echo site_url('common/plugins/jquery-sparklines/jquery.sparkline.min.js'); ?>"></script>
    <script src="<?php echo site_url('common/plugins/jquery-sparklines/sparkline-int.js'); ?>"></script>
    <script src="<?php echo site_url('common/plugins/raphael/raphael-min.js'); ?>"></script>
    <script src="<?php echo site_url('common/plugins/morris/morris.js'); ?>"></script>
    <script src="<?php echo site_url('common/plugins/functions/dashboard1.js'); ?>"></script>
    <script src="<?php echo site_url('common/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo site_url('common/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?php echo site_url('common/js/demo.js'); ?>"></script>
    <script src="<?php echo site_url('common/plugins/formwizard/jquery-steps.js'); ?>"></script>
    <script src="<?php echo site_url('common/plugins/dropify/dropify.min.js'); ?>"></script>
    <script src="<?php echo site_url('common/plugins/chartjs/chart.min.js'); ?>"></script>
    <script src="<?php echo site_url('common/plugins/chartjs/chart-int.js'); ?>"></script> 
    <script src="<?php echo site_url('common/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script> 
    <script src="<?php echo site_url('common/plugins/dropzone-master/dropzone.js'); ?>"></script> 
        <script type="text/javascript">
      $(".chosen").chosen();
</script>
    <script type="text/javascript">
    $(document).ready(function() {
  $('#example-getting-started').multiselect({
    numberDisplayed: 1,
    includeSelectAllOption: true,
    allSelectedText: 'All Topics selected',
    nonSelectedText: 'No Topics selected',
    selectAllValue: 'all',
    selectAllText: 'Select all',
    unselectAllText: 'Unselect all',
    onSelectAll: function(checked) {
      var all = $('#example-getting-started ~ .btn-group .dropdown-menu .multiselect-all .checkbox');
      all
      // get all child nodes including text and comment
        .contents()
        // iterate and filter out elements
        .filter(function() {
          // check node is text and non-empty
          return this.nodeType === 3 && this.textContent.trim().length;
          // replace it with new text
        }).replaceWith(checked ? this.unselectAllText : this.selectAllText);
    },
    onChange: function() {
        debugger;
      var select = $(this.$select[0]);
      var dropdown = $(this.$ul[0]);
      var options = select.find('option').length;
      var selected = select.find('option:selected').length;
      var all = dropdown.find('.multiselect-all .checkbox');
      all
      // get all child nodes including text and comment
        .contents()
        // iterate and filter out elements
        .filter(function() {
          // check node is text and non-empty
          return this.nodeType === 3 && this.textContent.trim().length;
          // replace it with new text
        }).replaceWith(options === selected ? this.options.unselectAllText : this.options.selectAllText);
    }
  });

  $("#form").submit(function(e) {
    e.preventDefault();
    alert($(this).serialize());
  });
});


</script>
    <script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable()
        $('#example3').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
    </script>
<script>
    var frmRes = $('#frmRes');
    var frmResValidator = frmRes.validate();
    
    var frmInfo = $('#frmInfo');
    var frmInfoValidator = frmInfo.validate();

    var frmLogin = $('#frmLogin');
    var frmLoginValidator = frmLogin.validate();

    var frmMobile = $('#frmMobile');
    var frmMobileValidator = frmMobile.validate();

    $('#demo1').steps({
      onChange: function (currentIndex, newIndex, stepDirection) {
        console.log('onChange', currentIndex, newIndex, stepDirection);
        // tab1
        if (currentIndex === 0) {
          if (stepDirection === 'forward') {
            var valid = frmRes.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmResValidator.resetForm();
          }
        }
        
        // tab2
        if (currentIndex === 1) {
          if (stepDirection === 'forward') {
            var valid = frmInfo.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmInfoValidator.resetForm();
          }
        }

        // tab3
        if (currentIndex === 2) {
          if (stepDirection === 'forward') {
            var valid = frmLogin.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmLoginValidator.resetForm();
          }
        }

        // tab4
        if (currentIndex === 3) {
          if (stepDirection === 'forward') {
            var valid = frmMobile.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmMobileValidator.resetForm();
          }
        }

        return true;

      },
      onFinish: function () {
        alert('Wizard Completed');
      }
    });
  </script> 
<script>
    $('#demo').steps({
      onFinish: function () {
        alert('Wizard Completed');
      }
    });
  </script>
<script>
    $(document).ready(function(){
    // Basic
    $('.dropify').dropify();

    // Translated
     $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
    });
</script>
 <script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>
 
</body>
</html>