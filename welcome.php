<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
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
        #welname{
            color: white;
            margin-right: 20px;
            
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
                        <a class="nav-link active"  href="welcome.php">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="about.html">About-Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact-Us</a>
                    </li>

                </ul>

                <div class="nav-item" id="welname">
                <button type="button" class="btn btn-primary rounded text-truncate"><?php echo $_SESSION['username']?></button>

                     
                           

                </div>

                
                <div class="mx-2">
                    <button class="btn btn-danger">
                      <a href="logout.php" class="text-decoration-none text-reset"> Logout </a>
                    </button>
                   
                </div>

               

            </div>
        </div>
    </nav>

    
  
 

  <!-- Modal1 -->
<div class="modal fade" id="modal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal1">Jethalal</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>phone no:-234568971</p>
        <p>Email:-abc@gmail.com</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
  <!-- Modal2 -->
<div class="modal fade " id="modal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal2">Akshay Kumar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>phone no:-234568971</p>
        <p>Email:-abc@gmail.com</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
  <!-- Modal3 -->
<div class="modal fade " id="modal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal3">Kapil Srivastava</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>phone no:-234568971</p>
        <p>Email:-abc@gmail.com</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
  <!-- Modal4 -->
<div class="modal fade" id="modal4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal4Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal4">Virat Kohli</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>phone no:-234568971</p>
        <p>Email:-abc@gmail.com</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
  <!-- Modal5 -->
<div class="modal fade" id="modal5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal5Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal5">MS Dhoni</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>phone no:-234568971</p>
        <p>Email:-abc@gmail.com</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
  <!-- Modal6 -->
<div class="modal fade " id="modal6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal6Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal6">Sachin Tendulkar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>phone no:-234568971</p>
        <p>Email:-abc@gmail.com</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
  <!-- Modal7 -->
<div class="modal fade " id="modal7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal7" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal7">Vishwanathan Anand</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>phone no:-234568971</p>
        <p>Email:-abc@gmail.com</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
  <!-- Modal8 -->
<div class="modal fade " id="modal8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal8Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal8">Sunil Chhetri</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>phone no:-234568971</p>
        <p>Email:-abc@gmail.com</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
  <!-- Modal9 -->
<div class="modal fade " id="modal9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal9Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal9">Lionel Messi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>phone no:-234568971</p>
        <p>Email:-abc@gmail.com</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
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

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" class="product-list" id="product-list">
                    <div class="col">
                        <div class="card shadow-sm">


                            <img src="images/img4.png">


                            <div class="card-body">
                                <p class="card-text"><h3>Kanpur</h3></p>
                                <p class="card-text">Address:- .</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modal1">Contact
                                            Owner</button>

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
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modal2">Contact
                                            Owner</button>

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
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modal3">Contact
                                            Owner</button>

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
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modal4">Contact
                                            Owner</button>

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
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modal5" >Contact
                                            Owner</button>

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
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modal6">Contact
                                            Owner</button>

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
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modal7">Contact
                                            Owner</button>

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
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modal8">Contact
                                            Owner</button>

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
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modal9">Contact
                                            Owner</button>

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