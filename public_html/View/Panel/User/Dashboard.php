

<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

	<title>Canvas Admin - Dashboard</title>

	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="author" content="" />		
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    $Adder = new \Model\Repository\MainFunction\AssetsLoader();
    $Adder->Loader("css","Panel/all");
    $Adder->Loader("css","Panel/ie9");
    $Adder->Loader("css","Panel/ie8");
    ?>

</head>

<body>

<div id="wrapper">
	
	<div id="header">
		<h1><a href="Dashboard.php">Canvas Admin</a></h1>
		
		<a href="javascript:;" id="reveal-nav">
			<span class="reveal-bar"></span>
			<span class="reveal-bar"></span>
			<span class="reveal-bar"></span>
		</a>
	</div> <!-- #header -->
	
	<div id="search">
		<form>
			<input type="text" name="search" placeholder="Search..." id="searchField" />
		</form>		
	</div> <!-- #search -->
	
	<div id="sidebar">		
		
		<ul id="mainNav">			
			<li id="navDashboard" class="nav active">
				<span class="icon-home"></span>
				<a href="Dashboard.php">Dashboard</a>
			</li>
						
			<li id="navPages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="javascript:;">Sample Pages</a>				
				
				<ul class="subNav">
					<li><a href="invoice.html">Invoice</a></li>
					<li><a href="support.html">Support</a></li>
					<li><a href="people.html">People Directory</a></li>
					<li><a href="calendar.html">Calendar</a></li>
					<li><a href="stream.html">Stream</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="reports.html">Reports</a></li>
				</ul>						
				
			</li>	
			
			<li id="navForms" class="nav">
				<span class="icon-article"></span>
				<a href="javascript:;">Form Elements</a>
				
				<ul class="subNav">
					<li><a href="forms.html">Layouts & Elements</a></li>
					<li><a href="forms-validations.html">Validations</a></li>					
				</ul>	
								
			</li>
			
			<li id="navType" class="nav">
				<span class="icon-info"></span>
				<a href="typography.html">Typography</a>	
			</li>
			
			<li id="navGrid" class="nav">
				<span class="icon-layers"></span>
				<a href="grids.html">Grid Layout</a>	
			</li>
			
			<li id="navTables" class="nav">
				<span class="icon-list"></span>
				<a href="tables.html">Tables</a>	
			</li>
			
			<li id="navButtons" class="nav">
				<span class="icon-compass"></span>
				<a href="buttons.html">Buttons & Icons</a>	
			</li>
			
			<li id="navInterface" class="nav">
				<span class="icon-equalizer"></span>
				<a href="interface.html">Interface Elements</a>	
			</li>
			
			<li id="navCharts" class="nav">
				<span class="icon-chart"></span>
				<a href="charts.html">Charts & Graphs</a>
			</li>
			
			<li id="navMaps" class="nav">
				<span class="icon-map-pin-fill"></span>
				<a href="maps.html">Map Elements</a>
			</li>	
			
			<li class="nav">
				<span class="icon-denied"></span>
				<a href="javascript:;">Error Pages</a>
				
				<ul class="subNav">
					<li><a href="error-401.html">401 Page</a></li>
					<li><a href="error-403.html">403 Page</a></li>
					<li><a href="error-404.html">404 Page</a></li>	
					<li><a href="error-500.html">500 Page</a></li>	
					<li><a href="error-503.html">503 Page</a></li>					
				</ul>	
			</li>
		</ul>
				
	</div> <!-- #sidebar -->
	
	<div id="content">		
		
		<div id="contentHeader">
			<h1>Dashboard</h1>
		</div> <!-- #contentHeader -->	
		
		<div class="container">
			
			
			<div class="grid-17">
				
				<div class="widget widget-plain">
					
					<div class="widget-content">
				
						<h2 class="dashboard_title">
							Weekly Sales Stats
							<span>For the week of Jun 15 - Jun 22, 2011</span>
						</h2>				
						
						<div class="dashboard_report first activeState">
							<div class="pad">
								<span class="value">786</span> Completed Sales
							</div> <!-- .pad -->
						</div>
						
						<div class="dashboard_report defaultState">
							<div class="pad">
								<span class="value">347</span> Pending Sales
							</div> <!-- .pad -->
						</div>
						
						<div class="dashboard_report defaultState">
							<div class="pad">
								<span class="value">118</span> Returned Items
							</div> <!-- .pad -->
						</div>
						
						<div class="dashboard_report defaultState last">
							<div class="pad">
								<span class="value">45</span> Chargebacks
							</div> <!-- .pad -->
						</div>
						
					</div> <!-- .widget-content -->
					
				</div> <!-- .widget -->
				
				
				
				
				
				
				
				
				
				<div class="widget widget-tabs">
					
					<div class="widget-header">
						<span class="icon-chart"></span>
						<h3 class="">Charts</h3>	
						
						<ul class="tabs right">	
							<li class="active"><a href="#yearly">Yearly</a></li>	
							<li class=""><a href="#monthly">Monthly</a></li>					
							<li class=""><a href="#weekly">Weekly</a></li>
						</ul>					
					</div>
					
					<div id="yearly" class="widget-content">
						<table class="stats" data-chart-type="bar" data-chart-colors="">
							<caption>2009/2010 Sales by industry (Million)</caption>
							<thead>
									<tr>
										<td>&nbsp;</td>
										<th>Week 18</th>
										<th>Week 19</th>
										<th>Week 20</th>
										<th>Week 21</th>
										<th>Week 22</th>
										<th>Week 23</th>
										<th>Week 24</th>
									</tr>
		
								</thead>
								
								<tbody>
									
									<tr>
										<th>Year 2009</th>
										<td>492</td>
										<td>478</td>
										<td>507</td>
										<td>518</td>
										<td>505</td>
										<td>536</td>
										<td>561</td>
									</tr>	
									
									<tr>
										<th>Year 2010</th>
										<td>586</td>
										<td>652</td>
										<td>610</td>
										<td>658</td>
										<td>689</td>
										<td>674</td>
										<td>679</td>
									</tr>	
									
									<tr>
										<th>Year 2011</th>
										<td>689</td>
										<td>732</td>
										<td>845</td>
										<td>786</td>
										<td>815</td>
										<td>859</td>
										<td>907</td>
									</tr>														
								</tbody>
						</table>
					</div> <!-- .widget-content -->
					
					<div id="monthly" class="widget-content">
						
						<h3>Monthly Content</h3>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						
					</div> <!-- .widget-content -->
					
					<div id="weekly" class="widget-content">
						
						<h3>Weekly Content</h3>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						
					</div> <!-- .widget-content -->
					
				</div> <!-- .widget -->
				
				
				
				
				
				
				
				<div class="widget widget-table">
					
					<div class="widget-header">
						<span class="icon-list"></span>
						<h3 class="icon aperture">Tables</h3>
					</div> <!-- .widget-header -->
					
					<div class="widget-content">
						<table class="table table-bordered table-striped data-table">
						<thead>
							<tr>
								<th>Rendering engine</th>
								<th>Browser</th>
								<th>Platform(s)</th>
								<th>Engine version</th>
							</tr>
						</thead>
						<tbody>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.5</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.5</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.6</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.6</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.7</td>
								<td>Win 98+ / OSX.1+</td>
								<td class="center">1.7</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.8</td>
								<td>Win 98+ / OSX.1+</td>
								<td class="center">1.8</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Seamonkey 1.1</td>
								<td>Win 98+ / OSX.2+</td>
								<td class="center">1.8</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Epiphany 2.20</td>
								<td>Gnome</td>
								<td class="center">1.8</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 1.2</td>
								<td>OSX.3</td>
								<td class="center">125.5</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 1.3</td>
								<td>OSX.3</td>
								<td class="center">312.8</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 2.0</td>
								<td>OSX.4+</td>
								<td class="center">419.3</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 3.0</td>
								<td>OSX.4+</td>
								<td class="center">522.1</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.5</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.5</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.6</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.6</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.7</td>
								<td>Win 98+ / OSX.1+</td>
								<td class="center">1.7</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.8</td>
								<td>Win 98+ / OSX.1+</td>
								<td class="center">1.8</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Seamonkey 1.1</td>
								<td>Win 98+ / OSX.2+</td>
								<td class="center">1.8</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Epiphany 2.20</td>
								<td>Gnome</td>
								<td class="center">1.8</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 1.2</td>
								<td>OSX.3</td>
								<td class="center">125.5</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 1.3</td>
								<td>OSX.3</td>
								<td class="center">312.8</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 2.0</td>
								<td>OSX.4+</td>
								<td class="center">419.3</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 3.0</td>
								<td>OSX.4+</td>
								<td class="center">522.1</td>
							</tr>	
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.5</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.5</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.6</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.6</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.7</td>
								<td>Win 98+ / OSX.1+</td>
								<td class="center">1.7</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.8</td>
								<td>Win 98+ / OSX.1+</td>
								<td class="center">1.8</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Seamonkey 1.1</td>
								<td>Win 98+ / OSX.2+</td>
								<td class="center">1.8</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Epiphany 2.20</td>
								<td>Gnome</td>
								<td class="center">1.8</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 1.2</td>
								<td>OSX.3</td>
								<td class="center">125.5</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 1.3</td>
								<td>OSX.3</td>
								<td class="center">312.8</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 2.0</td>
								<td>OSX.4+</td>
								<td class="center">419.3</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 3.0</td>
								<td>OSX.4+</td>
								<td class="center">522.1</td>
							</tr>	
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.5</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.5</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.6</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.6</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.7</td>
								<td>Win 98+ / OSX.1+</td>
								<td class="center">1.7</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Mozilla 1.8</td>
								<td>Win 98+ / OSX.1+</td>
								<td class="center">1.8</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Seamonkey 1.1</td>
								<td>Win 98+ / OSX.2+</td>
								<td class="center">1.8</td>
							</tr>
							<tr class="gradeA">
								<td>Gecko</td>
								<td>Epiphany 2.20</td>
								<td>Gnome</td>
								<td class="center">1.8</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 1.2</td>
								<td>OSX.3</td>
								<td class="center">125.5</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 1.3</td>
								<td>OSX.3</td>
								<td class="center">312.8</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 2.0</td>
								<td>OSX.4+</td>
								<td class="center">419.3</td>
							</tr>
							<tr class="gradeA">
								<td>Webkit</td>
								<td>Safari 3.0</td>
								<td>OSX.4+</td>
								<td class="center">522.1</td>
							</tr>															
						</tbody>
					</table>	

						
					</div> <!-- .widget-content -->
					
				</div> <!-- .widget -->	
				
				
				
				
				
				
				<div class="widget">
					
					<div class="widget-header">
						<span class="icon-article"></span>
						<h3 class="icon compass">Forms</h3>					
					</div>
					
					<div class="widget-content">
						
						<form id="sampleForm" class="form uniformForm validateForm">					
						
							<fieldset>
								
								<div class="field-group">
									<label>Name:</label>
				
									<div class="field">
										<input type="text" name="fname" id="fname" size="10" class="" />			
										<label for="fname">First</label>
									</div>
									<div class="field">
										<input type="text" name="mname" id="mname" size="1" />			
										<label for="mname">Mi</label>
									</div>
									<div class="field">
										<input type="text" name="lname" id="lname" size="12" class="" />			
										<label for="lname">Last</label>
									</div>
								</div> <!-- .field-group -->
								
								<div class="field-group">
									
									<label for="email">Email</label>
									
									<div class="field">
										<input type="text" name="email" id="email" size="36" />
										
									</div> <!-- .field -->
									
								</div> <!-- .field-group -->
				
								<div class="field-group">
									<label>Phone Number:</label>
				
									<div class="field">
										<input type="text" name="phone1" id="phone1" size="3" />
										<label for="phone1">702</label>
									</div>
				
									<div class="field">
										<input type="text" name="phone2" id="phone2" size="3" />
										<label for="phone2">555</label>
									</div>
				
									<div class="field">
										<input type="text" name="phone3" id="phone3" size="4" />
										<label for="phone3">6666</label>
									</div>
								</div> <!-- .field-group -->
								
								<div class="field-group control-group inline">	
									<label>Checkbox:</label>
			
									<div class="field">
										<input type="checkbox" name="checkbox" id="checkbox1" value="1" />
										<label for="checkbox1">Checkbox 1</label>
									</div>
			
									<div class="field">
										<input type="checkbox" name="checkbox" id="checkbox2" value="2" />
										<label for="checkbox2">Checkbox 2</label>
									</div>
			
									<div class="field">
										<input type="checkbox" name="checkbox" id="checkbox3" value="3" />
										<label for="checkbox3">Checkbox 3</label>
									</div>		
								</div> <!-- .field-group -->
								
								<div class="field-group control-group inline">	
									<label>Radio</label>	
			
									<div class="field">
										<input type="radio" name="radio" id="radio1" value="1" />
										<label for="radio1">Radio 1</label>
									</div>
			
									<div class="field">
										<input type="radio" name="radio" id="radio2" value="2" />
										<label for="radio2">Radio 2</label>
									</div>
			
									<div class="field">
										<input type="radio" name="radio" id="radio3" value="3" />
										<label for="radio3">Radio 3</label>
									</div>		
								</div>	 <!-- .field-group -->
				
								<div class="field-group">		
									<label>Message:</label>
				
									<div class="field">
										<textarea name="message" id="message" rows="5" cols="50"></textarea>
									</div>		
								</div> <!-- .field-group -->
							</fieldset>
							
							<div class="actions">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						
						</form>
						
						
						
					</div> <!-- .widget-content -->
					
				</div> <!-- .widget -->
				
				
				
				
			</div> <!-- .grid -->			
			
			
			
			<div class="grid-7">
				
				
				
				<div id="gettingStarted" class="box">
					<h3>Getting Started</h3>

					<p>Completing your bio will bring you to 58%.</p>

					<div class="progress-bar secondary">
						<div class="bar" style="width: 42%;">42%</div>
					</div>

					<ul class="bullet secondary">
						<li><a href="javascript:;">Complete Your Profile</a></li>
						<li><a href="javascript:;">Add Your Photo</a></li>
						<li><a href="javascript:;">Create Reports</a></li>
						<li><a href="javascript:;">Invite Peoople to Join</a></li>
					</ul>
				</div>
				
				
				
				
				<div class="box plain">
					
					<a href="javascript:;" class="btn btn-primary btn-large dashboard_add">Add A Session</a>
					<a href="javascript:;" class="btn btn-tertiary btn-large dashboard_add">Add A Client</a>
					<a href="javascript:;" class="btn btn-quaternary btn-large dashboard_add">Send Invoices</a>
					
				</div>
				
				
				
				<div class="box">
					<h3>Progress Bars</h3>
					
					<div class="progress-bar primary">
						<div class="bar" style="width: 65%;">65%</div>
					</div>
					
					<div class="progress-bar secondary">
						<div class="bar" style="width: 42%;">42%</div>
					</div>
					
					<div class="progress-bar tertiary thin">
						<div class="bar" style="width: 83%;">83%</div>
					</div>
					
					<div class="progress-bar quaternary thin">
						<div class="bar" style="width: 93%;">93%</div>
					</div>
				</div>
				
				
				<div class="box">
					<h3>Recent Activity</h3>
					<ul class="bullet secondary">
						<li>Lorem ipsum dolor sit amet</li>
						<li>Quisque ornare ultricies lectus, quis aliquet lorem malesuada ac.</li>
						<li>Vivamus hendrerit malesuada elit</li>
						<li>Maecenas venenatis ante ut mi</li>
					</ul>
					
					<ul class="bullet primary">
						<li>Maecenas venenatis ante ut mi</li>
						<li>Praesent ac elit neque, sed faucibus eros.</li>
						<li>Vivamus hendrerit malesuada elit</li>
					</ul>
				</div> <!-- .box -->
				
			</div> <!-- .grid -->
			
		</div> <!-- .container -->
		
	</div> <!-- #content -->
	
	<div id="topNav">
		 <ul>
		 	<li>
		 		<a href="#menuProfile" class="menu">John Doe</a>
		 		
		 		<div id="menuProfile" class="menu-container menu-dropdown">
					<div class="menu-content">
						<ul class="">
							<li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;">Edit Settings</a></li>
							<li><a href="javascript:;">Suspend Account</a></li>
						</ul>
					</div>
				</div>
	 		</li>
		 	<li><a href="javascript:;">Upgrade</a></li>
		 	<li><a href="index.html">Logout</a></li>
		 </ul>
	</div> <!-- #topNav -->
	
	<div id="quickNav">
		<ul>
			<li class="quickNavMail">
				<a href="#menuAmpersand" class="menu"><span class="icon-book"></span></a>		
				
				<span class="alert">3</span>		

				<div id="menuAmpersand" class="menu-container quickNavConfirm">
					<div class="menu-content cf">							
						
						<div class="qnc qnc_confirm">
							
							<h3>Confirm</h3>
					
							<div class="qnc_item">
								<div class="qnc_content">
									<span class="qnc_title">Confirm #1</span>
									<span class="qnc_preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</span>
									<span class="qnc_time">3 hours ago</span>
								</div> <!-- .qnc_content -->
								
								<div class="qnc_actions">						
									<button class="btn btn-primary btn-small">Accept</button>
									<button class="btn btn-quaternary btn-small">Not Now</button>
								</div>
							</div>
							
							<div class="qnc_item">
								<div class="qnc_content">
									<span class="qnc_title">Confirm #2</span>
									<span class="qnc_preview">Duis aute irure dolor in henderit in voluptate velit esse cillum dolore.</span>
									<span class="qnc_time">3 hours ago</span>
								</div> <!-- .qnc_content -->
								
								<div class="qnc_actions">						
									<button class="btn btn-primary btn-small">Accept</button>
									<button class="btn btn-quaternary btn-small">Not Now</button>
								</div>
							</div>
							
							<div class="qnc_item">
								<div class="qnc_content">
									<span class="qnc_title">Confirm #3</span>
									<span class="qnc_preview">Duis aute irure dolor in henderit in voluptate velit esse cillum dolore.</span>
									<span class="qnc_time">3 hours ago</span>
								</div> <!-- .qnc_content -->
								
								<div class="qnc_actions">						
									<button class="btn btn-primary btn-small">Accept</button>
									<button class="btn btn-quaternary btn-small">Not Now</button>
								</div>
							</div>
							
							<a href="javascript:;" class="qnc_more">View all Confirmations</a>
															
						</div> <!-- .qnc -->	
					</div>
				</div>
			</li>
			<li class="quickNavNotification">
				<a href="#menuPie" class="menu"><span class="icon-chat"></span></a>
				
				<div id="menuPie" class="menu-container">
					<div class="menu-content cf">					
						
						<div class="qnc">
							
							<h3>Notifications</h3>
					
							<a href="javascript:;" class="qnc_item">
								<div class="qnc_content">
									<span class="qnc_title">Notification #1</span>
									<span class="qnc_preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</span>
									<span class="qnc_time">3 hours ago</span>
								</div> <!-- .qnc_content -->
							</a>
							
							<a href="javascript:;" class="qnc_item">
								<div class="qnc_content">
									<span class="qnc_title">Notification #2</span>
									<span class="qnc_preview">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</span>
									<span class="qnc_time">3 hours ago</span>
								</div> <!-- .qnc_content -->
							</a>
							
							<a href="javascript:;" class="qnc_more">View all Confirmations</a>
							
						</div> <!-- .qnc -->
					</div>
				</div>				
			</li>
		</ul>		
	</div> <!-- .quickNav -->
	
	
</div> <!-- #wrapper -->

<div id="footer">
	Copyright &copy; 2012, MadeByAmp Themes.
</div>

<script src="javascripts/all.js"></script>

</body>

</html>