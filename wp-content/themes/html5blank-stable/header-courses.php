<!DOCTYPE html>

<head>
        
        <title>Geekwise Academy - We teach technology skills that you can use to make money</title>
        
        <meta charset="utf-8"/>
        
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
        
        
        
        <link href='https://fonts.googleapis.com/css?family=Khula:800,400' rel='stylesheet' type='text/css'>
        
        <link href='https://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'/>
        
        <link href="<?php echo get_template_directory_uri(); ?>/courses.css" rel="stylesheet">
        
</head>

    <body <?php body_class('courses'); ?>>
       
<!-- copied signup link and nav bar from workshops page -->
       
        <div id="margin_top">
            <a class="signup_link team_signup" href="signup.html"><span>sign up</span></a>
        </div>
    <header class="contact_header" id="workshops_header">
        <nav>
            <ul>
               <div class="icon_div">
                <li id="icon">
                    <a href="index.html">
                        <img src="http://i.imgur.com/sCkxjbZ.png" id="icon_image">
                    </a>
                </li>
               </div>
               
               <!--dropdown-->
               
               <label for="dropdown" id="bars_label_tag">
                   <div class="bars_div">
                       <p class="bar_line"></p>
                       <p class="bar_line"></p>
                       <p class="bar_line"></p>
                   </div>
               </label>
               <input type="checkbox" id="dropdown">
               
               <!--end dropdowh-->
               
               <div class="nav_div team_nav_div" id="nav_background">
                <li class="contact_about">
                    <a href="about.html">
                        <span class="contact_hover ">
                            about
                        </span>
                    </a>
                </li>
                <li class="contact_courses">
                    <a id="workshops_active" href="courses.html">
                        <span class="contact_hover ">
                            courses
                        </span>
                    </a>
                </li>
                <li class="contact_workshops">
                    <a href="workshops.html">
                        <span class="contact_hover">
                            workshops
                        </span>
                    </a>
                </li>
                <li class="contact_cohort">
                    <a href="cohort.html">
                        <span class="contact_hover ">
                            cohort
                        </span>
                    </a>
                </li>
                <li class="contact_team">
                    <a href="team.html">
                        <span class="contact_hover contact_color">
                            team
                        </span>
                    </a>
                </li>
                <li class="contact_contact">
                    <a class="contact_color" id="workshops_white_color" href="contact.html">
                        <span class="contact_hover">
                            contact
                        </span>
                    </a>
                </li>
                <li class="added_signup">
                    <a href="signup.html">
                        <span>
                            sign up
                        </span>
                    </a>
                </li>
              </div>
              
            </ul>
        </nav>  
    </header> 