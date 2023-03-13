<?php

/**

* Template Name: Front

*/

get_header(); the_post(); 



?>



<!-- main container of all the page elements -->

<div id="wrapper">



  <?php 

    $image = get_field('image');

    $size = 'full'; // (thumbnail, medium, large, full or custom size)

   

    $url = wp_get_attachment_image_src( $image, $size );

   

  ?> 

  <div class="hero-wrap">

    <svg id="my-svg" class="defs-only " version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1600 617"  style="enable-background:new 0 0 1600 617;" xml:space="preserve">

      <defs> 

        <linearGradient id="Gradient2" x1="0" x2="1" y1="0" y2="0">

          <stop offset="0%" stop-color="#800094"/>       
          <stop offset="100%" stop-color="#2e0d52"/>

        </linearGradient>



        <mask id="maskW"> 

          <path class="st0" d="M585-2.3c0,0,0,158,134,249c95.5,64.9,193,67,193,67" style="stroke: #fff"/>

          <line class="st1" x1="912" y1="-2.3" x2="912" y2="619.3" style="stroke: #fff"/>

          <path class="st1" d="M451-2.3c0,0-14,64-82,64s-85-64-85-64v621.5" style="stroke: #fff"/>

          <path class="st1" d="M108-2.3v363.8c0,8.2,0.9,16.4,2.7,24.4c9.4,41.3,47.2,158.8,173.3,158.8" style="stroke: #fff"/>

          <path class="st1" d="M0,5.8c0,0,120,8,182,70s102,167,102,167" style="stroke: #fff" />

          <path class="st1" d="M284,330.8c0,0,30-95,110-175S598,76,598,76" style="stroke: #fff"/>

          <path class="st1" d="M912,313.8c0,0-88-232.8-314-237.8" style="stroke: #fff"/>

          <line class="st1" x1="598" y1="76" x2="598" y2="619.3" style="stroke: #fff"/>

          <path class="st1" d="M768,619.3c0,0-20-184.5-170-184.5" style="stroke: #fff"/>

          <path class="st1" d="M912,35.8c0,0,199,19,199,220" style="stroke: #fff"/>

          <path class="st1" d="M1111,613.8" style="stroke: #fff"/>

          <line class="st1" x1="1258" y1="619.3" x2="1258" y2="375.8" style="stroke: #fff"/>

          <path class="st1" d="M912,378.3c0,0,148-279.5,346-2.5v-378" style="stroke: #fff"/>

          <path class="st1" d="M1260,388c0,0,310,21.8,310-390.2" style="stroke: #fff"/>

          <path class="st1" d="M1477,619.3c0,0,5-69.5,65-69.5s58,69.5,58,69.5" style="stroke: #fff"/>

          <line class="st1" x1="1111" y1="255.8" x2="1111" y2="619.3" style="stroke: #fff"/>  

        </mask> 

      </defs>

      <g style="mask: url(#maskW)" id="mask"> 

       <rect width="1600" height="617" x="0" y="0" fill="url(#Gradient2)" />

      </g>



      <path class="st0" d="M585-2.3c0,0,0,158,134,249c95.5,64.9,193,67,193,67"/>

      <line class="st0" x1="912" y1="-2.3" x2="912" y2="619.3"/>

      <path class="st0" d="M451-2.3c0,0-14,64-82,64s-85-64-85-64v621.5"/>

      <path class="st0" d="M108-2.3v363.8c0,8.2,0.9,16.4,2.7,24.4c9.4,41.3,47.2,158.8,173.3,158.8"/>

      <path class="st0" d="M0,5.8c0,0,120,8,182,70s102,167,102,167"/>

      <path class="st0" d="M284,330.8c0,0,30-95,110-175S598,76,598,76"/>

      <path class="st0" d="M912,313.8c0,0-88-232.8-314-237.8"/>

      <line class="st0" x1="598" y1="76" x2="598" y2="619.3"/>

      <path class="st0" d="M768,619.3c0,0-20-184.5-170-184.5"/>

      <path class="st0" d="M912,35.8c0,0,199,19,199,220"/>

      <path class="st0" d="M1111,613.8"/>

      <line class="st0" x1="1258" y1="619.3" x2="1258" y2="375.8"/>

      <path class="st0" d="M912,378.3c0,0,148-279.5,346-2.5v-378"/>

      <path class="st0" d="M1260,388c0,0,310,21.8,310-390.2"/>

      <path class="st0" d="M1477,619.3c0,0,5-69.5,65-69.5s58,69.5,58,69.5"/>

      <line class="st0" x1="1111" y1="255.8" x2="1111" y2="619.3"/>

    </svg>



    <svg viewBox="0 0 1600 617" preserveAspectRatio="xMidYMin slice" width="100%" style="padding-bottom: 38.5%; height: 1px; overflow: visible">

      <use xlink:href="#my-svg"/>

    </svg>

    <!--description of header-->

    <div class="head-text">

      <div class="head-text-in">

        <h1><?php the_field("title"); ?></h1>

        <p><?php the_field("description"); ?></p>

      </div>

    </div>   

  </div>





    <!-- header of the page -->

 <!--  <header id="header" style="background-image: url(<?php echo $url[0]; ?>);">	    

    

    <div class="inner">

      <div class="logo">

       <a href="http://isadoradigitalagency.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo-image"></a>

      </div>



        

    </div>

  </header>    -->

   



  <!-- main navigation of the page -->

  <div class="facke-nav" >

    <nav id="nav">

      <div class="inner">

        <a href="http://isadoradigitalagency.com" class="logo-nav">

          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo-image">

          <img src="<?php echo get_template_directory_uri(); ?>/images/logo-nav.png" alt="logo-image">

        </a> 

    	  <ul>

          <li><a href="#services">SERVICES</a></li>

          <li><a href="#benefits">RESULTS</a></li>   

          <li><a href="#price">PRICING</a></li> 

          <li class="get-started-item"><a href="#get-started">GET STARTED</a></li>    

        </ul> 

      </div>   			

    </nav>

  </div>

  

  <!-- contain main informative part of the site -->

  <main id="main">

  	<?php if( have_rows('section') ): ?>

	    <div class="our-success" id="services">  



	      <h2 class="section-title"><?php the_field("title_success"); ?></h2>

        <div class="description"><?php the_field("description_success"); ?></div>



	      <?php $i=1; while ( have_rows('section') ) : the_row(); ?>	

		      <div class="section-row <?php if($i%2 == 1){echo "section-image-left";}else{echo "section-image-right";} ?>">

            <div class="half-inner">

              <div class="section-row-text" data-number="<?php echo "0".$i; ?>.">

                <div class="sub-title"><?php the_sub_field("sub_title"); ?></div>

                <h3><?php the_sub_field("title"); ?></h3>

                <p><?php the_sub_field("description"); ?></p>

                <ul class="section-options">

                  <?php while ( have_rows('list') ) : the_row(); ?> 

                    

                    <li>

                      <?php the_sub_field("title"); ?>

                    </li>

                    

                    

                  <?php endwhile; ?>

                </ul>

                <div class="results">

                  <div class="label-result"><?php the_sub_field("our_results_title"); ?></div>

                  <?php while ( have_rows('our_results') ) : the_row(); ?>  

                    <div class="item-result">

                     <?php the_sub_field("number"); ?>

                      <span><?php the_sub_field("label"); ?></span>

                    </div>

                  <?php endwhile; ?>

                </div> 



              </div>

            </div>



		        <div class="section-row-image"> 



		        	<?php 

								$image = get_sub_field('image');

								$size = 'large'; // (thumbnail, medium, large, full or custom size)



								if( $image ) {



									echo wp_get_attachment_image( $image, $size );



								}

		        	?>        

		         

		        </div>

		      </div>

	    	<?php $i++; endwhile; ?>

	    </div>  

  	<?php endif; ?>





    <div class="benefits" id="benefits">

      <div class="inner">

        <h2 class="section-title"><?php the_field("title_benefits"); ?></h2>

        <div class="description"><?php the_field("benefits_description"); ?></div>



        <div class="wrap-benefits">

          <div class="left-benefit">

            <ul class="benefits-list">

            	<?php while ( have_rows('left_list') ) : the_row(); ?>	

	              <li>

	                <div class="benefit-img">

	                	<?php 

											$image = get_sub_field('icon');

											$size = 'full'; // (thumbnail, medium, large, full or custom size)



											if( $image ) {



												echo wp_get_attachment_image( $image, $size );



											}

					        	?>

							        

							    </div>



	                <div class="benefit-text">

	                  <h3> <?php the_sub_field("title"); ?></h3>

	                  <p> <?php the_sub_field("description"); ?></p>

	                </div>

	              </li>

	            <?php endwhile; ?>

            </ul>

          </div>

          

          <div class="right-benefit">

            <ul class="benefits-list">

              <?php while ( have_rows('right_list') ) : the_row(); ?>	

	              <li>

	                <div class="benefit-img">

	                	<?php 

											$image = get_sub_field('icon');

											$size = 'medium'; // (thumbnail, medium, large, full or custom size)



											if( $image ) {



												echo wp_get_attachment_image( $image, $size );



											}

					        	?>

							        

							    </div>



	                <div class="benefit-text">

	                  <h3><?php the_sub_field("title"); ?></h3>

	                  <p><?php the_sub_field("description"); ?></p>

	                </div>

	              </li>

	            <?php endwhile; ?>

            </ul>

          </div>



          <div class="center-benefit">

           	<?php 

							$image = get_field('center_image');

							$size = 'large'; // (thumbnail, medium, large, full or custom size)



							if( $image ) {



								echo wp_get_attachment_image( $image, $size );



							}

	        	?>



          </div>



        </div>





      </div> 

    </div>



    <?php if( have_rows('list') ): ?>

      <div class="cases-study">

        <div class="inner">

          <h2 class="section-title"><?php the_field("title_case"); ?></h2> 



          <div class="case-wrap">

            <?php while ( have_rows('list') ) : the_row(); ?> 

              <div class="case-item">

                <div class="case-item-inner">

                  <div class="case-image">

                    <?php 

                      $image = get_sub_field('image');

                      $size = 'case'; // (thumbnail, medium, large, full or custom size)



                      if( $image ) {



                        echo wp_get_attachment_image( $image, $size );



                      }

                    ?>



                  </div>



                  <div class="case-sign">

                    <div class="case-name"><?php the_sub_field("name"); ?></div>

                    <div class="case-desc"><?php the_sub_field("position"); ?></div>

                  </div>



                  <div class="case-bottom">                   



                    <div class="case-diagram results-<?php echo count( get_sub_field('results_stat') ); ?>">

                      <?php while ( have_rows('results_stat') ) : the_row(); ?>

                        <div class="result">

                          <div class="case-percent"><?php the_sub_field("percent"); ?></div>

                          <div class="case-diagram-title"><?php the_sub_field("descriton_of_percent"); ?></div>

                        </div>

                      <?php endwhile; ?> 

                    </div>

                  </div>

                </div>

              </div>

            <?php endwhile; ?>



          </div>

        </div>

      </div>

    <?php endif; ?>



    <?php if( have_rows('list_team') ): ?>  

      <div class="team">



        <div class="team-list">

          <?php while ( have_rows('list_team') ) : the_row(); ?> 

            <div class="team-item">

              <div class="team-item-inner">

                <div class="team-image">

                  <?php 

                    $image = get_sub_field('image');

                    $size = 'profile'; // (thumbnail, medium, large, full or custom size)



                    if( $image ) {



                      echo wp_get_attachment_image( $image, $size );



                    }

                  ?>

                </div>



                <div class="team-sign">

                  <div class="team-name"><?php the_sub_field("name"); ?></div>

                  <div class="team-desc"><?php the_sub_field("position"); ?></div>

                </div>



                <p><?php the_sub_field("description"); ?></p>

              </div>

            </div>

          <?php endwhile; ?>



        </div>

      </div>

    <?php endif; ?>  



    <?php if( have_rows('list_logos') ): ?>   

      <div class="clients">

        <div class="inner">

          <div class="client-label">

            <?php the_field("title_client"); ?>

          </div>  



          <ul>

            <?php while ( have_rows('list_logos') ) : the_row(); ?> 

              <li>

                <a href="<?php the_sub_field("url"); ?>" target="_blank">

                  <?php 

                    $image = get_sub_field('logo');

                    $size = 'full'; // (thumbnail, medium, large, full or custom size)



                    if( $image ) {



                      echo wp_get_attachment_image( $image, $size );



                    }

                  ?>

                </a>

              </li>

            <?php endwhile; ?>  

          </ul>



        </div>

      </div>

    <?php endif; ?>  



    <?php if( have_rows('list_of_price') ): ?>    

    <div class="plans" id="price">

      <div class="inner">

        <div class="plan-list">

          <?php while ( have_rows('list_of_price') ) : the_row(); ?>   

            <div class="plan-item">

              <div class="plan-item-inner">

                <div class="name-plan"><?php the_sub_field("name_of_plan"); ?></div>

                <div class="notes"><?php the_sub_field("notes"); ?></div>

                <div class="price">

                  <div class="price-sum">

                    <span>$</span><?php the_sub_field("price"); ?>

                  </div>



                  <div class="period"><?php the_sub_field("duration"); ?></div>

                </div>



                <ul>

                  <?php while ( have_rows('list') ) : the_row(); ?>   

                    <li><?php the_sub_field("title"); ?></li>

                  <?php endwhile; ?>

                </ul>

              </div>

            </div>

          <?php endwhile; ?>



        </div>

      </div>

    </div>

    <?php endif; ?>





    <?php 

      $image = get_field('background');

      $size = 'full'; // (thumbnail, medium, large, full or custom size)

     

      $url = wp_get_attachment_image_src( $image, $size );

     

    ?>   

    <div class="get-started" id="get-started" style="background-image: url(<?php echo $url[0]; ?>);">

      <div class="inner">

        <div class="get-started-form">

          <div class="get-started-form-in">

            <h2 class="get-started-title"><?php the_field("title_form"); ?></h2>  



            <p><?php the_field("description_form"); ?></p>



            <?php echo do_shortcode(get_field("shortcode_of_form")); ?>  

          </div>

          <div class="thank-you">

            <h2 class="get-started-title"><?php the_field("thank_you_title"); ?></h2>

            <p><?php the_field("thank_you_description"); ?></p>

          </div>

        </div>



      </div>

    </div>



  </main>

  

  <!-- footer of the page -->

  <footer id="footer">	   

    <div class="inner">

      <div class="footer-logo"><a href="http://isadoradigitalagency.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png" alt="logo"></a></div>



      <div class="footer-left">

        <a href="<?php the_field("privacy_url"); ?>"><?php the_field("privacy_title"); ?></a>

      </div>

    </div>

  </footer>	

</div>





<?php get_footer(); ?>