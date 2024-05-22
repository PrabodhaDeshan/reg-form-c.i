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
            <div class="col-sm-10">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Create Campaign</h5>
                    </div>
                    <div class="card-body add-post">
                        <form class="row needs-validation" novalidate>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="campaignName">Campaign Name:</label>
                                    <input class="form-control" id="campaignName" type="text" placeholder="Campaign Name" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter a campaign name.</div>
                                </div>
                                <div class="form-group">
                                    <label for="campaignCategory">Campaign Category:</label>
                                    <select class="form-control" id="campaignCategory" required>
                                        <option value="">Select Category</option>
                                        <option value="lifestyle">Lifestyle</option>
                                        <option value="travel">Travel</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                    <div class="invalid-feedback">Please select a category.</div>
                                </div>
                                <div class="form-group">
                                <label for="campaignImage">Campaign Image:</label>
                                <input type="file" class="form-control-file" id="campaignImage" required>
                                <div class="invalid-feedback">Please provide a valid Campaign Image (image file).</div>
                            </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="campaignDescription">Description:</label>
                                    <textarea class="form-control" id="campaignDescription" rows="6" required></textarea>
                                    <div class="invalid-feedback">Please enter a description.</div>
                                </div>
                                <div class="form-group">
                                    <label for="campaignAmount">Amount:</label>
                                    <input class="form-control" id="campaignAmount" type="text" placeholder="Amount" required>
                                    <div class="invalid-feedback">Please enter an amount.</div>
                                </div>
                                <div class="form-group">
                                    <label for="endDate">End Date:</label>
                                    <input class="form-control" id="endDate" type="date" required>
                                    <div class="invalid-feedback">Please enter an end date.</div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="btn-showcase">
                                    <button class="btn btn-primary" type="submit">Add</button>
                                    <button class="btn btn-danger" type="reset">Discard</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

<?php   include('includes/footer.php');  ?>