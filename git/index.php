<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


    <?php
    //HEADER//
        echo "<nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <a class='navbar-brand' href='index.php'>MENU</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
      
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
          <ul class='navbar-nav mr-auto'>
            <li class='nav-item active'>
              <a class='nav-link' href='index.php'>Home <span class='sr-only'>(current)</span></a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='link.php'>Link</a>
            </li>
            <li class='nav-item dropdown'>
              <a class='nav-link dropdown-toggle' href='index.php' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                Dropdown
              </a>
              <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                <a class='dropdown-item' href='action.php'>Action</a>
                <a class='dropdown-item' href='another.php'>Another action</a>
                <div class='dropdown-divider'></div>
                <a class='dropdown-item' href='#'>Something else here</a>
              </div>
            </li>
            <li class='nav-item'>
              <a class='nav-link disabled' href='#'>Disabled</a>
            </li>
          </ul>
          <form class='form-inline my-2 my-lg-0'>
            <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
            <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
          </form>
        </div>
      </nav>";
      //HEADER//

// font blanch//
      echo "<div style='height:30em;'></div>";

// footer//

    echo"
    <footer class='page-footer font-small indigo' style='background-color: lightblue;'>

    <!-- Footer Links -->
    <div class='container'>
    
      <!-- Grid row-->
      <div class='row text-center d-flex justify-content-center pt-5 mb-3'>
    
        <!-- Grid column -->
        <div class='col-md-2 mb-3'>
          <h6 class='text-uppercase font-weight-bold'>
            <a href='#!'>About us</a>
          </h6>
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class='col-md-2 mb-3'>
          <h6 class='text-uppercase font-weight-bold'>
            <a href='#!'>Products</a>
          </h6>
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class='col-md-2 mb-3'>
          <h6 class='text-uppercase font-weight-bold'>
            <a href='#!'>Awards</a>
          </h6>
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class='col-md-2 mb-3'>
          <h6 class='text-uppercase font-weight-bold'>
            <a href='#!'>Help</a>
          </h6>
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class='col-md-2 mb-3'>
          <h6 class='text-uppercase font-weight-bold'>
            <a href='#!'>Contact</a>
          </h6>
        </div>
        <!-- Grid column -->
    
      </div>
      <!-- Grid row-->
      <hr class='rgba-white-light' style='margin: 0 15%;'>
    
      <!-- Grid row-->
      <div class='row d-flex text-center justify-content-center mb-md-0 mb-4'>
    
        <!-- Grid column -->
        <div class='col-md-8 col-12 mt-5'>
          <p style='line-height: 1.7rem'>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
            explicabo.
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
        </div>
        <!-- Grid column -->
    
      </div>
      <!-- Grid row-->
      <hr class='clearfix d-md-none rgba-white-light' style='margin: 10% 15% 5%;'>
    
      <!-- Grid row-->
      <div class='row pb-3'>
    
        <!-- Grid column -->
        <div class='col-md-12'>
    
          <div class='mb-5 flex-center'>
    
            <!-- Facebook -->
            <a class='fb-ic'>
              <i class='fab fa-facebook-f fa-lg white-text mr-4'> </i>
            </a>
            <!-- Twitter -->
            <a class='tw-ic'>
              <i class='fab fa-twitter fa-lg white-text mr-4'> </i>
            </a>
            <!-- Google +-->
            <a class='gplus-ic'>
              <i class='fab fa-google-plus-g fa-lg white-text mr-4'> </i>
            </a>
            <!--Linkedin -->
            <a class='li-ic'>
              <i class='fab fa-linkedin-in fa-lg white-text mr-4'> </i>
            </a>
            <!--Instagram-->
            <a class='ins-ic'>
              <i class='fab fa-instagram fa-lg white-text mr-4'> </i>
            </a>
            <!--Pinterest-->
            <a class='pin-ic'>
              <i class='fab fa-pinterest fa-lg white-text'> </i>
            </a>
    
          </div>
    
        </div>
        <!-- Grid column -->
    
      </div>
      <!-- Grid row-->
    
    </div>
    <!-- Footer Links -->
    
    <!-- Copyright -->
    <div class='footer-copyright text-center py-3'>© 2020 Copyright:
      <a href='https://mdbootstrap.com/education/bootstrap/'> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
    
    </footer>";



?>





<!-- jqury -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  

</body>
</html>
