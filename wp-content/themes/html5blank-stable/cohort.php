 <?php /* Template Name: cohort */ ?>
  <?php get_header('cohort'); ?>
 
 

 
    <!-- main section copied from team page -->
    
    <main class="main">
          <div id="main_div">
               <div>
                    <img class="team_image" src="http://i.imgur.com/aVbgh2U.png" id="cohort_owl_visible">
               </div>
               
              
               
          <div id="the_team_div" class="cohort_heading">
                <p class="cohort_position cohort_font_family">
                    
                    
                    <span class="capital_letters">What is</span>
                    <span class="capital_letters">The</span>
                    <span class="capital_letters">Geekwise</span>
                    <span class="capital_letters">Academy</span>
                    <span class="capital_letters">Cohort</span>
                    <span class="capital_letters">Program?</span>
                </p>
                
          </div>
         </div>
    </main>
            <div id="cohort_content">
                 
                <p class="content">
                     The Geekwise Academy Cohort program has been developed to bridge the gap between Geekwise Academy course students and their ability to move into roles as developers in the local technology industry. 
                </p>
                <p class="content">
                   The Cohort consists of two phases. The first is a two week internship for the 20 individuals that were invited to the Cohort program. This phase includes QA and testing of the invitees skill set. In phase two, 8 of the 20 Invitees will be chosen to participate in a 24 week internship program. Phase two consists of three assignments each eight weeks in length. During this time the Cohorts will complete work for clients through projects of increased difficulty. Also, Cohort participants will be required to co-teach Geekwise Academy classes. They will work with the Cohort Director and Bethany Mily to prepare for this opportunity.

                </p>
                <p class="content">
                   Our goal here is simple, we want to produce developers that are:


                </p>
                
                <ol class="content" id="content_ol">
                    <li>Information literate</li>
                    <li>Confident in their problem solving abilities</li>
                    <li>Reliable and professional</li>
                    <li>Good communicators</li>
                    <li>Driven to succeed, able to learn, and receive criticism</li>
                    
                   
                </ol>
                <p class="content">
                    Bitwise Industries is excited about this new adventure that kicks off on January 12, 2015. We look forward to mentoring the next generation of technologists in Fresno.

                </p>
            </div>
            
            
            
    <footer class="cohort_footer">
             <div class="team_text">
                    <p id="cohort_title">
                        Meet the Geekwise Academy Cohort Classes!
                    </p>
                </div>
              <label for="cohort_input" class="cohort_label">
                  <span>
                      <b>&vee;</b> 
                      Cohort Class 2 (July 2015 - January 2016)
                  </span>
              </label>
              <input type="checkbox" id="cohort_input">
              
    <!-- begin first cohort -->
    
<?php query_posts('post_type=cohort_page'); ?>
<?php while ( have_posts() ) : the_post(); ?>  
              
               <div class="cohort_div" id="this_year_cohorts">
                <div class="cohort_pictures_div">
                   <p class="cohort_pic">
                      <img src="http://i.imgur.com/DelFaCJ.jpg" class="">
                      <span class="span_font cohort_names">
                          <?php the_field('adam_field'); ?>
                      </span>
                      <span class="cohort_text_left">
                          <?php the_field('adam_field_content'); ?>
                      </span>
                   </p>
                   <p class="pictures cohort_pic">
                      <img src="http://i.imgur.com/t8DSWfv.jpg">
                      <span class="span_font cohort_names">
                         <?php the_field('patrick_patterson'); ?>
                      </span>
                      <span class="cohort_text_left">
                          <?php the_field('patrick_patterson_content'); ?>
                      </span>
                   </p>
                   <p class="pictures cohort_pic">
                      <img src="http://i.imgur.com/BZ6zEuk.jpg">
                      <span class="span_font cohort_names">
                          <?php the_field('hani_ali'); ?>
                          
                      </span>
                      <span class="cohort_text_left">
                          <?php the_field('hani_ali_content'); ?>
                          
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/5nNIWW0.jpg">
                       <span class="span_font cohort_names">
                           <?php the_field('hunter_lester'); ?>
                           
                       </span>
                       <span class="cohort_text_left">
                           <?php the_field('hunter_lester_content'); ?>
                           
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/S3EsJWe.jpg">
                       <span class="span_font cohort_names">
                           <?php the_field('ian_garoian'); ?>
                           
                       </span>
                       <span class="cohort_text_left">
                           <?php the_field('ian_garoian_content'); ?>
                           
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/HqizOXe.jpg">
                       <span class="span_font cohort_names">
                           <?php the_field('alex_gutierrez'); ?>
                           
                       </span>
                       <span class="cohort_text_left">
                           <?php the_field('alex_gutierrez_content'); ?>
                           
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/5d0QZdo.jpg">
                       <span class="span_font cohort_names">
                           <?php the_field('raquel_garcia'); ?>
                           
                       </span>
                       <span class="cohort_text_left">
                           <?php the_field('raquel_garcia_content'); ?>
                           
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/4JQPXEn.jpg">
                       <span class="span_font cohort_names">
                           <?php the_field('bill_ramirez'); ?>
                           
                       </span>
                       <span class="cohort_text_left">
                           <?php the_field('bill_ramirez_content'); ?>
                           
                       </span>
                   </p>
               </div>
               </div>
               
