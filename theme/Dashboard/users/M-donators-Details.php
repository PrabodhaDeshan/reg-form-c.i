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
                  <h3>Donators </h3>
                </div>
                <div class="col-sm-6">
                </div>
              </div>
            </div>  
          </div>
          <!-- Container-fluid starts-->
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-header">
                      <h5>Donor Details</h5>
                  </div>
                  <div class="card-body">
                      <div class="table-responsive">
                          <table class="display" id="data-source-1" style="width:100%">
                              <thead>
                                  <tr>
                                      <th>Donor ID</th>
                                      <th>Donor Name</th>
                                      <th>Donation Amount</th>
                                      <th>Donation Date</th>
                                      <th>Email</th>
                                      <th>Payment Method</th>
                                      <th>Phone Number</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                  <td>001</td>
                                  <td>John Smith</td>
                                  <td>$50</td>
                                  <td>2024-03-15</td>
                                  <td>john@example.com</td>
                                  <td>Debit Card </td>
                                  <td>+1234567890 </td>
                                  <td class="text-center">
                                  <a class="link-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">
                                    <i class="fa fa-eye fa-lg"></i>
                                  </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>002</td>
                                  <td>Jane Doe</td>
                                  <td>$100</td>
                                  <td>2024-05-01</td>
                                  <td>Jane@example.com</td>
                                  <td>Credit Card </td>
                                  <td>+1234567890 </td>
                                  <td class="text-center">
                                  <a class="link-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">
                                    <i class="fa fa-eye fa-lg"></i>
                                  </a>
                                  </td>
                              </tr>
                              </tbody>
                              <tfoot>
                                <tr>
                                <th>Donor ID</th>
                                <th>Donor Name</th>
                                <th>Donation Amount</th>
                                <th>Donation Date</th>
                                <th>Email</th>
                                <th>Payment Method</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                      </div>
                  </div>
              </div>
          </div>

           <!-- Modal for donators details view start -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Donor Details </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Display transaction details -->
                    <!-- Update the IDs accordingly -->
                    <p><strong>Donor ID:</strong> <span id="Donor ID"></span></p>
                    <p><strong>Donor Name:</strong> <span id="Donor Name"></span></p>
                    <p><strong>Donation Amount:</strong> <span id="Donation Amount"></span></p>
                    <p><strong>Donation Date:</strong> <span id="Donation Date"></span></p>
                    <p><strong>Email:</strong> <span id="Email"></span></p>
                    <p><strong>Payment Method:</strong> <span id="Payment Method"></span></p>
                    <p><strong>Phone Number:</strong> <span id="Phone Number"></span></p>
                </div>
            </div>
        </div>
    </div>

      <!-- Modal for donators details view end-->
</div>
   <?php   include('includes/footer.php');  ?>