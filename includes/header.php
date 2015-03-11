       <header class="container">
               <img src="Assets/images/header.png" alt="colorful header">
               <ul id="main-nav">
<?php
//loop through pages to create content
foreach($pages as $menu_id=>$menu_contents)
{
   //detect if our current page is the same page as the menu item we are currently creating
    //print("page = ".$_GET['page']." and menu_contest[pageUrl] = $menu_contents[pageUrl]<br>");
   $selected_menu_class = '';
   if($_GET['page']==$menu_contents['pageUrl'])
   {
       //add or create a class or style to apply to our current menu item
       $selected_menu_class = 'selected_menu_item';
   }
   //create LIs with encapsulated A with appropriate links and text contents
   echo "<li><a class='$selected_menu_class' href='index.php?page=$menu_contents[pageUrl]'>$menu_id</a></li>";
}

?>
                </ul>
               <div class="main-logo"></div>
               <h1 class="logo-text cursive">We deliver cupcakes for the important events in your life!</h1>
               <div class="brown-bar"></div>
       </header>