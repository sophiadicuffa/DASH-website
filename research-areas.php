<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Research Areas</title>
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
                  
                  <li><a href="#gerontechnology"> Gerontechnology </a></li>
                  <li><a href="#safety_systems">Safety-critical Systems</a></li>
               </ul>
            </div>
            <div class="span8 offset1">
               <section id="research_areas">
                  <div class="page-header">
                     <h3>Research Areas</h3>
                     <hr>
                     <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas 
                        molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et 
                     </p>
                  </div>
               </section>
               <section id="gerontechnology">
                  <div class="page-header">
                     <h3>Gerontechnology</h3>
                  </div>
                  <div class="row-fluid">
                     <div class="span12">
                  <?php
                    require 'connect.php';
                    $sql = "SELECT * FROM research WHERE title = 'gerontechnology' ";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                      while ($row = mysqli_fetch_assoc($result)) {

                        echo '<image width= "250px" class = "float-right" src = "../dash-admin/pages/images/'. $row['url'] .'"/>'; 
                        
                        echo '<h4>'. $row['subtitle'] .'</h4><br/>';
                        echo '<p>'.$row['des'].'</p>';
                        echo '<hr>';
                        
                      }
                    }
                  ?>
                     
               </section>
               <hr>
               <section id="safety_systems">
                  <div class="page-header">
                     <h3>Safety-Critcal Systems</h3>
                  </div>
                  <div class="row-fluid">
                     <div class="span12">
                     <?php
                        require 'connect.php';
                        $sql = "SELECT * FROM research WHERE title = 'Safety-Critical Systems' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0){
                           while ($row = mysqli_fetch_assoc($result)) {

                              echo '<image width= "250px" class = "float-right" src = "../dash-admin/pages/images/'. $row['url'] .'"/>'; 
                              
                              echo '<h4>'. $row['subtitle'] .'</h4><br/>';
                              
                              echo '<p>'.$row['des'].'</p>';
                              echo '<hr>';
                        
                           }
                        }
                     ?>
                     </div>
                     </div>
                           <h4>Smart Home</h4>
                           <br/>
                           <img src="images/solar-2.jpg" class="float-right" alt="smart_home"/>
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                              incididunt ut labore et dolore magna aliqua. Nisi quis eleifend quam adipiscing 
                              vitae proin. Metus vulputate eu scelerisque felis imperdiet proin fermentum. 
                              Consectetur adipiscing elit duis tristique sollicitudin. Faucibus ornare 
                              suspendisse sed nisi lacus sed viverra. Odio tempor orci dapibus ultrices in 
                              iaculis nunc sed augue. Laoreet non curabitur gravida arcu ac tortor dignissim 
                              convallis aenean. Posuere sollicitudin aliquam ultrices sagittis orci. Tellus 
                              orci ac auctor augue. Tristique risus nec feugiat in. In est ante in nibh mauris. 
                              Neque gravida in fermentum et sollicitudin ac. Commodo viverra maecenas accumsan 
                              lacus vel safety_systems smart_home. Aliquam malesuada bibendum arcu vitae elementum.
                           </p>
                        </section>
                        <hr>
                        <section id="software_engineering">
                           <h4>Software Engineering</h4>
                           <br/>
                           <img src="images/energy.jpg" class="float-right" alt="Elementum Tempus"/>
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                              incididunt ut labore et dolore magna aliqua. Quisque sagittis purus sit amet 
                              smart_home consequat mauris nunc congue. Arcu ac tortor dignissim convallis aenean. 
                              Etiam non quam lacus suspendisse faucibus interdum posuere lorem ipsum. Lorem 
                              mollis aliquam ut porttitor leo a diam sollicitudin. Convallis aenean et tortor 
                              at risus viverra adipiscing at. Nibh cras pulvinar mattis nunc sed blandit libero. 
                              Venenatis a condimentum vitae sapien pellentesque. Diam maecenas ultricies mi eget 
                              mauris. safety_systems smart_home est velit egestas dui id. Ut ornare lectus sit amet est 
                              placerat in egestas erat. Vel elit scelerisque mauris pellentesque pulvinar 
                              pellentesque habitant.
                           </p>
                        
                        </section>
                       
                     </div>
                  </div>
               </section>
               <hr>
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