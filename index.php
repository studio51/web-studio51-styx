<!DOCTYPE html>
<html class="full" lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Full - Start Bootstrap Template</title>

  <link href="bootstrap.css" rel="stylesheet">
  <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->

  <link rel="stylesheet" href="css/twentytwenty.css" type="text/css" media="screen" />
  <link href="css/style.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>

<!--   <div class="alert alert-info alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>

    <strong>NEW</strong>
    <p>Introducing our new <a href="#shop" class="alert-link">eShop</a> ! Buy re-conditined smartphones at affordable prices with a 6 month insurance!</p>
  </div>

  <nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
              <a href="#">Services</a>
          </li>
          <li>
              <a href="#">Shop</a>
          </li>
          <li>
              <a href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->

<!--   <section id="intro" class="peel peel-container">
    <img src="css/crack.jpg" alt="after" class="peel-layer img-responsive" role="before-layer">
    <div class="peel-layer" role="before-layer"></div>

    <div class="peel-layer" role="after-layer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">

            <h1></h1>

            title

            phone selection

            <div id="selects"></div>
            <div id="preloader"></div>

            process
              1. Select your phone
              2. Get a Quote
              3. Send the phone
              4. Asses and Repair the phone
              5. Get the phone

          </div>
        </div>
      </div>
    </div>
  </section> -->

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3>Introducing our new *Market*, re-conditioned smartphones at affordable prices!</h3>
            </div>

            <div class="panel-body">
              <div class="col-sm-12">
                <?php
                  $array = array("phone", "another phone");

                  foreach ($array as $test) {

                ?>

                  <div class="row">
                    <div class="col-lg-2">
                      <img class="img-responsive" alt="Phone" title="iPhone 4S 16GB" />
                    </div>

                    <div class="col-lg-8">
                      <h3>iPhone 4 16GB</h3>
                    </div>

                    <div class="col-lg-2">
                      <div class="btn-group btn-group-lg btn-group-justified">
                        <a href="more.php" class="btn text-primary">
                        <a href="buy.php" class="btn btn-success"></a>
                      </div>
                    </div>
                  </div>

                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!--
  <section id="shop">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">

          <div class="row">
            <div class="col-sm-2">

            </div>

            <div class="col-sm-8">
              <h4 class="smartphone-type">iPhone 4s</h4>

            </div>

            <div class="col-sm-2">
              <a href="btn btn-lg btn-default">$</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">

        </div>
      </div>
    </div>
  </section>
-->
  <script src="jquery.js"></script>
  <script src="bootstrap.js"></script>

  <script src="js/jquery.event.move.js"></script>
  <script src="js/jquery.twentytwenty.js"></script>
  <script src="js/jquery.ddslick.min.js"></script>
  <script src="js/script.js"></script>

  <script>
    $(window).load(function() {
      var offset = $('.panel .panel-heading').innerHeight();

      $(".peel").peel({
        // default_offset_pct: 0.9,
        orientation: 'vertical'
      });
    });
  </script>
</body>
</html>
