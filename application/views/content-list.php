<?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Content Management</h1> 
    </div>
    <div class="content">
  <div class="card mb-4">
            <div class="card-header mb-4">
                <h5 class="card-title">Content</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Name</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>About Us</td>
                                <td>
                                   <a href="<?php echo site_url('content-detail')?>" class="composemail"><i class="fa fa-eye"></i></a>
                               </td> 
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Privacy Policy</td>
                                <td>
                                   <a href="<?php echo site_url('content-detail') ?>" class="composemail"><i class="fa fa-eye"></i></a>
                               </td> 
                            </tr> 
                             <tr>
                                <td>3</td>
                                <td>Term of services</td>
                                <td>
                                   <a href="<?php echo site_url('content-detail')?>" class="composemail"><i class="fa fa-eye"></i></a>
                               </td> 
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </div>
    <?php include 'include/footer.php';?>