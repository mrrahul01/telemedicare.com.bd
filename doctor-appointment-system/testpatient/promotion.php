<?php require 'admin/link.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Online Doctor's Appoinment </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <section class="header-section">
     <div class="row">
            <div class="col-md-3">
           <a href = "index.php">  <img src="img/sfdfsdf.png"> </a>
         </div>
           <div class="col-md-5">
         <!--     <ul class="nav navbar-nav">
                <li><a href="login/index.php"> Doctor </a></li>
                <li><a href="http://localhost//telecare/admin"> Health Tips </a></li>
                <li><a href="about.php"> About Us </a></li>
                <li><a href="contact.php"> Contact Us </a></li>
             </ul>    -->
               <nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
      <!--       <a href="#" class="navbar-brand">Brand</a> -->
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
               <li><a href="index.php">Home</a></li>
                <li><a href="login/index.php">Doctor's Area</a></li>
                
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                
                <li><a href="promotion.php">Promotions</a></li>
            </ul>
          
        </div>
    </nav>

          </div>
            <div class="col-md-4">
                <h4 class="hlcalltext pull-left glyphicon glyphicon-earphone"> 0174-7799494 <span class="spantext">(8AM-10PM) Everyday </span> </h4>
                <hr class="hrtop" />
            </div>
     </div>
  </section>

<section id="slider" class="slider-section">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/sliderimg.jpg" alt="First slide">
                    </div>
                    <div class="item">
                        <img src="img/sliderimg1.jpg" alt="Second slide">
                    </div>
                    <div class="item">
                        <img src="img/sliderimg2.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
            </div>
            <div class="main-text hidden-xs">
                <div class="pull-left col-md-12">
                <div class="livesupport">
                      <h1> Find Your Best Doctor's appointment from </br>Bangladesh, India, Thailand and Singapore </h1>
                    <h1 class="livespt hlcalltext  glyphicon glyphicon-earphone">01747-799494 </h1>
                </div>
                    <div class="searchbox">
                            <form action="search_doctor_spc.php" method="post" class="pull-right form-horizontal">
                                  <div class="form-group">                                        
                                        <select name="speciality" class="btn btn-clear btn-sm btn-min-block" type="text" id="selector1" class="form-control1">
                                            <option> Select Speciality </option>
                                                 <?php 
                                                          $query = mysql_query("SELECT * FROM speciality");
                                                          while ($result = mysql_fetch_array($query)) 
                                                          {
                                                              echo '<option value="'.$result["speciality"].'">'.$result["speciality"].'</option>';    
                                                          }
                                                      ?>
                                          </select>
                                  </div>
                                  <div class="form-group">
                                      <select name="country" class="btn btn-clear btn-sm btn-min-block" type="text" id="selector1" class="form-control1">
                                            <option value = ""> Select Country </option>
                                                 <?php 
                                                          $query = mysql_query("SELECT * FROM country");
                                                          while ($result = mysql_fetch_array($query)) 
                                                          {
                                                              echo '<option value="'.$result["country"].'">'.$result["country"].'</option>';    
                                                          }
                                                      ?>
                                          </select>
                                  </div>
                                <div class="form-group">
                                      <select name="city" class="btn btn-clear btn-sm btn-min-block" type="text" id="selector1" class="form-control1">
                                            <option value = ""> Select City </option>
                                                 <?php 
                                                          $query = mysql_query("SELECT * FROM city");
                                                          while ($result = mysql_fetch_array($query)) 
                                                          {
                                                              echo '<option value="'.$result["city"].'">'.$result["city"].'</option>';    
                                                          }
                                                      ?>
                                          </select>
                                  </div>

                                  <div class="form-group">
                                      <select name="area" class="btn btn-clear btn-sm btn-min-block" type="text" id="selector1" class="form-control1">
                                            <option value = ""> Select Area </option>
                                                 <?php 
                                                          $query = mysql_query("SELECT * FROM area");
                                                          while ($result = mysql_fetch_array($query)) 
                                                          {
                                                              echo '<option value="'.$result["area"].'">'.$result["area"].'</option>';    
                                                          }
                                                      ?>
                                          </select>
                                  </div>
                                    <div class="form-group"> 
                                        <input type="date" name="booking_date" class="btn datecl" placeholder="Booking Date">
                                    </div>
                                  <div class="control-group">
                                    <div class="controls">
                                      <button type="submit" name="search" class="btn btn-info"> Search </button>
                                    </div>
                                  </div>
                            </form>
                    </div>
                </div>
            </div>
    </section>

   <section class="content-section blue darken-3">
    <div class="container">
         <div class="row">
        <h2 class="acv grey-text text-lighten-5"> FIND A DOCTOR NEAR YOU & BOOK AN APPOINTMENT </h2>
      </div>
    </div>
    </section> 

    <section class="slider-doctor-section teal lighten-4">
   <div class="container">
    <div class="row">
    </div>
</div>
<div class="carousel-reviews">
    <div class="container">
        <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
            
                <div class="carousel-inner">
                <?php 
                $count=2;
                $cc=$count;
                $flag=null;
                    $query = mysql_query("SELECT * FROM new_doctor ");
                    while ($result = mysql_fetch_array($query))
                     { if (  $cc==$count  ) {
            

                 ?>
              

                    <div class="item <?php echo $flag=($flag===null)? "active" :"";  ?>">
                            <?php   } ?>

                        <div class="col-md-4 col-sm-6 ">
                        <div class="card">
                            <div class="block-text rel zmin">
                                <a title="" href="#">
                                
                                <?php    $pieces = explode(" ", $result['speciality']);
                                    $first_part = implode(" ", array_splice($pieces, 0, 15));
                                    echo $first_part;  ?>
                                
                                </a><br />
                              <?php echo $result['designation']; ?>
                                <p>
                                <?php 
                                //$pos = strpos($result['description'],' ',420);
                                //echo substr($result['description'],0,$pos); 

                                    $pieces = explode(" ", $result['description']);
                                    $first_part = implode(" ", array_splice($pieces, 0, 5));
                                    echo $first_part;
                               ?>
                                </p>
                                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                            </div>
                            <div class="person-text rel red">
                                <img src="admin/doctor_image/<?php echo $result['doc_profile_pic'];?>" class="img-circle" alt="No image" width="60" height="80">
                               
                                <a title="" href="doctor_detail.php?dcdtl=<?php echo $result['id']; ?>"><?php echo $result['doc_name']; ?></a>
                                <i><?php echo $result['area']; ?></i>
                            </div>
                            </div>
                        </div>
                        <?php  if (!$cc) {echo "</div>"; $cc=$count;} else { $cc--; } ?>

                          
                <?php } ?>
             
                                 
                </div>
                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>
    </section>

 <!--    <section class="footer-section orange lighten-5">
      <div class="container">
        <div class="row">
          
        </div>
      </div>
    </section> -->

    <script type="text/javascript">
        $('#myCarousel').carousel({
          interval: 40000
        });

        $('.carousel .item').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          if (next.next().length>0) {
         
              next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');
              
          }
          else {
              $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
             
          }
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>                                   