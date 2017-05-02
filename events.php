<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title></title>
	<?php include_once('functions.php'); ?>
    <?php session_start(); ?>
	<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_burec = "localhost";
$database_burec = "burec";
$username_burec = "root";
$password_burec = "";
$burec = mysqli_connect($hostname_burec, $username_burec, $password_burec) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="dashboard.php" class="logo"> <b>BUREC</b></a>
            <!--logo end-->
            
                    
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <!--<li><a class="logout" href="login.html">Log In </a></li> -->           	
                <li><a href="" class="logout" data-toggle="dropdown" >                    
					<!--session start-->
					<?php
                        
                         if(empty($_SESSION['uname'])) {

                        header("location: index.html");

                                } 
                        echo $_SESSION['uname']; 
                        ?>
					<!--end of sessions-->
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
				  
                    <li><a href="#">
					<div data-toggle="modal" data-target="#voke">
					<i class="fa fa-user fa-fw pull-right"></i> Profile
					<div class="clearfix"></div>
						</div>
					</a>
					</li>	          
                    
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                 </ul>
                </li>

                
                  </ul>
                </li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/back.png" class="img-circle" width="140"></a></p>
              	  <h5 class="centered">welcome</h5>
              	  	
                  <li class="mt">
                      <a  href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Users</span>
						  </a>						  
						   <ul class="sub">
						   <li><a  href="dashboard.php">Users</a></li>
                          <li><a  href="logs.php">Logs</a></li>
                          </ul>
						   </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Donation</span>                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">Donate</a></li>
                         
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="events.php" >
                          <i class="fa fa-cogs"></i>
                          <span>Events</span>                      </a>
                     
                  </li>              
                  
                 
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Add Event </h3>
          	
                        
                        <div class="row">
						  <div class="col-lg-6 main-chart">
						  <?php
function GetSQLValueStringg($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO events (`date`, venue, about) VALUES (%s, %s, %s)",
                       GetSQLValueStringg($_POST['date'], "date"),
                       GetSQLValueStringg($_POST['venue'], "text"),
                       GetSQLValueStringg($_POST['about'], "text"));

  mysqli_select_db($burec,$database_burec);
  $Result1 = mysqli_query($burec, $insertSQL) or die(mysql_error());
}
?>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="left">
    <tr valign="baseline">
      <td nowrap align="right">Date Of The Event:</td>
      <td style="padding-bottom:20px; padding-left:5px"><input type="text" name="date" placeholder="yyyy-mm-dd" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Venue Of The Event:</td>
      <td style="padding-bottom:20px; padding-left:5px"><input type="text" name="venue" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Information About The Event:</td>
      <td style="padding-bottom:20px; padding-left:5px"><input type="text" name="about" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" class="btn btn-info btn-block" value="Add Event"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p>&nbsp;</p>
	
					  


						  </div>
						  <div class="col-lg-6 main-chart">
						  <?php
$con=mysqli_connect("localhost","root","","burec");
//////////////////////////////////////////////////////////////
 include("pagination/function.php");
 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 2; //if you want to dispaly 10 records per page then you have to change here
    	$startpoint = ($page * $limit) - $limit;
        $statement = "events order by id asc"; //you have to pass your query over here




//////////////////////////////////////////////////////////////

$sql = "SELECT * FROM events LIMIT {$startpoint} , {$limit}";

$data = mysqli_query($con,$sql)  or die("Error: ".mysqli_error($con));



while ($row = mysqli_fetch_array ($data,MYSQLI_ASSOC)){ 

   
	
	echo "Event Date: ".$row['date'];	
	echo '<br/><br/>';	
    echo "Venue: ".$row['venue'];	
	echo '<br/><br/>';
	echo "Event Information: ".$row['about'];	
	echo '<br/><br/>';
	  
    }
	
?>
<?php
echo "<div id='pagingg' >";
echo pagination($statement,$limit,$page);
echo "</div>";
?>
						  
						  </div>
                      
			</div>
			</section>
	
                
      </section>
		<!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
             &copy; BUREC <script type="text/javascript">
var theDate=new Date()
document.write(theDate.getFullYear())
</script>
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

<!-- /////edit the admin details///////-->
	<div class="modal fade" id="voke" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">EDIT YOUR DETAILS</h4>
        </div>
        <div class="modal-body">
		
		<!--edit details-->
		
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE admin SET pass=%s WHERE uname=%s",
                       GetSQLValueString($_POST['pass'], "text"),
                       GetSQLValueString($_POST['uname'], "text"));

  mysqli_select_db($burec, $database_burec);
  $Result1 = mysqli_query($burec, $updateSQL) or die(mysql_error());
}

mysqli_select_db($burec, $database_burec);
$query_Recordset1 = "SELECT * FROM `admin` where uname= '".$_SESSION['uname']."'";
$Recordset1 = mysqli_query($burec, $query_Recordset1) or die(mysql_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
?>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">User Name:</td>
      <td style="padding-bottom:20px; padding-left:5px"><input type="text" name="uname" value="<?php echo $row_Recordset1['uname']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Password:</td>
      <td style="padding-bottom:20px; padding-left:5px"><input type="password" name="pass" value="<?php echo $row_Recordset1['pass']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" class="btn btn-info btn-block" value="Update record"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1">
  
</form>
<p>&nbsp;</p>

<?php
mysqli_free_result($Recordset1);
?>


		
		<!--end of edit details-->

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
	
  </div>
   
			
			<!-- ////end of edit the admin details/////-->




    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
