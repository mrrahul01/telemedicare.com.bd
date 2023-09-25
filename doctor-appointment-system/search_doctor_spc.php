<?php 
require 'admin/link.php';
session_start(); 
@ob_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Online Doctor's Appoinment </title>
<link rel="icon" href="img/favicon.png" type="image/gif" sizes="16x16">
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
                <h4 class="hlcalltext pull-left glyphicon glyphicon-earphone"> 0174-7799494 <span class="spantext">(8AM-10PM) Everyday</span> </h4>
                <hr class="hrtop" />
            </div>
     </div>
  </section>

<section class="doctor-detail-section">
    <div class="container">
        <div class="row">
          <div class="col-md-9">
              <?php 
                   if (isset($_REQUEST['search'])) 
                  {
                    $condition = "";
                    $country = "";
                    $city = "";
                    $day = "";
                    $speciality = $_REQUEST['speciality'];
                    if(isset($_REQUEST['country'])){
                      $country = $_REQUEST['country'];
                      $city = $_REQUEST['city'];
                      $area = $_REQUEST['area'];
                      $day = $_REQUEST['booking_date'];
                      $dt = strtotime($day);
                      $mysqldate = date( 'd-m-Y', $dt );
                     echo "<h2>Your Searched Date is: $mysqldate </h2>";
                      $dt = strtotime("$mysqldate");
                      // Then, you can format the timestamp using date():

                      $day = date("D", $dt);
                      // If you especially want it in uppercase, use strtoupper():

                      $a =  strtoupper($day);
                      echo "<h2>Your Searched Date is: $a </h2>";
                      $_SESSION["day1"]= $a;
                    }

                    if(isset($_REQUEST['country'])){
                      $city = $_REQUEST['city'];
                      $area = $_REQUEST['area'];
                    }

                    if($country != "")
                    {
                      $condition .= " AND doc.country LIKE '%$country%'";
                    }
                    
                    if($city != "")
                    {
                      $condition .= " AND doc.city LIKE '%$city%'";
                    }

                    if($area != "")
                    {
                      $condition .= " AND doc.area LIKE '%$area%'";
                    }

                    if($a != "")
                    {
                      $condition .= " AND req.day LIKE '%$a%'";
                      
                    }

             

                 $srcquery = mysql_query("SELECT DISTINCT doc.*,req.day FROM new_doctor as doc JOIN apoin_schedule as req WHERE doc.speciality='".$_REQUEST['speciality']."' AND doc.id = req.docid $condition ORDER BY id LIMIT 50")or die(mysql_error());

                    $row = mysql_fetch_array($srcquery);
                    if (empty($row)) {
                      echo "<br>";
                       echo "<br>";
                        echo "<br>";
                         echo "<br>";
                          
                          
                           
                          
                           
?>

   <h1 style="color:red;font-style: italic;border-style: dotted;height: 200px;
    width: 800px;padding-top: 40px;padding-right: 30px; padding-bottom: 50px; padding-left: 80px;"> <?php echo "Sorry Your searched doctor is unavailable.<br> please Search Again!!!"; ?></h1>
                
    <?php           
                    }
                    else{

                    while ($row = mysql_fetch_array($srcquery)) 
                    {
           ?>
              <div class="media grey lighten-4" style="border: 5px solid #91a0b3;border-radius: 20px;">
                  <div class="media-left"><br>
                      <a href="#">
                          <img src="admin/doctor_image/<?php echo $row['doc_profile_pic'];?>" class="media-object img-circle" alt="Sample Image"  style="border: 2px solid #1377ef;"  width="145"height="auto">
                      </a>
                  </div>
                  <div class="media-body">
					  <br>     <h4 class="media-heading"><b> <?php echo $row['doc_name']; ?> </b></h4>
					  <p><font color="#3bbbe2"><?php echo $row['designation']; ?></font></p>
                      <p><font color="green"><?php echo $row['dgre_spc']; ?></font></p>
					  <p><font color="red">Fee ( for new patient ) : <?php echo $row['new_p_f']; ?> tk</font></p>
					  <button class="pull-right btn btn-success"> <a href="doctor_detail.php?dcdtl=<?php echo $row['id']; ?>"><font color="white"> Book Appointment </font></a></button>
                  </div><br>
              </div>
              <hr />
              <?php }} }?>
          </div>
			<section class="header-section">
<!--				padding: 150px 0px 0px 0px;-->
          <div class="col-md-3" style="padding: 80px 15px 0px 0px;position: fixed;bottom: 150px; top: 90px;right: 40px;width: 400px;border: 5px ;">
            <div class="searchbox">
                            <form action="search_doctor_spc.php" method="post" class="pull-right form-horizontal">
                                  <div class="form-group"> 
                                    <h2><center>You can search doctor  </center></h2>  <br>                                         
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
                                                 $query = mysql_query("SELECT id,country FROM country");
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
			</section>
        </div>
    </div>
</section>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>                                   