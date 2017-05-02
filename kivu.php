<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title></title>
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
                      <a  class="active" href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Users</span>
						  </a>						  
						   <ul class="sub">
						    <li><a  href="dashboard.php">Users</a></li>                          
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
                      <a href="events.php" >
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
          	<h3><i class="fa fa-angle-right"></i> Registered Users </h3>
          	
                        
                        <div class="row">
						  <div class="col-lg-6 main-chart">
						  
<?php
$currentPage = $_SERVER["PHP_SELF"];

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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE registration SET province=%s, dob=%s, proffesion=%s, territory=%s, history=%s, phone=%s, id=%s, nation=%s, `level`=%s, address=%s, userID=%s WHERE place=%s",
                       GetSQLValueStringg($_POST['province'], "text"),
                       GetSQLValueStringg($_POST['dob'], "text"),
                       GetSQLValueStringg($_POST['proffesion'], "text"),
                       GetSQLValueStringg($_POST['territory'], "text"),
                       GetSQLValueStringg($_POST['history'], "text"),
                       GetSQLValueStringg($_POST['phone'], "text"),
                       GetSQLValueStringg($_POST['id'], "text"),
                       GetSQLValueStringg($_POST['nation'], "text"),
                       GetSQLValueStringg($_POST['level'], "text"),
                       GetSQLValueStringg($_POST['address'], "text"),
                       GetSQLValueStringg($_POST['userID'], "int"),
                       GetSQLValueStringg($_POST['place'], "text"));

  mysql_select_db($burec, $database_burec);
  $Result1 = mysqli_query($burec, $updateSQL) or die(mysql_error());
}

$maxRows_Recordset1 = 1;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysqli_select_db($burec, $database_burec);
$query_Recordset1 = "SELECT * FROM registration where province ='kivu'";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysqli_query($burec, $query_limit_Recordset1) or die(mysql_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysqli_query($burec, $query_Recordset1);
  $totalRows_Recordset1 = mysqli_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

$queryString_Recordset1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset1") == false && 
        stristr($param, "totalRows_Recordset1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset1 = sprintf("&totalRows_Recordset1=%d%s", $totalRows_Recordset1, $queryString_Recordset1);
?>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="left">
    <tr valign="baseline">
      <td nowrap align="right">Place:</td>
      <td style="padding-bottom:20px; padding-left:5px"><?php echo $row_Recordset1['place']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Province:</td>
      <td style="padding-bottom:20px; padding-left:5px"><?php echo $row_Recordset1['province']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Dob:</td>
      <td style="padding-bottom:20px; padding-left:5px"><?php echo $row_Recordset1['dob']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Proffesion:</td>
      <td style="padding-bottom:20px; padding-left:5px"><?php echo $row_Recordset1['proffesion']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Territory:</td>
      <td style="padding-bottom:20px; padding-left:5px"><?php echo $row_Recordset1['territory']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">History:</td>
      <td style="padding-bottom:20px; padding-left:5px"><?php echo $row_Recordset1['history']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Phone:</td>
      <td style="padding-bottom:20px; padding-left:5px"><?php echo $row_Recordset1['phone']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Id:</td>
      <td style="padding-bottom:20px; padding-left:5px"><?php echo $row_Recordset1['id']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nation:</td>
      <td style="padding-bottom:20px; padding-left:5px"><?php echo $row_Recordset1['nation']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Level:</td>
      <td style="padding-bottom:20px; padding-left:5px"><?php echo $row_Recordset1['level']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Address:</td>
      <td style="padding-bottom:20px; padding-left:5px"><?php echo $row_Recordset1['address']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">UserID:</td>
      <td style="padding-bottom:20px; padding-left:5px"><?php echo $row_Recordset1['userID']; ?></td>
    </tr>    
  
  </table>
  <table border="0" width="50%" align="center">
    <tr>
      <td width="23%" align="center"><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">First</a>
            <?php } // Show if not first page ?>
      </td>
      <td width="31%" align="center"><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>">Previous</a>
            <?php } // Show if not first page ?>
      </td>
      <td width="23%" align="center"><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">Next</a>
            <?php } // Show if not last page ?>
      </td>
      <td width="23%" align="center"><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>">Last</a>
            <?php } // Show if not last page ?>
      </td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1">
   <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="place" value="<?php echo $row_Recordset1['place']; ?>">
  <input type="hidden" name="province" value="<?php echo $row_Recordset1['province']; ?>">
  <input type="hidden" name="province" value="<?php echo $row_Recordset1['province']; ?>" >
  <input type="hidden" name="dob" value="<?php echo $row_Recordset1['dob']; ?>" >
  <input type="hidden" name="proffesion" value="<?php echo $row_Recordset1['proffesion']; ?>">
  <input type="hidden" name="territory" value="<?php echo $row_Recordset1['territory']; ?>" >
  <input type="hidden" name="history" value="<?php echo $row_Recordset1['history']; ?>">
  <input type="hidden" name="phone" value="<?php echo $row_Recordset1['phone']; ?>">
  <input type="hidden" name="id" value="<?php echo $row_Recordset1['id']; ?>">
  <input type="hidden" name="nation" value="<?php echo $row_Recordset1['nation']; ?>">
  <input type="hidden" name="level" value="<?php echo $row_Recordset1['level']; ?>"> 
  <input type="hidden" name="address" value="<?php echo $row_Recordset1['address']; ?>">  
  <input type="hidden" name="userID" value="<?php echo $row_Recordset1['userID']; ?>">
 
  </p>
