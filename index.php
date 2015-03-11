<?php

/*var pages = {
    Home: {pageUrl: "index.php?page=home.php"},
    "About Us": {pageUrl: "index.php?page=about-us.php"},
    Services: {pageUrl: "index.php?page=services.php"},
    Contact: {pageUrl: "index.php?page=contact.php"}
};*/
//make datastructure that mirrors this javascript object in PHP
$pages = [
    'Home'=>['pageUrl'=>'home.php', 'default'=>true],
    'About Us'=>['pageUrl'=>'about-us.php'],
    'Services'=>['pageUrl'=>'services.php'],
    'Contact'=>['pageUrl'=>'contact.php']
];
print("GET BEFORE SET");print_r($_GET);
if(!isset($_GET['page']))
{
    $_GET['page'] = 'home.php';
}

?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sweet Corner</title>
		<link rel="stylesheet" href="Assets/stylesheets/main.css">
        <script type="text/javascript" src="Assets/js/jquery-2.1.3.min.js"></script>
        <script src="Assets/js/main.js"></script>
    </head>
    
   <body>
       <pre>
<?php
//print_r($_GET);
?></pre>
<?php
    include('includes/header.php');
?>
       
       <section id="mainArea">
           <?php 
            //check to see if file exists
            if(file_exists('pages/'.$_GET['page']))
            {
            //if it does, include it
                include('pages/'.$_GET['page']);
            }
            else  
            {
                include('pages/404.php');
            }
            //if it doesn't, include our custom 404 page

           ?>
       </section>
<?php
    include('includes/footer.php');
?>
   </body>
</html>