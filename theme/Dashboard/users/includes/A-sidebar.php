  <?php
  include('includes/header.php');
  ?>
  <!-- Page Body Start-->
  <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center"><img class="img-90 rounded-circle" src="assets/images/dashboard/1.png" alt="">
            <div class="badge-bottom"></div><a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600">Admin</h6></a>
          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="A-index.php"><i data-feather="home"></i><span>Dashboard</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="M-index.php"><i data-feather="home"></i><span>Dashboard</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="A-statsitics.php"><i class="fa fa-bar-chart"></i><span class="ms-3">Statistics</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="M-statistics.php"><i class="fa fa-bar-chart"></i><span class="ms-3">Statistics</span> </a></li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i class=" fa fa-light fa-building"></i><span class="ms-3">Organization</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="M-Add-organization.php">Add Data</a></li>
                      <li><a href="M-View-organization.php">View Data</a></li>
                    </ul>
                 </li>  
                 <li class="dropdown"><a class="nav-link menu-title link-nav" href="M-profile.php"><i data-feather="user"></i><span>Account</span></a></li>
                 <li class="dropdown"><a class="nav-link menu-title link-nav" href="A-profile.php"><i data-feather="user"></i><span>Account</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i class=" fa fa-solid fa-bullhorn"></i><span class="ms-3">Campaings</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="M-Add-campagin.php">Add Camapaign</a></li>
                      <li><a href="M-Manage-campaigns.php">Manage Campaings</a></li>
                    </ul>
                 </li>  
                 <li class="dropdown"><a class="nav-link menu-title link-nav" href="M-donators-Details.php"><i data-feather="users"></i><span>Donators</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="M-payment-Records.php"><i data-feather="file"></i><span>Payment Records</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="settings"></i><span>General Setting</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="M-Add-Banner.php">Banner Image</a></li>
                    </ul>
                 </li>  

                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="users"></i><span>Donars Management</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="A-Add-donar.php">Add Donar</a></li>
                      <li><a href="A-manage-donars.php">Manage Donars</a></li>
                    </ul>
                 </li> 
                 
                 <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i class=" fa fa-light fa-building"></i><span class="ms-3">Merchant Management</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="A-Add-marchant.php">Add Marchant</a></li>
                      <li><a href="A-Manage-Marchants.php">Manage Marchants</a></li>
                      <li><a href="A-view-marchant-transaction.php">merchant transactions </a></li>
                    </ul>
                 </li> 

                 <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i class="fa-solid fa-hand-holding-dollar"></i><span class="ms-3">Donation Management</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="A-view-donation-transaction.php">View Donation Transaction</a></li>
                      <li><a href="A-Manage-donation-transaction.php">Manage Donation Transaction</a></li>
                      <li><a href="A-donation-reoprt.php">Donation Report</a></li>
                    </ul>
                 </li>  
                 
                 <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i class=" fa fa-solid fa-bullhorn"></i><span class="ms-3">campagin Management</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="A-create-campagin.php">Create Camapaign</a></li>
                      <li><a href="A-View-campaigns.php">View Campaigns</a></li>
                      <li><a href="A-Manage Campaings.php">Manage Campaings</a></li>
                    </ul>
                 </li> 
                 <li class="dropdown"><a class="nav-link menu-title link-nav" href="A-category.php"><i class="fa-solid fa-list"></i><span class="ms-3">Category</span></a></li>  
                 <li class="dropdown"><a class="nav-link menu-title link-nav" href="A-view-Reviews.php"><i class="fa-regular fa-comments"></i><span class="ms-3">Reviews</span></a></li>  
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->