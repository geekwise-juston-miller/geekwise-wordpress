<?php /* Template Name: workshops */ ?>

<?php get_header('workshops'); ?>
 
        
     
<!-- added this paragraph, but positioned it to header section in css -->
       
        <div id="workshops_fluff">
            <p>
                <span>
                    NO FLUFF. WE TEACH SKILLS THAT YOU CAN USE TO MAKE MONEY.
                </span>
            </p>
        </div>
        
<!-- main section includes all the workshop details -->

        <?php query_posts('post_type=workshops'); ?>
                    
        <?php while (have_posts()) : the_post(); ?>
        
    <main id="workshops_main">
        
         <div>
            <p>
               <span class="workshops_font_weight workshops_underline workshops_font_family">
                  <?php the_title(); ?>  <?php the_content(); ?>
                </span>
            </p>
            
            <p><?php the_field('quote'); ?></p>
            <p><?php the_field('quote_2'); ?></p>
            <p><?php the_field('quote_3'); ?></p>   
            
            <p>
                <span class="workshops_font_weight">
                <?php the_field('date'); ?>
                </span>
            </p>
            <p>
                <span class="workshops_font_weight">
                <?php the_field('date_2'); ?>
                </span>
            </p>
            <p>
                <span class="workshops_font_weight">
                <?php the_field('date_3'); ?>
                </span>
            </p>
            
            <p><?php the_field('info'); ?></p>
            <p><?php the_field('info_2'); ?></p>
            <p><?php the_field('info_3'); ?></p>
            
        </div>
<?php endwhile; ?>         
        
        <!--<div>-->
        <!--    <p>-->
        <!--        <span class="workshops_font_weight workshops_underline workshops_font_family">-->
                   
        <!--        </span>-->
        <!--    </p>-->
        <!--    <p>-->
        <!--        <span class="workshops_font_weight">-->
                   
        <!--        </span>-->
        <!--    </p>-->
        <!--    <p>-->
                    
        <!--    </p>-->
            
        <!--</div>-->
    </main>
   
    <footer class="workshops_footer">
        <div>
            <p>
               <a href="/index.php?page_id=16">
                   <span>
                       SEATING IS LIMITED, SIGN UP TODAY
                    </span>
               </a>                
            </p>
        </div>
    </footer>
       
<!-- put the background image to body for it to work  -->
       
        <img src="http://i.imgur.com/Bkba1Pj.png" id="half_owl">
</body>
