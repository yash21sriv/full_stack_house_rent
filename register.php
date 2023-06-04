<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            padding-top: 56px;
        }

        .d-block {

            object-fit: cover;
            object-position: center;
            overflow: hidden;
            height: 50vh;

        }

        #img1 {

            opacity: 0.75;
        }

        #img2 {

            opacity: 0.75;
        }

        #img3 {

            opacity: 0.75;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary  bg-dark fixed-top " data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">House Rental</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="about.html">About-Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact-Us</a>
                    </li>

                </ul>
               
                <div class="mx-2">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#LoginModal" >
                        Login 
                    </button>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#SignUpModal" >
                        Sign-Up 
                    </button>

                </div>
            </div>
        </div>
    </nav>

    
  
  <!-- Login-Modal -->
  <div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="LoginModal">Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">username</label>
                  <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
                 
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
       
        </div>
      </div>
    </div>
  </div>


  
  
  <!-- Sign-Up Modal -->
  <div class="modal fade" id="SignUpModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="SignUpModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="SignUpModal">Sign-Up</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3" action="" method="post">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">username</label>
                  <input type="text" class="form-control" id="inputEmail4" name="username">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword4" name="password">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" id="inputPassword4" name="confirm_password">
                </div>
                
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      I accept the terms and conditions
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
              </form>
        </div>
       
        </div>
      </div>
    </div>
  </div>

 


    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/img17.png" class="d-block w-100" id="img1" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to House Rental</h2>
                    <p>Get your dream house on a reasonable rent or list your house for rent</p>

                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img18.png" class="d-block w-100" id="img2" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to House Rental</h2>
                    <p>Get your dream house on a reasonable rent or list your house for rent</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img15.png" class="d-block w-100" id="img3" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to House Rental</h2>
                    <p>Get your dream house on a reasonable rent or list your house for rent</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container my-4">
        <div class="album py-5 bg-body-tertiary">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">


                            <img src="images/img4.png" height="230">


                            <div class="card-body">
                              <p class="card-text"><h3>Kanpur</h3></p>
                              <p class="card-text">Address:- .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                         

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="images/img5.png" height="230">
                            <div class="card-body">
                              <p class="card-text"><h3>Delhi</h3></p>
                              <p class="card-text">Address:- .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                           

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="images/img6.png" height="230">
                            <div class="card-body">
                              <p class="card-text"><h3>Noida</h3></p>
                              <p class="card-text">Address:- .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="images/img7.png" height="230">
                            <div class="card-body">
                              <p class="card-text"><h3>Bengaluru</h3></p>
                              <p class="card-text">Address:- .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="images/img8.png" height="230">
                            <div class="card-body">
                              <p class="card-text"><h3>Hyderabad</h3></p>
                              <p class="card-text">Address:- .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                          

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="images/img9.png" height="230">
                            <div class="card-body">
                              <p class="card-text"><h3>Prayagraj</h3></p>
                              <p class="card-text">Address:- .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="images/img11.png" height="230">
                            <div class="card-body">
                              <p class="card-text"><h3>Lucknow</h3></p>
                              <p class="card-text">Address:- .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
   

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="images/img12.png" height="230">
                            <div class="card-body">
                              <p class="card-text"><h3>Indore</h3></p>
                              <p class="card-text">Address:- .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="images/img13.png" height="230">
                            <div class="card-body">
                              <p class="card-text"><h3>Ahemdabad</h3></p>
                              <p class="card-text">Address:- .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>© 2023–2026 House Rental, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>