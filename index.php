<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>DASH Research Lab - Home</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Research Lab, Home, Stevens Institute of Technology">
      <meta name="author" content="">
      <!-- Le styles -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="css/theme.css" rel="stylesheet">
   </head>
   <body>

      <div class="container">
        <?php include ('header.php') ?>

       <?php include('navbar.php') ?>

         <div class="row-fluid">
            <div class="span12">
               <div id="main-carousel" class="carousel slide">
                  <div class="carousel-inner">
                     <div class="item active">
                        <img src="images/stevens_view.png" class="carousel-image" alt="">                      
                        <div class="carousel-caption">
                           <h4>Welcome to the DASH Research Laboratory</h4>
                           <!-- -->
                           <p></p>
                        </div>
                     </div>
                     <?php
                        require 'connect.php';
                        $sql = "SELECT * FROM sliders";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0){
                           while ($row = mysqli_fetch_assoc($result)) {
                              echo '<div class="item">';
                              echo '<img src="../dash-admin/pages/images/'. $row['url'] .'" class="carousel-image">';
                              echo '<div class="carousel-caption">';
                              echo '<h4>'. $row['title'] .'</h4>';
                              echo '<p></p>';
                              echo '</div>
                              </div>';
                           }
                        }
                     ?>
                  </div>
                  <a class="left carousel-control" href="#main-carousel" data-slide="prev">‹</a>
                  <a class="right carousel-control" href="#main-carousel" data-slide="next">›</a>
               </div>
            </div>
         </div>
         <hr>
         <div class="container-fluid">
            <div class="row-fluid marketing">
               <div class="span12">
                  <h4 style="text-align:center">Welcome to DASH Research Lab - Ditgial Health, Aging Technology, and Smart Home</h4>
                  <p>
                  IN THE CORNER of a first-class smoking carriage, Mr. Justice Wargrave,
                  lately retired from the bench, puffed at a cigar and ran an interested eye
                  through the political news in the Times.
                  He laid the paper down and glanced out of the window. They were running now
                  through Somerset. He glanced at his watch-another two hours to go. He went
                  over in his mind all that had appeared in the papers about Indian Island.
                  There had been its original purchase by an American millionaire who was crazy
                  about yachting-and an account of the luxurious modern house he had built on
                  this little island off the Devon coast. The unfortunate fact that the new
                  third wife of the American millionaire was a bad sailor had led to the
                  subsequent putting up of the house and island for sale. Various glowing
                  advertisements of it had appeared in the papers. Then came the first bald
                  statement that it had been bought-by a Mr. Owen. After that the rurnours
                  of the gossip writers had started. Indian Island had really been bought by
                  Miss Gabrielle Turl, the Hollywood film star! She wanted to spend some
                  months there free from all publicity! Busy Bee had hinted delicately that 
                  </p>
                  <br/>
               </div>
               <!-- <div class="row-fluid">
                  <hr>
                  <h2 class="centered">Recent News</h2>
                  <hr>
               </div>
               <div class="span4 feature-item">
                  <h5> <span class="date"> May 1, 2019 </span> </h5>
                      <a href="news.php">here</a>.
                  </p>
                  <br/>
                  <br/>
               </div> -->
               <!-- <div class="span4 feature-item">
                  <h5> <span class="date">April 20, 2019</span> </h5>
                  <h4 class="feature-heading">
                     <a href="https://unsplash.com/photos/rTZW4f02zY8">
                     Tincidunt tortor aliquam nulla facilisi. Nunc scelerisque viverra mauris in
                     </a>
                  </h4>
                  <hr>
                  <div class="centered">
                     <a href="https://unsplash.com/photos/rTZW4f02zY8">
                     <img src="thumbs/nasa-89125-unsplash.jpg" alt="">
                     </a>
                  </div>
                  <hr>
                  <p>
                     Read the paper 
                     <a href="https://unsplash.com/photos/rTZW4f02zY8">here</a>.
                     Consequat semper viverra nam libero justo laoreet. Commodo odio aenean sed adipiscing diam donec. 
                  </p>
                  <br/>
               </div> -->
               <!-- <div class="row-fluid">
                  <div class="span4 feature-item">
                     <h5> <span class="date">October 2, 2018</span> </h5>
                     <h4 class="feature-heading">
                        <a href="http://mechanical.illinois.edu/news/miljkovic-pleased-join-%E2%80%98powerhouse%E2%80%99-illinois">
                        Pretium lectus quam id leo in vitae turpis massa
                        <br/>
                        <br/>
                        </a>
                     </h4>
                     <hr>
                     <div class="centered">
                        <a href="https://unsplash.com/photos/WNk-f-TnZDw">
                        <img src="thumbs/rodolfo-cuadros-762364-unsplash.jpg" alt=""></a>
                     </div>
                     <hr>
                     <p> 
                        Tristique senectus et netus et malesuada. Sed viverra tellus in hac habitasse platea dictumst vestibulum rhoncus. 
                        Read it <a href="https://unsplash.com/photos/WNk-f-TnZDw">here</a>.
                     </p>
                     <br/>					
                  </div>
               </div>
               <hr>
            </div>
            </div> -->
         </div>
      </div>
    
   </div> 
   <?php include('footer.php') ?>
   <!--  Container div  -->
      <!-- Javascript files -->
      <script src="js/jquery-1.9.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script> $('#main-carousel').carousel(); </script>
   </body>
</html>