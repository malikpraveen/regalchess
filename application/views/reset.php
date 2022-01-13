<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url();?>common/images/favicon.png">
    <title>Upvade : Admin Panel</title> 
    <meta name="keywords" content="Upvade." />
    <meta name="author" content="Upvade" />
    <link href="https://www.upvade.com.com/admin" rel="canonical" />
    <meta name="Classification" content="Upvade" />
    <meta name="abstract" content="https://www.upvade.com/admin" />
    <meta name="audience" content="All" />
    <meta name="robots" content="index,follow" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="Upvade Admin Panel" /> 
    <meta property="og:url" content="https://www.upvade.com/admin" /> 
    <meta property="og:site_name" content="upvade" />
    <meta name="googlebot" content="index,follow" />
    <meta name="distribution" content="Global" />
    <meta name="Language" content="en-us" />
    <meta name="doc-type" content="Public" />
    <meta name="site_name" content="upvade" />
    <meta name="url" content="https://www.upvade.com/admin" />
    <link rel="stylesheet" href="<?php echo site_url();?>common/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/css/et-line-font/et-line-font.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/css/simple-lineicon/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/plugins/datatables/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/plugins/formwizard/jquery-steps.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/plugins/dropify/dropify.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/css/font/stylesheet.css">
</head>
<body class="login-page sty1">
<div class="container-fluid  wl-login">
    <div class="container ml-0 pl-0">
        <div class="login-box" style=" position: relative; right:-900px;">
            <div class="form-section">
                <!-- <div class="login-logo">
                <img src="<?php echo site_url();?>common/images/regalchesslogo.png">
                </div> -->
                <form method="POST" action="<?php echo site_url('home');?>">
                   
                    <p class="forgot-para">Please Create Your New Password</p>
                    <div class="form-group eyepassword">
                        <input type="password" name="password" id="password" class="form-control" value="" placeholder="New Password">
                        <i class="fa fa-eye" onclick="showPassword(this,'password')"></i>
                        <div class="help-block">
                            <strong class="text-danger text-small"></strong>
                        </div>
                    </div>
                    <div class="form-group eyepassword">
                        <input type="password" name="password" id="password" class="form-control" value="" placeholder="Confirm Password">
                        <i class="fa fa-eye" onclick="showPassword(this,'password')"></i>
                        <div class="help-block">
                            <strong class="text-danger text-small"></strong>
                        </div>
                    </div>  
                        <div class="col-xs-4 m-t-4">
                        <button type="submit" class="btn btn-primary mybtns-send ">Submit</button>
                        </div>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="<?php echo site_url('common/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo site_url('common/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo site_url('common/plugins/jquery-sparklines/jquery.sparkline.min.js'); ?>"></script>
    <script src="<?php echo site_url('common/plugins/jquery-sparklines/sparkline-int.js'); ?>"></script>
    <script src="<?php echo site_url('common/plugins/raphael/raphael-min.js'); ?>"></script>
    <script src="<?php echo site_url('common/plugins/morris/morris.js'); ?>"></script>
    <script src="<?php echo site_url('common/plugins/functions/dashboard1.js'); ?>"></script>
    <script src="<?php echo site_url('common/js/demo.js'); ?>"></script>
</body>

</html>