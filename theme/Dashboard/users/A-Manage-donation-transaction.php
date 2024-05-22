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
                    <h3>Donation Management </h3>
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
                        <h5>Manage Donation Transaction</h5>
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
                                    <td>2024-04-03</td>
                                    <td>$50</td>
                                    <td>
                                        <div class="d-inline-flex align-items-center active">
                                            <span class="badge bg-success border border-success text-dark me-2"></span>
                                            <div class="ps-2 text-success fw-bold">Completed</div>
                                        </div>
                                    </td>
                                    <td>
                                         <a class="link-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#manageDonationTransactionModal"><i class="fa fa-edit fa-lg"></i></a>
                                         <a class="link-danger" data-bs-toggle="modal" data-original-title="test" data-bs-target=""><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                <td>002</td>
                                <td>002</td>
                                <td>Alice Johnson</td>
                                <td>102</td>
                                <td>Education Project</td>
                                <td>2024-04-03</td>
                                <td>$100</td>
                                <td>
                                    <div class="d-inline-flex align-items-center active">
                                        <span class="badge bg-success border border-success text-dark me-2"></span>
                                        <div class="ps-2 text-success fw-bold">Completed</div>
                                    </div>
                                </td>
                                <td>
                                <a class="link-primary" data-bs-toggle="modal" data-bs-target="#manageDonationTransactionModal"><i class="fa fa-edit fa-lg"></i></a>
                                <a class="link-danger" data-bs-toggle="modal" data-original-title="test" data-bs-target=""><i class="fa fa-trash fa-lg"></i></a>
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
                                    <th>Transaction Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    </tr>
                                </tfoot>
                               
                                <!-- Manage Donation Transaction  start Modal -->
                                <div class="modal fade" id="manageDonationTransactionModal" tabindex="-1" role="dialog" aria-labelledby="manageDonationTransactionModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="manageDonationTransactionModalLabel">Manage Donation Transaction</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <form id="manageDonationTransactionForm">
                                                <div class="row">
                                                    <!-- First Column -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="transactionId" class="form-label">Transaction ID</label>
                                                            <input type="text" class="form-control" id="transactionId" placeholder="Enter Transaction ID" >
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="donorId" class="form-label">Donor ID</label>
                                                            <input type="text" class="form-control" id="donorId" placeholder="Enter Donor ID" >
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="donorName" class="form-label">Donor Name</label>
                                                            <input type="text" class="form-control" id="donorName" placeholder="Enter Donor Name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="campaignId" class="form-label">Campaign ID</label>
                                                            <input type="text" class="form-control" id="campaignId" placeholder="Enter Campaign ID">
                                                        </div>
                                                    </div>
                                                    <!-- Second Column -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="transactionDate" class="form-label">Transaction Date</label>
                                                            <input type="date" class="form-control" id="transactionDate">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="amount" class="form-label">Amount</label>
                                                            <input type="number" class="form-control" id="amount" placeholder="Enter Amount">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="status" class="form-label">Status</label>
                                                            <select class="form-select" id="status">
                                                                <option selected>Select Status</option>
                                                                <option value="complete">Complete</option>
                                                                <option value="incomplete">Incomplete</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="button" onclick="saveDonationTransaction()">Save</button>
                                                <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Manage Donation Transaction  end Modal -->
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
