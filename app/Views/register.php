
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<form method="post" action="<?=base_url("register");?>">

  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                    
                    <label class="form-label" for="firstName">First Name</label>
                    <input required type="text" id="first_name" class="form-control form-control-lg" />
                  </div>

                </div>
                
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                    
                    <label class="form-label" for="lastName">Last Name</label>
                    <input required type="text" id="last_name" class="form-control form-control-lg" />
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">
                  <div data-mdb-input-init class="form-outline datepicker w-100">  
                  <label for="birthdayDate" class="form-label">Birthday</label>
                    <input required type="date"  class="form-control form-control-lg" id="birthday" />
                  </div>
                </div>
               
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="emailAddress">Email</label>
                    <input required type="email" id="email" class="form-control form-control-lg" />
                  </div>
                  <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div data-mdb-input-init class="form-outline">
                  <label for="inputPassword6" class="col-form-label">Password</label>
                    <input type="password" id="password" class="form-control form-control-lg" />
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <div data-mdb-input-init class="form-outline">
                  <label class="form-label" for="phone_number">Phone Number</label>
                    <input required type="tel" id="phone_number" class="form-control form-control-lg" />
                  </div>
                </div>
              </div>
              
              <form action="/action_page.php">
     <input type="file" id="picture" name="filename">
 
       </form>
              <div class="mt-4 pt-2">
                <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Register" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
