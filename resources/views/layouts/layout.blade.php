<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8"/>
	<title>DYNA</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet">
	<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" id="bootstrap-css" rel="stylesheet">
	<link href="{{ asset('plugins/uniform/css/uniform.default.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet">
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
	<link href="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/select2/select2.css') }}"rel="stylesheet" />
	<link href="{{ asset('plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}"rel="stylesheet" />
	<!-- BEGIN PAGE STYLES -->
	<link href="{{ asset('css/tasks.css') }}" rel="stylesheet">
	
	<!-- END PAGE STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/components.css') }}" id="style_components" rel="stylesheet">
	<link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
	<link href="{{ asset('css/layout.css') }}" rel="stylesheet">
	<link href="{{ asset('css/themes/darkblue.css') }}" rel="stylesheet" id="style_color"/>
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
<!-- BEGIN HEADER -->
	<div class="page-header navbar navbar-fixed-top">
		<!-- BEGIN HEADER INNER -->
		<div class="page-header-inner">
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
			</a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="icon-bell"></i>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3><span class="bold">12 pending</span> notifications</h3>
								<a href="javascript:;">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
									<li>
										<a href="javascript:;">
										<span class="time">just now</span>
										<span class="details">
										<span class="label label-sm label-icon label-success">
										<i class="fa fa-plus"></i>
										</span>
										New user registered. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">3 mins</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Server #12 overloaded. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">10 mins</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Server #2 not responding. </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="icon-envelope-open"></i>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3>You have <span class="bold">7 New</span> Messages</h3>
								<a href="javascript:;">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
									<li>
										<a href="#">
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">Just Now </span>
										</span>
										<span class="message">
										Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="#">
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">16 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="#">
										<span class="subject">
										<span class="from">
										Bob Nilson </span>
										<span class="time">2 hrs </span>
										</span>
										<span class="message">
										Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="icon-calendar"></i>
						</a>
						<ul class="dropdown-menu extended tasks">
							<li class="external">
								<h3>You have <span class="bold">12 pending</span> tasks</h3>
								<a href="javascript:;">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">New release v1.2 </span>
										<span class="percent">30%</span>
										</span>
										<span class="progress">
										<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Application deployment</span>
										<span class="percent">65%</span>
										</span>
										<span class="progress">
										<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Web server upgrade</span>
										<span class="percent">58%</span>
										</span>
										<span class="progress">
										<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
										</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="{{ asset('img/avatar3_small.jpg') }}"/>
						<span class="username username-hide-on-mobile">
						{{ Auth::user()->name }} </span>
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="{{ url('/profile') }}">
								<i class="icon-user"></i> My Profile </a>
							</li>
							<li>
								<a href="{{ url('/logout') }}">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
					<!-- END QUICK SIDEBAR TOGGLER -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END HEADER INNER -->
	</div>
	<!-- END HEADER -->
	<div class="clearfix">
	</div>
	<!-- BEGIN CONTAINER -->
	<div class="page-container">

		<div class="page-sidebar-wrapper">
		    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		    <div class="page-sidebar navbar-collapse collapse">
		        <!-- BEGIN SIDEBAR MENU -->
		        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
		        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
		        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
		        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
		        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		        <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
		            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
		            @if ( Auth::user()->type == "Admin")
		            <li class="sidebar-toggler-wrapper">
		                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
		                <div class="sidebar-toggler">
		                </div>
		                <!-- END SIDEBAR TOGGLER BUTTON -->
		            </li>
		            <li>
		                <a href="{{ url('/home') }}">
		                <i class="icon-home"></i>
		                <span class="title">Search Part</span>
		                <span class="selected"></span>
		                </a>
		            </li>
		            <li>
		                <a href="{{ url('/mypartlist') }}">
		                <i class="icon-basket"></i>
		                <span class="title">My Part List</span>
		                </a>
		            </li>
		            <li>
		                <a href="{{ url('/part') }}">
		                <i class="icon-rocket"></i>
		                <span class="title">Part</span>
		                </a>
		            </li>
		            <li>
		                <a href="{{ url('/mysales') }}">
		                <i class="icon-rocket"></i>
		                <span class="title">My Sales</span>
		                </a>
		            </li>
		            <li>
		                <a href="{{ url('/profile') }}">
		                <i class="icon-puzzle"></i>
		                <span class="title">My Profile</span>
		                </a>
		            </li>
		            <li>
		                <a href="{{ url('/settings') }}">
		                <i class="icon-settings"></i>
		                <span class="title">Admin Settings</span>
		                </a>
		            </li>
		            <li>
		                <a href="#">
		                <i class="icon-briefcase"></i>
		                <span class="title">Sales</span>
		                </a>
		            </li>
		            <li>
		                <a href="#">
		                <i class="icon-wallet"></i>
		                <span class="title">Payment</span>
		                </a>
		            </li>
		            <li>
		                <a href="{{ url('/newmail') }}">
		                <i class="icon-bar-chart"></i>
		                <span class="title">News Mail</span>
		                </a>
		            </li>
		            <li>
		                <a href="{{ url('/mail') }}">
		                <i class="icon-docs"></i>
		                <span class="title">Mail</span>
		                </a>
		            </li>
		            @elseif( Auth::user()->type == "User")
		            <li class="sidebar-toggler-wrapper">
		                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
		                <div class="sidebar-toggler">
		                </div>
		                <!-- END SIDEBAR TOGGLER BUTTON -->
		            </li>
		            <li>
		                <a href="{{ url('/home') }}">
		                <i class="icon-home"></i>
		                <span class="title">Search Part</span>
		                <span class="selected"></span>
		                </a>
		            </li>
		            <li>
		                <a href="{{ url('/mypartlist') }}">
		                <i class="icon-basket"></i>
		                <span class="title">My Part List</span>
		                </a>
		            </li>
		            <li>
		                <a href="{{ url('/part') }}">
		                <i class="icon-rocket"></i>
		                <span class="title">Part</span>
		                </a>
		            </li>
		            <li>
		                <a href="{{ url('/mysales') }}">
		                <i class="icon-diamond"></i>
		                <span class="title">My Sales</span>
		                </a>
		            </li>
		            <li>
		                <a href="{{ url('/profile') }}">
		                <i class="icon-puzzle"></i>
		                <span class="title">My Profile</span>
		                </a>
		            </li>
		            @endif
		        </ul>
		        <!-- END SIDEBAR MENU -->
		    </div>
		</div>

		@yield('content')
		<!-- BEGIN QUICK SIDEBAR -->
		<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="page-footer-inner" align="center">
			 2019 &copy; Developed by healer. <a href="javascript:;">Condition: New Copy</a>(PART IS NEVER USED AND NEW AND IS NOT ORIGINAL)<br>
			 New Original(PART IS NEW AND NEVER USED  AND IS ORIGINAL)
		</div>
		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<!--[if lt IE 9]>
	<script src="../../assets/global/plugins/respond.min.js"></script>
	<script src="../../assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
	<script src="{{ asset('plugins/jquery.min.js') }}" type="text/javascript"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<script src="{{ asset('plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="{{ asset('plugins/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/flot/jquery.flot.categories.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/jquery.pulsate.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/bootstrap-daterangepicker/moment.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/ui-datepaginator.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap-datepaginator/bootstrap-datepaginator.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
	<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
	<script src="{{ asset('plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
	<!-- START DATATABLE -->
	<script src="{{ asset('plugins/datatables/media/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/select2.min.js') }}" type="text/javascript"></script>
	<!-- EDIT DATATABLE -->
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="{{ asset('js/metronic.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/layout.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/quick-sidebar.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/demo.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/index.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/tasks.js') }}" type="text/javascript"></script>
	<!-- <script src="{{ asset('js/table-editable.js') }}" type="text/javascript"></script> -->
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
	jQuery(document).ready(function() {   
	   Metronic.init();
	   Layout.init();
	   QuickSidebar.init();
		Demo.init(); // init demo features
	   Index.init();   
	   Index.initDashboardDaterange();
	   // Index.initJQVMAP(); // init index page's custom scripts
	   // Index.initCalendar();
	   Index.initCharts(); 
	   Index.initChat();
	   Index.initMiniCharts();
	   Tasks.initDashboardWidget();
	   UIDatepaginator.init();
	   // TableEditable.init();
	   $(".page-sidebar .page-sidebar-menu > li").click(function(){
	        $(".page-sidebar .page-sidebar-menu > li").removeClass("start active open");
	        $(this).addClass("start active open");
	    });	   
	});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>