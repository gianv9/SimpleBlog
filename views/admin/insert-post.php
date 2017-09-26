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
            <h2>New Posts</h2>
            <?php if (isset($result) && $result) {
              echo '<div class="alert alert-success">
              Post added Successfully!
              </div>';
            } ?>
            <form action="<?php echo BASE_URL . 'admin/insert-post' ?>" method="post">
                <div class="form-group">
                  <label for="inputTitle">Title</label>
                  <input class="form-control" type="text" name="title" value="" id="inputTitle">
                </div>
                <textarea class="form-control" name="content" rows="5" cols="10" id="inputContent"></textarea>
                <br>
                <input class="btn btn-primary" type="submit" value="Save">
            </form>
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
                <a href="<?php echo BASE_URL . 'admin/posts' ?>" class="btn btn-info">Back</a>
                <!-- <a href="<?php echo BASE_URL . '?route=admin/posts' ?>" class="btn btn-info">Back</a> -->
              </div>
          </footer>
        </div>
    </div>
  </body>
</html>
