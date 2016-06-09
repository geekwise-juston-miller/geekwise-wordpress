<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

    <head>
        
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="<?php echo get_template_directory_uri(); ?>/fonts.css" rel="stylesheet">
        <link href="//db.onlinewebfonts.com/c/e5f2f90ef20309de329a7d174c3d2245?family=Franchise" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/about.css" rel="stylesheet">
        
    </head>
    
    <body <?php body_class('about'); ?>>
    
<!--  header= nav bar, fa awesome.  -->
    
     <header class="header1">
     
<!--  logo div at the top of the page  -->
        
         <div class="logo">
             
             <a href="/index.php?page_id=67">
                 <img src="http://i.imgur.com/YVp1P1h.png" alt="geekwise logo"></img>
             </a>
             
<!--    container for hidden button for nav bar on sm screen       -->
             
        <div class="label_wrap"> 
           
             <label id="fafa" class="fa fa-bars fa-2x" for="toggle-1"></label>
            
            <input type="checkbox" id="toggle-1"/>
  
<!--  nav buttons   -->
            
            <nav class="nav1">
                               
                <ul class="list1 media">
                   
                    <li class="list-item">
                        <a href="/index.php?page_id=6">About</a>
                    </li>
                    
                    <li class="list-item">
                        <a href="/index.php?page_id=8">Courses</a>
                    </li>
                    
                    <li class="list-item">
                        <a href="/index.php?page_id=10">Workshops</a>
                    </li>
                    
                    <li class="list-item">
                        <a href="/index.php?page_id=12"></a>Cohort</a>
                    </li>
                                    
                    <li class="list-item">
                        <a href="/index.php?page_id=14">Team</a>
                    </li>
                    
                    <li class="list-item">
                        <a href="/index.php?page_id=16">Contact</a>
                    </li>
                    
                </ul>                
                
            </nav> 
            
<!--     end of nav     -->

 <!--  container for signup button        -->
               
               
                <div class="signup-box">
                    
                    <li class="list-item">
                        <a href="/index.php?page_id=18">SIGN UP</a>
                    </li>
                    
                </div>    
       
             </div>
           
        </div>
        
<!--  close of all nav buttons   -->
           
           
<!--  title container   -->
            <div class="the-title">
            
             <h1>
                 Learn a real world
                 <br>
                  technology skill. Fast.
             </h1>
             
         </div>
        
    </header>
     
<!-- header close  -->
               