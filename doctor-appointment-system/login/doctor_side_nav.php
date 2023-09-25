				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="dashboard.php" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						<li>
							<a href="#"><i class="glyphicon glyphicon-user "></i> Profile<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="doctor_view_profile.php"> View Profile </a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li class="">
							<a href="#"><i class="fa fa-book nav_icon"></i> Appoinment <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="doctor_view_daily_appoinment.php"> View daily Appoinment <span class="nav-badge-btm">		<?php
								$result = mysql_query("SELECT COUNT(id) AS daily_apionmnt FROM confirm_appointment WHERE docid='".$_SESSION['docid']."'")or die(mysql_error());
					          while($row = mysql_fetch_array( $result )) {
								 ?>
							<?php echo $row['daily_apionmnt']; ?>
							<?php } ?>

							</span></a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>


							<li class="">
							<a href="#"><i class="fa fa-book nav_icon"></i> Payment <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="paymentdoc.php"> View Appoinment  payment<span class="nav-badge-btm"><?php
								$result = mysql_query("SELECT SUM(fees) AS paymentapp FROM confirm_appointment WHERE docid='".$_SESSION['docid']."'")or die(mysql_error());
					          while($row = mysql_fetch_array( $result )) {
								 ?>
							<?php echo $row['paymentapp']; ?>
							<?php } ?>

							</span></a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>



						<li>
							<a href="#"><i class="fa fa-envelope nav_icon"></i> Schedule <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="doc_add_schedule.php"> Add Schedule </a>
								</li>
								<li>
									<a href="doc_view_schedule.php"> View Schedule </a>
								</li>
							</ul>
							<!-- //nav-second-level -->
						</li>
						<li>
							<div class="cal1" hidden> 
						
					</div>
						</li>
					</ul>
					<!-- //sidebar-collapse -->
				</nav>