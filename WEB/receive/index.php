<?php
include_once 'class/c_product.php';
include_once 'class/c_inventory.php';
include_once 'class/c_receive.php';
include_once 'class/c_release.php';
include_once 'class/cuser.php';
include 'config/config.php';
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

$inventory= new Inventory();
$products= new Product();
?>
<!DOCTYPE html>
<html>
<head>
    <title>WEEB APP</title>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css?<?php echo time();?>">
</head>
<body>
    <div id="header">
        <h2>Manapla Petshop & Feeds Supplies</h2>
    </div>
<div id="wrapper">
    <div id="menu">
        <ul>
            <li><a href ="index.php">Home</a></li>
            <li><a href ="index.php?page=products">Products</a></li>  
            <li><a href ="index.php?page=settings">Settings</a><li>
            <li><a href ="logout.php?page=logout">Log Out</a></li>
        </ul> 
    </div>
    <div id="content">
        <?php
        switch($page){
            case 'products':
                require_once 'products/index.php';
            break;
            case 'settings':
                require_once 'settings/index.php';
            break;
            case 'log out':
                require_once 'logout.php';
            break;
            default: 
                 require_once 'main.php';
            break;
        }
        ?>
</div> 
</body>
</html>