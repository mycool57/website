<!DOCTYPE html>
<html>
<head>
<title>PATRICK GOES ONLINE</title>
<link rel="stylesheet" href="css/styles.css">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<style>
body  {
    background-image: url('images/bg.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>
</head>
<body>
<div class="container" >
<div class="gallery"><?php include 'header.php';?></div>
<?php include 'sidebar.php';?>
<?php
if (! isset($_GET['page']))
    {	
        include('hhome.php');
		
    } else {  
switch($_GET['page'])
{
 case "home";
 include 'hhome.php';
 break;
  
 case "hkuis";
 include 'hkuis.php';
 break;

 case "playlist";
include 'playlist.php';
 break;
 
 case "playlistv2";
include 'playlistv2.php';
 break;
 
  case "ket";
include 'ket.php';
 break;
} 
	}
?>
<?php include 'footer.php';?>
</div>
</div>
</body>
</html>
