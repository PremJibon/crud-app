<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>full stack website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: white;">PremJibon</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: white;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php" style="color: white;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php" style="color: white;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- crousal -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/spi.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/sup.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/bat.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <section class='my-5'>
            <div>
                <h2 class="text-center">About us</h2>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src="images/vil.jpeg" class="img-fluid aboutimg" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <h2>I am PremJibon</h2>
                        <p class='py-5'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi repellat nulla eius distinctio numquam delectus eligendi accusantium quam enim labore?</p>
                        <a class="btn btn-success" href="about.php" style="text-decoration:none;">check more</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="my-5">
        <div class="my-5">
            <h2 class="text-center">Our Services</h2>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width:400px">
                        <img src="images/mon.jpeg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful nature</h4>
                            <p class="card-text">Some example text</p>
                            <a href="#" class="btn btn-primary">See</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width:400px">
                        <img src="images/mon.jpeg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">John oe</h4>
                            <p class="card-text">Some example text</p>
                            <a href="#" class="btn btn-primary">See</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width:400px">
                        <img src="images/mon.jpeg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">John oe</h4>
                            <p class="card-text">Some example text</p>
                            <a href="#" class="btn btn-primary">See</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--gallery -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Gallery</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/fog.jpeg" class="img-fluid pb-3" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/fog.jpeg" class="img-fluid pb-3" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/fog.jpeg" class="img-fluid pb-3" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/fog.jpeg" class="img-fluid pb-3" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/fog.jpeg" class="img-fluid pb-3" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/fog.jpeg" class="img-fluid pb-3" alt="">
                </div>

            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Form</h2>
        </div>

        <div class='container-fluid'>
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>UserName</label>
                    <input type="text" name="user" autocomplete="off" class='form-control'>
                </div>
                <div class="form-group">
                    <label>Email iD</label>
                    <input type="text" name="email" autocomplete="off" class='form-control'>
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile" autocomplete="off" class='form-control'>
                </div>
                <div class="form-group">
                    <label>Comments</label>
                    <textarea name="comments" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>


    <footer>
        <p class='text-center p-3 bg-dark text-white'>prempfp96@gmail.com</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>