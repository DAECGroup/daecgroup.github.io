<?php
    session_start();
    include_once($_SERVER['DOCUMENT_ROOT'].'/include/head.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/include/menu.php');
?> 
    <title>Index - CSGA</title>
  

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Welcome to <strong>CSGA</strong></h3>
      <h1>We're iOS Hacking Community</h1>
      <h2>Mở khóa tất cả các tính năng của ứng dụng và nâng cấp tài nguyên trong trò chơi trên iOS</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <h3>Tìm hiểu thêm <span>về Chúng Tôi</span></h3>
          <p>Để chúng ta có thể đạt được những thú vui và niềm vui trong cuộc sống.</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Chúng tôi đưa tới những điều mới lại, những trải nghiệm hoàn hảo nhất cho bạn trên chính thiết bị của các bạn.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Mở khóa toàn bộ các tính năng Vip & Premium trên các ứng dụng.</li>
              <li><i class="ri-check-double-line"></i> Mở khóa nhân vật, thú cưng hay nâng cấp tài nguyên trong trò chơi.</li>
              <li><i class="ri-check-double-line"></i> Chặn quảng cáo trên trình duyệt Safari và ứng dụng Youtube.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Chúng tôi có các cộng đồng trên mạng xã hội. Rất hoan nghênh các bạn tham gia trao đổi, chia sẻ kinh nghiệm hay cập nhật các thông tin mới nhất tại cộng đồng Discord hoặc cộng đồng Facebook của chúng tôi.
            </p>
            <a href="#" class="btn-learn-more">Tham gia</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <h3>We do offer awesome <span>Services</span></h3>
          <p>Tham khảo các dịch vụ và các bài viết hữu ích của chúng tôi tại đây.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Đăng nhập</a></h4>
              <p class="description">Vui lòng <a href="accounts/">đăng nhập</a> để sử dụng toàn bộ các tiện ích của chúng tôi cung cấp.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Liên hệ</a></h4>
              <p class="description">Trong mục Profile, hãy liên hệ với chúng tôi qua ứng dụng chat trên web của chúng tôi cung cấp.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Cài đặt</a></h4>
              <p class="description">Vui lòng xem chi tiết các hướng dẫn và thực hiện. Mọi thắc mắc vui lòng liên hệ qua tính năng chat.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Tận hưởng</a></h4>
              <p class="description">Chúc bạn có trải nghiệm hoàn hảo với các dịch vụ của chúng tôi</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-3 col-md-4 col-6 col-6">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="<?php echo $path.'blog/active-app-vip-by-quantumultx/'?>">Kích Hoạt Ứng Dụng Bằng Quantumult X</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="<?php echo $path.'blog/active-app-vip-by-loon/'?>">Kích Hoạt Ứng Dụng Bằng Loon</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="">Hướng dẫn cài đặt trò chơi</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="<?php echo $path.'blog/game-list/'?>">Danh sách ứng dụng</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="">Danh sách trò chơi</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="<?php echo $path.'blog/how-to-get-ip/'?>">Hướng dẫn lấy địa chỉ IP</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="">Hướng dẫn chơi Private Server</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="">Pira Neve</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a href="">Dirada Pack</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-disc-line" style="color: #b20969;"></i>
              <h3><a href="">Moton Ideal</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-base-station-line" style="color: #ff5828;"></i>
              <h3><a href="">Verdo Park</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="">Flavor Nivelanda</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <h3>Check our <span>Portfolio</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?php echo $path.'/assets/img/portfolio/portfolio-1.jpg'?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="<?php echo $path.'/assets/img/portfolio/portfolio-1.jpg'?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="<?php echo $path.'/assets/img/portfolio/portfolio-2.jpg'?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="<?php echo $path.'/assets/img/portfolio/portfolio-2.jpg'?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?php echo $path.'/assets/img/portfolio/portfolio-3.jpg'?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="<?php echo $path.'/assets/img/portfolio/portfolio-3.jpg'?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?php echo $path.'/assets/img/portfolio/portfolio-4.jpg'?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="<?php echo $path.'/assets/img/portfolio/portfolio-4.jpg'?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="<?php echo $path.'/assets/img/portfolio/portfolio-5.jpg'?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="<?php echo $path.'/assets/img/portfolio/portfolio-5.jpg'?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?php echo $path.'/assets/img/portfolio/portfolio-6.jpg'?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="<?php echo $path.'/assets/img/portfolio/portfolio-6.jpg'?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?php echo $path.'/assets/img/portfolio/portfolio-7.jpg'?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="<?php echo $path.'/assets/img/portfolio/portfolio-7.jpg'?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?php echo $path.'/assets/img/portfolio/portfolio-8.jpg'?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="<?php echo $path.'/assets/img/portfolio/portfolio-8.jpg'?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="<?php echo $path.'/assets/img/portfolio/portfolio-9.jpg'?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="<?php echo $path.'/assets/img/portfolio/portfolio-9.jpg'?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Pricing</h2>
          <h3>Our Competing <span>Prices</span></h3>
          <p>Chọn gói dịch vụ hỗ trợ mà bạn cần</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Unlimited User</li>
                <li>100+ Trò chơi Miễn Phí</li>
                <li>Tham gia Group</li>
                <li class="na">Chặn quảng cáo</li>
                <li class="na">Hỗ trợ 24/7</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended">
              <span class="recommended-badge">Recommended</span>
              <h3>Game</h3>
              <h4><sup>VNĐ</sup>150.000<span> / game</span></h4>
              <ul>
                <li>1 Trò chơi Trả Phí</li>
                <li>100+ Trò chơi Miễn Phí</li>
                <li>Tham gia Group</li>
                <li>Hỗ trợ 24/7</li>
                <li class="na">Chặn quảng cáo</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Premmium</h3>
              <h4><sup>VNĐ</sup>250.000<span> / year</span></h4>
              <ul>
                <li>100+ Ứng Dụng Vip</li>
                <li>Chặn quảng cáo</li>
                <li>Tham gia Group</li>
                <li>Hỗ Trợ 24/7</li>
                <li class="na">Trò chơi Trả Phí</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Đăng ký nhiều dịch vụ cùng 1 lúc có được khuyến mãi gì không? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Có chứ. Khi bạn đăng ký cùng lúc dịch vụ Application và dịch vụ Paid, bạn sẽ được tặng 1 tài khoản Apple ID chứa các App và Game trả phí trên Appstore như Loon, Shadowrocket, Dead Cells, My Time at Portia, Witch Spring 4,... hạn sử dụng 6 tháng.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Game tôi đã đăng ký giờ cập nhật data mới, tôi có được làm miễn phí không? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Không nhé. Sau khi bạn đăng ký Game trong dịch vụ Paid, bạn sẽ nhận được 1 phiếu giảm giá 50% cho lần cập nhật tiếp theo của game đó. Kể từ lần sau đó, tùy vào bản cập nhật phí sẽ dao động từ 70% tới 90%.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Tôi giới thiệu bạn bè sử dụng dịch vụ, có được khuyến mãi không? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Tất nhiên là có rồi. Khi bạn giới thiệu bạn bè sử dụng dịch vụ của chúng tôi. Bạn sẽ được 1 phiếu giảm giá 20% và bạn của bạn sẽ nhận được phiếu giảm giá 10% (Hạn sử dụng 1 tháng).
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Tôi có 2 hoặc nhiều phiếu giảm giá, tôi có thể dùng hết 1 lần được không? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Không nhé. Bạn chỉ được dùng 1 phiếu giảm giá cho 1 lần thanh toán. Bạn không thể gộp các phiếu giảm giá.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tôi có thể dùng gói dịch vụ Ứng Dụng cho bao nhiêu thiết bị? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Mỗi tài khoản của bạn được dùng tối đa cho 2 thiết bị trên cùng 1 địa chỉ iCloud. Khi hệ thống phát hiện số lượt truy cập quá giới hạn bạn có thể sẽ bị chặn và ban nick.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <h3>Our Hardworking <span>Team</span></h3>
          <p>Đội ngũ quản trị của chúng tôi.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo $path.'/assets/img/team/team-1.jpg'?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4></h4>
                <span></span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo $path.'/assets/img/team/team-2.jpg'?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4></h4>
                <span></span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo $path.'/assets/img/team/team-3.jpg'?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4></h4>
                <span></span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo $path.'/assets/img/team/team-4.jpg'?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4></h4>
                <span></span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Contact <span>Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Hanoi, Vietnam & Japan</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>admin@blackyukios.tk</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>************</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="<?php echo $path.'/forms/contact.php'?>" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->



  <?php include_once($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>

</body>

</html>