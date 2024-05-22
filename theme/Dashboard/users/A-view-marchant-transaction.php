
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
                        <h5>Merchants Transaction</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="basic-key-table">
                                <thead>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Merchant ID</th>
                                        <th>Merchant Name</th>
                                        <th>Transaction Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>Lifestyle</td>
                                        <td>2024-03-30</td>
                                        <td>100.00</td>
                                        <td>
                                            <div class="d-inline-flex align-items-center active">
                                                <span class="badge bg-success border border-success text-dark me-2"></span>
                                                <div class="ps-2 text-success fw-bold">Completed</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                        <a class="link-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal1">
                                            <i class="fa fa-eye fa-lg"></i>
                                        </a>
                                        </td>
                                    </tr>
                                    <!-- Other table rows -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Merchant ID</th>
                                        <th>Merchant Name</th>
                                        <th>Transaction Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
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

     <!-- Modal for merchant transaction start -->
     <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Merchant Transaction Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Display transaction details -->
                    <!-- Update the IDs accordingly -->
                    <p><strong>Transaction ID:</strong> <span id="Transaction ID"></span></p>
                    <p><strong>Merchant ID:</strong> <span id="Merchant ID"></span></p>
                    <p><strong>Merhant Name:</strong> <span id="Merchant Name"></span></p>
                    <p><strong>Transaction Date:</strong> <span id="Transaction Date"></span></p>
                    <p><strong>Amount:</strong> <span id="Amount"></span></p>
                    <p><strong>Status:</strong> <span id="Status"></span></p>
                </div>
            </div>
        </div>
    </div>

      <!-- Modal for merchant transaction end -->
</div>
<?php include('includes/footer.php'); ?>
