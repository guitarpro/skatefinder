<?php $__env->startSection('title'); ?>
    Skate Finder
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style>
    .carousel-item {
        height: 200px;
        background: no-repeat center center scroll;
 
    }   

</style>

<section class="py-5">
    <div class="container">
      <h1>Welcome to Skate.Finder</h1>
      <p>Skate.Finder is the ultimate platform for skateboarders. Your go-to for anything skateboarding: finding local skate shops, skate parks, and even finding the most hidden and exclusive skate spots in your area. Find, skate, and share your best tricks at the spots you find! Upload your own spot discoveries, or rate others spots. Check out our online store for essential skate product!</p>
    </div>
  </section>


<div id="carouselExampleIndicators" class="carousel slide changeSize" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://i.ytimg.com/vi/p3NXd3DhH08/maxresdefault.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h4>Skate Spots</h4>
            <p>Unique spots uploaded by local skaters that you could add to yourself! Just sign up for an account.</p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://static.pexels.com/photos/700953/pexels-photo-700953.jpeg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h4>Skate Parks</h4>
            <p>Skate.Finder has all local parks built in to the map for you to find.</p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="http://www.puredist.com/wp-content/gallery/socal-skateshop/socalskateshop3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h4>Skate Shops</h4>
            <p>We have all major skate shops listed for you to find all your local merch.</p>
          </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  

  <!-- Page Content -->

  <!-- Footer -->
  <footer class="py-4 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Skate.Finder 2018</p>
    </div>
    <!-- /.container -->
  </footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>