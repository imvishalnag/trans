<?php include "php/auth.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>

<body>

	<?php include "include/header.php"; ?>

	<div class="contain">

		<div class="left hidden-xs">
			<?php include "include/sidebar.php"; ?>

		</div>

		<div class="right">

			<?php include "include/right.php"; ?>

			<!-- BEGIN PAGE CONTENT -->
			<div class="content">

				<!-- BREADCRUMBS -->
				<div id="bread" class="col-md-12">
					<div class="crumbs">
						<ol class="breadcrumb">
							<li><i class="fa fa-home"></i> <a href="#">Home</a></li>
							<li class="active">Dashboard</li>
						</ol>
					</div>
				</div>
				<div id="response" class="col-md-12">
					<div class="rep">
						<div style="float:right;" class="hov">
							<div class="btn-group">
								<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"><span class="fa fa-bars"></span> Navigation <span class="caret"></span></button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li class="linked"><a href="index-2.html"><span class="fa fa-dashboard"></span><span class="full">Dashboard</span></a></li>
									<li class="linked"><a href="composition.html"><span class="fa fa-font"></span><span class="full">Composition</span></a></li>
									<li class="linked"><a href="charts.html"><span class="fa fa-bar-chart-o"></span><span class="full">Charts</span></a></li>
									<li class="linked"><a href="widgets.html"><span class="fa fa-list-alt"></span><span class="full">Widgets</span></a></li>
									<li class="linked-head"><span class="icon icon-credit-card"></span>UI Elements</li>
									<li class="linked"><a href="general.html">General</a></li>
									<li class="linked"><a href="buttons.html">Buttons</a></li>
									<li class="linked"><a href="notifications.html">Notifications</a></li>
									<li class="linked top"><a href="icons.html">Icons</a></li>
									<li class="linked-head"><span class="fa fa-pencil-square-o"></span>Forms</li>
									<li class="linked"><a href="form_elements.html">Form Elements</a></li>
									<li class="linked"><a href="form_example.html">Form Examples</a></li>
									<li class="linked top"><a href="form_validation.html">Form Validation</a></li>
									<li class="linked-head"><span class="fa fa-table"></span>Tables</li>
									<li class="linked"><a href="table_static.html"><span class="icon icon-th-large"></span>Static Tables</a></li>
									<li class="linked"><a href="table_datatables.html"><span class="fa fa-table"></span>jQuery Datatables</a></li>
									<li class="linked"><a href="gallery.html"><span class="fa fa-picture-o"></span><span class="full">Gallery</span></a></li>
									<li class="linked"><a href="storyboard.html"><span class="fa fa-tasks"></span><span class="full">Storyboard</span></a></li>
									<li class="linked"><a href="calendar.html"><span class="fa fa-calendar"></span><span class="full">Calendar</span></a></li>
									<li class="linked top"><a href="maps.html"><span class="fa fa-map-marker"></span><span class="full">Maps</span></a></li>
									<li class="linked-head"><span class="fa fa-building-o"></span>Business</li>
									<li class="linked"><a href="pricing.html">Pricing</a></li>
									<li class="linked top"><a href="invoice.html">Invoice</a></li>
									<li class="linked-head"><span class="fa fa-file-o"></span>Pages</li>
									<li class="linked"><a href="login.html">Login</a></li>
									<li class="linked"><a href="support.html">Support</a></li>
									<li class="linked"><a href="grid.html">Grid</a></li>
									<li class="linked"><a href="404.html">404 Error</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>



				<!-- FIRST ROW FLOT CHART & STATS -->
				<div class="tbl">
					<?php
					$emane_videos = null;
					$sql_video_hisab = "SELECT * FROM `video`";
					if ($result = mysqli_query($connect, $sql_video_hisab)) {
						$emane_videos = mysqli_num_rows($result);
					}
					$emane_slider = null;
					$sql_slider_hisab = "SELECT * FROM `slider`";
					if ($result = mysqli_query($connect, $sql_slider_hisab)) {
						$emane_slider = mysqli_num_rows($result);
					}
					$emane_news = null;
					$sql_news_hisab = "SELECT * FROM `news`";
					if ($result = mysqli_query($connect, $sql_news_hisab)) {
						$emane_news = mysqli_num_rows($result);
					}

					?>
					<div class="col-md-4">
						<a href="news_view.php">
							<div class="wdgt wdgt-success">
								<div class="wdgt-body wdgt-stats tbl">
									<div class="col-sm-3"><i class="icon icon-send"></i></div>
									<div class="col-sm-9">
										<div class="stats-val"><?php echo $emane_news; ?></div>
										<div class="stats-title">Total News Updates</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="video.php">
							<div class="wdgt wdgt-primary">
								<div class="wdgt-body wdgt-stats tbl">
									<div class="col-sm-3"><i class="icon icon-facetime-video"></i></div>
									<div class="col-sm-9">
										<div class="stats-val"><?php echo $emane_videos; ?></div>
										<div class="stats-title">Total Youtube Videos</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="slider.php">
							<div class="wdgt wdgt-warning">
								<div class="wdgt-body wdgt-stats tbl">
									<div class="col-sm-3"><i class="icon icon-camera"></i></div>
									<div class="col-sm-9">
										<div class="stats-val"><?php echo $emane_slider; ?></div>
										<div class="stats-title">Total Slider Images</div>
									</div>
								</div>
							</div>
						</a>
					</div>

					<!-- <div class="col-md-12">
						<div class="wdgt wdgt-primary">
							<div class="wdgt-body wdgt-flot">
								<div id="placeholder" class="demo-placeholder" style="height:412px;"></div>
							</div>
						</div>
					</div> -->
				</div>


			</div>
			<!-- END PAGE CONTENT -->

		</div>

	</div>

	<?php include "include/foot.php"; ?>

</body>

</html>