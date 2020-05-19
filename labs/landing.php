<?php
    session_start();
    if(!isset($_SESSION["username"]))
    {
        header("location:login.php");
    }
    include_once "php/fileupload.php";

    if(isset($_POST["submit"]))
    {
        $file = $_FILES["profile-pic"]["name"];
        $file2 = $_FILES["profile-pic"]["tmp_name"];
        $fp = new FileUploader($file,$file2);
        if($fp->upload())
        {
            echo "Success";
        }
        else
        {
            echo "failed";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
               <h2> Welcome <?php echo $_SESSION["username"]?></h2>
            </div>
        </div>
    </div>
    <main style="margin-top:10vh;margin-bottom:10vh">
        <div class="card" style="width: 18rem;">
            <form action="" method="post" enctype="multipart/form-data">
                <img class="card-img-top" src="..." alt="Add a profile picture">
                <input type="file" class="form-group" name="profile-pic">
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>
    </main>
    
    <footer class="page-footer font-small unique-color-dark">
    <div style="background-color: #6351ce;">
    <div class="container">
        <div class="row py-4 d-flex align-items-center">
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <div class="col-md-6 col-lg-7 text-center text-md-right">
            <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
            </a>
        </div>
        </div>
    </div>
    </div>
    <div class="container text-center text-md-left mt-5">
    <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">Company name</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.
        </p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
            <a href="#!">MDBootstrap</a>
        </p>
        <p>
            <a href="#!">MDWordPress</a>
        </p>
        <p>
            <a href="#!">BrandFlow</a>
        </p>
        <p>
            <a href="#!">Bootstrap Angular</a>
        </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
            <a href="#!">Your Account</a>
        </p>
        <p>
            <a href="#!">Become an Affiliate</a>
        </p>
        <p>
            <a href="#!">Shipping Rates</a>
        </p>
        <p>
            <a href="#!">Help</a>
        </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
            <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
        <p>
            <i class="fas fa-envelope mr-3"></i> info@example.com</p>
        <p>
            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>