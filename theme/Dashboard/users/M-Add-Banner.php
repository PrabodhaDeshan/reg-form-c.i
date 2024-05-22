
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
                    <h3>General Setting</h3>
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
                        <h5>Add Banner</h5>
                    </div>
                    <div class="card-body add-post">
                        <form class="row needs-validation" novalidate="" enctype="multipart/form-data">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="campaignImage">Banner:</label>
                                    <input type="file" class="form-control-file" id="campaignImage" required>
                                    <div class="valid-feedback"></div>
                                    <img src="#" alt="Preview" id="imagePreview" style="display: none; max-width: 100%; margin-top: 10px;">
                                </div>
                                <div class="btn-showcase">
                                    <button class="btn btn-primary" type="submit">Upload Banner</button>
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

<?php include('includes/footer.php'); ?>

