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
                          <h3>Dashboard</h3>
                      </div>
                  </div>
              </div>
          </div>
    
          <div class="container-fluid general-widget">
              <div class="row">
                  <div class="col-sm-6 col-xl-3 col-lg-6">
                      <div class="card o-hidden border-0">
                          <div class="bg-primary b-r-4 card-body">
                              <div class="media static-top-widget">
                                  <div class="align-self-center text-center"><i class="fa-solid fa-hand-holding-dollar fa-2x"></i></div>
                                  <div class="media-body"><span class="m-0">Total Donations</span>
                                      <h4 class="mb-0 counter">6659</h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
               
                  <div class="col-sm-6 col-xl-3 col-lg-6">
                      <div class="card o-hidden border-0">
                          <div class="bg-primary b-r-4 card-body">
                              <div class="media static-top-widget">
                                  <div class="align-self-center text-center"><i class=" fa fa-solid fa-bullhorn fa-2x"></i></div>
                                  <div class="media-body"><span class="m-0"> Total Campaigns </span>
                                      <h4 class="mb-0 counter">893</h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-xl-3 col-lg-6">
                      <div class="card o-hidden border-0">
                          <div class="bg-primary b-r-4 card-body">
                              <div class="media static-top-widget">
                                  <div class="align-self-center text-center"><i class=" fa fa-light fa-building fa-2x"></i></div>
                                  <div class="media-body"><span class="m-0"> Marchants</span>
                                      <h4 class="mb-0 counter">4531</h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-xl-3 col-lg-6">
                      <div class="card o-hidden border-0">
                          <div class="bg-primary b-r-4 card-body">
                              <div class="media static-top-widget">
                                  <div class="align-self-center text-center"><i class=" fa fa-solid fa-bullhorn fa-2x"></i></div>
                                  <div class="media-body"><span class="m-0">Recent Campaings</span>
                                      <h4 class="mb-0 counter">4531</h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-xl-3 col-lg-6">
                      <div class="card o-hidden border-0">
                          <div class="bg-primary b-r-4 card-body">
                              <div class="media static-top-widget">
                                  <div class="align-self-center text-center"><i class="fa-solid fa-list fa-2x" ></i></div>
                                  <div class="media-body"><span class="m-0">Categories</span>
                                      <h4 class="mb-0 counter">4531</h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-xl-3 col-lg-6">
                      <div class="card o-hidden border-0">
                          <div class="bg-primary b-r-4 card-body">
                              <div class="media static-top-widget">
                                  <div class="align-self-center text-center"><i class="fa-regular fa-comments fa-2x"></i></div>
                                  <div class="media-body"><span class="m-0">Total Reviews</span>
                                      <h4 class="mb-0 counter">4531</h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6 xl-100 box-col-">
                                <div class="card">
                                    <div class="cal-date-widget card-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                                            <div class="card">
                        <div class="mobile-clock-widget">
                            <div>
                                <ul class="clock" id="clock">
                                    <li class="hour" id="hour"></li>
                                    <li class="min" id="min"></li>
                                    <li class="sec" id="sec"></li>
                                </ul>
                                <div class="date f-24 mb-2" id="date"><span id="monthDay"></span><span id="year">, </span></div>
                                <div>
                                    <p class="m-0 f-14 text-light"></p>
                                </div>
                            </div>
                        </div>
                    </div>  
                                  </div>
                                  <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                                      <div class="cal-datepicker">
                                          <div class="datepicker-here float-sm-end" data-language="en"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>   
      </div>
   <?php   include('includes/footer.php');  ?>