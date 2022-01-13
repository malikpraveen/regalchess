<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <base target="_parent" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url();?>common/images/favicon.png">
    <title>Upvade : Admin Panel</title>
    <meta name="description" content=" Upvade Admin Panel." />
    <meta name="keywords" content="Upvade, Social media site" />
    <meta name="author" content="Upvade" />
    <meta name="url" content="https://www.upvade.com/" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" />
    <link rel="stylesheet" href="<?php echo site_url();?>common/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/css/mdb.min.css" />
    <link rel="stylesheet" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-addons-4.19.1.min.css" />
    <link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb-plugins-gathered.min.css" />
    <link rel="stylesheet" href="<?php echo site_url();?>common/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/css/et-line-font/et-line-font.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/css/simple-lineicon/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/plugins/datatables/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/plugins/formwizard/jquery-steps.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/plugins/dropify/dropify.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/plugins/chartist-js/chartist.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/plugins/chartist-js/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="<?php echo site_url();?>common/css/font/stylesheet.css">
    <style type="text/css">
        /* Chart.js */
                    @-webkit-keyframes chartjs-render-animation {
                        from {
                            opacity: 0.99;
                        }
                        to {
                            opacity: 1;
                        }
                    }
                    @keyframes chartjs-render-animation {
                        from {
                            opacity: 0.99;
                        }
                        to {
                            opacity: 1;
                        }
                    }
                    .chartjs-render-monitor {
                        -webkit-animation: chartjs-render-animation 0.001s;
                        animation: chartjs-render-animation 0.001s;
                    }
                    .search-select-btn .select-wrapper input.select-dropdown{
                           border: 1px solid #d2d6de!important; 
            padding: 0 10px!important;
            border-radius: 5px!important;     
                    }
                    .search-select-btn .select-wrapper span.caret { 
            right: 10px; 
        }
    </style>
</head>

<body class="skin-blue sidebar-mini" aria-busy="true">
    <div class="wrapper boxed-wrapper">
        <header class="main-header">
            <nav class="navbar blue-bg navbar-static-top">
                <ul class="nav navbar-nav pull-left">
                    <li>
                        <a class="sidebar-toggle" data-toggle="push-menu" href=""></a>
                    </li>
                </ul>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu p-ph-res">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs">Admin</span> 
                                <img src="<?php echo site_url();?>common/images/user.png" class="user-image" alt="User Image" />
                            </a>
                            <ul class="dropdown-menu">
                                <li> <a href="#exampleModal-out" data-direction="finish" data-toggle="modal"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <?php include 'include/sidebar.php';?>
        <div class="content-wrapper">
            <div class="content-header sty-one">
                <h1>Notification Management</h1>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="search-select-btn">
                                            <select class="mdb-select md-form" multiple searchable="Search here..">
                                                <option value="" disabled selected>Select User</option>
                                                <option value="1">Alex</option>
                                                <option value="2">Jimmy</option>
                                                <option value="3">Donald</option>
                                                <option value="3">Siya</option>
                                                <option value="3">Rihan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <p>Title</p>
                                        <input type="text" name="" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <p>Write a message</p>
                                        <textarea cols="6" rows="6" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-3">
                                    <div class="col-md-12"> <a href="#exampleModal-confirm" data-direction="finish" data-toggle="modal" class="mybtns pull-right">Send</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</body>
<script src="<?php echo site_url('common/js/jquery.min.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="<?php echo site_url('common/js/bootstrap.min.js'); ?>"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript" src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/mdb.min.js"></script>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/bundles/4.19.1/compiled-addons.min.js"></script>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/plugins/mdb-plugins-gathered.min.js"></script>
<script src="<?php echo site_url('common/js/demo.js'); ?>"></script>
<script type="text/javascript">
    {
                    // Material Select Initialization
                    $(document).ready(function () {
                        $(".mdb-select").materialSelect();
                    });
                }
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
</body>

</html>