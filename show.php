
  <?php include 'header.php';
  error_reporting(0);
  include("dbconnection.php");
  $dt = date("Y-m-d");
  $tim = date("H:i:s");
  ?>
  <?php
  error_reporting(0);  // using to hide undefine undex errors
  session_start();
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="css/show.css">
  </head>
  <body>
  
  <section class="show">
  <div class="container">
                <div class="row">	
                <?php 
						// fetch records from database to display popular first 3 dishes from table
						$query_res= mysqli_query($con,"select * from theshow");
               if(mysqli_num_rows($query_res)){
                while($r=mysqli_fetch_array($query_res)){		
                  echo '<div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-lg-4 col-md-4 col-xs-12">
              <div class="card h-100">
                <img src='.'uploads/'.$r['image'].' style="width:350px;height:250px"></img>
                <div class="card-body">
                  <h5 class="card-title">'.$r['name'].'</h5>
                  <p class="card-text">SDG '.$r['price'].'</p>
                </div>
              </div>
            </div>';				
                }	
               }else{
                echo '<h5 class="card-title">المعرض خالي</h5>';
               }			
						?>        
                </div>
            </div>
  </section>
  
  </body>
  </html>
  
  <!-- Footer -->
<?php include 'footer.php';?>