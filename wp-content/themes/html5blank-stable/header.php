<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title('Geekwise Academy - We teach technology skills that you can use to make money'); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="icon" type="image/png" href="http://i.imgur.com/1QEqn5g.png" type="image/x-icon"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    
     <header class="header1">

<!--    container for hidden button for nav bar on sm screen       -->
             
        <div class="label_wrap">                
                         
            <label id="fafa" class="fa fa-bars fa-2x" for="toggle-1"></label>
            
            <input type="checkbox" id="toggle-1"/>
            
            
            <nav class="nav1">
                               
                <ul class="list1 media">
                   
                    <li class="list-item">
                        <a href="about.html">About</a>
                    </li>
                    
                    <li class="list-item">
                        <a href="courses.html">Courses</a>
                    </li>
                    
                    <li class="list-item">
                        <a href="workshops.html">Workshops</a>
                    </li>
                    
                    <li class="list-item">
                        <a href="cohort.html">Cohort</a>
                    </li>
                    
                    <li class="list-item">
                        <a href="signup.html">Signup</a>
                    </li>
                    
                    <li class="list-item">
                        <a href="team.html">Team</a>
                    </li>
                    
                    <li class="list-item">
                        <a href="contact.html">Contact</a>
                    </li>
                    
                </ul>                
                
            </nav>    
       
         </div>  
                      
     </header>
			<!-- /header -->
