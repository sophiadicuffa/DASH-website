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
                        echo '<h5><a href = "'.$row['source'].'">'. $row['title'] .'</a></h5>';
                        echo '<span class="date">'. $row['date_added'] .'</span></div>';
                        echo '<div class="img">';
                        echo '<image src = "../dash-admin/pages/images/'. $row['url'] .'"></div>';
                        echo '<div class="text"><p>'.$row['des'].'</p><br/><br/></div></div>';            
                      }
                    } 
                  ?>

                  
               </div>             
            </div>
         </div>
         
      </div>
      
      </div>

      <?php 
      // source:https://stackoverflow.com/questions/3705318/simple-php-pagination-script
      require 'connect.php';// find out how many rows are in the table 
      $sql = "SELECT COUNT(*) FROM news";
      $result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);
      $r = mysqli_num_rows($result);
      $numrows = $r;
      
      // number of rows to show per page
      $rowsperpage = 2;
      // find out total pages
      $totalpages = ceil($numrows / $rowsperpage);
      
      // get the current page or set a default
      if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
         // cast var as int
         $currentpage = (int) $_GET['currentpage'];
      } else {
         // default page num
         $currentpage = 1;
      } // end if
      
      // if current page is greater than total pages...
      if ($currentpage > $totalpages) {
         // set current page to last page
         $currentpage = $totalpages;
      } // end if
      // if current page is less than first page...
      if ($currentpage < 1) {
         // set current page to first page
         $currentpage = 1;
      } // end if
      
      // the offset of the list, based on current page 
      $offset = ($currentpage - 1) * $rowsperpage;
      
      // get the info from the db 
      $sql = "SELECT id FROM news LIMIT $offset, $rowsperpage";
      $result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);
      
      /******  build the pagination links ******/
      // range of num links to show
      $range = 3;
      
      // if not on page 1, don't show back links
      if ($currentpage > 1) {
         // show << link to go back to page 1
         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a> ";
         // get previous page num
         $prevpage = $currentpage - 1;
         // show < link to go back to 1 page
         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
      } // end if 
      
      // loop to show links to range of pages around current page
      for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
         // if it's a valid page number...
         if (($x > 0) && ($x <= $totalpages)) {
            // if we're on current page...
            if ($x == $currentpage) {
               // 'highlight' it but don't make a link
               echo " [<b>$x</b>] ";
            // if not current page...
            } else {
               // make it a link
               echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
            } // end else
         } // end if 
      } // end for
      
      // if not on last page, show forward and last page links        
      if ($currentpage != $totalpages) {
         // get next page
         $nextpage = $currentpage + 1;
          // echo forward link for next page 
         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>></a> ";
         // echo forward link for lastpage
         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>>></a> ";
      } // end if
      /****** end build pagination links ******/
      ?>
      <div class="pagination">
         <a href="#">&laquo;</a>
         <a href="#">1</a>
         <a class="active" href="#">2</a>
         <a href="#">3</a>
         <a href="#">4</a>
         <a href="#">5</a>
         <a href="#">6</a>
         <a href="#">&raquo;</a>
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