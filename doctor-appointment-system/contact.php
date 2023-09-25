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
<link rel="stylesheet" type="text/css" href="../admin/css/style.css">
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
<form action="contact_mail.php" method="post" class="form-horizontal orange lighten-5">
<section class="doctor-detail-section  teal accent-1">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
           <br> <h2 class="color-text"> Contact Us For Solving Problem </h2><br>
           
             <form class="form-horizontal">
                

                <div class="form-group">
                    <label for="inputEmail" class="control-label col-xs-2">Name</label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="name" id="inputEmail" placeholder="Name" required>
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputEmail" class="control-label col-xs-2">Email</label>
                    <div class="col-xs-10">
                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="control-label col-xs-2">Phone no</label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="phone" id="inputEmail" placeholder="Phone number" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-xs-2"> Detail Info </label>
                    <div class="col-xs-10">
                    <textarea type="text" class="form-control" name="details" rows="14"  placeholder="Detail" required>
                      
                    </textarea>
                       
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-2 col-xs-10">
                        <button type="submit" name="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
           
            </div>
			
			
			
        </div>
    </div>
	
	
</section>
 
 
          </form>
<footer>
            <div class="row">
                <div class="col-lg-12">
				<!--	<center> <p>Copyright &copy; Telemedicare.com.bd</p> </center> -->
                </div>
            </div>
        </footer>

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
