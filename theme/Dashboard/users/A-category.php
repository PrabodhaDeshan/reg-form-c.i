<?php
include('includes/header.php');
include('includes/navbar.php');
include('includes/A-sidebar.php');
?>

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3> Category</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Category</h5>
                    </div>
                        <div class="card-body btn-showcase">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Add Category</button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel">Add Category</h4>
                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form>
                                                        <div class="mb-3">
                                                            <label class="col-form-label" for="category-name-1">Category Name:</label>
                                                            <input class="form-control" type="text" id="category-name-1">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-6">
                                                    <form>
                                                        <div class="mb-3">
                                                            <label class="col-form-label" for="category-name-2">Category Name:</label>
                                                            <input class="form-control" type="text" id="category-name-2">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="button">Add Category</button>
                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="basic-key-table">
                                <thead>
                                    <tr>
                                        <th>Category ID</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>001</td>
                                        <td>Educational</td>
                                        <td>
                                        <a href="" class="link-danger"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                        <th>Category ID</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<?php include('includes/footer.php'); ?>
