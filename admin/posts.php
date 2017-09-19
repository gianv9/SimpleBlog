<?php

//creamos el query
$sql = "SELECT  * FROM blog_posts ORDER BY id DESC";//trae todos los blog posts empezando por el ultimo ID
//la preparamos y ejecutamos
$query = $pdo->prepare($sql);
$query->execute();
//hacemos el fetch de todas las filas
$blog_posts = $query->fetchAll(PDO::FETCH_ASSOC);

// Query alternativo:
// $blog_posts = $pdo->query($sql,PDO::FETCH_ASSOC);
// Fin query

//inspeccionamos los valores:
// var_dump($blog_posts);
// echo "<br />";
// foreach ($blog_posts as $blog_post):
//   var_dump($blog_post);
// endforeach;
 ?>
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
            <h2>Posts</h2>
            <table class="table">
              <tr>
                  <th>Title</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
              <?php foreach ($blog_posts as $post):?>
              <tr>
                  <td>
                    <?php echo $post['title']; ?>
                  </td>
                  <td>
                    Edit
                  </td>
                  <td>
                    Delete
                  </td>
              </tr>
            <?php endforeach; ?>
            </table>

            <a href="insert-post.php" class="btn btn-primary">New Post</a>

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
                <a href="index.php" class="btn btn-info">Back</a>
              </div>
          </footer>
        </div>
    </div>
  </body>
</html>
