<?php include 'include/header.php';?>
<?php include 'include/sidebar.php';?>
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Game Room Detail</h1> 
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-12 text-right"> <a href="#" class="composemail"><i class="fa fa-edit"></i></a>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Id</label>
                                <p>#1</p>
                            </div>
                            <div class="col-md-6">
                                <label>Token Name</label>
                                <p>Package 1</p>
                            </div>
                            <div class="col-md-6">
                                <label>Token Number</label>
                                <p>1,00,00 Tokens</p>
                            </div>
                            <div class="col-md-6">
                                <label>Token Price</label>
                                <p>100 USD/Months</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 text-right"> <a href="<?php echo site_url('token-purchase-list');?>" class="composemail">Go Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'include/footer.php';?>