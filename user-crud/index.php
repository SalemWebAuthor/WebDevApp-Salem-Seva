<?php
/* include the class file (global - within application) */
include_once 'class/class.admin.php';
include 'config/config.php';

$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$admin = new Admin();
if(!$admin->get_session()){
	header("location: login.php");
}
$adminpass = $admin->get_fname($_SESSION['adm_username']);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dormitory Reservation Homepage</title>
		<link rel="stylesheet" href="css/style.css?<?php echo time();?>">
	</head>
	<body>
		<div id="header">
			<h1>Dormitory Reservation System</h1>
		</div>
		<div id="navbar">
			<a href="index.php">Home</a>
			<a href="index.php?page=reserve">Reservation</a>
			<a href="index.php?page=customers">Customers</a>
			<a href="index.php?page=rooms">Rooms</a>
			<a href="index.php?page=admins">Admins</a>
			<a href="logout.php">Logout</a>
		</div>
		<div id="content">
			<?php
      switch($page){
                case 'reserve':
                    require_once 'reserve-module/index.php';
                break; 
                case 'customers':
                    require_once 'customers-module/index.php';
                break; 
                case 'rooms':
                    require_once 'room-module/index.php';
                break;
				case 'admins':
                    require_once 'admin-module/index.php';
                break; 
                default:
                    require_once 'index.php';
                break; 
            }
    ?>
		</div>

	</body>
</html>