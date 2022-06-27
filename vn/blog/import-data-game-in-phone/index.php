<?php
    session_start();
    include_once($_SERVER['DOCUMENT_ROOT'].'/include/head.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/include/menu-post.php');
?> 
    <title>Kích Hoạt Ứng Dụng - CSGA</title>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo dirname(dirname($urlpath));?>">Home</a></li>
          <li><a href="<?php echo dirname($urlpath);?>">Blog</a></li>
          <li>Kích Hoạt Ứng Dụng - CSGA</li>
        </ol>
        <h2>Kích Hoạt Ứng Dụng - CSGA</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">
            
              <div class="embed-youtube">
                <iframe src="https://www.youtube.com/embed/FbmDlq8Srkk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>

              <h2 class="entry-title">
                <a href="javascript:void(0)">Nhập dữ liệu vào thiết bị iOS bằng iMazing</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="<?php echo $path.'/profile/'?>">CSGA</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="javascript:void(0)"><time datetime="2022-05-19">May 19, 2022</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="javascript:void(0)">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <h3>Bước 1:</h3>
                <p>
                  Trên giao diện của chính của phần mềm, chọn Manage Apps tại góc trái bên dưới.
                </p>
                <img src="<?php echo $path.'/assets/img/blog/blog-imazing-1.jpg';?>" class="img-fluid" alt="">
                
                <h3>Bước 2:</h3>
                <p>
                  Tại mục Device tìm ứng dụng bạn cần khôi phục dữ liệu, nhấn chuột phải và nhấn chọn Restore App Data.
                </p>
                <img src="<?php echo $path.'/assets/img/blog/blog-imazing-2.png';?>" class="img-fluid" alt="">
                
                <h3>Bước 3:</h3>
                <p>
                  Nhấn chọn Choose... chọn bản sao dữ liệu đã tạo trước đó, nhấn Done để tiến hành quá trình khôi phục dữ liệu lên iPhone, iPad.
                </p>
                <img src="<?php echo $path.'/assets/img/blog/blog-imazing-3.png';?>" class="img-fluid" alt="">
                
                <h3>Bước 4:</h3>
                <p>
                  iMazing sẽ gửi thông báo sẽ tiến hành khôi phục dữ liệu. Sau khi quá trình hoàn tất máy sẽ tự khởi động lại. Nhấn Continue để xác nhận.
                </p>
                <img src="<?php echo $path.'/assets/img/blog/blog-imazing-4.png';?>" class="img-fluid" alt="">

                <h3>Bước 5:</h3>
                <p>
                  iMazing sẽ tiến hành kiểm tra ứng dụng đã được cài trên thiết bị cần khôi phục dữ liệu chưa
                </p>
                <p>
                  - Nếu ứng dụng đã đước cài, dữ liệu sẽ được sao lưu vào thiết bị.
                </p>
                <p>
                  - Trường hợp ứng dụng chưa được cài đặt trên iPhone, iPad, iMazing sẽ yêu cầu bạn đăng nhập App Store, tải ứng dụng về trước khi khôi phục dữ liệu lên thiết bị.
                </p>
                <img src="<?php echo $path.'/assets/img/blog/blog-imazing-5.png';?>" class="img-fluid" alt="">
                
                <h3>Bước 5:</h3>
                <p>
                  Sau khi khôi phục dữ liệu thành công, iPhone hoặc iPad sẽ tự khởi động lại. Bạn mở khóa màn hình điện thoại, chờ cho đến khi iMazing hiển thị thông báo Restore Succeeded là quá trình khôi phục đã thành công. Lúc này bạn có thể rút cáp USB khỏi máy.
                </p>
                <img src="<?php echo $path.'/assets/img/blog/blog-imazing-6.png';?>" class="img-fluid" alt="">
                
                <blockquote>
                  <p>
                    Danh sách các trò chơi được hỗ trợ bằng iMazing <a href="<?php echo $path.'/'?>">Xem chi tiết</a>
                  </p>
                </blockquote>

              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div>

            </article><!-- End blog entry -->

            <div class="blog-author d-flex align-items-center">
              <img src="<?php echo $path.'/assets/img/blog/blog-author-1.JPG'?>" class="rounded-circle float-left" alt="">
              <div>
                <h4>CSGA</h4>
                <div class="social-links">
                  <a href="https://www.tiktok.com/@blackyukios"><i class="bi bi-tiktok"></i></a>
                  <a href="https://www.facebook.com/duongtien.dat.56/"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.youtube.com/channel/UCGlwBEsH5ALzLs85shSYK0g"><i class="bi bi-youtube"></i></a>
                </div>
                <p>
                  Hỗ trợ các dịch vụ trò chơi, ứng dụng trên iOS. Luôn mang tới trải nghiệm mới mẻ, phong phú và tốt nhất tới người dùng. Đảm bảo đáp ứng các nhu cầu của người dùng.
                </p>
              </div>
            </div><!-- End blog author bio -->
          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Creative <span>(8)</span></a></li>
                  <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="<?php echo $path.'/assets/img/blog/blog-recent-1.jpg';?>" alt="">
                  <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="<?php echo $path.'/assets/img/blog/blog-recent-2.jpg';?>" alt="">
                  <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="<?php echo $path.'/assets/img/blog/blog-recent-3.jpg';?>" alt="">
                  <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="<?php echo $path.'/assets/img/blog/blog-recent-4.jpg';?>" alt="">
                  <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="<?php echo $path.'/assets/img/blog/blog-recent-5.jpg';?>" alt="">
                  <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <?php include_once($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>

</body>

</html>