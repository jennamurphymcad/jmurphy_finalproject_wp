<?php/*** Template Name: Home Page*/?><?php get_header(); ?>                       <section class="main">                	                	<!-- Feature Image Field Group -->                	<header>                		<!-- Feature Image -->                        <figure><img src="<?php the_field('feature_image') ?>" >		                       		<figcaption>	                       		 	<?php the_field('feature_image_text') ?>                        	</figcaption>                         </figure>                    </header>                                                          <!-- Home Main Field Group -->                    <article id="intro">                    	 	<!-- Home Main About -->                       	 	<?php the_field('home_about_me') ?>                   	</article>                    	 										<section class="blog">	                     	                     	<h4>Blog Updates</h4>	            					<?php					$args = array( 						'post_type' => 'post', 						'posts_per_page' => 3,						'orderby' => 'post_date' );										$the_query = new WP_Query( $args );					// The Loop					if ( $the_query->have_posts() ) {					echo '<ul>';						while ( $the_query->have_posts() ) {						$the_query->the_post();						echo '<li><a href="' . get_permalink($post->ID) . '">' . get_the_post_thumbnail($post->ID, 'thumbnail') . get_the_title($post->ID) . '</a><div class="content">' . get_the_excerpt($post->ID) . '</div></li>';						}					echo '</ul>';				} else {					// no posts found				}					/* Restore original Post Data */				wp_reset_postdata();    				    				?>    		    				</section>    				    				    				    				<section id="performancehome">                    	<h4>Upcoming Performances</h4>                    							<article>					<?php					$args = array( 						'post_type' => 'performance-listing', 						'posts_per_page' => 3,						'orderby' => 'post_date' );										$the_query = new WP_Query( $args );					// The Loop					if ( $the_query->have_posts() ) {					echo '<ul>';						while ( $the_query->have_posts() ) {						$the_query->the_post();						echo '<li><a href="' . get_permalink($post->ID) . '">' . get_the_title($post->ID) . '</a></li>';						}					echo '</ul>';				} else {					// no posts found				}					/* Restore original Post Data */				wp_reset_postdata();    				    				?>						                   	                    	                    	                    	 </article>                              				    				</section>                      	           	 </section><?php get_footer(); ?>