<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="<?php echo get_template_directory_uri(); ?>/fonts.css" rel="stylesheet">
        <link href="//db.onlinewebfonts.com/c/e5f2f90ef20309de329a7d174c3d2245?family=Franchise" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="description" content="<?php bloginfo('description'); ?>">



		

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        

	</head>
	<body <?php body_class(); ?>>
	    
        
    
			<!-- header -->
		<!--        nav bar          -->
    
     <header id="home_page_header">

<!--    container for hidden button for nav bar on sm screen       -->
             
        <div id="home_label_wrap">                
                         
            <label id="home_fafa" class="fa fa-bars fa-2x" for="toggle-1"></label>
            
            <input type="checkbox" id="toggle-1"/>
            
            
            <nav id="home_page_nav-1">
                               
                <ul id="home_list-1">
                   
                    <li id="home_list_item">
                        <span>
                            <a href="/index.php?page_id=6">About</a>
                        </span>
                    </li>
                    
                    <li id="home_list_item">
                        <span>
                            <a href="/index.php?page_id=8">Courses</a>
                        </span>
                    </li>
                    
                    <li id="home_list_item">
                        <span>
                            <a href="/index.php?page_id=10">Workshops</a>
                        </span>
                    </li>
                    
                    <li id="home_list_item">
                        <span>
                            <a href="/index.php?page_id=12">Cohort</a>
                        </span>
                    </li>
                    
                    <li id="home_list_item">
                        <span>
                            <a href="/index.php?page_id=18" id="sign-up-home">Signup</a>
                        </span>
                    </li>
                    
                    <li id="home_list_item">
                        <span>
                            <a href="/index.php?page_id=14">Team</a>
                        </span>
                    </li>
                    
                    <li id="home_list_item">
                        <span>
                            <a href="/index.php?page_id=16">Contact</a>
                        </span>
                    </li>
                    
                </ul>                
                
            </nav>    
       
         </div>  
                      
     </header>
			<!-- /header -->
