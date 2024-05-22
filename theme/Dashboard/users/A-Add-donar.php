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
                <h3>  Donars Management </h3>
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
                    <h5>Add Donor</h5>
                </div>
                <div class="card-body add-post">
                    <form class="row needs-validation" novalidate>
                        <div class="col-sm-6">
                            <!-- First column for donor details -->
                            <div class="form-group">
                                <label for="firstName">First Name:</label>
                                <input class="form-control" id="firstName" type="text" placeholder="First Name" required>
                                <div class="invalid-feedback">Please enter your first name.</div>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name:</label>
                                <input class="form-control" id="lastName" type="text" placeholder="Last Name" required>
                                <div class="invalid-feedback">Please enter your last name.</div>
                            </div>
                            <div class="form-group">
                                <label for="businessEmail">Business Email:</label>
                                <input class="form-control" id="businessEmail" type="email" placeholder="Business Email" required>
                                <div class="invalid-feedback">Please enter a valid business email address.</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Second column for donor details -->
                            <div class="form-group">
                                <label for="phoneNumber">Phone Number:</label>
                                <input class="form-control" id="phoneNumber" type="tel" placeholder="Phone Number" required>
                                <div class="invalid-feedback">Please enter a valid phone number.</div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input class="form-control" id="password" type="password" placeholder="Password" required>
                                <div class="invalid-feedback">Please enter a password.</div>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password:</label>
                                <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm Password" required>
                                <div class="invalid-feedback">Please confirm your password.</div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="btn-showcase">
                                <button class="btn btn-primary" type="submit">Register</button>
                                <button class="btn btn-danger" type="reset">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
</div>
</div>
<!-- Container-fluid Ends-->

<?php   include('includes/footer.php');  ?>