<?php
     session_start();
     if(!isset($_SESSION['email']))
     {
         header('location:login.php');
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private page</title>

    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="assets/MDB/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/MDB/css/mdb.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
    
    <nav class="navbar navbar-expand-lg navbar-dark default-color navigation">
        <a class="navbar-brand" href="#">PrPage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">
                    <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">
                    <i class="fab fa-google-plus-g"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-left" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="controllers/logout.php">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
            
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    

                </div>
                <div class="content">
                    <div class="container my-5 py-5 z-depth-1">
                        <section class="px-md-5 mx-md-5 text-center dark-grey-text">
                            <div class="row">
                               <!--Section: Contact v.2-->
                                <section class="mb-4">

                                <!--Section heading-->
                                <h2 class="h1-responsive font-weight-bold text-center my-4">Profile</h2>
                                <!--Section description-->
                                <p class="text-center w-responsive mx-auto mb-5">Make changes to your profile and save it </p>

                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-9 mb-md-0 mb-5">
                                        <form id="contact-form" name="contact-form" action="" method="POST">

                                            <!--Grid row-->
                                            <div class="row">

                                                <!--Grid column-->
                                                <div class="col-md-6">
                                                    <div class="md-form mb-0">
                                                        <input type="text" id="name" name="fname" class="form-control">
                                                        <label for="fname" class="">First Name</label>
                                                    </div>
                                                </div>
                                                <!--Grid column-->

                                                <!--Grid column-->
                                                <div class="col-md-6">
                                                    <div class="md-form mb-0">
                                                        <input type="text" id="lname" name="lname" class="form-control">
                                                        <label for="lname" class="">Last Name</label>
                                                    </div>
                                                </div>
                                                <!--Grid column-->

                                            </div>
                                            <!--Grid row-->

                                            <!--Grid row-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="md-form mb-0">
                                                        <input type="text" id="email" name="email" class="form-control">
                                                        <label for="email" class="">Your Email</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Grid row-->

                                            <!--Grid row-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="md-form mb-0">
                                                        <input type="text" id="city" name="city" class="form-control">
                                                        <label for="city" class="">City</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Grid row-->

                                        </form>

                                        <div class="text-center text-md-left">
                                            <input type="submit" class="btn btn-primary" value="Send" name="submit">
                                        </div>
                                        <div class="status"></div>
                                    </div>
                                    <!--Grid column-->
                                </div>

                                </section>
                                <!--Section: Contact v.2-->   
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="page-footer font-small indigo">
    <div class="container text-center text-md-left">
    <div class="row">
        <div class="col-md-3 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
        <ul class="list-unstyled">
            <li>
            <a href="#!">Very long link 1</a>
            </li>
            <li>
            <a href="#!">Very long link 2</a>
            </li>
            <li>
            <a href="#!">Very long link 3</a>
            </li>
            <li>
            <a href="#!">Very long link 4</a>
            </li>
        </ul>
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-3 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
        <ul class="list-unstyled">
            <li>
            <a href="#!">Link 1</a>
            </li>
            <li>
            <a href="#!">Link 2</a>
            </li>
            <li>
            <a href="#!">Link 3</a>
            </li>
            <li>
            <a href="#!">Link 4</a>
            </li>
        </ul>

        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-3 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
        <ul class="list-unstyled">
            <li>
            <a href="#!">Link 1</a>
            </li>
            <li>
            <a href="#!">Link 2</a>
            </li>
            <li>
            <a href="#!">Link 3</a>
            </li>
            <li>
            <a href="#!">Link 4</a>
            </li>
        </ul>
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-3 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
            <li>
            <a href="#!">Link 1</a>
            </li>
            <li>
            <a href="#!">Link 2</a>
            </li>
            <li>
            <a href="#!">Link 3</a>
            </li>
            <li>
            <a href="#!">Link 4</a>
            </li>
        </ul>

        </div>
    </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://github.com/ouda21"> Lethal_Ouda</a>
    </div>
    </footer>


    <script type="text/javascript" src="assets/MDB/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/MDB/js/popper.js"></script>
    <script type="text/javascript" src="assets/MDB/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/MDB/js/mdb.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>