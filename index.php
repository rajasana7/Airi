<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/uikit.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
    <title>Glozzom</title>
</head>
<body>
    <!--NAVIGATION -->
    <nav class="navbar navbar-dark navbar-expand-md" uk-sticky="top: 200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
      <div class="container">
        <a class="navbar-brand" href="index.html">Glozzom</a>
        <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNav" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Carousel SLIDER -->
    <section id="showcase" class="bg-dark">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-slide-to="0" data-target="#myCarousel" class="active"></li>
          <li data-slide-to="1" data-target="#myCarousel"></li>
          <li data-slide-to="2" data-target="#myCarousel"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item carousel-img-1 active">
            <div class="container">
              <div class="carousel-caption mb-5 pb-5">
                <h2 class="display-4">Heading 1</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi nam sequi, in quae blanditiis reprehenderit voluptatem minima beatae veritatis repellat.</p>
                <a href="#" class="btn btn-danger">Learn More</a>
              </div>
            </div>
          </div>
          <div class="carousel-item carousel-img-2">
            <div class="container">
              <div class="carousel-caption mb-5 pb-5 text-right">
                <h2 class="display-4">Heading 2</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi nam sequi, in quae blanditiis reprehenderit voluptatem minima beatae veritatis repellat.</p>
                <a href="#" class="btn btn-warning">Learn More</a>
              </div>
            </div>
          </div>
          <div class="carousel-item carousel-img-3">
            <div class="container">
              <div class="carousel-caption mb-5 pb-5 text-left">
                <h2 class="display-4">Heading 3</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi nam sequi, in quae blanditiis reprehenderit voluptatem minima beatae veritatis repellat.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
        </div>
        <a href="#myCarousel" class="carousel-control-prev" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#myCarousel" class="carousel-control-next" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </section>
<!--HOME ICON -->
    <section id="homeIcon" class="py-5 text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 my-2">
            <i class="fa fa-gears"></i>
            <h3 class="my-2">Turning Gears</h3>
            <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil delectus sequi, sunt eum debitis quis.</p>
          </div>
          <div class="col-md-4 my-2">
            <i class="fa fa-cloud"></i>
            <h3 class="my-2">Sending Data</h3>
            <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil delectus sequi, sunt eum debitis quis.</p>
          </div>
          <div class="col-md-4 my-2">
            <i class="fa fa-cart-plus"></i>
            <h3 class="my-2">Making Money</h3>
            <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil delectus sequi, sunt eum debitis quis.</p>
          </div>
        </div>
      </div>
    </section>
<!-- ARE YOU READY -->
    <section id="getstarted" class="py-3 text-center text-light">
      <div class="dark-overlay">
        <div class="container">
          <div class="row">
            <div class="col mt-5 pt-4">
              <h3>Are Your Ready To Get Started?</h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quaerat voluptatem laboriosam vero recusandae repellendus? Impedit iure est sit voluptatum blanditiis cum sequi laudantium quod dicta, a quaerat vel, obcaecati!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Home Info Section -->
    <section id="homeinfo" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center mt-sm-3 mt-3 md-0">
            <h3>Lorem Ipsum Dolor Sit</h3>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti tempora voluptate in qui, nobis architecto eveniet sit. Voluptas, ullam perspiciatis?</p>
            <a href="#" class="btn btn-outline-dark">Read More</a>
          </div>
          <div class="col-md-6 mt-sm-3 mt-3 md-0">
            <img src="img/pc.jpeg" class="img-fluid rounded" alt="PC">
          </div>
        </div>
      </div>
    </section>
<!-- Home Video Section -->
    <section id="home-video" class="text-center text-light">
      <div class="dark-overlay">
      <div class="container">
        <div class="row">
          <div class="col mt-5 pt-5">
            <div uk-lightbox>
              <a href="https://www.youtube.com/watch?v=43rTanJhQqM&list=PLm64fbD5OnxuWrqDWyObVkH_Y5R6Wg1wg&index=48" class="text-light">
                <i class="fa fa-play"></i>
              </a>
            </div>
            <h2 class="mt-3">Bootstrap 4 Crash Course</h2>
          </div>
        </div>
      </div>
      </div>
    </section>
<!-- Photo Gallery -->
    <section id="gallery" class="py-5 text-center" uk-lightbox>
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Photo Gallery</h2>
            <p class="lead">Check out our photos</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div>
              <a href="img/image1.jpeg">
                <img src="img/image1.jpeg" class="img-fluid" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <a href="img/image2.jpeg">
                <img src="img/image2.jpeg" class="img-fluid" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <a href="img/image3.jpeg">
                <img src="img/image3.jpeg" class="img-fluid" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="row pt-0 pt-md-4">
          <div class="col-md-4">
            <div>
              <a href="img/image4.jpeg">
                <img src="img/image4.jpeg" class="img-fluid" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <a href="img/image5.jpeg">
                <img src="img/image5.jpeg" class="img-fluid" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <a href="img/image6.jpeg">
                <img src="img/image6.jpeg" class="img-fluid" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- NewsLetter -->
    <section id="newsletter" class="py-5 bg-dark text-light text-center class="sr-only"">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2>Signup For Our Newsletter</h2>
            <p class="lead">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis magnam similique esse assumenda quasi repellendus illum perferendis quos aliquid possimus.
            </p>
            <form action="#" method="POST" class="form-inline justify-content-center">
              <label class="sr-only" for="name">Name</label>
              <input type="text" placeholder="Enter name" class="form-control m-2">
              <label class="sr-only" for="email">Email</label>
              <input type="email" placeholder="Enter email" class="form-control m-2">
              <input type="submit" class="btn btn-primary m-2" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </section>
<!--FOOTER -->
  <section id="copyright" class="py-3 text-center text-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead mb-0">Copyright 2018 &copy; Glozzom</p>
        </div>
      </div>
    </div>
  </section>
    <!-- JS FILES -->
    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

</body>
</html>
