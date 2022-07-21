<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Publications</title>
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
                  <li><a href="#published"> Journal Publications</a></li>
                  <li><a href="#inreview"> In Review and Preparation</a></li>
                  <li><a href="#refereed"> Papers and Presentations in Refereed Conference Proceedings</a></li>
               </ul>
            </div>
            <div class="span8 offset1">
               <section id="published">
                  <div class="page-header">
                     <h3>Journal Publications</h3>
                  </div>
                  <section id="2018">
                     <h3>2018</h3>
                     <br/>
                     <?php
                    require 'connect.php';
                    $sql = "SELECT * FROM publications";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                      while ($row = mysqli_fetch_assoc($result)) {
                       
                        echo '<div class="row-fluid">
                        <div class="span3">
                           <a href="https://www.nature.com/ncomms/" class="thumbnail">
                           <img class="publications-thumb" src="../dash-admin/pages/images/'. $row['url'] .'"/>
                           </a>
                        </div>';
                        echo '<div class="span9"><h4>'. $row['title'] .'</h4>';
                        echo '<p>'. $row['author'] .'</p>';
                        echo '<td>'. $row['url'] .'</td>';
                        echo '<p><a href='.$row['source'].'>Source</a></div></div>';
                        echo '<hr>';
                      }
                    }
                  ?>
         
                  </section>
                  <hr>

                  <section id="2016">
                     <h3>2016</h3>
                     <br/>            
                     <div class="row-fluid">
                        <div class="span3">
                           <a href="https://pubs.acs.org/journal/ancac3" class="thumbnail">
                           <img class="publications-thumb" src="thumbs/ancac3.2013.7.issue-12.largecover.jpg" alt="Orci Nulla Pellentesque Dignissim"/>
                           </a>
                        </div>
                        <div class="span9">
                           <h4>Orci Nulla Pellentesque Dignissim</h4>
                           <br/>
                           <p>R. Faucibus, N. Purus, J. Quis, K. Pharetra</p>
                           <a href="https://pubs.acs.org/journal/ancac3">ACK Ipsum, 8(10), p. 233-342, 2016</a>
                        </div>
                     </div>
                     <hr>
                     <div class="row-fluid">
                        <div class="span3">
                           <a href="https://pubs.acs.org/journal/nalefd" class="thumbnail">
                           <img class="publications-thumb" src="thumbs/nanoletters.2013.13.issue1.jpg" alt="Pellentesque Morbi Tristique Senectus Et"/>
                           </a>
                        </div>
                        <div class="span9">
                           <h4>Pellentesque Morbi Tristique Senectus Et</h4>
                           <br/>
                           <p>Q.E. Vulputate , E.R. Dictum, E.J. Pellentesque</p>
                           <a href="https://pubs.acs.org/journal/nalefd">Pellentesque Morbi, 2016</a>
                        </div>
                     </div>
                     <hr>
                     <div class="row-fluid">
                        <div class="span3">
                           <a href="https://aip.scitation.org/journal/apl" class="thumbnail">
                           <img class="publications-thumb" src="thumbs/105_1.jpg" alt="Tellus molestie nunc non blandit massa"/>
                           </a>
                        </div>
                        <div class="span9">
                           <h4>Tellus molestie nunc non blandit massa</h4>
                           <br/>
                           <p>N. Placerat, R.J. Molestie, R. Mollis, E.K. Tellus</p>
                           <a href="https://aip.scitation.org/journal/apl">Urna Neque Viverra, 105(1), 013111, 2016</a>
                        </div>
                     </div>
                     <hr>
                     <div class="row-fluid">
                        <div class="span3">
                           <a href="https://www.nature.com/ncomms/" class="thumbnail">
                           <img class="publications-thumb" src="thumbs/nature-communications.jpg" alt="Duis at consectetur lorem donec"/>
                           </a>
                        </div>
                        <div class="span9">
                           <h4>Duis at consectetur lorem donec</h4>
                           <br/>
                           <p>H. Enim, G. Malesuada, A.R. Morbi, R.K. Tortor</p>
                           <a href="https://www.nature.com/ncomms/">Malesuada Fames, 5:4449, 2016</a>
                        </div>
                     </div>
                  </section>
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