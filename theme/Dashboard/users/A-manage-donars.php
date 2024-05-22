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
                    <h3>  Donars Management </h3>
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
                        <h5>Manage Donars</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="basic-key-table">
                                <thead>
                                    <tr>
                                        <th>Donor ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Registration Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>001</td>
                                        <td>John Smith</td>
                                        <td>john@example.com</td>
                                        <td>+1234567890</td>
                                        <td>2024-05-01</td>
                                        <td>
                                            <a class="link-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal"><i class="fa fa-edit fa-lg"></i></a>
                                            <a class="link-danger" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>002</td>
                                        <td>Alice Johnson</td>
                                        <td>jalice@example.com</td>
                                        <td>+1987654321</td>
                                        <td>2024-04-31</td>
                                        <td>
                                        <a class="link-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal"><i class="fa fa-edit fa-lg"></i></a>
                                            <a class="link-danger" data-bs-toggle="modal" data-original-title="test" data-bs-target=""><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                  <tr>
                                        <th>Donor ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Registration Date</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                              
                                <!-- edit donor modal start -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Donor Information</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <form id="editDonorForm">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="donorID" class="form-label">Donor ID</label>
                                                                    <input type="text" class="form-control" id="donorID" placeholder="Enter Donor ID" readonly>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="donorName" class="form-label">Name</label>
                                                                    <input type="text" class="form-control" id="donorName" placeholder="Enter Donor Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="donorPhone" class="form-label">Phone</label>
                                                                    <input type="tel" class="form-control" id="donorPhone" placeholder="Enter Donor Phone">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="donorPassword" class="form-label">Password</label>
                                                                    <input type="password" class="form-control" id="donorPassword" placeholder="Enter Donor Password">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                                                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Donor Password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-primary" type="button" onclick="saveDonorChanges()">Save</button>
                                                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- edit donor modal end -->
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