</form>
<p>&nbsp;</p>

<?php
mysqli_free_result($Recordset1);
?>
	
						 

						  </div>
						  <div class="col-lg-6 main-chart">
						   <?php
$currentPage = $_SERVER["PHP_SELF"];

function GetSQLValueStri($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
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
  $updateSQL = sprintf("UPDATE tbl_users SET userEmail=%s, userPass=%s WHERE userID=%s",
                       GetSQLValueStri($_POST['userEmail'], "text"),
                       GetSQLValueStri($_POST['userPass'], "text"),
                       GetSQLValueStri($_POST['userID'], "int"));

  mysqli_select_db($burec,$database_burec);
  $Result1 = mysqli_query($burec, $updateSQL) or die(mysql_error());
}

$maxRows_Recordset2 = 1;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysqli_select_db($burec, $database_burec);
$query_Recordset2 = "SELECT * FROM tbl_users where userID='".$row_Recordset1['userID']."'";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysqli_query($burec, $query_limit_Recordset2) or die(mysql_error());
$row_Recordset2 = mysqli_fetch_assoc($Recordset2);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset2'];
} else {
  $all_Recordset2 = mysqli_query($burec, $query_Recordset2);
  $totalRows_Recordset2 = mysqli_num_rows($all_Recordset2);
}
$totalPages_Recordset2 = ceil($totalRows_Recordset2/$maxRows_Recordset2)-1;

$queryString_Recordset2 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2") == false && 
        stristr($param, "totalRows_Recordset2") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2 = sprintf("&totalRows_Recordset2=%d%s", $totalRows_Recordset2, $queryString_Recordset2);
?>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">User ID:</td>
      <td style="padding-bottom:20px; padding-left:5px"><?php echo $row_Recordset2['userID']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">User Email:</td>
      <td style="padding-bottom:20px; padding-left:5px"><input type="text" name="userEmail" value="<?php echo $row_Recordset2['userEmail']; ?>" size="32"></td>
    </tr>
  </table>
  <table border="0" width="50%" align="center">
    <tr>
      <td width="23%" align="center"><?php if ($pageNum_Recordset2 > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_Recordset2=%d%s", $currentPage, 0, $queryString_Recordset2); ?>">First</a>
            <?php } // Show if not first page ?>
      </td>
      <td width="31%" align="center"><?php if ($pageNum_Recordset2 > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_Recordset2=%d%s", $currentPage, max(0, $pageNum_Recordset2 - 1), $queryString_Recordset2); ?>">Previous</a>
            <?php } // Show if not first page ?>
      </td>
      <td width="23%" align="center"><?php if ($pageNum_Recordset2 < $totalPages_Recordset2) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_Recordset2=%d%s", $currentPage, min($totalPages_Recordset2, $pageNum_Recordset2 + 1), $queryString_Recordset2); ?>">Next</a>
            <?php } // Show if not last page ?>
      </td>
      <td width="23%" align="center"><?php if ($pageNum_Recordset2 < $totalPages_Recordset2) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_Recordset2=%d%s", $currentPage, $totalPages_Recordset2, $queryString_Recordset2); ?>">Last</a>
            <?php } // Show if not last page ?>
      </td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="userID" value="<?php echo $row_Recordset2['userID']; ?>">
  </p>
</form>
<p>&nbsp;</p>

<?php
mysqli_free_result($Recordset2);
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
