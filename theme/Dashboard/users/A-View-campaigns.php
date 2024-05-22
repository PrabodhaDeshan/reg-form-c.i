
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
                    <h3> Campaign Management</h3>
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
                        <h5>View Campaigns</h5>
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
                                        <td class="text-center">
                                        <a class="link-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#viewCampaignModal">
                                        <i class="fa fa-eye fa-lg"></i>
                                        </a>
                                       </td>
                                    </tr>
                                </tbody>
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

    <!-- campagin view modal start -->

    <div class="modal fade" id="viewCampaignModal" tabindex="-1" aria-labelledby="viewCampaignModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewCampaignModalLabel">Campaign Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <td>Campaign Name:</td>
                            <td id="campaignName"></td>
                        </tr>
                        <tr>
                            <td>Campaign Category:</td>
                            <td id="campaignCategory"></td>
                        </tr>
                        <tr>
                            <td>Description:</td>
                            <td id="campaignDescription"></td>
                        </tr>
                        <tr>
                            <td>Amount:</td>
                            <td id="campaignAmount"></td>
                        </tr>
                        <tr>
                            <td>Image:</td>
                            <td><img id="campaignImage" src="" alt="Campaign Image"></td>
                        </tr>
                        <tr>
                            <td>End Date:</td>
                            <td id="campaignEndDate"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
  <!-- campagin view modal end -->

</div>
<?php include('includes/footer.php'); ?>
