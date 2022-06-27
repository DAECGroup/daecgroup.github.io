
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?php echo $path.dirname(dirname("$_SERVER[REQUEST_URI]")) ?>">CSGA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="<?php echo $path.dirname(dirname("$_SERVER[REQUEST_URI]")).'#hero'?>">Home</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $path.dirname(dirname("$_SERVER[REQUEST_URI]")).'#services'?>">Services</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $path.dirname(dirname("$_SERVER[REQUEST_URI]")).'#pricing'?>">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Language</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo $path.'/vn/blog/'.basename($urlpath)?>">🇻🇳 Việt Nam</a></li>
              <li><a href="<?php echo $path.'/en/blog/'.basename($urlpath)?>">🇺🇸 English</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <!----------Login/Registration-------------->
          <?php if (isset($_SESSION['id'])){ ?>
          <li class="dropdown"><a href="#"><span><i class="fa-brands fa-apple"></i>&nbsp;<?php echo $_SESSION['name'] ?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo $path.'/accounts/'?>">Profile</a></li>
              <li><a href="<?php echo $path.'/accounts/logout.php'?>">Logout</a></li>
            </ul>
          </li>
          <?php } else { ?>
          <li><a class="nav-link scrollto" href="<?php echo $path.'/accounts/'?>"><i class="fa fa-sign-in"></i>&nbsp;Login</a></li>
          <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->