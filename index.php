<?php require_once "./requires/functions.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Donate to Food4Kids!</title>
  </head>
  
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="https://www.food4kidshamilton.ca/">
                <img src="./assets/images/logo.png" width="248" height="120"  class="d-inline-block align-top" alt="Food4Kids"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link" href="./pages/store">Donate Now</a>
                <a class="nav-item nav-link" href="https://www.food4kidshamilton.ca/about">About</a>
                <a class="nav-item nav-link" href="https://www.food4kidshamilton.ca/programs">Programs</a>
                <a class="nav-item nav-link" href="https://www.food4kidshamilton.ca/donate-1">Donate</a>
                <a class="nav-item nav-link" href="https://www.food4kidshamilton.ca/get-involved">Get Involved</a>
                </div>
            </div>
        </nav>

        <?php
            $page = htmlspecialchars(isset($_GET['page'])) ? $_GET['page']:'home';
            
            // Load in page
            if(!file_exists("./pages/$page.php")) {
                require_once "./pages/404.php";
            } else {
                require_once "./pages/$page.php";
            }
        ?>

        <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script src="./assets/js/app.js"></script>
  </body>
</html>
