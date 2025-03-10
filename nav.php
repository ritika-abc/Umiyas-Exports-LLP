 <!-- Spinner Start -->
 <div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
     <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
         <span class="sr-only">Loading...</span>
     </div>
 </div>
 <!-- Spinner End -->


 <!-- Topbar Start -->
 <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
     <div class="row gx-0 d-none d-lg-flex">
         <div class="col-lg-7 px-5 text-start">
             <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                 <small class="fa fa-map-marker-alt text-primary me-2"></small>
                 <small>Maharashtra , India-416312</small>
             </div>
             <div class="h-100 d-inline-flex align-items-center py-3">
                 <small class="fa fa-envelope   text-primary me-2"></small>
                 <small>umiyasexports@gmail.com</small>
             </div>
         </div>
         <div class="col-lg-5 px-5 text-end">
             <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                 <small class="fa fa-phone-alt text-primary me-2"></small>
                 <small>+91 9373619180 || +91 9765591395</small>
             </div>
             <div class="h-100 d-inline-flex align-items-center">
                 <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                         class="fab fa-facebook-f"></i></a>
                 <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                 <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                         class="fab fa-linkedin-in"></i></a>
                 <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
             </div>
         </div>
     </div>
 </div>
 <!-- Topbar End -->


 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
     data-wow-delay="0.1s">
     <a href="index.php" class="navbar-brand p-0">
         <img class="img-fluid  " src="icon/1.png" alt="Icon">
         <h5 class="m-0 text-primary"> Umiyas Exports LLP</h5>
     </a>
     <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
         <div class="navbar-nav ms-auto">
             <a href="index.php" class="nav-item nav-link  ">Home</a>

             <div class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Company Profile</a>
                 <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                     <a href="about.php" class="dropdown-item">About Us</a>
                     <a href="brief-history.php" class="dropdown-item">Brief History</a>
                     <a href="mission-and-vision.php" class="dropdown-item">Mission and Vision
                     </a>

                 </div>
             </div>
             <div class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Infrastructure</a>
                 <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                     <a href="our-manufacturing-facility.php" class="dropdown-item">Manufacturing Facility</a>


                 </div>
             </div>
             <div class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                 <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                     <?php
                        include "config.php";
                        $sel = "SELECT * FROM `pro`";
                        $q = mysqli_query($con, $sel);
                        while ($row = mysqli_fetch_array($q)) {


                        ?>
                         <a href="single-product.php?slug=<?php echo $row['slug'] ?>" class="dropdown-item"><?php echo $row['name'] ?></a>

                     <?php } ?>
                 </div>
             </div>
             <!-- <div class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gallery</a>
                 <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                     <a href="animal.html" class="dropdown-item">General Gallery</a>
                     <a href="membership.html" class="dropdown-item">Product Gallery </a>


                 </div>
             </div> -->
             <a href="contact.php" class="nav-item nav-link">Contact</a>
         </div>

     </div>
 </nav>
 <!-- Navbar End -->