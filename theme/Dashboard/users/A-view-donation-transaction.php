
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
                    <h3>Donation Management</h3>
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
                        <h5>View Donation Transaction</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="basic-key-table">
                                <thead>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Donor ID</th>
                                        <th>Donor Name</th>
                                        <th>Campaign ID</th>
                                        <th>Campaign Name</th>
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
                                        <td>001</td>
                                        <td>001</td>
                                        <td>John Smith</td>
                                        <td>101</td>
                                        <td>COVID Relief Fund</td>
                                        <td>001</td>
                                        <td>XYZ Retail</td>
                                        <td>2024-04-03</td>
                                        <td>$50</td>
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
                                    <tr>
                                        <td>002</td>
                                        <td>002</td>
                                        <td>Alice Johnson</td>
                                        <td>102</td>
                                        <td>Education Project</td>
                                        <td>002</td>
                                        <td>ABC Foundation</td>
                                        <td>2024-04-03</td>
                                        <td>$100</td>
                                        <td>
                                            <div class="d-inline-flex align-items-center active">
                                                <span class="badge bg-success border border-success text-dark me-2"></span>
                                                <div class="ps-2 text-warning fw-bold">Pending </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a class="link-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal2">
                                                <i class="fa fa-eye fa-lg"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>003</td>
                                        <td>003</td>
                                        <td>Emily Davis</td>
                                        <td>101</td>
                                        <td>COVID Relief Fund</td>
                                        <td>001</td>
                                        <td>XYZ Retail</td>
                                        <td>2024-04-02</td>
                                        <td>$25</td>
                                        <td>
                                            <div class="d-inline-flex align-items-center active">
                                                <span class="badge bg-success border border-success text-dark me-2"></span>
                                                <div class="ps-2 text-success fw-bold">Completed</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a class="link-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal3">
                                                <i class="fa fa-eye fa-lg"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Donor ID</th>
                                        <th>Donor Name</th>
                                        <th>Campaign ID</th>
                                        <th>Campaign Name</th>
                                        <th>Merchant ID</th>
                                        <th>Merchant Name</th>
                                        <th>Transaction Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
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

    <!-- Modal for review details start -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Donation Transaction Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Display transaction details -->
                    <!-- Update the IDs accordingly -->
                    <p><strong>Transaction ID:</strong> <span id="TransactionID1"></span></p>
                    <p><strong>Donor ID:</strong> <span id="DonorID1"></span></p>
                    <p><strong>Donor Name:</strong> <span id="DonorName1"></span></p>
                    <p><strong>Campaign ID:</strong> <span id="CampaignID1"></span></p>
                    <p><strong>Campaign Name:</strong> <span id="CampaignName1"></span></p>
                    <p><strong>Merchant ID:</strong> <span id="MerchantID1"></span></p>
                    <p><strong>Merchant Name:</strong> <span id="MerchantName1"></span></p>
                    <p><strong>Transaction Date:</strong> <span id="TransactionDate1"></span></p>
                    <p><strong>Amount:</strong> <span id="Amount1"></span></p>
                    <p><strong>Status:</strong> <span id="Status1"></span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for second transaction details -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title

" id="exampleModalLabel2">Donation Transaction Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Display transaction details -->
                    <!-- Update the IDs accordingly -->
                    <p><strong>Transaction ID:</strong> <span id="TransactionID2"></span></p>
                    <p><strong>Donor ID:</strong> <span id="DonorID2"></span></p>
                    <p><strong>Donor Name:</strong> <span id="DonorName2"></span></p>
                    <p><strong>Campaign ID:</strong> <span id="CampaignID2"></span></p>
                    <p><strong>Campaign Name:</strong> <span id="CampaignName2"></span></p>
                    <p><strong>Merchant ID:</strong> <span id="MerchantID2"></span></p>
                    <p><strong>Merchant Name:</strong> <span id="MerchantName2"></span></p>
                    <p><strong>Transaction Date:</strong> <span id="TransactionDate2"></span></p>
                    <p><strong>Amount:</strong> <span id="Amount2"></span></p>
                    <p><strong>Status:</strong> <span id="Status2"></span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for third transaction details -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Donation Transaction Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Display transaction details -->
                    <!-- Update the IDs accordingly -->
                    <p><strong>Transaction ID:</strong> <span id="TransactionID3"></span></p>
                    <p><strong>Donor ID:</strong> <span id="DonorID3"></span></p>
                    <p><strong>Donor Name:</strong> <span id="DonorName3"></span></p>
                    <p><strong>Campaign ID:</strong> <span id="CampaignID3"></span></p>
                    <p><strong>Campaign Name:</strong> <span id="CampaignName3"></span></p>
                    <p><strong>Merchant ID:</strong> <span id="MerchantID3"></span></p>
                    <p><strong>Merchant Name:</strong> <span id="MerchantName3"></span></p>
                    <p><strong>Transaction Date:</strong> <span id="TransactionDate3"></span></p>
                    <p><strong>Amount:</strong> <span id="Amount3"></span></p>
                    <p><strong>Status:</strong> <span id="Status3"></span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for review details end -->

</div>
<?php include('includes/footer.php'); ?>
