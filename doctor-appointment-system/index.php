<?php require 'admin/link.php'; 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Online Doctor's Appoinment </title>
<link rel="icon" href="img/favicon.png" type="image/gif" sizes="16x16">
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
           <div class="col-md-6">
         
               <nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
     
        </div>
       
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="login/index.php">Doctor's Area</a></li>
                
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="testpatient/health_card.php">Health Card</a></li>
                <li><a href="promotion.php">Promotions</a></li>
            </ul>
          
        </div>
    </nav>

          </div>
            <div class="col-md-3">
      <center>   <h4 class="hlcalltext pull-left glyphicon glyphicon-earphone"> 0174-7799494 <span class="spantext">(8AM-10PM) Everyday</span> </h4> </center>
                <hr class="hrtop" />
            </div>
     </div>
  </section>
<div class="row" style="background-color:#ccffff">
            <div class="col-md-2">
				<img src="img/donate.gif" style="width: 105%; height: 425px;padding: 0cm 0cm 0cm .5cm;">
	</div>
	<div class="col-md-7" >
<section id="slider" class="slider-section">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					<li data-target="#carousel-example-generic" data-slide-to="3" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
           <img src="img/sliderimg3.jpg" alt="First slide" style="width:1400px;height:430px;">
                    </div>
                    <div class="item">
            <img src="img/sliderimg4.jpg" alt="Second slide" style="width:1400px;height:430px;">
                    </div>
                    <div class="item">
             <img src="img/sliderimg5.jpg" alt="Third slide" style="width:1400px;height:430px;">
                    </div>
					<div class="item">
             <img src="img/sliderimg6.jpg" alt="Third slide" style="width:1400px;height:430px;">
                    </div>
					<div class="item">
             <img src="img/sliderimg7.jpg" alt="Third slide" style="width:1400px;height:430px;">
                    </div>
					
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
            
	</div>
	</div>
	<div class="col-md-3" style="background-color:#ccffff;height: 420px;width: 315px">
		<div style="padding: 1cm 5cm 5cm 7cm;">
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
                                                 $query = mysql_query("SELECT id,country FROM country ");
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
                                                          $query = mysql_query("SELECT id,country,city FROM city ");
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
                                                          $query = mysql_query("SELECT * FROM area WHERE country = 'Bangladesh'");
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
										<center> <button type="submit" name="search" class="btn btn-info" style="width:120px;"> Search </button> </center>
                                    </div>
                                  </div>
                            </form>
			</div>
                    </div>
	</div>
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
                            <div class="block-text rel zmin" style="height: 110px; width: 100%;">
                                <a title="" href="#">
                                
                                <?php    $pieces = explode(" ", $result['speciality']);
                                    $first_part = implode(" ", array_splice($pieces, 0, 7));
                                    echo $first_part;  ?>
                                
                                </a><br />
                              <?php echo $result['designation']; ?>
                                <p>
                                
                                </p>
                                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                            </div>
                            <div class="person-text rel red">
                              <a href="doctor_details.php?dcdtl=<?php echo $result['id']; ?>">  <img src="admin/doctor_image/<?php echo $result['doc_profile_pic'];?>" class="img-circle" alt="No image" width="60" height="80"> </a>
                               
                                <a title="" href="doctor_details.php?dcdtl=<?php echo $result['id']; ?>"><?php echo $result['doc_name']; ?></a>
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
<!-- Start of Tawk.to Script -->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57dd11c6c465436c8ce7bf22/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> 

<!--End of Tawk.to Script-->
</body>
</html>