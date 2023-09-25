<?php require 'link.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Online Doctor's Appoinment </title>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.0-beta.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.1.135/jspdf.min.js"></script>
<script type="text/javascript" src="http://cdn.uriit.ru/jsPDF/libs/adler32cs.js/adler32cs.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2014-11-29/FileSaver.min.js
"></script>
<script type="text/javascript" src="libs/Blob.js/BlobBuilder.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.addimage.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.standard_fonts_metrics.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.split_text_to_size.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.from_html.js"></script>
<script type="text/javascript" src="js/basic.js"></script>
<script>
$(function() {
  var doc = new jsPDF();
  var specialElementHandlers = {
    '#editor': function(element, renderer) {
      return true;
    }
  };
  $('#cmd').click(function() {
    doc.fromHTML($('#page-wrapper').html(), 20, 20,  {
      'width': 1400,
      'elementHandlers': specialElementHandlers
    });
    doc.save('All-Patient-Payment-Details.pdf');
  });
});
</script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body>
	<div class="main-content">
		<!--left-fixed -navigation-->
	
		<!--left-fixed -navigation-->
		<!-- header-starts -->

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<div class="table-responsive bs-example widget-shadow">
						<center><h4 class="title1"> All Patient Payment Details </h4></center>
						<center><h2 style="color:red"><b>	<?php 
					$sql = mysql_query("SELECT SUM(payment) AS total_payment FROM `new_patient`") ;
					$row = mysql_fetch_array($sql);
					$a= $row['total_payment'];
					
					echo "Total Payments from Health Card: ".$a; ?> </b></h2></center><br>
						<table class="table table-bordered"> 
							<thead>
								 <tr> 
								 	 <th> Name </th> 
								 	 <th> Phone no</th> 
								 	 <th> Package</th> 
								 	 <!-- <th> Reg_Date </th> -->
								 	 <!-- <th> Val_ Date </th> -->
								 	 <th> Payment </th>
								 	 <th> Transition_ID </th> 
								 	 


								 </tr>
							 </thead> 
							 <?php 
							 	$sql = mysql_query("SELECT * FROM new_patient");
							 	while ($num = mysql_fetch_array($sql)) 
							 	{
							  ?>
							 <tbody> 
							 	<tr> 
							 		<td><?php echo $num['patient_name']; ?></td> 
							 		<td><?php echo $num['patient_phone']; ?></td> 
							 		<td><?php echo $num['Package']; ?></td>
							 		<!-- <td><?php echo $num['admid_date']; ?></td>  -->
							 		<!-- <td><?php echo $num['Validity_Date']; ?></td> -->
							 		<td><?php echo $num['payment']; ?></td>
							 		<td><?php echo $num['transitionID']; ?></td>

									
									

							 	</tr> 
						    </tbody> 
						    <?php } ?>
						</table> 
					
					</div>
					</div>
				</div>
				<br>
				<button id="cmd">Processing to generate PDF</button>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p> &copy; 2016 All Rights Reserved </p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
</body>
</html>