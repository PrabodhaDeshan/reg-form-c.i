
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
                    <h3>Reviews Details</h3>
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
                        <h5>View Reviews</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="basic-key-table">
                                <thead>
                                    <tr>
                                        <th>Review ID</th>
                                        <th>User Type</th>
                                        <th>User</th>
                                        <th>Rating</th>
                                        <th>Comment</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>001</td>
                                        <td>Donor</td>
                                        <td>John Smith</td>
                                        <td>4.5</td>
                                        <td>Great cause, happy to contribute!</td>
                                        <td>2024-04-03</td>
                                        <td class="text-center">
                                            <a class="link-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa fa-eye fa-lg"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>002</td>
                                        <td>Merchant</td>
                                        <td>XYZ Retail</td>
                                        <td>3.8</td>
                                        <td>Good service but could be improved.</td>
                                        <td>2024-04-02</td>
                                        <td class="text-center">
                                            <a class="link-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa fa-eye fa-lg"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Review ID</th>
                                        <th>User Type</th>
                                        <th>User</th>
                                        <th>Rating</th>
                                        <th>Comment</th>
                                        <th>Date</th>
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

<!-- Modal for review details start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Review Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Display review details -->
                <p><strong>Review ID:</strong> <span id="reviewID"></span></p>
                <p><strong>User Type:</strong> <span id="userType"></span></p>
                <p><strong>User:</strong> <span id="user"></span></p>
                <p><strong>Rating:</strong> <span id="rating"></span></p>
                <p><strong>Comment:</strong> <span id="comment"></span></p>
                <p><strong>Date:</strong> <span id="date"></span></p>
            </div>
        </div>
    </div>
</div>

<!-- Modal for review details end -->

<?php include('includes/footer.php'); ?>
