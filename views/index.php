<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Databases with php</title>
    <!-- download css framework: http://getbootstrap.com/ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <div class="container"><div class="row">
        <div class="col-md-12">
            <h1>Blog Title</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <!-- altenative syntax: -->
            <!-- http://php.net/manual/es/control-structures.alternative-syntax.php -->
            <?php foreach ($blog_posts as $blog_post):  ?>
              <div class="blog-post">
                  <h2><?php echo $blog_post['title']; ?></h2>
                  <p>Jan 1, 2020 by <a href="#">Gian</a></p>
                  <div class="blog-post-image">
                      <img src="images/blog.jpg" alt="">
                  </div>
                  <div class="blog-post-content">
                    <p><?php echo $blog_post['content']; ?></p>
                  </div>
              </div>
            <?php endforeach; ?>
            <!-- <div class="blog-post">
                <h2>Sample Title</h2>
                <p>Jan 1, 2020 by <a href="#">Gian</a></p>
                <div class="blog-post-image">
                    <img src="images/blog.jpg" alt="">
                </div>
                <div class="blog-post-content">
                  <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas ultricies augue.
                        Donec hendrerit tellus a malesuada imperdiet. Sed sapien nibh,
                        tristique vitae enim id, posuere dictum odio. Nullam vestibulum diam sed ipsum hendrerit placerat.
                        Phasellus commodo, arcu sit amet fermentum commodo, tortor magna egestas sapien, ac sollicitudin
                        nibh augue nec quam. Sed accumsan aliquet nibh, vel dictum eros lacinia sed. Vivamus aliquam ligula
                        urna, eget imperdiet sapien venenatis eget. Praesent sem tellus, tincidunt nec elit ut, facilisis
                        tempor elit. Morbi facilisis sem condimentum libero pellentesque, tempor blandit risus efficitur.
                        Sed quis dolor tempor metus fringilla pharetra sed ut metus.

                        Cras varius posuere accumsan. Sed pharetra pellentesque velit, eu tincidunt ligula posuere ut.
                        Maecenas nulla libero, maximus eu dui tincidunt, auctor tempus quam. Aliquam iaculis fringilla velit,
                        nec consequat sapien. Pellentesque scelerisque nulla vitae fermentum pellentesque. In vel laoreet nisl,
                        quis pulvinar ante. Praesent mattis, eros vel dapibus interdum, urna.
                  </p>
                </div>
            </div>
            <div class="blog-post">
                <h2>Sample Title</h2>
                <p>Jan 1, 2020 by <a href="#">Gian</a></p>
                <div class="blog-post-image">
                    <img src="images/blog.jpg" alt="">
                </div>
                <div class="blog-post-content">
                  <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas ultricies augue.
                        Donec hendrerit tellus a malesuada imperdiet. Sed sapien nibh,
                        tristique vitae enim id, posuere dictum odio. Nullam vestibulum diam sed ipsum hendrerit placerat.
                        Phasellus commodo, arcu sit amet fermentum commodo, tortor magna egestas sapien, ac sollicitudin
                        nibh augue nec quam. Sed accumsan aliquet nibh, vel dictum eros lacinia sed. Vivamus aliquam ligula
                        urna, eget imperdiet sapien venenatis eget. Praesent sem tellus, tincidunt nec elit ut, facilisis
                        tempor elit. Morbi facilisis sem condimentum libero pellentesque, tempor blandit risus efficitur.
                        Sed quis dolor tempor metus fringilla pharetra sed ut metus.

                        Cras varius posuere accumsan. Sed pharetra pellentesque velit, eu tincidunt ligula posuere ut.
                        Maecenas nulla libero, maximus eu dui tincidunt, auctor tempus quam. Aliquam iaculis fringilla velit,
                        nec consequat sapien. Pellentesque scelerisque nulla vitae fermentum pellentesque. In vel laoreet nisl,
                        quis pulvinar ante. Praesent mattis, eros vel dapibus interdum, urna.
                  </p>
                </div>
            </div> -->

          </div>


          <div class="col-md-4">
            <h2>SideBar Title</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas ultricies augue.
              Donec hendrerit tellus a malesuada imperdiet. Sed sapien nibh,
              tristique vitae enim id, posuere dictum odio. Nullam vestibulum diam sed ipsum hendrerit placerat.
              Phasellus commodo, arcu sit amet fermentum commodo, tortor magna egestas sapien, ac sollicitudin
              nibh augue nec quam. Sed accumsan aliquet nibh, vel dictum eros lacinia sed. Vivamus aliquam ligula
              urna, eget imperdiet sapien venenatis eget. Praesent sem tellus, tincidunt nec elit ut, facilisis
              tempor elit. Morbi facilisis sem condimentum libero pellentesque, tempor blandit risus efficitur.
              Sed quis dolor tempor metus fringilla pharetra sed ut metus.
            </p>
          </div>
        </div>
        <div class="row">
          <footer>
              <div class="col-md-12">
                Este es el footer<br />
                <a href="<?php echo BASE_URL.'admin' ?>" class="btn btn-info">Admin Panel</a>
                <!-- <a href="<?php echo BASE_URL.'?route=admin' ?>" class="btn btn-info">Admin Panel</a> -->
              </div>
          </footer>
        </div>
    </div>
  </body>
</html>
