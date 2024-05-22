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
                        <h5>Donation Report</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="basic-key-table">
                            <thead>
                                    <tr>
                                    <th>Date</th>
                                    <th>Total Donations</th>
                                    <th>Total Amount</th>
                                    <th>Average Donation</th>
                                    <th>Total Campaigns</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <td>2024-04-03</td>
                                <td>50</td>
                                <td>$5000</td>
                                <td>$100</td>
                                <td>3</td>
                                <td class="text-center">
                                <a class="link-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal3">
                                <i class="fa fa-print fa-lg" aria-hidden="true"></i>
                                </a>
                                 </td>
                                 </tr>

                                 <tr>
                                <td>2024-04-03</td>
                                <td>50</td>
                                <td>$5000</td>
                                <td>$100</td>
                                <td>3</td>
                                <td class="text-center">
                                <a class="link-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal3">
                                <i class="fa fa-print fa-lg" aria-hidden="true"></i>
                                </a>
                                </a>
                                </td>
                                 </tr>
                                        
                                 <tr>
                                <td>2024-04-03</td>
                                <td>50</td>
                                <td>$5000</td>
                                <td>$100</td>
                                <td>3</td>
                                <td class="text-center">
                                    <a class="link-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal3">
                                    <i class="fa fa-print fa-lg" aria-hidden="true"></i>
                                </a>
                                </td>
                                 </tr>

                                </tbody>
                                <tfoot>
                                <tr>
                                <tr>
                                    <th>Date</th>
                                    <th>Total Donations</th>
                                    <th>Total Amount</th>
                                    <th>Average Donation</th>
                                    <th>Total Campaigns</th>
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
