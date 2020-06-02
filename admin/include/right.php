<?php
           $admin_id = $_SESSION['admin_id'];
           $sql = mysqli_query($connect,"SELECT * FROM user WHERE id = '$admin_id' LIMIT 1");
           while ($admin_data = mysqli_fetch_array($sql)) {
             $admin_name = $admin_data['name'];
           }
          ?>
<div class="col-md-12">
				<div class="logo"><!-- <img id="logo" src="lib/img/logo3.png"> --><h2 style="color: white">AATA Admin Panel</h2></div>
				<div class="logoxs"><img id="logo" src="lib/img/logo_sm.png"></div>
				<div class="nav">
					<div class="hov">
						<div class="btn-group">
							<a class="con" href="#" data-toggle="dropdown"><span class="fa fa-bell"></span></a>
							<div class="dropdown-menu pull-right" role="menu">
								<div class="drop-item">
									<div class="drop-icon font-danger"><span class="fa fa-tachometer"></span></div>
									<div class="drop-info">
										<div class="drop-content">Phasellus tincidunt tincidunt velit shal...</div>
										<div class="drop-description">Bandwidth</div>
										<div class="drop-time">1/31 1:37 PM</div>
									</div>
								</div>
								<div class="drop-item">
									<div class="drop-icon font-success"><span class="fa fa-shopping-cart"></span></div>
									<div class="drop-info">
										<div class="drop-content">Ut tempus eros massa ut dolor, aenan...</div>
										<div class="drop-description">Purchase</div>
										<div class="drop-time">1/31 11:24 AM</div>
									</div>
								</div>
								<div class="drop-item">
									<div class="drop-icon font-warning"><span class="fa fa-laptop"></span></div>
									<div class="drop-info">
										<div class="drop-content">Aliquet fringilla sem. Suspendisse velit...</div>
										<div class="drop-description">Server</div>
										<div class="drop-time">1/31 6:07 AM</div>
									</div>
								</div>
								<div class="drop-item">
									<div class="drop-icon font-info"><span class="fa fa-info-circle"></span></div>
									<div class="drop-info">
										<div class="drop-content">Dolor ut eros velite sem shal tempetus...</div>
										<div class="drop-description">Statistics</div>
										<div class="drop-time">1/30 9:46 PM</div>
									</div>
								</div>
								<div class="drop-item drop-footer">
									<div class="drop-info">
										<div class="drop-description">See all of the current alerts...</div>
										<div class="drop-time"><span class="fa fa-angle-double-right"></span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="btn-group">
							<a class="con" href="#" data-toggle="dropdown"><span class="fa fa-envelope"></span></a>
							<div class="dropdown-menu pull-right" role="menu">
								<div class="drop-item">
									<div class="drop-icon font-unread"><span class="fa fa-envelope-o"></span></div>
									<div class="drop-info">
										<div class="drop-content">Phasellus tincidunt tincidunt velit shal...</div>
										<div class="drop-description">Angela Johnson</div>
										<div class="drop-time">1/31 1:37 PM</div>
									</div>
								</div>
								<div class="drop-item">
									<div class="drop-icon font-unread"><span class="fa fa-envelope-o"></span></div>
									<div class="drop-info">
										<div class="drop-content">Ut tempus eros massa ut dolor, aenan...</div>
										<div class="drop-description">Steve Parsons</div>
										<div class="drop-time">1/31 11:24 AM</div>
									</div>
								</div>
								<div class="drop-item">
									<div class="drop-icon font-read"><span class="fa fa-envelope-o"></span></div>
									<div class="drop-info">
										<div class="drop-content">Aliquet fringilla sem. Suspendisse velit...</div>
										<div class="drop-description">Sam Wise</div>
										<div class="drop-time">1/31 6:07 AM</div>
									</div>
								</div>
								<div class="drop-item">
									<div class="drop-icon font-read"><span class="fa fa-envelope-o"></span></div>
									<div class="drop-info">
										<div class="drop-content">Dolor ut eros velite sem shal tempetus...</div>
										<div class="drop-description">Tim Bolton</div>
										<div class="drop-time">1/30 9:46 PM</div>
									</div>
								</div>
								<div class="drop-item">
									<div class="drop-icon font-read"><span class="fa fa-envelope-o"></span></div>
									<div class="drop-info">
										<div class="drop-content">Sitel velit shal sem ut dolor massa tule...</div>
										<div class="drop-description">Tim Bolton</div>
										<div class="drop-time">1/30 9:46 PM</div>
									</div>
								</div>
								<div class="drop-item drop-footer">
									<div class="drop-info">
										<div class="drop-description">See all of your messages...</div>
										<div class="drop-time"><span class="fa fa-angle-double-right"></span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="btn-group">
							<a class="con" href="#" data-toggle="dropdown"><span class="fa fa-user"></span></a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li class="profile">
									<div class="pic"><img src="lib/img/avatars/2.png"></div>
									<div class="profile-info">
										<?php echo $admin_name; ?>
										<br><a href="#">Profile</a> - <a href="#">Settings</a>
									</div>
								</li>
								<li class="linked"><a href="#"><span class="fa fa-envelope-o"></span>Messages</a></li>
								<li class="linked"><a href="#"><span class="fa fa-bell-o"></span>Notifications</a></li>
								<li class="linked"><a href="#"><span class="fa fa-calendar"></span>Tasks/Events</a></li>
								<li class="linked bottom"><a href="logout.php"><span class="fa fa-reply"></span>Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>