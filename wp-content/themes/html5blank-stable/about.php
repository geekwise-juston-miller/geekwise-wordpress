 <?php /* Template Name: about */ ?>
 
 <?php get_header( 'about' ); ?>
 
 <div>
       <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
            
               
            </div>
            
        <main class="main_about_crud">
            
 <section class="section_about_crud">     
               
                      <?php query_posts('post_type=geekwise_about'); ?>
                    
                        <?php while (have_posts()) : the_post(); ?>  
                <div class="about_what" id="about">
                   

                    <h1><?php the_title(); ?><?php the_content(); ?></h1>
                    <p class="about"><?php the_field('what'); ?></p>
                
                 
                </div>
             
                
               <?php endwhile; ?>
            </section>
               
      
    
              <div class="want_to">
                  <a href="/index.php?page_id=18" id="want_to">want to geekwise? sign-up today</a>
            </div>
        </main>
        
    </body>
        
</html>