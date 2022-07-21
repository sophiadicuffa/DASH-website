<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Projects</title>
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
                  <li><a href="#ongoing"> Ongoing Projects </a></li>
                  <li><a href="#archived">Archived Projects</a></li>
               </ul>
            </div>
            <div class="span8 offset1">
               <section id="ongoing">
                  <div class="page-header">
                     <h3>Ongoing Projects </h3>
                     <hr>
                  </div>
               </section>
                  <?php
                    require 'connect.php';
                    $sql = "SELECT * FROM projects WHERE category = 'ongoing'";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="row-fluid">
                        <div class="span12">';
                        echo '<img src = "../dash-admin/pages/images/'. $row['url'] .'"class="float-right" width="200" 
                        height="100"/>';
                        echo '<h4>'. $row['title'] .'</h4>';
                        
                        echo '<p><b>Associated with </b>'. $row['org'] .'</p>';
                        echo '<p>'.$row['des'].'</p><hr></div></div>';
                        
                     }
                    }
                  ?>                        
                  
               </section>
               <hr>
               <section id="archived">
                  <div class="page-header">
                     <h3>Archived Projects</h3>
                  </div>
                 
                     <?php
                    require 'connect.php';
                    $sql = "SELECT * FROM projects WHERE category = 'archived'";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="row-fluid">
                        <div class="span12">';
                        echo '<img src = "../dash-admin/pages/images/'. $row['url'] .'"class="float-right" width="200" 
                        height="100"/>';
                        echo '<h4>'. $row['title'] .'</h4>';
                        
                        echo '<p><b>Associated with </b>'. $row['org'] .'</p>';
                        echo '<p>'.$row['des'].'</p><hr></div></div>';
                        
                     }
                    }
                  ?>
                  
                     </div>
                  </div>
               </section>
               <hr>
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