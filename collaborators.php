<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Collaborators</title>
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
      <?php include ('navbar.php') ?>
        
         <hr>
         <div class="row-fluid">
            <div class="span3 bs-docs-sidebar" id="navparent">
               <ul class="nav nav-list bs-docs-sidenav" data-spy="affix" data-offset-top="200" data-offset-bottom="260">
               <li><a href="#collaborators">Collaborators</a></li>
               <li><a class="subhead" href="#jane">#1</a></li>
               <li><a class="subhead" href="#ronny">#2</a></li>
               <li><a class="subhead" href="#jenny">#3</a></li>
                  </ul>
            </div>
            <div class="span8 offset1">
               <section id="collaborators">
                  <div class="page-header">
                     <h3> Our Collaborators</h3>
                  </div>

                  <?php
                    require 'connect.php';
                    $sql = "SELECT * FROM collaborators";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                     while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="row-fluid">';   
                        echo '<div class="span3"><a href="https://unsplash.com/photos/LUdelQ2EO2g" class="thumbnail">
                        <image src = "../dash-admin/pages/images/'. $row['url'] .'"></a></div>';
                  
                        echo '<div class="span9"><h4>'. $row['name'] .'</h4>';
                        echo '<p>'.$row['des'].'</p>';
                        echo '<p><b>Email: </b>'. $row['email'] .'</p>';
                        echo '<p><b>Address: </b>'. $row['address'] .'</p></div></div>';
                        echo '<hr>';
                     }
                    }
                  ?>
                  <!-- <hr>
                  <div class="row-fluid" id="ronny">
                     <div class="span3">
                        <a href="https://unsplash.com/photos/LUdelQ2EO2g" class="thumbnail">
                        <img src="thumbs/ronny-sison.jpg" alt="Ronny Simon"/>
                        </a>
                     </div>
                     <div class="span9">
                        <h4><a href="https://unsplash.com/photos/LUdelQ2EO2g">Ronny Simon</a></h4>
                        <p>Ronny received his B.Tech in Electrical Engineering from the Lorem Ipsum Institute of Technology. His current research focuses on ullamcorper nibh ut orci eleifend varius elementum ut augue. Proin ornare, arcu et efficitur laoreet, purus ante dictum leo, vel pulvinar velit leo sed nunc. </p>
                        <p><b>Email: </b><a href="mailto:ronny.email@uni.edu">ronny.email@uni.edu</a></p>
                        <p><b>Address: </b>999 Fake Street Avenue, City, State Country ZIP</p>
                     </div>
                  </div>
                  <hr> -->
               </section>
               
            </div>
         </div>
      </div>
      <?php include ('footer.php') ?>
</div>
        

      <!-- Le javascript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="js/jquery-1.9.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script>
         $(document).ready(function() {
             $(document.body).scrollspy({
                 target: "#navparent"
             });
         });
         
      </script>
   </body>
</html>