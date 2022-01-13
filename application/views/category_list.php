<?php include 'include/header.php';?>
<?php include 'include/sidebar.php';?>
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Category Management</h1> 
    </div>
    <div class="content"> 
    	<div class="card">
                    <div class="card-header mb-4">
                        <h5 class="card-title">Add Category</h5>
                    </div>
                    <div class="card-body">
        <div class="row">
            <div class="col-md-6 offset-3"> 
                        <label>Enter Challenge Category Name</label>
                        <input type="text" class="form-control" placeholder="Category Name">
                        <div class="text-center mb-4 mt-4">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header mb-4">
                        <h5 class="card-title">Category List</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-image">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Challenge Category</th>
                                        <th>Uploaded On</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Category NameI</td>
                                        <td>01/07/2020</td>
                                        <td>
                                            <div class="mytoggle">
                                                <label class="switch">
                                                    <input type="checkbox" checked=""> <span class="slider round"></span> 
                                                </label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="edit-composemail"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="edit-composemail"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Category NameI</td>
                                        <td>01/07/2020</td>
                                        <td>
                                            <div class="mytoggle">
                                                <label class="switch">
                                                    <input type="checkbox" checked=""> <span class="slider round"></span> 
                                                </label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="edit-composemail"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="edit-composemail"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Category NameI</td>
                                        <td>01/07/2020</td>
                                        <td>
                                            <div class="mytoggle">
                                                <label class="switch">
                                                    <input type="checkbox" checked=""> <span class="slider round"></span> 
                                                </label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="edit-composemail"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="edit-composemail"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Category NameI</td>
                                        <td>01/07/2020</td>
                                        <td>
                                            <div class="mytoggle">
                                                <label class="switch">
                                                    <input type="checkbox" checked=""> <span class="slider round"></span> 
                                                </label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="edit-composemail"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="edit-composemail"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Category NameI</td>
                                        <td>01/07/2020</td>
                                        <td>
                                            <div class="mytoggle">
                                                <label class="switch">
                                                    <input type="checkbox" checked=""> <span class="slider round"></span> 
                                                </label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="edit-composemail"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="edit-composemail"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'include/footer.php';?>