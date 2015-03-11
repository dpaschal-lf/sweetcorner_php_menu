<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sweet Corner</title>
		<link rel="stylesheet" href="Assets/stylesheets/main.css">
        <script type="text/javascript" src="Assets/js/jquery-2.1.3.min.js"></script>
        <script src="Assets/js/main.js"></script>
    </head>
    
   <body>
<?php
    include('includes/header.php');
?>
       
       <section id="mainArea">
           <?php 
            if(isset($_GET['page']))
            {
                include('pages/'.$_GET['page']);
            }
            else 
            {
                include('pages/home.php');
            }
           ?>
       </section>
<?php
    include('includes/footer.php');
?>
   </body>
</html>