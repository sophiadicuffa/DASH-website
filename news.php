<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>News</title>
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
         <div id="media">
            
               
                  
                  <?php
                    require 'connect.php';
                    $sql = "SELECT * FROM news";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                      while ($row = mysqli_fetch_assoc($result)) {
                        
                        echo '<div class="row-fluid post_row"><div class="span6 post"><div class="text">';
                        echo '<h5>'. $row['title'] .'</h5>';
                        echo '<span class="date">'. $row['date_added'] .'</span></div>';
                        echo '<div class="img"> <image src = "../dash-admin/pages/images/'. $row['url'] .'"></div>';
                        echo '<div class="text"><p>'.$row['des'].'</p><br/><br/></div></div>';            
                      }
                    } 
                  ?>

                  
               </div>             
            </div>
            <!-- <div class="row-fluid post_row">
               <div class="span6 post">
                  <div class="text">
                     <h5><a href="https://mitei.mit.edu">Vitae Congue eu Consequat : Arcu cursus euismod</a></h5>
                     <span class="date">December 13, 2017</span>
                  </div>
                  <div class="img">
                     <a href="https://mitei.mit.edu">
                     <img src="images/harnessingsolar-3.jpg" alt="Vitae Congue eu Consequat : Arcu cursus euismod">
                     </a>
                  </div>
                  <div class="text">
                     <p> Eu augue ut lectus arcu bibendum at. Vel elit scelerisque mauris pellentesque pulvinar pellentesque. Hac habitasse platea dictumst quisque sagittis purus. Elementum sagittis vitae et leo. Malesuada proin libero nunc consequat.</p>
                     <br/>
                     <br/>
                  </div>
                  <div class="author_box">
                     <h6>Karen R. James</h6>
                  </div>
               </div>
               <div class="span6 post">
                  <div class="text">
                     <h5><a href="https://mitei.mit.edu">Scelerisque Mauris: Ut sem nulla pharetra diam sit amet nisl suscipit.</a></h5>
                     <span class="date">March 4, 2017</span>
                  </div>
                  <div class="img">
                     <a href="https://mitei.mit.edu">
                     <img src="images/smartplanet.png" alt="Scelerisque Mauris: Ut sem nulla pharetra diam sit amet nisl suscipit.">
                     </a>
                  </div>
                  <div class="text">
                     <p>Leo duis ut diam quam nulla porttitor massa id neque. Quam id leo in vitae turpis massa sed elementum. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Id donec ultrices tincidunt arcu non. Nec feugiat in fermentum posuere urna nec. Et leo duis ut diam. Tincidunt eget nullam non nisi est sit amet. </p>
                  </div>
                  <div class="author_box">
                     <h6>Jacob Bern</h6>
                  </div>
               </div>
            </div>
            </div> -->
         </div>
      </div>
      </div>
      </div>

      
      <?php include ('footer.php') ?>


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