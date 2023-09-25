<?php require 'admin/link.php';
        session_start(); 
        @ob_start();
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
      <!--       <a href="#" class="navbar-brand">Brand</a> -->
        </div>
        <!-- Collection of nav links and other content for toggling -->
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
                <h4 class="hlcalltext pull-left glyphicon glyphicon-earphone"> 0174-7799494 <span class="spantext">(8AM-10PM)</span> </h4>
                <hr class="hrtop" />
            </div>
     </div>
  </section>

<section class="doctor-detail-section" style="background-color:rgba(235, 236, 234, 0.72);">
    <div class="container">
    <?php if (isset($_REQUEST['dcdtl'])) 
    {
        $dtailid = $_REQUEST['dcdtl'];
        $sql = mysql_query("SELECT * FROM new_doctor WHERE id='".$dtailid."'");
        $num = mysql_fetch_assoc($sql) or die(mysql_error());
  ?>
        <div class="row">
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="admin/doctor_image/<?php echo $num['doc_profile_pic'];?>" alt="Sample Image" width="250" height="240">
                    <div class="caption">
                        <h4 class="blue-text text-darken-2"><?php echo $num['doc_name']; ?></h4>
                        <p><?php echo $num['designation']; ?></p>
                        <hr />
                        <?php 
                            if ($num['first_cm_address']==!null) 
                            {
                         ?>
						<span id="chmbox" class="doc_office badge  blue darken-4 <?php echo ($num['first_cm_address']==null) ? 'hidden': ''; ?>" ><h5>Chamber 1 </h5></span>
						<h4 style="color:red;"> <?php echo $num['first_cm_address']; ?></h4>
                        <hr />
                        <?php }
                            if ($num['second_cm_address']!==null)
                             {
                         ?>
						<span id="chmbox" class="doc_office badge  blue darken-4 <?php echo ($num['second_cm_address']==null) ? 'hidden': ''; ?>" ><h5>Chamber 2 </h5></span>
						<h4 style="color:red;"> <?php echo $num['second_cm_address']; ?></h4>
                        <hr />
                        <?php }
                                if ($num['third_cm_address']!==null)
                             {
                         ?>
						<span id="chmbox" class="doc_office badge  blue darken-4 <?php echo ($num['third_cm_address']==null) ? 'hidden': ''; ?>" ><h5>Chamber 3 </h5></span>
                       <h4 style="color:red;"> <?php echo $num['third_cm_address']; ?>
                        <hr />
                        <?php } ?>
                        <span class="label label-info orange darken-4"> New Patient Fees: <?php echo $num['new_p_f']; ?> TK.</span> <br /> <span class="label label-info orange darken-4"> Return Patient Fees: <?php echo $num['return_p_f']; ?> TK.</span> <br /> <span class="label label-info orange darken-4"> Report Follow Up Fees: <?php echo $num['report_f_f']; ?> TK.</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="blue-text text-darken-2"><?php echo $num['doc_name']; ?></h3> <br />
                <h5 style="color:red;"><?php echo $num['designation']; ?></h5>
                <hr />
                <h4 class="green-text text-darken-2">Available Appointments : </h4>
                <?php 
               
                    if(isset($_SESSION["day1"])) //check session var
                     {
                         $name1 = $_SESSION['day1'];
                     }
                     echo "<h2>Showing the appointment time of $name1 day in bellow </h2";
                     echo "<br>";
                     echo "<br>";
                     echo "<br>";
    
                    $query = mysql_query("SELECT * FROM apoin_schedule WHERE docid='".$_REQUEST['dcdtl']."' AND day='$name1' ");


                     $row = mysql_fetch_array($query);
                    if (empty($row)) {
                    
                          
                           
?>
                           <h1 style="color:red;font-style: italic;border-style: dotted;height: 200px;
    width: 500px;padding-top: 40px;padding-right: 30px; padding-bottom: 50px; padding-left: 80px;"> <?php echo "Sorry Your searched doctor is unavailable.<br> please Search Again!!!"; ?></h1>

         <?php            
                    }
                    else{
                   while ($num = mysql_fetch_array($query)) 
                   {
                 ?>
				<button class="hrtopbtn blue darken-4 btn btn-sm" style="height:30px;width:120px;margin: 5px;"><b><a href="confirm_appointment.php?cnapn=<?php echo $num['id']; ?>&docid=<?php echo $num['docid']; ?>"> <?php  echo $num["apntime"]; ?>  </a> </b></button>
                 <?php }  }?>
                 <h5><?php 
                    $sql = mysql_query("SELECT * FROM new_doctor WHERE id='".$dtailid."'");
                    while($num = mysql_fetch_assoc($sql))
                    {
                 echo $num['dgre_spc']; ?></h5>
                 <hr />
                  <h5><?php echo $num['description']; ?></h5>
            </div>
            <?php } }?>
            <div class="col-md-3"  style="border: 5px solid blueviolet;">
<?php if (isset($_REQUEST['dcdtl'])) 
    {
        $dtailid = $_REQUEST['dcdtl'];
        $sql = mysql_query("SELECT * FROM new_doctor WHERE id='".$dtailid."'");
        $num = mysql_fetch_assoc($sql) or die(mysql_error());
       
  ?>

<iframe width= 100% height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $num['first_cm_address']; ?>&output=embed"></iframe>



            </div>

        </div>
         <?php } ?>
         
    </div>
</section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>                                   