<?php endwhile; ?>               
               
<!-- end first cohort -->    
        
                <label for="cohort_input2" class="cohort_label2">
                    <span>
                        <b>&vee;</b> 
                        Cohort Class 1 (January 2015 - July 2015)
                    </span>
                </label>
                <input type="checkbox" id="cohort_input2">              
              
<!-- begin second cohort -->

<?php query_posts('post_type=cohort_team1'); ?>
<?php while ( have_posts() ) : the_post(); ?> 
                 
               <div class="cohort_div" id="this_year_cohorts2">
                <div class="cohort_pictures_div">
                   <p class="cohort_pic">
                      <img src="http://i.imgur.com/kTbU61u.jpg" class="">
                      <span class="span_font cohort_names"><?php the_field('arturo_ceballos'); ?></span>
                      <span class="cohort_text_left">
                          <?php the_field('arturo_ceballos_content'); ?>
                      </span>
                   </p>
                   <p class="pictures cohort_pic">
                      <img src="http://i.imgur.com/vI9pAyJ.jpg">
                      <span class="span_font cohort_names">
                           <?php the_field('vanessa_ceballos'); ?>
                      </span>
                      <span class="cohort_text_left">
                           <?php the_field('vanessa_ceballos_content'); ?>
                      </span>
                   </p>
                   <p class="pictures cohort_pic">
                      <img src="http://i.imgur.com/QtUEkUC.jpg">
                       <span class="span_font cohort_names">
                            <?php the_field('nic_ myers'); ?>
                       </span>
                       <span class="cohort_text_left">
                            <?php the_field('nic_ myers_content'); ?>
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/HzY1fqB.jpg">
                       <span class="span_font cohort_names">
                            <?php the_field('sam_ramos'); ?>
                       </span>
                       <span class="cohort_text_left">
                            <?php the_field('sam_ramos_content'); ?>
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/rQ8TIgj.jpg">
                       <span class="span_font cohort_names">
                            <?php the_field('john_word'); ?>
                       </span>
                       <span class="cohort_text_left">
                            <?php the_field('john_word_content'); ?>
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/kTbU61u.jpg">
                       <span class="span_font cohort_names">
                            <?php the_field('jeremy_robles'); ?>
                       </span>
                       <span class="cohort_text_left">
                            <?php the_field('jeremy_robles_content'); ?>
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/7mzfu0f.jpg">
                       <span class="span_font cohort_names">
                            <?php the_field('john_sposato'); ?>
                       </span>
                       <span class="cohort_text_left">
                            <?php the_field('john_sposato_content'); ?>
                       </span>
                   </p>
                   <p class="pictures cohort_pic">
                       <img src="http://i.imgur.com/Nq7Y2uY.jpg">
                       <span class="span_font cohort_names">
                            <?php the_field('victor_perez'); ?>
                        </span>
                       <span class="cohort_text_left">
                            <?php the_field('victor_perez_content'); ?>
                       </span>
                   </p>
               </div>
            </div>
<?php endwhile; ?>            
    <!-- end second cohort-->
                 
    </footer>
    <section class="signup_footer"></section>
</body>