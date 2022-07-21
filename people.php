<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>People | DASHLAB</title>
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
                  <li><a href="#principalinvestigator"> Lead Researcher </a></li>
                  <li><a href="#graduate">Graduate Students</a></li>
                  <li><a href="#undergraduate">Undergraduate Students</a></li>
               </ul>
            </div>
            <div class="span8 offset1">
               <section id="principalinvestigator">
                  <div class="page-header">
                     <h3>Lead Researcher</h3>
                  </div>
                  
                  <?php
                    require 'connect.php';
                    $sql = "SELECT * FROM people WHERE category = 'lead' ";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                      while ($row = mysqli_fetch_assoc($result)) {


                        echo '<div class="row-fluid">';
                        echo '<div class="span3"><a href="" class="thumbnail">
                        <image src = "../dash-admin/pages/images/'. $row['url'] .'"width="200" 
                        height="100"></a></div>';
                        
                        echo '<div class = "span9"><h4>'. $row['name'] .'</h4>';
                        echo '<h5>'.$row['education'].'</h5>';
                        echo '<p>'.$row['des'].'</p>';
                        echo '<p><b>Phone: </b>'.$row['phone'].'</p>';
                        echo '<p><b>Email: </b>'.$row['email'].'</p>';
                        echo '<p><b>Address: </b>'.$row['address'].'</p>';
                        echo '<p><a href='.$row['cv'].'>CV</a>';
                        echo ', <a href='.$row['googlescholar'].'>Google Scholar</a>';
                        echo ', <a href='.$row['linkedin'].'>Linkedin</a>';
                        echo ', <a href='.$row['researchgate'].'>Google Scholar</a></p>';
                        echo '</div><hr>';
                        
                      }
                    }
                  ?>
               </div>
                  <hr>
               </section>
               <hr>
               <section id="graduate">
                  <div class="page-header">
                     <h3>Graduate Students</h3>
                     </div>
                        
                     <?php
                    require 'connect.php';
                    $sql = "SELECT * FROM people WHERE category = 'grad' ";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                      while ($row = mysqli_fetch_assoc($result)) {

                        echo '<div class="row-fluid">';
                        echo '<div class="span3"><a href="" class="thumbnail">
                        <image src = "../dash-admin/pages/images/'. $row['url'] .'"width="200" 
                        height="100"></a></div>';
                        
                        echo '<div class = "span9"><h4>'. $row['name'] .'</h4>';
                        echo '<h5>'.$row['education'].'</h5>';
                        echo '<p>'.$row['des'].'</p>';
                        echo '<p><b>Phone: </b>'.$row['phone'].'</p>';
                        echo '<p><b>Email: </b>'.$row['email'].'</p>';
                        echo '<p><b>Address: </b>'.$row['address'].'</p>';
                        echo '<p><a href='.$row['cv'].'>CV</a>';
                        echo ', <a href='.$row['googlescholar'].'>Google Scholar</a>';
                        echo ', <a href='.$row['linkedin'].'>Linkedin</a>';
                        echo ', <a href='.$row['researchgate'].'>Google Scholar</a></p>';
                        echo '<hr></div>';
                        
                      }
                    }
                  ?>
                  
                  </div>
                  <hr>
               </section>
               <hr>
               <section id="undergraduate">
                  <div class="page-header">
                     <h3>Undergraduate Students</h3>
                  </div>
                  <div class="row-fluid">
                     
                     <?php
                    require 'connect.php';
                    $sql = "SELECT * FROM people WHERE category = 'undergrad' ";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                      while ($row = mysqli_fetch_assoc($result)) {

                        echo '<div class="row-fluid">';
                        echo '<div class="span3"><a href="" class="thumbnail">
                        <image src = "../dash-admin/pages/images/'. $row['url'] .'"></a></div>';
                        
                        echo '<div class = "span9"><h4>'. $row['name'] .'</h4>';
                        echo '<h5>'.$row['education'].'</h5>';
                        echo '<p>'.$row['des'].'</p>';
                        echo '<p><b>Phone: </b>'.$row['phone'].'</p>';
                        echo '<p><b>Email: </b>'.$row['email'].'</p>';
                        echo '<p><b>Address: </b>'.$row['address'].'</p>';
                        echo '<p><a href='.$row['cv'].'>CV</a>';
                        echo ', <a href='.$row['googlescholar'].'>Google Scholar</a>';
                        echo ', <a href='.$row['linkedin'].'>Linkedin</a>';
                        echo ', <a href='.$row['researchgate'].'>Google Scholar</a></p>';
                        echo '<hr></div>';
                        
                      }
                    }
                  ?>
                  </div>
                  <hr>
               </section>
                  <!--
                  <hr>
                  <div class="row-fluid">
                     <div class="span3">
                        <a href="https://unsplash.com/photos/GIy2ly37Kw8" class="thumbnail">
                        <img src="thumbs/graduate-2.jpg" alt="Simon Singh"/>
                        </a>
                     </div>
                     <div class="span9">
                        <h4>Simon Singh</h4>
                        <p>Simon is currently a second year undergraduate student in the Lorem Ipsum and Engineering Department at VAS University. He is working on rhoncus euismod tortor, ac lobortis tortor vestibulum sed. Ut in aliquam sapien. </p>
                     </div>
                  </div>
                  <hr>
                  <div class="row-fluid">
                     <div class="span3">
                        <a href="https://unsplash.com/photos/dju4--IW7Qw" class="thumbnail">
                        <img src="thumbs/graduate-3.jpg" alt="Tim Johnson"/>
                        </a>
                     </div>
                     <div class="span9">
                        <h4>Tim Johnson</h4>
                        <p>Tim is currently a second year undergraduate student in the Engineering Science Department at VAS University. He is currently studying sodales elit nec luctus urna augue vitae dolor. </p>
                     </div>
                  </div>
                  <hr>
                  <div class="row-fluid">
                     <div class="span3">
                        <a href="https://unsplash.com/photos/lEMHg4RFTW8" class="thumbnail">
                        <img src="thumbs/graduate-4.jpg" alt="Simona Alexander"/>
                        </a>
                     </div>
                     <div class="span9">
                        <h4>Simona Alexander</h4>
                        <p>Simona is currently a senior in the Lorem Ipsum Department at VAS. She is studying rhoncus eget mauris vitae, malesuada suscipit neque. Ut congue imperdiet lobortis. </p>
                     </div>
                  </div>
                  <hr>
                  <div class="row-fluid">
                     <div class="span3">
                        <a href="https://unsplash.com/photos/Nyt7CeiNXQw" class="thumbnail">
                        <img src="thumbs/graduate-5.jpg" alt="Zahima Sari"/>
                        </a>
                     </div>
                     <div class="span9">
                        <h4>Zahima Sari</h4>
                        <p>Zahima is currently a third year undergraduate student in the Lorem Ipsum Engineering Department at VAS. She is modling the dynamics tincidunt, odio non suscipit condimentum, neque diam viverra risus, vel tincidunt elit massa eu nulla. </p>
                     </div>
                  </div>
                  <hr>
                  <div class="row-fluid">
                     <div class="span3">
                        <a href="https://unsplash.com/photos/fNZfMhyd8Hs" class="thumbnail">
                        <img src="thumbs/graduate-6.jpg" alt="Alissa Zhi"/>
                        </a>
                     </div>
                     <div class="span9">
                        <h4>Alissa Zhi</h4>
                        <p>Alissa is currently a first year undergraduate student in the Science and Engineering Department at VAS. She is studying techniques to improve tempus pellentesque ex, et sollicitudin nunc faucibus vel. Suspendisse condimentum feugiat arcu, vitae pretium enim tempus eget.</p>
                     </div>
                  </div>
                  <hr>
                  <div class="row-fluid">
                     <div class="span3">
                        <a href="https://unsplash.com/photos/WC7KIHo13Fc" class="thumbnail">
                        <img src="thumbs/graduate-7.jpg" alt="David Tohm"/>
                        </a>
                     </div>
                     <div class="span9">
                        <h4>David Tohm</h4>
                        <p>David is currently a third year undergraduate student in the Science and Engineering Department at VAS. He is studying dui diam, pellentesque vel ullamcorper non, dictum eu tellus.</p>
                     </div>
                  </div>
                  <hr>
                  <div class="row-fluid">
                     <div class="span3">
                        <a href="https://unsplash.com/photos/APmln0DMSac" class="thumbnail">
                        <img src="thumbs/graduate-8.jpg" alt="Jessica Smith"/>
                        </a>
                     </div>
                     <div class="span9">
                        <h4>Jessica Smith</h4>
                        <p>Jessica is currently a second year undergraduate student in the Mechanical Engineering Department at VAS. She is studying Fusce et ullamcorper sapien. Integer tristique magna sed tellus faucibus imperdiet facilisis et quam.</p>
                     </div>
                  </div> -->
                  </div>
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