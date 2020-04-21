<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="author" description="Ouda">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <script src="js/main.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="#">Lab</a>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="form-holder">
                    <form method="POST" onsubmit="validateForm(this)" action="php/Model.php">
                        <div class="alert alert-danger">
                            <p id="alert1"></p>
                        </div>
                        <div class="form-group">
                          <label for="fname">First Name</label>
                          <input type="text" class="form-control" name="fname" id="fname" aria-describedby="fname" placeholder="Enter First name">
                        </div>
                        <div class="form-group">
                          <label for="lname">Last Name</label>
                          <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last name">
                        </div>
                        <div class="form-group">
                            <label for="city">City Name</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter City name">
                          </div>
                        <input type="submit" name="submit">
                      </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
    
</body>
</html>