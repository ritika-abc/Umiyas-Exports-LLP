<?php
include "config.php";
$slug = $_GET['slug'];
$sel = "SELECT * FROM `pro` where `slug`='$slug'";
$q = mysqli_query($con, $sel);
while ($row = mysqli_fetch_array($q)) {
    $name = $row['name'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Umiyas Exports LLP </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Umiyas Exports LLP " name="keywords">
    <meta content="Umiyas Exports LLP " name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/slide.css" rel="stylesheet">



</head>

<body>
    <?php
    include "nav.php";
    ?>


    <section>
        <div class=""
            style="background-image: url(images/banner/product.jpg);height: 400px;width: 100%;background-size: cover;background-position:center">
        </div>
        <nav class="bg-light py-2 px-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#"> Products</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $name ?></a></li>

            </ol>
        </nav>
    </section>


    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-4 my-3">
                    <?php
                    include "config.php";
                    $sel = "SELECT * FROM `pro`";
                    $q = mysqli_query($con, $sel);
                    while ($row = mysqli_fetch_array($q)) {


                    ?>
                        <div class="btn_box">
                            <a href="single-product.php?slug=<?php echo $row['slug'] ?>"><button class="text-start  btn btn-outline-primary text-capitalize"><?php echo $row['name'] ?></button></a>
                        </div>
                    <?php } ?>
                    <hr>
                    <div class="" style="width: 100%;overflow-x:auto">
                        <table class="table table-striped  table-hover table-bordered h-100">
                            <tr>
                                <th> <small>Company Name</small></th>
                                <td>Umiyas Exports LLP </td>
                            </tr>
                            <tr>
                                <th><small> CEO Name</small></th>
                                <td>Deepak Patil</td>
                            </tr>
                           
                            <tr>
                                <th><small>Production Capacity</small></th>
                                <td>10 Tons per day</td>
                            </tr>
                            <tr>
                                <th><small>Countries you deal in</small></th>
                                <td> European union, Middle east, African countries</td>
                            </tr>
                            <tr>
                                <th><small>Contact Now</small></th>
                                <td><a href="tel:+919373619180">+91 9373619180</a> <br> <a href="tel:+919765591395">+91 9765591395</a></td>
                            </tr>
                            <tr>
                                <th><small>Mail Id</small></th>
                                <td><a href="mailto:umiyasexports@gmail.com">umiyasexports@gmail.com</a> <br> <a href="mailto:Deepakpatil8410@gmail.com">Deepakpatil8410@gmail.com</a></td>
                            </tr>
                            

                        </table>
                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary px-4"> Send Enquiry  </a>
                    </div>
                </div>
                <?php
                include "config.php";
                $slug = $_GET['slug'];
                $sel = "SELECT * FROM `pro` where `slug`='$slug'";
                $q = mysqli_query($con, $sel);
                while ($row = mysqli_fetch_array($q)) {


                ?>
                    <div class="col-lg-8 my-3">
                        <img src="images/product/<?php echo $row['image'] ?>" class="rounded border   border-2 shadow-lg m-2" height="300px" style="object-fit: cover;" width="100%" alt="saddles">
                        <h4 class="my-4 text-capitalize"><?php echo $row['name'] ?></h4>
                        <div class="justify">
                            <?php echo $row['content'] ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>



    <?php
    include "footer.php";

    ?>