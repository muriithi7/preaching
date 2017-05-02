
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>church app</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Tell the browser to be responsive to screen width -->


<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    
    $("#btn-view").hide();
    
    $("#btn-add").click(function(){
        $(".content-loader").fadeOut('slow', function()
        {
            $(".content-loader").fadeIn('slow');
            $(".content-loader").load('add_form.php');
            $("#btn-add").hide();
            $("#btn-view").show();
        });
    });
    
    $("#btn-view").click(function(){
        
        $("body").fadeOut('slow', function()
        {
            $("body").load('preaching.php');
            $("body").fadeIn('slow');
            window.location.href="preaching.php";
        });
    });
    
});
</script>





    
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
    <link rel="stylesheet" href="style.css" type="text/css"  />
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>CHURCH APP</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>CHURCH APP</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    
                    <!-- Notifications: style can be found in 
                    <!-- Tasks: style can be found in dropdown.less -->
                    
                    <!-- User Account: style can be found in dropdown.less -->
                   
                    
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="jlogo.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
<!--                    <p>  --><?php //print($userRow['user_email']); ?><!--</p>-->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>church app admin</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>

                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Churches</span>
                        <span class="pull-right-container">
              <i class="#"></i>
            </span>
                    </a>
                  
                </li>
                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Events</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="event.php"><i class="fa fa-circle-o"></i>Event</a></li>
                        
                   
                    </ul>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i>Event Goers</a></li>
                        
                   
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Groups</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>   </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i>Group Members</a></li>
                   
                  
                    </ul>
                </li>
                     <li class="treeview">
                    <a href="prayer.php">
                        <i class="fa fa-edit"></i> <span>Prayers</span>
                        <span class="pull-right-container">
              <i class="#"></i>
            </span>
                    </a>   </a>
                    
                </li>
                     <li class="active treeview">
                    <a href="preaching.php">
                        <i class="fa fa-edit"></i> <span>Preaching</span>
                        <span class="pull-right-container">
              <i class="#"></i>
            </span>
                    </a>   </a>
                    
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Profiles</span>
                        <span class="pull-right-container">
              <i class="#"></i>
            </span>
                    </a>   </a>
                    
                </li>
                 <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Testimonies</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>   </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i>Testimony Likers</a></li>
                   
                  
                    </ul>
                    
                </li>


        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
            <br>

<!-- new event button -->
                 
<p align="right">

                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal" name="btn-update" id="btn-update">NEW PREACHING</button></p>


 <!--end of  new event button-->
         
                    <div class="container">
                          
                            <h2 class="form-signin-heading"></h2><hr />
                           
                            <hr />
                            
                            <div class="content-loader">
                            
                            <table cellspacing="0" id="example" class="table table-bordered table-hover table-responsive">
                            <thead>
                            <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Preached On</th>
                            <th>By</th>
                            <th>Streams</th>
                            <th>Downloads</th> 
                            <th>likes</th>                            
                            <th>Edit</th>
                            <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            include_once 'dbConfig.php';
                            $stmt = $dbh->prepare("SELECT * FROM Preachings ORDER BY preaching_id DESC");
                            $stmt->execute();
                            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                            {
                                ?>
                                <tr>
                                <td><?php echo $row['preaching_id']; ?></td>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['preached_on']; ?></td>
                                <td><?php echo $row['by']; ?></td>
                                <td><?php echo $row['streams']; ?></td>                                
                                <td><?php echo $row['downloads']; ?></td>
                                <td><?php echo $row['likes']; ?></td>
                            
                                <td align="center">
                                <a id="<?php echo $row['preaching_id']; ?>" class="edit-link" href="#" data-toggle="modal" data-target="#cira" title="Edit">
                                <img src="edit.png" width="20px" />
                                </a></td>
                                <td align="center"><a id="<?php echo $row['preaching_id']; ?>" class="delete-link" href="#" title="Delete">
                                <img src="delete.png" width="20px" />
                                </a></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                            </table>
                            
                            </div>

                        </div>
                        
        </section>
<!--modal pop up-->
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">PREACHING DETAILS</h4>
        </div>
        <div class="modal-body">
        <form action='preachingadd.php' method='post' enctype="multipart/form-data">
 
    <table class='table table-bordered table-responsive'>
       
        <tr>
            <td>Title</td>
            <td><input type='file' name='title' class='form-control'  required></td>
        </tr>
 
        <tr>
            <td>Preached On</td>
            <td><input type='text' name='preached' class='form-control'  required></td>
        </tr>
        <tr>
            <td>By</td>
            <td><input type='text' name='by' class='form-control'  required></td>
        </tr>
      <!--  <tr>
            <td>Streams</td>
            <td><input type='text' name='streams' class='form-control'  required></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type='text' name='des' class='form-control'  required></td>
        </tr>
         <tr>
            <td>Time</td>
            <td><input type='text' name='time' class='form-control'  required></td>
        </tr>
        <tr>
            <td>Eposter</td>
            <td><input type='text' name='eposter' class='form-control'  required></td>
        </tr>-->
 
 
    
 
        <tr>
            <td colspan="4">
            <button type="submit" class="btn btn-info btn-block" name="btn-update" id="btn-update">
            ADD
            </button>
            </td>
        </tr>
 
    </table>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
        <!-- end of the pop up input form for the new details -->   
            <!--end of modal pop up-->
<!--modal pop up-->
<!-- Modal -->
  <div class="modal fade" id="cira" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">PREACHING DETAILS</h4>
        </div>
        <div class="modal-body">
        <?php

include 'dbConfig.php';
 
if($_GET['preaching_id'])
{
$id = $_GET['preaching_id']; 
     $stmt=$dbh->prepare("SELECT * FROM preachings WHERE preaching_id=:preaching_id");
    $stmt->execute(array('preaching_id'=>$id)); 
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
}

die($row);

?>
<style type="text/css">
#dis{
    display:none;
}
</style>


    
    
    <div id="dis">
    
    </div>
        
    
     <form method='post' id='emp-UpdateForm' action='' enctype="multipart/form-data">
 
    <table class='table table-bordered table-responsive'>
        <input type='hidden' name='id' value='<?php echo $row['preaching_id']; ?>' />
        <tr>
            <td>Title</td>
            <td><input type='file' name='title' class='form-control' value='<?php echo $row['title']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Preached On</td>
            <td><input type='text' name='preached_on' class='form-control' value='<?php echo $row['preached_on']; ?>' required></td>
        </tr>
        <tr>
            <td>By</td>
            <td><input type='text' name='by' class='form-control' value='<?php echo $row['by']; ?>' required></td>
        </tr>

         
        <tr>
            <td colspan="4">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update" value="btn-update">
            <span class="glyphicon glyphicon-plus"></span>Edit
            </button>
            </td>
        </tr>
 
    </table>
</form>
     

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
        <!-- end of the pop up input form for the new details -->   
            <!--end of modal pop up-->


        <!-- jQuery 2.2.3 -->
        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.6 -->


                <script src="bootstrap/js/bootstrap.min.js"></script>
                <script type="text/javascript" src="assets/datatables.min.js"></script>
                
                <script type="text/javascript" src="crudpreaching.js"></script>

                <script type="text/javascript" charset="utf-8">
                $(document).ready(function() {
                    $('#example').DataTable();

                    $('#example')
                    .removeClass( 'display' )
                    .addClass('table table-bordered');
                });
                </script>






        <!-- <script src="bootstrap/js/bootstrap.min.js"></script>
        Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="plugins/morris/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
</body>
</html>
