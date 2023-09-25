<?php require 'admin/link.php'; ?>
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

<section id="slider" class="slider-section">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="item active">
						<center><h1><b>You Can Register in <a href="promotion_signup.php"> <u>here</u></a></h1></b></center>
                        <img src="img/promotion.jpg" alt="First slide" style="width:1300px;height:550px;">
                    </div>


                </div>

            </div>
            <div class="main-text hidden-xs">
                <div class="pull-left col-md-12">


                </div>
            </div>
    </section>

   <section class="content-section blue darken-3">
    <div class="container">
         <div class="row">

      </div>
    </div>
    </section> 

    <section class="slider-doctor-section teal lighten-4">
   <div class="container">
    <div class="row">
    </div>
</div>
<div class="carousel-reviews">

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

</body>
</html>                                   