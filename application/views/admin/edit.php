<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="_token" content="bk8KFk5gHgLLqdIxyxEblc6ExaBQVRDq5MJWd5Xs"/>
    <title>Admin Panel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href='<?php echo base_url("css/bootstrap.min.css"); ?>'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href='<?php echo base_url("css/dataTables.bootstrap.css"); ?>'>
    <!-- Theme style -->
    <link rel="stylesheet" href='<?php echo base_url("css/AdminLTE.min.css"); ?>'>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href='<?php echo base_url("css/_all-skins.min.css"); ?>'>
   <link rel="stylesheet" href='<?php echo base_url("css/custom.css"); ?>'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
<header class="main-header">
            <!-- Logo -->
        <a href="dashboard" class="logo" style="height:75px;background-color:#222d32">
         
         DemoTest
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="margin-top:14px;">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a> 
          <div class="navbar-custom-menu" style="margin-top:14px;">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
             
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">0</span>
                </a>
             
                <ul class="dropdown-menu">
                  <li class="header">You have 0 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                       
                      <li>
                        <a href="register-member-list">
                          <i class="fa fa-users text-aqua"></i> 0 new members joined today
                        </a>
                      </li>
                      
                        <li>
                        <a href="deactivated-member-list">
                          <i class="fa fa-warning text-yellow"></i> 0 members deactivated today
                        </a>
                      </li>
                        
                         <li>
                        <a href="deleted-member-list">
                          <i class="fa fa-users text-red"></i> 0 members deleted profile today
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!--<li class="footer"><a href="#">View all</a></li>-->
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
            
                
                           <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src='<?php echo base_url("images/default_profile.jpg"); ?>' class="user-image" alt="User Image">
                  <span class="hidden-xs">admin   </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src='<?php echo base_url("images/default_profile.jpg"); ?>' class="img-circle" alt="User Image">
                    <p>
                    admin                         
                    </p>
                  </li>
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="<?php echo base_url('admin/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
             
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->

          <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->

        <section class="sidebar">
    
          <!-- Sidebar user panel -->

          <div class="user-panel" style="margin-top: 20px;">

            <div class="pull-left image">

              <img src='<?php echo base_url("images/default_profile.jpg"); ?>' class="img-circle" alt="User Image">

            </div>

            <div class="pull-left info">

              <p>admin</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

            </div>

          </div>

          <!-- search form -->

          

          <!-- /.search form -->

          <!-- sidebar menu: : style can be found in sidebar.less -->

          <ul class="sidebar-menu">

            <li class="header">MAIN NAVIGATION</li>
     
            <li class="treeview">

              <a href="#">

                <i class="fa fa-user"></i> <span>User Management</span> <i class="fa fa-angle-left pull-right"></i>

              </a>

              <ul class="treeview-menu">

                <li><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-circle-o"></i> All Users List</a></li>
                  
              </ul>

            </li>

              <li class="treeview">

              <a href="#">

                <i class="fa fa-key"></i>

                <span>Change Password</span>

                <i class="fa fa-angle-left pull-right"></i>

              </a>

              <ul class="treeview-menu">

                  
                <li><a href=""><i class="fa fa-circle-o"></i> Change Password</a></li>
 

              </ul>

            </li> 

              <li class="treeview">

              <a href="#">

                <i class="fa fa-wrench fa-fw"></i> <span>Settings</span>

                <i class="fa fa-angle-left pull-right"></i>

              </a>

              <ul class="treeview-menu">

     
                <li><a href=""><i class="fa fa-circle-o"></i> Settings</a></li>  

              </ul>

            </li>    

          </ul>

        </section>

        <!-- /.sidebar -->

      </aside>

      <!-- Content Wrapper. Contains page content -->

      <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

          <h1>

            Edit User Details
          </h1>

          <ol class="breadcrumb">

            <li><a href="http://devephphatha.com/matrimony/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

            <li class="active">Edit User Details</li>

          </ol>

        </section>



        <!-- Main content -->

        <section class="content">

          <!-- Info boxes -->

     <div class="row"><div class="col-sm-6">
<form id="update-form" action="<?php echo base_url('admin/update'); ?>" method="post" role="form">
<div class="alert-danger" style="padding-left:5px;"><?php echo validation_errors(); ?></div>
<div class="alert-success" style="padding-left:5px;"><?php if ($this->session->flashdata('success') != ''): 
    echo $this->session->flashdata('success'); 
endif; ?> </div>
<input type="hidden" name="id" class="form-control" placeholder="Name" value="<?php echo $id; ?>" required>
                  <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="<?php echo $name; ?>" required>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" value="<?php echo $email; ?>" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="mobile" id="mobile" tabindex="1" class="form-control" placeholder="Mobile Number" value="<?php echo $mobile; ?>" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="address" id="address" tabindex="2" class="form-control" placeholder="Address" value="<?php echo $address; ?>" required>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Update">
                      </div>
                    </div>
                  </div>
              </form>

     </div></div>

            

              </div><!-- /.info-box -->

            </div><!-- /.col -->

          </div><!-- /.row -->



          <!-- Main row -->


              </div><!-- /.row -->


            </div><!-- /.col -->

            </div><!-- /.col -->

          </div><!-- /.row -->

        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->



       <footer class="main-footer">
        <div class="pull-right hidden-xs">
        
        </div>
        <strong>© 2017 DemoTest.
      </footer>




      <!-- Control Sidebar -->

      <!-- /.control-sidebar -->

      <!-- Add the sidebar's background. This div must be placed

           immediately after the control sidebar -->

      <div class="control-sidebar-bg"></div>



    </div><!-- ./wrapper -->



 <!-- jQuery 2.1.4 -->

    <script src='<?php echo base_url("js/jQuery-2.1.4.min.js"); ?>'></script>

    <!-- Bootstrap 3.3.5 -->

    <script src='<?php echo base_url("js/bootstrap.min.js"); ?>'></script>

    <!-- FastClick -->

    <script src='<?php echo base_url("js/fastclick.min.js"); ?>'></script>

    <!-- AdminLTE App -->

    <script src='<?php echo base_url("js/app.min.js"); ?>'></script>



    <!-- Sparkline -->

    <script src='<?php echo base_url("js/jquery.sparkline.min.js"); ?>'></script>

    <!-- jvectormap -->

    <script src='<?php echo base_url("js/jquery-jvectormap-1.2.2.min.js"); ?>'></script>

    <script src='<?php echo base_url("js/jquery-jvectormap-world-mill-en.js"); ?>'></script>

    <!-- SlimScroll 1.3.0 -->

    <script src="<?php echo base_url("js/jquery.slimscroll.min.js"); ?>"></script>

    <!-- ChartJS 1.0.1 -->

    <script src='<?php echo base_url("js/Chart.min.js"); ?>'></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

    <script src='<?php echo base_url("js/dashboard2.js"); ?>'></script>

    <!-- AdminLTE for demo purposes -->

    <script src='<?php echo base_url("js/demo.js"); ?>'></script>
<script type="text/javascript">
function deleteData(id)
{
if(confirm("Are you sure?")==true)
{
  window.location="<?php echo base_url('admin/deletedata'); ?>/"+id;
}else
{
}
}
</script>
  </body>

</html>