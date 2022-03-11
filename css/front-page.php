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
            <!-- Single column -->
            <div class="col-md-6 col-lg-4 project">
               <article>
                  <img class="project-img" src="<?php echo get_theme_file_uri('/img/project1.png')?>">
                  <div class="project-info-container text-white d-flex flex-column align-items-center justify-content-center">
                     <div class="project-info-content">
                        <div class="project-info-top">
                           <h3 class="project-name">
                              eShopping Site
                           </h3>
                           <p class="project-techs">
                              HTML / CSS / JAVASCRIPT
                           </p>
                        </div>
                        <a class="btn d-block project-btn text-white" href="https://younesatari.github.io/Shopping-site/" target="_blank">
                           View Project <i class="far fa-eye"></i>
                        </a>
                        <a class="btn d-block project-btn text-white" href="https://github.com/younesatari/Shopping-site" target="_blank">
                           View Code <i class="fab fa-github-alt"></i>
                        </a>
                     </div>
                  </div>
               </article>
            </div>
            <!-- Single column -->
            <div class="col-md-6 col-lg-4 project">
               <article>
                  <img class="project-img" src="<?php echo get_theme_file_uri('/img/project11.png')?>">
                  <div class="project-info-container text-white d-flex flex-column align-items-center justify-content-center">
                     <div class="project-info-content">
                        <div class="project-info-top">
                           <h3 class="project-name">
                              DevSteps BLOG
                           </h3>
                           <p class="project-techs">
                              HTML5 / SASS / BOOTSTRAP
                           </p>
                        </div>
                        <a class="btn d-block project-btn text-white" href="https://younesatari.github.io/DevSteps-Blog/" target="_blank">
                           View Project <i class="far fa-eye"></i>
                        </a>
                        <a class="btn d-block project-btn text-white" href="https://github.com/younesatari/DevSteps-Blog" target="_blank">
                           View Code <i class="fab fa-github-alt"></i>
                        </a>
                     </div>
                  </div>
               </article>
            </div>
            <!-- Single column -->
            <div class="col-md-6 col-lg-4 project">
               <article>
                  <img class="project-img" src="<?php echo get_theme_file_uri('/img/project10.png')?>">
                  <div class="project-info-container text-white d-flex flex-column align-items-center justify-content-center">
                     <div class="project-info-content">
                        <div class="project-info-top">
                           <h3 class="project-name">
                              Keino - landing page
                           </h3>
                           <p class="project-techs">
                              HTML / SCSS / BOOTSTRAP
                           </p>
                        </div>
                        <a class="btn d-block project-btn text-white" href="https://younesatari.github.io/Keino---Website/#header" target="_blank">
                           View Project <i class="far fa-eye"></i>
                        </a>
                        <a class="btn d-block project-btn text-white" href="https://github.com/younesatari/Keino---Website" target="_blank">
                           View Code <i class="fab fa-github-alt"></i>
                        </a>
                     </div>
                  </div>
               </article>
            </div>
            <!-- Single column -->
            <div class="col-md-6 col-lg-4 project">
               <article>
                  <img class="project-img" src="<?php echo get_theme_file_uri('/img/project2.png')?>">
                  <div class="project-info-container text-white d-flex flex-column align-items-center justify-content-center">
                     <div class="project-info-content">
                        <div class="project-info-top">
                           <h3 class="project-name">
                              Grocery Store
                           </h3>
                           <p class="project-techs">
                              HTML / CSS / JAVASCRIPT
                           </p>
                        </div>
                        <a class="btn d-block project-btn text-white" href="https://younesatari.github.io/Add-Grocery-App/" target="_blank">
                           View Project <i class="far fa-eye"></i>
                        </a>
                        <a class="btn d-block project-btn text-white" href="https://github.com/younesatari/Add-Grocery-App" target="_blank">
                           View Code <i class="fab fa-github-alt"></i>
                        </a>
                     </div>
                  </div>
               </article>
            </div>
            <!-- Single column -->
            <div class="col-md-6 col-lg-4 project">
               <article>
                  <img class="project-img" src="<?php echo get_theme_file_uri('/img/project9.png')?>">
                  <div class="project-info-container text-white d-flex flex-column align-items-center justify-content-center">
                     <div class="project-info-content">
                        <div class="project-info-top">
                           <h3 class="project-name">
                              Unicmetric Landing page
                           </h3>
                           <p class="project-techs">
                              HTML / SCSS / BOOTSTRAP
                           </p>
                        </div>
                        <a class="btn d-block project-btn text-white" href="https://younesatari.github.io/UnicMetric-Landing-Page/" target="_blank">
                           View Project <i class="far fa-eye"></i>
                        </a>
                        <a class="btn d-block project-btn text-white" href="https://github.com/younesatari/UnicMetric-Landing-Page" target="_blank">
                           View Code <i class="fab fa-github-alt"></i>
                        </a>
                     </div>
                  </div>
               </article>
            </div>
            <!-- Single column -->
            <div class="col-md-6 col-lg-4 project">
               <article>
                  <img class="project-img" src="<?php echo get_theme_file_uri('/img/project9.png')?>">
                  <div class="project-info-container text-white d-flex flex-column align-items-center justify-content-center">
                     <div class="project-info-content">
                        <div class="project-info-top">
                           <h3 class="project-name">
                              FlashCards
                           </h3>
                           <p class="project-techs">
                              HTML / CSS / JAVASCRIPT
                           </p>
                        </div>
                        <a class="btn d-block project-btn text-white" href="https://younesatari.github.io/Flashcards-App/" target="_blank">
                           View Project <i class="far fa-eye"></i>
                        </a>
                        <a class="btn d-block project-btn text-white" href="https://github.com/younesatari/Flashcards-App" target="_blank">
                           View Code <i class="fab fa-github-alt"></i>
                        </a>
                     </div>
                  </div>
               </article>
            </div>
            <!-- Single column -->
            <div class="col-md-6 col-lg-4 project">
               <article>
                  <img class="project-img" src="<?php echo get_theme_file_uri('/img/project4.png')?>">
                  <div class="project-info-container text-white d-flex flex-column align-items-center justify-content-center">
                     <div class="project-info-content">
                        <div class="project-info-top">
                           <h3 class="project-name">
                              Client's Opinion Slideshow
                           </h3>
                           <p class="project-techs">
                              HTML / CSS / JAVASCRIPT
                           </p>
                        </div>
                        <a class="btn d-block project-btn text-white" href="https://younesatari.github.io/Client-s-Opinion-Slideshow/" target="_blank">
                           View Project <i class="far fa-eye"></i>
                        </a>
                        <a class="btn d-block project-btn text-white" href="https://github.com/younesatari/Client-s-Opinion-Slideshow" target="_blank">
                           View Code <i class="fab fa-github-alt"></i>
                        </a>
                     </div>
                  </div>
               </article>
            </div>
            <!-- Single column -->
            <div class="col-md-6 col-lg-4 project">
               <article>
                  <img class="project-img" src="<?php echo get_theme_file_uri('/img/project5.png')?>">
                  <div class="project-info-container text-white d-flex flex-column align-items-center justify-content-center">
                     <div class="project-info-content">
                        <div class="project-info-top">
                           <h3 class="project-name">
                              Guess Game
                           </h3>
                           <p class="project-techs">
                              HTML / CSS / JAVASCRIPT
                           </p>
                        </div>
                        <a class="btn d-block project-btn text-white" href="https://younesatari.github.io/Guess-Game/" target="_blank">
                           View Project <i class="far fa-eye"></i>
                        </a>
                        <a class="btn d-block project-btn text-white" href="https://github.com/younesatari/Guess-Game" target="_blank">
                           View Code <i class="fab fa-github-alt"></i>
                        </a>
                     </div>
                  </div>
               </article>
            </div>
            <!-- Single column -->
            <div class="col-md-6 col-lg-4 project">
               <article>
                  <img class="project-img" src="<?php echo get_theme_file_uri('/img/project6.png')?>">
                  <div class="project-info-container text-white d-flex flex-column align-items-center justify-content-center">
                     <div class="project-info-content">
                        <div class="project-info-top">
                           <h3 class="project-name">
                              Blog
                           </h3>
                           <p class="project-techs">
                              HTML / CSS / JAVASCRIPT
                           </p>
                        </div>
                        <a class="btn d-block project-btn text-white" href="https://younesatari.github.io/True-BLOG/" target="_blank">
                           View Project <i class="far fa-eye"></i>
                        </a>
                        <a class="btn d-block project-btn text-white" href="https://github.com/younesatari/True-BLOG" target="_blank">
                           View Code <i class="fab fa-github-alt"></i>
                        </a>
                     </div>
                  </div>
               </article>
            </div>
            <!-- Single column -->
            <div class="col-md-6 col-lg-4 project">
               <article>
                  <img class="project-img" src="<?php echo get_theme_file_uri('/img/project7.png')?>">
                  <div class="project-info-container text-white d-flex flex-column align-items-center justify-content-center">
                     <div class="project-info-content">
                        <div class="project-info-top">
                           <h3 class="project-name">
                              Our reviews Slideshow
                           </h3>
                           <p class="project-techs">
                              HTML / CSS / JAVASCRIPT
                           </p>
                        </div>
                        <a class="btn d-block project-btn text-white" href="https://younesatari.github.io/Slideshow/" target="_blank">
                           View Project <i class="far fa-eye"></i>
                        </a>
                        <a class="btn d-block project-btn text-white" href="https://github.com/younesatari/Client-s-Opinion-Slideshow" target="_blank">
                           View Code <i class="fab fa-github-alt"></i>
                        </a>
                     </div>
                  </div>
               </article>
            </div>
            <!-- Single column -->
            <div class="col-md-6 col-lg-4 project">
               <article>
                  <img class="project-img" src="<?php echo get_theme_file_uri('/img/project8.png')?>">
                  <div class="project-info-container text-white d-flex flex-column align-items-center justify-content-center">
                     <div class="project-info-content">
                        <div class="project-info-top">
                           <h3 class="project-name">
                              To do List
                           </h3>
                           <p class="project-techs">
                              HTML / CSS / JAVASCRIPT
                           </p>
                        </div>
                        <a class="btn d-block project-btn text-white" href="https://younesatari.github.io/To-do-App/" target="_blank">
                           View Project <i class="far fa-eye"></i>
                        </a>
                        <a class="btn d-block project-btn text-white" href="https://github.com/younesatari/To-do-App" target="_blank">
                           View Code <i class="fab fa-github-alt"></i>
                        </a>
                     </div>
                  </div>
               </article>
            </div>
         </div>
      </div>
   </section>
   <?php get_footer(); ?>