<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Superieur Admin - Dashboard</title>
    
	<!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="{{ asset('../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- Data Table-->
  <link rel="stylesheet" type="text/css" href="{{ asset('../../assets/vendor_components/datatable/datatables.min.css') }}"/>
  

  
  <!-- Bootstrap extend-->
  <link rel="stylesheet" href="{{ asset('../css/bootstrap-extend.css') }}">
  
  <!-- daterange picker --> 
  <link rel="stylesheet" href="{{ asset('../../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  
  <!-- bootstrap datepicker --> 
  <link rel="stylesheet" href="{{ asset('../../assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('../../assets/vendor_plugins/iCheck/all.css') }}">
  
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('../../assets/vendor_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
  
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('../../assets/vendor_plugins/timepicker/bootstrap-timepicker.min.css') }}">
  
  <!-- Bootstrap select -->
  <link rel="stylesheet" href="{{ asset('../../assets/vendor_components/bootstrap-select/dist/css/bootstrap-select.css') }}">
  
  <!-- Bootstrap tagsinput -->
  <link rel="stylesheet" href="{{ asset('../../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
  
  <!-- Bootstrap touchspin -->
  <link rel="stylesheet" href="{{ asset('../../assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}">
  
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('../../assets/vendor_components/select2/dist/css/select2.min.css') }}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('../css/master_style.css') }}">

  <!-- Superieur Admin skins -->
  <link rel="stylesheet" href="{{ asset('../css/skins/_all-skins.css') }}">








	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

     
  </head>

<body class="hold-transition skin-info-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo -->
	  <div class="logo-mini">
		  <span class="light-logo"><img src="../images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="../images/logo-dark.png" alt="logo"></span>
	  </div>
      <!-- logo-->
      <div class="logo-lg">
		  <span class="light-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
	  	  <span class="dark-logo"><img src="../images/logo-dark-text.png" alt="logo"></span>
	  </div>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div>
		  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		  </a>
	  </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  
		  <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
			</form>
          </li>	
		  <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../images/avatar/7.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu animated flipInY">
              <!-- User image -->
              <li class="user-header bg-img" style="background-image: url(../images/user-info.jpg)" data-overlay="3">
				  <div class="flexbox align-self-center">					  
				  	<img src="../images/avatar/7.jpg" class="float-left rounded-circle" alt="User Image">					  
					<h4 class="user-name align-self-center">
					  <span>Samuel Brus</span>
					  <small>samuel@gmail.com</small>
					</h4>
				  </div>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
				    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
					 
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i> Logout</a>
					<div class="dropdown-divider"></div>
					<div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a></div>
              </li>
            </ul>
          </li>		
		  
         
                <!-- inner menu: contains the actual data -->
             
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="user-profile treeview">
          <a href="index.html">
			<img src="../images/avatar/7.jpg" alt="user">
              <span>
				<span class="d-block font-weight-600 font-size-16">Samuel Brus</span>
				<span class="email-id">0601010202</span>
			  </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
     
		
			<li><a href="javascript:void()"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
          </ul>
        </li>
        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>L'essentiel</li>
		
		<li >
          <a href="#a">
            <i class="mdi mdi-view-dashboard"></i>

            <span>Bureau</span>
          
          </a>
    
        </li>  
		
        <li class="treeview">
          <a href="#a">
            <i class="mdi mdi-content-copy"></i>
            <span>Biens</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout_boxed.html"><i class="mdi mdi-toggle-switch-off"></i>Biens</a></li>
            <li><a href="pages/layout_fixed.html"><i class="mdi mdi-toggle-switch-off"></i>Immeubles</a></li>
          
          </ul>
        </li>  
		

    <li >
          <a href="#a">
            <i class="mdi mdi-view-dashboard"></i>

            <span>Locataires</span>
          
          </a>
    
        </li>  




    <li >
          <a href="#a">
            <i class="mdi mdi-view-dashboard"></i>

            <span>Réservations</span>
          
          </a>
    
        </li>  


       <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>LE PLUS</li>
		  
		
       
		  
      
		  
	 
		  

        
      </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->	  
  <main class="py-4">
            @yield('content')
  </main>

    <!-- Main content -->
   
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  
 <a href="https://www.aa.com/">MEHDI 060934495</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
	  
	<div class="rpanel-title"><span class="btn pull-right"><i class="ion ion-close" data-toggle="control-sidebar"></i></span> </div>  
    <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab">Tasks</a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">General</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-danger"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-warning"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-info"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-success"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development 
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="report_panel" class="chk-col-grey" >
			<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

            <p>
              general settings information
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="allow_mail" class="chk-col-grey" >
			<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="expose_author" class="chk-col-grey" >
			<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="show_me_online" class="chk-col-grey" >
			<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="off_notifications" class="chk-col-grey" >
			<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">              
              <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
              Delete chat history
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	  
	
  <!-- jQuery 3 -->
  <script src="{{ asset('../../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>
  
  <!-- popper -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <!-- Bootstrap 4.1-->
  <script src="{{ asset('../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  
  <!-- Bootstrap Select -->
  <script src="{{ asset('../../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
  
  <!-- Bootstrap tagsinput -->
  <script src="{{ asset('../../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js') }}"></script>
  
  <!-- Bootstrap touchspin -->
  <script src="{{ asset('../../assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
  
  <!-- Select2 -->
  <script src="{{ asset('../../assets/vendor_components/select2/dist/js/select2.full.js') }}"></script>

  
  <!-- InputMask -->
  <script src="{{ asset('../../assets/vendor_plugins/input-mask/jquery.inputmask.js') }}"></script>
  <script src="{{ asset('../../assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>


  <script src="{{ asset('../../assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
  
  <!-- date-range-picker -->
  <script src="{{ asset('../../assets/vendor_components/moment/min/moment.min.js') }}"></script>
  <script src="{{ asset('../../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  
  <!-- bootstrap datepicker -->
  <script src="{{ asset('../../assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}"></script>
  
  <!-- bootstrap color picker -->
  <script src="{{ asset('../../assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
  
  <!-- bootstrap time picker -->
  <script src="{{ asset('../../assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
  

  
  <!-- SlimScroll -->
  <script src="{{ asset('../../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
  
  <!-- iCheck 1.0.1 -->
  <script src="{{ asset('../../assets/vendor_plugins/iCheck/icheck.min.js') }}"></script>
  
  <!-- FastClick -->
  <script src="{{ asset('../../assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>
  
  <!-- Superieur Admin App -->
  <script src="{{ asset('../js/template.js') }}"></script>
  
  <!-- Superieur Admin for demo purposes -->
  <script src="{{ asset('../js/demo.js') }}"></script>
  
  <!-- Superieur Admin for advanced form element -->
  <script src="{{ asset('../js/pages/advanced-form-element.js') }}"></script>


  <!-- This is data table -->

       <script src="../../assets/vendor_components/datatable/datatables.min.js"></script>

  <!-- Superieur Admin for Data Table -->
  <script src=".{{ asset('./js/pages/data-table.js') }}"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js"></script>




</body>
</html>
