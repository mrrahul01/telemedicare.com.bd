<?php 
	session_start();
	require 'link.php';
	if (isset($_SESSION['admin_id'])) 
	{
		$admin_id =  $_SESSION['admin_id'];
        $admin_name = $_SESSION['admin_name'];
	}
	else
	{
		header("location:index.php");
		exit();
	}
 ?>
			<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						
						<li>
							<a href="#"><i class="fa fa-cogs nav_icon"></i> Doctor's <span class="nav-badge">	<?php
								$result = mysql_query("SELECT COUNT(id) AS all_doc FROM new_doctor")or die(mysql_error());
					          while($row = mysql_fetch_array( $result )) {
						 ?>
							<?php echo $row['all_doc']; ?>
							<?php } ?></span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="add_new_doctor.php">Add New Doctor</a>
								</li>
								<li>
									<a href="view_all_doctor.php"> View All Doctor's </a>
								</li>
									<li>
									<a href="add_new_speciality.php">Add New Speciality</a>
								</li>
									<li>
									<a href="view_all_speciality.php">View Speciality</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						
						
						
						<li>
							<a href="#"><i class="fa fa-cogs nav_icon"></i> Health Card Member <span class="nav-badge">	<?php
								$result = mysql_query("SELECT COUNT(patient_id) AS all_patient FROM new_patient")or die(mysql_error());
					          while($row = mysql_fetch_array( $result )) {
						 ?>
							<?php echo $row['all_patient']; ?>
							<?php } ?></span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">

								<li>
									<a href="view_all_patient.php"> View All Member's </a>
								</li>
									<li>
									<a href="validity_and_checkups.php">Add Members's validity and checkups</a>
								</li>

								
									
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-cogs nav_icon"></i>Test and checkup<span class="nav-badge">	<?php
								$result = mysql_query("SELECT COUNT(id) AS all_test FROM chkup_test")or die(mysql_error());
					          while($row = mysql_fetch_array( $result )) {
						 ?>
							<?php echo $row['all_test']; ?>
							<?php } ?></span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">

								<li>
									<a href="checkup_test.php"> View All Patient's checkup and Test</a>
								</li>

								<li>
									<a href="input_test.php"> Input Test Names </a>
								</li>

								

									
							</ul>
							<!-- /nav-second-level -->
						</li>


						<li>
							<a href="#"><i class="fa fa-cogs nav_icon"></i> Promotions <span class="nav-badge">	<?php
								$result = mysql_query("SELECT COUNT(id) AS all_promotions FROM promoregistration")or die(mysql_error());
					          while($row = mysql_fetch_array( $result )) {
						 ?>
							<?php echo $row['all_promotions']; ?>
							<?php } ?></span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">

								<li>
									<a href="view_all_promotions.php"> View All Registered Member </a>
								</li>
									
							</ul>
							<!-- /nav-second-level -->
						</li>
						
						
						<li class="">
							<a href="#"><i class="fa fa-cogs nav_icon"></i> Appointments <span class="nav-badge">	<?php
								$result = mysql_query("SELECT COUNT(id) AS all_appointments FROM confirm_appointment")or die(mysql_error());
					          while($row = mysql_fetch_array( $result )) {
						 ?>
							<?php echo $row['all_appointments']; ?>
							<?php } ?></span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								
								<li>
									<a href="all_apointment.php">All Appoinments <span class="nav-badge">	<?php
								$result = mysql_query("SELECT COUNT(id) AS all_appointments FROM confirm_appointment")or die(mysql_error());
					          while($row = mysql_fetch_array( $result )) {
						 ?>
							<?php echo $row['all_appointments']; ?>
							<?php } ?></span></a>
								</li>
							</ul>

							<ul class="nav nav-second-level collapse">
								
								<li>
									<a href="add_appoinment_time.php">Add Appointment Time <span>	</span></a>
								</li>
							</ul>

							<ul class="nav nav-second-level collapse">
								
								
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-file-text-o nav_icon"></i> Location <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="add_country.php">Add Country</a>
								</li>
								<li>
									<a href="View_country.php">View Country</a>
								</li>
								<li>
									<a href="add_city.php">Add City</a>
								</li>
								<li>
									<a href="view_city.php">View City</a>
								</li>
								<li>
									<a href="add_area.php">Add Area</a>
								</li>
								<li>
									<a href="view_area.php">View Area</a>
								</li>
							</ul>
							<!-- //nav-second-level -->
						</li>



						<li>
							<a href="#"><i class="fa fa-file-text-o nav_icon"></i> Payment And Report <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="heath_cardapp.php">Payments from member registration </a>
								</li>
								<li>
									<a href="checkup_testapp.php"> Payment from checkup and Test </a>
								</li>
								<li>
									<a href="payment_admin.php">Payment form appointment<span class="nav-badge-btm">	<?php
								$result = mysql_query("SELECT SUM(fees) AS paymentapp FROM confirm_appointment ")or die(mysql_error());
					          while($row = mysql_fetch_array( $result )) {
								 ?>
							<?php echo $row['paymentapp']; ?>
							<?php } ?>
							</span></a>
								</li>
								
								
								
							</ul>
							<!-- //nav-second-level -->
						</li>
							<li>
								<div class="cal1" hidden>	</div>
							</li>
					</ul>
					<!-- //sidebar-collapse -->
				</nav>