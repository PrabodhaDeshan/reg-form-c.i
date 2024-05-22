
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
                    <h3>Merchant Management</h3>
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
                    <h5>Manage Merchants</h5>
                </div>
                <div class="card-body">
                    <div class="dt-ext table-responsive">
                        <table class="display" id="basic-key-table">
                            <thead>
                                <tr>
                                    <th>Merchant ID</th>
                                    <th>Merchant Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State/Province</th>
                                    <th>Country</th>
                                    <th>Zip/Postal Code</th>
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
                                    <td>123 Main St</td>
                                    <td>New York</td>
                                    <td>New York</td>
                                    <td>USA</td>
                                    <td>10001</td>
                                    <td>2024-05-01</td>
                                    <td>
                                    <a class="link-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#editMerchantModal"><i class="fa fa-edit fa-lg"></i></a>
                                    <a  class="link-danger" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>Alice Johnson</td>
                                    <td>jalice@example.com</td>
                                    <td>+1987654321</td>
                                    <td>456 Elm St</td>
                                    <td>Los Angeles</td>
                                    <td>California</td>
                                    <td>USA</td>
                                    <td>90001</td>
                                    <td>2024-04-30</td>
                                    <td>
                                    <a href="" class="link-primary"><i class="fa fa-edit fa-lg"></i></a>
                                    <a href="" class="link-danger"><i class="fa fa-trash fa-lg"></i></a>
                                   </td>
                                </tr>
                            </tbody> 

<!-- edit merchant form modal -->
<div class="modal fade" id="editMerchantModal" tabindex="-1" role="dialog" aria-labelledby="editMerchantModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editMerchantModalLabel">Edit Merchant Information</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="merchantID" class="form-label">Merchant ID</label>
                                <input type="text" class="form-control" id="merchantID" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="merchantName" class="form-label">New Merchant Name</label>
                                <input type="text" class="form-control" id="merchantName" placeholder="Enter Merchant Name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter Email">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter Phone">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter Address">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <select class="form-select" id="city">
                                    <option value="New York">New York</option>
                                    <option value="Los Angeles">Los Angeles</option>
                                    <!-- Add more options here -->
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="state" class="form-label">State/Province</label>
                                <select class="form-select" id="state">
                                    <option value="New York">New York</option>
                                    <option value="California">California</option>
                                    <!-- Add more options here -->
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="country" class="form-label">Country</label>
                                <select class="form-select" id="country">
                                    <option value="USA">USA</option>
                                    <option value="Canada">Canada</option>
                                    <!-- Add more options here -->
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="zipCode" class="form-label">Zip/Postal Code</label>
                                <input type="text" class="form-control" id="zipCode" placeholder="Enter Zip/Postal Code">
                            </div>
                            <div class="mb-3">
                                <label for="registrationDate" class="form-label">Registration Date</label>
                                <input type="date" class="form-control" id="registrationDate">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" id="saveChanges">Save</button>
                <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  edit merchant form modal end -->


                            <tfoot>
                                <tr>
                                    <th>Merchant ID</th>
                                    <th>Merchant Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State/Province</th>
                                    <th>Country</th>
                                    <th>Zip/Postal Code</th>
                                    <th>Registration Date</th>
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
