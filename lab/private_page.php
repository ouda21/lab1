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
                        <a class="dropdown-item" href="profile.php">Profile</a>
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
                    <div class="section-header text-center">
                        <h2>Private Page</h2>
                    </div>
                    <div class="section-sub__header text-center">
                        <h5>Welcome to the Private Page ,<?php echo $_SESSION['email']?>!</h5>
                    </div>
                </div>
                <div class="content">
                    <div class="container my-5 py-5 z-depth-1">
                        <section class="px-md-5 mx-md-5 text-center dark-grey-text">
                            <div class="row">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <h3 class="font-weight-bold">Material Design Blocks</h3>

                                    <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
                                        molestiae
                                        numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.
                                    </p>

                                    <a class="btn btn-purple btn-md ml-0" href="#" role="button">Start now<i class="fa fa-gem ml-2"></i></a>

                                    <hr class="my-5">

                                    <p class="font-weight-bold">Follow us on:</p>

                                    <!--Facebook-->
                                    <a href="#" class="mx-1" role="button"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="mx-1" role="button"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="mx-1" role="button"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="mx-1" role="button"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="mx-1" role="button"><i class="fab fa-pinterest"></i></a>
                                    <a href="#" class="mx-1" role="button"><i class="fab fa-youtube"></i></a>
                                    <a href="#" class="mx-1" role="button"><i class="fab fa-github"></i></a>
                                    <a href="#" class="mx-1" role="button"><i class="fab fa-stack-overflow"></i></a>
                                    </div>
                                    <div class="col-md-5 mb-4 mb-md-0">
                                    <img src="https://mdbootstrap.com/img/Others/screens1.png" class="img-fluid" alt="">
                                </div>    
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