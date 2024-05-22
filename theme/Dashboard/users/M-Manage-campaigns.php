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
                    <h3> Campaigns</h3>
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
                        <h5>Manage Campaigns</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="basic-key-table">
                                <thead>
                                    <tr>
                                        <th>Campaign Name</th>
                                        <th>Campaign Category</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Image</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Campaign A</td>
                                        <td>Lifestyle</td>
                                        <td>Description of Campaign A</td>
                                        <td>$10,000</td>
                                        <td><img src="path_to_image/image.jpg" alt="Campaign Image"></td>
                                        <td>2024-05-01</td>
                                        <td>
                                        <a class="link-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal"><i class="fa fa-edit fa-lg"></i></a>
                                         <a class="link-danger" data-bs-toggle="modal" data-original-title="test" data-bs-target=""><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- edit campaign modal start -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Campaign</h5>
                                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="editCampaignForm">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label for="campaignName" class="form-label">Campaign Name</label>
                                                                            <input type="text" class="form-control" id="campaignName" placeholder="Enter Campaign Name">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="campaignCategory" class="form-label">Campaign Category</label>
                                                                            <select class="form-select" id="campaignCategory">
                                                                                <option selected>Select Category</option>
                                                                                <!-- Add options for different categories -->
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="amount" class="form-label">Amount</label>
                                                                            <input type="number" class="form-control" id="amount" placeholder="Enter Amount">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label for="description" class="form-label">Description</label>
                                                                            <textarea class="form-control" id="description" rows="5" placeholder="Enter Description"></textarea>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="image" class="form-label">Image</label>
                                                                            <input type="file" class="form-control" id="image">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="endDate" class="form-label">End Date</label>
                                                                            <input type="date" class="form-control" id="endDate">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary" type="button" onclick="saveCampaignChanges()">Save</button>
                                                            <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>   
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                            <!-- edit campaign modal end -->
                                <tfoot>
                                    <tr>
                                        <th>Campaign Name</th>
                                        <th>Campaign Category</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Image</th>
                                        <th>End Date</th>
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
