<?php
/* Template Name: Home */
get_header();
?>
			<div class="">
				<div class="container">
						<?php the_field('banner_section');?>
				</div>
				<div class="jc-decoration">

					<div class="jc-decoration-item jc-decoration-item-2">
						<svg version="1.1" x="0px" y="0px" viewbox="0 0 1446 970" width="1446" height="970"
							preserveAspectRatio="none">
							<path
								d="M-0.000,33.000 C-0.000,33.000 80.000,54.000 113.000,83.000 C146.000,112.000 147.000,152.000 183.000,174.000 C219.000,196.000 288.000,172.000 334.000,193.000 C380.000,214.000 379.000,282.000 427.000,317.000 C475.000,352.000 548.000,336.000 588.000,371.000 C628.000,406.000 614.000,483.000 647.000,513.000 C680.000,543.000 786.000,537.000 841.000,587.000 C896.000,637.000 885.000,739.000 932.000,776.000 C979.000,813.000 1026.000,796.000 1069.000,817.000 C1112.000,838.000 1135.000,865.000 1189.000,893.000 C1243.000,921.000 1433.000,970.000 1433.000,970.000 L1446.000,0.000 L-0.000,33.000 Z">
							</path>
						</svg>
					</div><img class="jc-decoration-image img1" src="<?php the_field('banner_image');?>" alt="" width="800"
						height="600" />
				</div>
			</div>
		</header>
		<!-- Welcome to -->
		<section class="section section-md bg-default text-center bg-gray-100">
			<div class="container">
				<h3 class="sr">
					<?php the_field('second_heading');?>
				</h3>
				<p class="text-spacing-05"></p>
				<div class="row row-50 justify-content-center align-items-center text-left">
					<div class="col-md-10 col-lg-6">
						<figure class="figure-responsive block-6 mt-5">
							<img src="<?php the_field('welcome_image');?>" alt="" width="540" height="413" />
						</figure>
					</div>
					<div class="col-md-10 col-lg-6">
					<?php the_field('second_content');?>
					</div>
				</div>
			</div>
		</section>
		<!-- Popular gallary-->
		<section class="section section-md text-center">
			<div class="container">
			<?php the_field('third_sec_heading');?>
				<!-- Owl Carousel-->
				<div class="owl-carousel owl-carousel-stretch" data-autoplay="true" data-autoplay-speed="3500"
					data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-dots="true"
					data-dots-each="2" data-nav="false" data-stage-padding="2px" data-loop="true" data-margin="30"
					data-mouse-drag="false">
					<a class="link-corporate" href="#"><img src="<?php the_field('gallery_img_1');?>" alt="image" width="200"
							height="44" /></a><a class="link-corporate" href="#"><img src="<?php the_field('gallery_img_2');?>" alt="image"
							width="200" height="82" /></a><a class="link-corporate" href="#"><img
							src="<?php the_field('gallery_img_3');?>" alt="image" width="200" height="39" /></a><a
						class="link-corporate" href="#"><img src="<?php the_field('gallery_img_4');?>" alt="image" width="200"
							height="77" /></a>
				</div>
			</div>
		</section>
		<section class="section section-sm bg-default team1 bg-gray-100">
			<div class="container">
			<?php the_field('forth_sec_heading');?>

			<div class="owl-carousel owl-carousel-profile" data-items="1" data-sm-items="2" data-md-items="3"
					data-lg-items="4" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false"
					data-fade="true" data-margin="30" data-mouse-drag="false">
					<!-- Profile Classic-->
					<a class="profile-classic" href="resume-page.html">
						<figure class="profile-classic-figure">
							<img class="profile-classic-image" src="<?php the_field('member_img_1');?>" alt="" width="266"
								height="219" />
						</figure>
						<?php the_field('member_details_1');?>
					</a>
					<!-- Profile Classic-->
					<a class="profile-classic" href="resume-page.html">
						<figure class="profile-classic-figure">
							<img class="profile-classic-image" src="<?php the_field('member_img_2');?>" alt="" width="266" height="219" />
						</figure>
						<?php the_field('member_details_2');?>
					</a>
					<!-- Profile Classic-->
					<a class="profile-classic" href="resume-page.html">
						<figure class="profile-classic-figure">
							<img class="profile-classic-image" src="<?php the_field('member_img_3');?>" alt="" width="266" height="150" />
						</figure>
						<?php the_field('member_details_3');?>
					</a>
					<!-- Profile Classic-->
					<a class="profile-classic" href="resume-page.html">
						<figure class="profile-classic-figure">
							<img class="profile-classic-image" src="<?php the_field('member_img_4');?>" alt="" width="266" height="219" />
						</figure>
						<?php the_field('member_details_4');?>
					</a>
				</div>
				
			</div>
		</section>
		<!-- Success Stories-->
		<section class="parallax-container section-md bg-primary bg-overlay-1 text-center"
			data-parallax-img="images/bg-image-7.jpg">
			<div class="parallax-content">
				<div class="container">
				<?php the_field('fifth_sec_heading');?>
					<!-- Owl Carousel-->
					<?php the_field('success_stories');?>
				</div>
			</div>
		</section>

		<!-- Latest Posts-->
		<section class="section section-md bg-gray-100">
			<div class="container">
				<h3 class="text-center"><?php the_field('sixth_sec_heading');?></h3>
				<?php the_field('events_content');?>
			</div>
		</section>

		<section>
			<div class="responsive-map">
			<?php the_field('map_content');?>
			</div>
	</div>
	</section>


	<!-- Page Footer-->
<?php get_footer();?>
