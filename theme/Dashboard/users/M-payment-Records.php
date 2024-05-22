
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
          <h3>Payment Records of Campaigns</h3>
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
            <h5>Payments Records</h5>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive">
              <table class="display" id="basic-key-table">
                <thead>
                  <tr>
                    <th>Campaign ID</th>
                    <th>Campaign Name</th>
                    <th>Release Date</th>
                    <th>Entry Date</th>
                    <th>Total Earnings</th>
                    <th>Number of Donation</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>CR001</td>
                    <td>Education Fund</td>
                    <td>2024-02-10</td>
                    <td>2024-02-01</td>
                    <td>$350</td>
                    <td>4</td>
                    <td class="text-center">
                      <a class="link-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">
                        <i class="fa fa-eye fa-lg"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>CR002</td>
                    <td>Environmental Conservation</td>
                    <td>2024-04-20</td>
                    <td>2024-04-01</td>
                    <td>$150</td>
                    <td>6</td>
                    <td class="text-center">
                      <a class="link-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">
                        <i class="fa fa-eye fa-lg"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Campaign ID</th>
                    <th>Campaign Name</th>
                    <th>Release Date</th>
                    <th>Entry Date</th>
                    <th>Total Earnings</th>
                    <th>Number of Donation</th>
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

  <!-- Modal for peymont record  details start -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Payments Records Details of Campaigns</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Display transaction details -->
                    <p><strong>Campaign ID:</strong> <span id="CampaignID"></span></p>
                    <p><strong>campaign Name:</strong> <span id="Campaign Name"></span></p>
                    <p><strong>Release Date:</strong> <span id="Release Date"></span></p>
                    <p><strong>Entry Date:</strong> <span id="Entry Date"></span></p>
                    <p><strong>Total Earnings:</strong> <span id="Total Earnings"></span></p>
                    <p><strong>Number of Donation:</strong> <span id="Number of Donation"></span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for peymont record  details end -->
</div>

<?php include('includes/footer.php'); ?>
