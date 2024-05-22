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
                    <h3>Add Organization</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row flex-lg-nowrap">
            <div class="col">
                <div class="row">
                    <div class="col mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="e-profile">
                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                            <form class="needs-validation" novalidate>
                                                <div class="row">
                                                    <div class="col">
                                                        <!-- Additional Fields -->
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="organizationName">Organization Name</label>
                                                                <input type="text" class="form-control" id="organizationName" placeholder="Organization Name" required>
                                                                <div class="invalid-feedback">
                                                                    Please provide a valid organization name.
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="organizationLogo">Organization Logo</label>
                                                                <input type="file" class="form-control" id="organizationLogo" accept="image/*" required>
                                                                <div class="invalid-feedback">
                                                                    Please provide a valid organization logo (image file).
                                                                </div>
                                                                <small class="form-text text-muted">Maximum file size: 5MB</small>
                                                            </div>
     
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                                <label for="abbreviationName">Abbreviation Name</label>
                                                                <input type="text" class="form-control" id="abbreviationName" placeholder="Abbreviation Name" required>
                                                                <div class="invalid-feedback">
                                                                    Please provide a valid abbreviation name.
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6 mb-3">
                                                                <label for="ssmNumber">SSM Number</label>
                                                                <input type="text" class="form-control" id="ssmNumber" placeholder="SSM Number" required>
                                                                <div class="invalid-feedback">
                                                                    Please provide a valid SSM number.
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="email">Email</label>
                                                                <input type="email" class="form-control" id="email" placeholder="Email" required>
                                                                <div class="invalid-feedback">
                                                                    Please provide a valid email address.
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="aboutCampaign">About the Campaign</label>
                                                                <textarea class="form-control" id="aboutCampaign" rows="5" placeholder="About the Campaign" required></textarea>
                                                                <div class="invalid-feedback">
                                                                    Please provide some information about the campaign.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                            
                                                            <div class="col-md-6 mb-3">
                                                                <label for="address">Address</label>
                                                                <textarea class="form-control" id="address" rows="3" placeholder="Address" required></textarea>
                                                                <div class="invalid-feedback">
                                                                    Please provide a valid address.
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="postCode">Post Code</label>
                                                                <input type="text" class="form-control" id="postCode" placeholder="Post Code" required>
                                                                <div class="invalid-feedback">
                                                                    Please provide a valid post code.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            
                                                            <div class="col-md-6 mb-3">
                                                                <label for="city">City</label>
                                                                <input type="text" class="form-control" id="city" placeholder="City" required>
                                                                <div class="invalid-feedback">
                                                                    Please provide a valid city.
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="state">State</label>
                                                                <select class="form-control" id="state" required>
                                                                    <option value="">Select State</option>
                                                                    <!-- Add options for states here -->
                                                                </select>
                                                                <div class="invalid-feedback">
                                                                    Please select a state.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                    
                                                            <div class="col-md-6 mb-3">
                                                                <label for="handphone">Handphone</label>
                                                                <input type="text" class="form-control" id="handphone" placeholder="Handphone" required>
                                                                <div class="invalid-feedback">
                                                                    Please provide a valid handphone number.
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="officeTelephone">Office Telephone No</label>
                                                                <input type="text" class="form-control" id="officeTelephone" placeholder="Office Telephone No" required>
                                                                <div class="invalid-feedback">
                                                                    Please provide a valid office telephone number.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                         
                                                            <div class="col-md-6 mb-3">
                                                                <label for="certificate">Certificate of e-ROSES / SSM / Organization</label>
                                                                <input type="file" class="form-control" id="certificate" required>
                                                                <div class="invalid-feedback">
                                                                    Please upload the certificate.
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="bankStatement">First page of Bank Account statement (proof of Bank Account)</label>
                                                                <input type="file" class="form-control" id="bankStatement" required>
                                                                <div class="invalid-feedback">
                                                                    Please upload the bank statement.
                                                                </div>
                                                            </div>
                                                        </div>
                                                   
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="bankName">Name of Bank</label>
                                                                <input type="text" class="form-control" id="bankName" placeholder="Name of Bank" required>
                                                                <div class="invalid-feedback">
                                                                    Please provide the name of the bank.
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="accountOwner">Name of Account Bank Owner</label>
                                                                <input type="text" class="form-control" id="accountOwner" placeholder="Name of Account Bank Owner" required>
                                                                <div class="invalid-feedback">
                                                                    Please provide the name of the account owner.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="accountNumber">Account Number</label>
                                                                <input type="text" class="form-control" id="accountNumber" placeholder="Account Number" required>
                                                                <div class="invalid-feedback">
                                                                    Please provide a valid account number.
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end">
                                            <div class="col-auto">
                                                <button class="btn btn-primary md-4" type="submit">Submit</button>
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-danger" type="reset">Cancel</button>
                                            </div>
                                        </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mb-3">
                        <!-- Sidebar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>
