 <?php /* Template Name: cohort */ ?>
  <?php get_header('cohort'); ?>
  <body>
 
    <!-- main section copied from team page -->
    
    <main class="main">
          <div id="main_div">
               <div>
                    <img class="team_image" src="http://i.imgur.com/aVbgh2U.png" id="cohort_owl_visible">
               </div>
               
<?php query_posts('post_type=cohort_page'); ?>
<?php while ( have_posts() ) : the_post(); ?>               
               
          <div id="the_team_div" class="cohort_heading">
                <p class="cohort_position cohort_font_family">
                    <?php the_title(); ?>
                    <!--<span class="capital_letters"></span>-->
                    <!--<span class="capital_letters"></span>-->
                    <!--<span class="capital_letters"></span>-->
                    <!--<span class="capital_letters"></span>-->
                    <!--<span class="capital_letters"></span>-->
                    <!--<span class="capital_letters"></span>-->
                </p>
                
          </div>
         </div>
    </main>
            <div id="cohort_content">
                <p class="content">
                     <?php the_field('text_area_1'); ?>
                </p>
                <p class="content">
                    <?php the_field('text_area_2'); ?>
                </p>
                <p class="content">
                    <?php the_field('goals_title_text_area'); ?>
                </p>
                
                <ol class="content" id="content_ol">
                    <li><?php the_field('goal_1'); ?></li>
                    <li><?php the_field('goal_2'); ?></li>
                    <li><?php the_field('goal_3'); ?></li>
                    <li><?php the_field('goal_4'); ?></li>
                    <li><?php the_field('goal_5'); ?></li>
                </ol>
                <p class="content">
                    <?php the_field('below_goal_text_area'); ?>
                </p>
            </div>
            
<?php endwhile; ?>            
            
    <footer class="cohort_footer">
             <div class="team_text">
                    <p id="cohort_title">
                    </p>
                </div>
              <label for="cohort_input" class="cohort_label">
                  <span>
                      <b>&vee;</b> 
                  </span>
              </label>
              <input type="checkbox" id="cohort_input">
              
    <!-- begin first cohort -->
    
<?php query_posts('post_type=cohort_team1'); ?>
<?php while ( have_posts() ) : the_post(); ?>    
              
               <div class="cohort_div" id="this_year_cohorts">
                <div class="cohort_pictures_div">
                   <p class="cohort_pic">
                      <img src="http://i.imgur.com/DelFaCJ.jpg" class="">
                      <span class="span_font cohort_names">
                          <?php the_field('adam_field'); ?>
                      </span>
                      <span class="cohort_text_left">
                          <?php the_field('adam_field_text'); ?>
                      </span>
                   </p>
                   <p class="pictures cohort_pic">
                      <img src="http://i.imgur.com/t8DSWfv.jpg">
                      <span class="span_font cohort_names">
                      </span>
                      <span class="cohort_text_left">
                      </span>
                   </p>
                   <p class="pictures cohort_pic">
                      <img src="http://i.imgur.com/BZ6zEuk.jpg">
                      <span class="span_font cohort_names">
                      </span>
                      <span class="cohort_text_left">
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/5nNIWW0.jpg">
                       <span class="span_font cohort_names">
                       </span>
                       <span class="cohort_text_left">
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/S3EsJWe.jpg">
                       <span class="span_font cohort_names">
                       </span>
                       <span class="cohort_text_left">
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/HqizOXe.jpg">
                       <span class="span_font cohort_names">
                       </span>
                       <span class="cohort_text_left">
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/5d0QZdo.jpg">
                       <span class="span_font cohort_names">

                       </span>
                       <span class="cohort_text_left">
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/4JQPXEn.jpg">
                       <span class="span_font cohort_names">
                       </span>
                       <span class="cohort_text_left">
                       </span>
                   </p>
               </div>
               </div>
               
<?php endwhile; ?>               
               
<!-- end first cohort -->    
        
                <label for="cohort_input2" class="cohort_label2">
                    <span>
                        <b>&vee;</b> 
                    </span>
                </label>
                <input type="checkbox" id="cohort_input2">              
              
<!-- begin second cohort -->
                 
               <div class="cohort_div" id="this_year_cohorts2">
                <div class="cohort_pictures_div">
                   <p class="cohort_pic">
                      <img src="http://i.imgur.com/kTbU61u.jpg" class="">
                      <span class="span_font cohort_names"></span>
                      <span class="cohort_text_left">
                      </span>
                   </p>
                   <p class="pictures cohort_pic">
                      <img src="http://i.imgur.com/vI9pAyJ.jpg">
                      <span class="span_font cohort_names">
                          
                      </span>
                      <span class="cohort_text_left">
                      </span>
                   </p>
                   <p class="pictures cohort_pic">
                      <img src="http://i.imgur.com/QtUEkUC.jpg">
                       <span class="span_font cohort_names">
                       </span>
                       <span class="cohort_text_left">
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/HzY1fqB.jpg">
                       <span class="span_font cohort_names">
                       </span>
                       <span class="cohort_text_left">
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/rQ8TIgj.jpg">
                       <span class="span_font cohort_names">
                       </span>
                       <span class="cohort_text_left">
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/kTbU61u.jpg">
                       <span class="span_font cohort_names">
                       </span>
                       <span class="cohort_text_left">
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/7mzfu0f.jpg">
                       <span class="span_font cohort_names">
                       </span>
                       <span class="cohort_text_left">
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/Nq7Y2uY.jpg">
                       <span class="span_font cohort_names">
                        </span>
                       <span class="cohort_text_left">
                       </span>
                   </p>
               </div>
            </div>
            
    <!-- end second cohort-->
                 
    </footer>
    <section class="signup_footer"></section>
</body>