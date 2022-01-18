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
                                <p>#123</p>
                            </div>
                            <div class="col-md-6">
                                <label>Entry Fee (Token)</label>
                                <p>100</p>
                            </div>
                            <div class="col-md-6">
                                <label>prize (Token)</label>
                                <p>200</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 mb-3">
                                <label>Description</label>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore quibusdam provident voluptas vero, maxime laborum qui culpa inventore debitis dolorum recusandae praesentium libero quia, labore amet aut odio sit! Provident.</p>
                            </div>
                            <div class="col-md-12 text-right"> <a href="<?php echo site_url('game_room_list');?>" class="composemail">Go Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'include/footer.php';?>