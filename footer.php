
    <!-- Footer Start -->
    <div class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> Shop no 2 B.R. Saree Depot, near market
                        yard, chinchni road tasgaon ,
                        Tasgaon Dist. Sangli,
                        Maharashtra,
                        India-416312

                    </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 9373619180 </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i> +91 9765591395</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>umiyasexports@gmail.com </p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i> Deepakpatil8410@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="" style="background-color: white;"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="" style="background-color: white;"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="" style="background-color: white;"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="" style="background-color: white;"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-5 col-md-6">
                    <h5 class="text-light mb-4">About Us</h5>
                    <a href="">
                        <p class="jus text-white">Welcome to Umiyas Exports LLP, a trusted name in the field of
                            manufacturing, exporting, and supplying premium agricultural products and services.
                            Established in 2020, we are a dynamic company with a strong commitment to quality,
                            sustainability, and customer satisfaction. Located in Maharashtra, India,... </p>
                    </a>
                    <a href="">
                        <img src="images/logo/web2export.jpg" height="70px" width="200px" class="rounded my-3" alt="">
                    </a>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom text-primary" href="/">Umiyas Exports LLP</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">

                        Designed By <a class="border-bottom text-primary"  target="_blank"
                            href="https://web2export.com">web2export.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title fs-5" id="exampleModalLabel">Umiyas Exports LLP
                </h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6 my-2">
                        <input type="text" class="form-control name" value="" placeholder="Enter Your Name" />
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <input type="number" class="form-control number" value="" placeholder="Enter Your Number" />
                    </div>
                    <div class="col-12  my-2">
                        <input type="email" class="form-control email" value="" placeholder="Enter Your Email" />
                    </div>



                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" onclick="go()" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

    <!-- Back to Top -->
   
<script type="text/javascript">
    function go() {
        var name = document.querySelector(".name").value;
        var email = document.querySelector(".email").value;
        var number = document.querySelector(".number").value;
        var url = "https://wa.me/919373619180?text=" +
            "Name: " +
            name + " " +
            "Number: " +
            number + " " +
            "Email :" + email;
        window.open(url, "_blank").focus();
    }
</script>
<script type="text/javascript">
    function contact() {
        var na = document.querySelector(".name").value;
        var em = document.querySelector(".email").value;
        var phone = document.querySelector(".phone").value;
        var mes = document.querySelector(".message").value;
        var url1 = "https://wa.me/919373619180?text=" +
            "Name: " +
            na + " " +
            "Email: " +
            em + " " +
            "Phone :" + phone +
            "Message :" + mes;
        window.open(url1, "_blank").focus();
    }
</script>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>