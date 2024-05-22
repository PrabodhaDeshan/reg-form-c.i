<?php
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('includes/A-sidebar.php');
?>

<div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Account Maangement</h3>
                </div>
              </div>
            </div>
          </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
        <div class="container-xl px-4 mt-4">
   
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
    <!-- Merchant profile picture card-->
    <div class="card mb-4 mb-xl-0" style="height: 95%;">
        <div class="card-header">Profile Picture</div>
        <div class="card-body text-center d-flex flex-column justify-content-between">
            <!-- Profile picture image-->
            <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
            <!-- Profile picture help block-->
            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
            <!-- Profile picture upload form-->
            <form id="profilePictureForm" enctype="multipart/form-data">
                <!-- Input for file upload -->
                <input type="file" class="form-control" id="profilePictureUpload" accept=".jpg, .jpeg, .png" style="display: none;">
                <!-- Label for file upload input -->
                <label for="profilePictureUpload" class="btn btn-primary mb-4">Upload new image</label>
            </form>
        </div>
    </div>
</div>

        <div class="col-xl-8">
            <!-- Merchant account details card-->
            <div class="card mb-4">
                <div class="card-header">Merchant Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (merchant name)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputMerchantName">Merchant Name</label>
                            <input class="form-control" id="inputMerchantName" type="text" placeholder="Enter your merchant name" value="Merchant Name">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (contact person)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputContactPerson">Contact Person</label>
                                <input class="form-control" id="inputContactPerson" type="text" placeholder="Enter contact person's name" value="John Doe">
                            </div>
                            <!-- Form Group (business type)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBusinessType">Organization Name</label>
                                <input class="form-control" id="inputBusinessType" type="text" placeholder="Enter your Organization Name" value="Retail">
                            </div>
                        </div>
                        <!-- Form Group (business address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputBusinessAddress"> Address</label>
                            <input class="form-control" id="inputBusinessAddress" type="text" placeholder="Enter your  address" value="123 Main St, City, Country">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (email address)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="merchant@example.com">
                            </div>
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-987-6543">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="button">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Container-fluid Ends-->
    </div>
</div>
   <?php   include('includes/footer.php');  ?>