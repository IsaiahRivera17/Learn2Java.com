<?php
$themeClass = '';
if (!empty($_COOKIE['theme'])) {
  if ($_COOKIE['theme'] == 'dark') {
    $themeClass = 'dark-mode';
  } else if ($_COOKIE['theme'] == 'light') {
    $themeClass = 'light-mode';
  }  
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>Learn2CodeJava <?php echo $page;?></title> <!--set this based on page content-->
	<link rel="shortcut icon" type="image/svg" href="<?php echo $path; ?>assets/img/gearmonke_icon.svg"/>
	<meta name="viewport" content="width=device width,initial-scale=1.0">
	<meta name="color-scheme" content="dark light">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<link href="<?php echo $path; ?>assets/css/default.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Coda&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">

	<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
	    $(window).on('load resize',function(){
	        if($(window).width() < 720){
	            window.location = "<?php echo $path; ?>mobile/quiz.html" //link to current page but in ../mobile/ folder
	        }
	    });
	</script>-->
</head>
<body class="<?php echo $themeClass; ?>">
