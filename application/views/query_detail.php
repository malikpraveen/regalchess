<?php include 'include/header.php';?>
<?php include 'include/sidebar.php';?>
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Help & Support Detail</h1> 
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Query Id</label>
                                <p>#123</p>
                            </div>
                            <div class="col-md-6">
                                <label>Query Date & Time</label>
                                <p>12/03/2020 12:20PM</p>
                            </div>
                            <div class="col-md-6">
                                <label>User Name</label>
                                <p>Raheem Khan</p>
                            </div>
                            <div class="col-md-6">
                                <label>Email Id</label>
                                <p>abc@gmail.com</p>
                            </div>
                            <div class="col-md-6">
                                <label>Query Status</label>
                                <p><span class="text-success">Seen</span>
                                </p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 mb-3">
                                <label>Reason For Contact</label>
                                <p>Lorem ipsum dolor</p>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Message</label>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore quibusdam provident voluptas vero, maxime laborum qui culpa inventore debitis dolorum recusandae praesentium libero quia, labore amet aut odio sit! Provident.</p>
                            </div>
                            <div class="col-md-12 text-right"> <a href="<?php echo site_url('query-list');?>" class="composemail">Go Back</a>
                                <a class="composemail" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Reply</a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <label>Your Message</label>
                                        <textarea class="form-control" cols="6" rows="6" placeholder="Write here...."></textarea>
                                        <div class="mt-4 mb-4 text-right"> <a href="#" id='hide' class="composemail">Cancel</a>  <a href="#" class="composemail">Send</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'include/footer.php';?>
    