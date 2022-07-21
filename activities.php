<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>Activities | DASHLAB</title>
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
               <li><a href="#Teaching"> Teaching </a></li>
               <li><a href="#Membership"> Membership </a></li>
               <li><a  href="#professional"> Professional Activities </a></li>
               <li><a href="#institutional"> Institutional Activities</a></li>

            </ul>
         </div>

         <div class="span8 offset1">

            <section id="Teaching">
               <div class="page-header">
                  <h3>Teachings</h3>
               </div>
                  <?php
                  require 'connect.php';
                  $sql = "SELECT * FROM teachings";
                  $result = mysqli_query($conn, $sql);
                  if(mysqli_num_rows($result) > 0){
                     while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="row-fluid"><div class="span12">
                        <div class="page-header">';
                        echo '<h5><a href=""></a>'.$row['class'].'</a></h5>';
                        echo '<hr>';
                        echo '<p>'.$row['des'].'</p>';
                        echo '<p>Prerequisite: '.$row['prereq'].'</p>';
                        echo '<p>Semesters Taught: '.$row['sem'].'</p></div>';
                     }
                  }
                  ?>
                        
               </div>
            </div>
            </section>
            <hr>
            <section id="Memberships">
            <div class="page-header">
                  <h3>Memberships</h3>
               </div>
              
               <ol class="resources">
               <?php
                    require 'connect.php';
                    $sql = "SELECT * FROM activities WHERE category = 'Membership'";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li>'.$row['title'] .'</li>';
                      }
                    }
                  ?>
               </ol>
            </section>
                     <hr>
            <section id="Professional">
            <div class="page-header">
                  <h3>Professional Activities</h3>
               </div>
              
               <ol class="resources">
               <?php
                    require 'connect.php';
                    $sql = "SELECT * FROM activities WHERE category = 'Professional Service'";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li>'.$row['title'] .'</li>';
                      }
                    }
                  ?>
               </ol>
            </section>

            <hr>
            <section id="Institutional">
            <div class="page-header">
                  <h3>Institutional Services</h3>
               </div>
               <ol class="resources">
               <?php
                    require 'connect.php';
                    $sql = "SELECT * FROM activities WHERE category = 'Institutional Service'";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li>'.$row['title'] .'</li>';
                      }
                    }
                  ?>
               </ol>
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
      $(document).ready(function () {
         $(document.body).scrollspy({
            target: "#navparent"
         });
      });

   </script>
</body>

</html>