<section class="section-portfolio" id="portfolio">
		<div class="container">
			<h4>NOSSO</h4>
			<div class="pincel-segura">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/pincelv.png">
				<div class="pincel-h1 text-center">
					<h1>PORTFÓLIO</h1>
				</div>
			</div>
			<span class="hr-titulo"><hr></span>


	                    <?php
				                $args = array(
				                'post_type' => 'portifolio',
				                'posts_per_page' => 40
				                );
				                $attorney = new WP_Query( $args );
				                while ( $attorney->have_posts() ) : $attorney->the_post();
				                ?>
				            <div class="col-md-4 col-sm-12 col-sm-6 portfolio-box">
							<div class="portfolio-imagem row">
								<?php if ( has_post_thumbnail() ) { ?>					

									<?php 

										$image_id =  get_post_thumbnail_id( get_the_ID() );
										$large_image = wp_get_attachment_image_src( $image_id ,'large');  										

									?>
									<a data-toggle="modal" data-target="#myModal-<? the_ID(); ?>">
									<img class="img-responsive" src="<?php echo esc_url($large_image[0]); ?>" alt="" class="main-photo">
									</a>


								<?php } ?>


								<div id="myModal-<? the_ID(); ?>" class="modal fade" role="dialog">
								  <div class="modal-dialog">

								    <!-- Modal content-->
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal">&times;</button>
								        <h4 class="modal-title"><?php the_title(); ?></h4>
								      </div>
								      <div class="modal-body">
								        <img class="img-responsive" src="<?php echo esc_url($large_image[0]); ?>" alt="" class="main-photo">
								      </div>
								      <div class="modal-footer">
								      	<?php the_content(); ?>
								        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
								      </div>
								    </div>

								  </div>
								</div>


							</div>
							<div class="portfolio-titulo row">
								<h4><?php the_title(); ?></h4>
								<?php the_content(); ?>
							</div>
							</div>
						<?php endwhile; ?>	
					</div>
</section>