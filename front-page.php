<?php get_header(); ?>
  <!-- ABOUT Section -->
  <section id="about" class="mt-5">
      <div class="container">
         <div class="row text-center">
            <div class="col-8 mx-auto">
               <img id="about-img" class="img-fluid mb-3" src="<?php echo get_theme_file_uri('/img/myPhoto.jpg')?>">
               <h3 class="display-5 mb-5 about-title pb-2">Who am I?</h3>
               <p class="text-justify">
                  My name's Youness Atari, I'm a self learner guy who's trying to develop his skills in wordpress development, I've been learning some technologies in web development for almost 1.5 years, including HTML5, CSS3, Bootstrap, Sass, Javascript, Git, and currently I'm focusing on custom wordpress.
                  <p>
                     I have been passionate about web development since I was 13 years old, at that time I was able to create blogs in Blogger platform and modify them, however I wasn't able to create front end websites from scratch. 
                  </p>
                  <p>
                     I am currently looking for an internship or an entry job to expand all my skills set.
                  </p>
                  <p> I wish to me all the best ^^</p>
               </p>
            </div>
         </div>
      </div>
  </section>
  <!-- EXPERIENCE Section -->
  <section id="experience" class="mt-5 py-5">
     <div class="container">
        <div class="row">
           <div class="col-8 mx-auto text-center">
              <h3 class="mb-5 pb-2 display-5 experience-title">Experience</h3>
              <p class="mb-5 exp-text">I have been doing and learning wordpress development for 1.5 years and I'm willing to learn and develop more and more this year.</p>
              <div class="tech-stack">
                  <h4 class="text-white mb-5"><i>Technologies that I use</i></h4>
                  <div class="row techs mx-auto justify-content-center">
                     <div class="col-md-1 col-4 mx-3 p-2">
                        <div class="html-tech">
                           <img src="<?php echo get_theme_file_uri('/img/html5.png')?>">
                        </div>
                     </div>
                     <div class="col-md-1 col-4 mx-3 p-2">
                        <div class="css-tech">
                           <img src="<?php echo get_theme_file_uri('/img/css3.png')?>">
                        </div>
                     </div>
                     <div class="col-md-1 col-4 mx-3 p-2">
                        <div class="javascript-tech">
                           <img src="<?php echo get_theme_file_uri('/img/javascript.png')?>">
                        </div>
                     </div>
                     <div class="col-md-1 col-4 mx-3 p-2">
                        <div class="sass-tech">
                           <img src="<?php echo get_theme_file_uri('/img/sass.png')?>">
                        </div>
                     </div>
                     <div class="col-md-1 col-4 mx-3 p-2">
                        <div class="bootstrap-tech">
                           <img src="<?php echo get_theme_file_uri('/img/bootstrap.png')?>">
                        </div>
                     </div>
                     <div class="col-md-1 col-4 mx-3 p-2">
                        <div class="git-tech">
                           <img src="<?php echo get_theme_file_uri('/img/git.png')?>">
                        </div>
                     </div>
                     <div class="col-md-1 col-4 mx-3 p-2">
                        <div class="photoshop-tech">
                           <img src="<?php echo get_theme_file_uri('/img/photoshop.png')?>">
                        </div>
                     </div>
                  </div>
                </div>
            </div>
         </div>
      </div>
   </section>
   <!-- WORK Section -->
   <section id="work" class="mt-5 mb-5 text-center">
      <div class="container">
         <div class="row">
            <div class="col-8 mx-auto">
               <h1 class="pb-2 display-5">Projects I've completed</h1>
            </div>
         </div>
         <!-- Projects -->
         <div class="row">
         <?php 
            $args = array( 'post_type' => 'projects', 'posts_per_page' => 10 );
            $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <!-- Start -->
               <div class="col-md-6 col-lg-4 project">
                  <article>
                     <?php the_post_thumbnail();  ?>
                     <div class="project-info-container text-white d-flex flex-column align-items-center justify-content-center">
                        <div class="project-info-content">
                           <div class="project-info-top">
                              <h3 class="project-name">
                                 <?php the_title(); ?>
                              </h3>
                              <p class="project-techs">
                                 <?php echo get_the_category_list('/'); ?>
                              </p>
                           </div>
                           <a class="btn d-block project-btn text-white" href="<?php echo get_field('project_view'); ?>" target="_blank">
                              View Project <i class="far fa-eye"></i>
                           </a>
                           <a class="btn d-block project-btn text-white" href="<?php echo get_field('project_code'); ?>" target="_blank">
                              View Code <i class="fab fa-github-alt"></i>
                           </a>
                        </div>
                     </div>
                  </article>
               </div>
            <!-- End -->
            <?php endwhile;
            wp_reset_postdata(); ?>
            <?php else:  ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
         </div>
      </div>
   </section>
   <?php get_footer(); ?>