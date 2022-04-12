<?php
   /* Template Name: About */ 
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
      </div>
      <img class="jc-decoration-image img1" src="<?php the_field('banner_image');?>" alt="" width="800"
         height="600" />
   </div>
</div>
</header>
<!-- Welcome to ss ravidas-->
<section class="section breadcrumbs-custom">
   <div class="breadcrumbs-custom-main bg-image bg-primary">
      <div class="container">
         <h3 class="breadcrumbs-custom-title"><?php the_field('second_heading');?></h3>
      </div>
   </div>
   <div class="breadcrumbs-custom-aside">
      <div class="container">
	 		 <?php the_field('second_sec_menu');?>
      </div>
   </div>
</section>
<!-- Welcome to JobsFactory-->
<section class="section section-md">
   <div class="container">
      <div class="row row-30 align-items-center">
         <div class="col-lg-12">
				<?php the_field('second_content');?>
         </div>
      </div>
   </div>
</section>
<!-- Welcome to ss ravidas-->
<section class="section section-md bg-gray-100">
   <div class="container">
      <div class="row row-30 align-items-center">
         <div class="col-lg-5 height-fill">
            <figure class="figure-responsive">
               <img class="ravinder" src="<?php the_field('third_section_image');?>" alt="image" width="573"
                  height="368" />
            </figure>
         </div>
         <div class="col-lg-7">
		 	<?php the_field('third_sec_content');?>
         </div>
      </div>
   </div>
</section>

<!-- Forth Section Content -->
<section class="section section-md ">
   <div class="container">
      <div class="row row-30 align-items-center">
         <div class="col-lg-8">
			 <?php the_field('forth_sec_content');?>
         </div>
         <div class="col-lg-4 height-fill">
            <figure class="figure-responsive">
               <img class="vikas" src="<?php the_field('forth_sec_image');?>" alt="image" width="573"
                  height="368" />
            </figure>
         </div>
      </div>
   </div>
</section>
<!-- End forth Section -->

<!-- Start Fifth Section -->
<section class="section section-md bg-gray-100">
   <div class="container">
      <div class="row row-30 align-items-center">
         <div class="col-lg-5 height-fill">
            <figure class="figure-responsive">
               <img class="ravinder" src="<?php the_field('fifth_sec_image');?>" alt="image" width="573"
                  height="368" />
            </figure>
         </div>
         <div class="col-lg-7">
		 	<?php the_field('fifth_sec_content');?>
         </div>
      </div>
   </div>
</section>
<!-- End Start Fifth Section -->

<!-- Sixth Section -->
<section class="section section-md ">
   <div class="container">
      <div class="row row-30 align-items-center">
         <div class="col-lg-8">
			 <?php the_field('sixth_sec_content');?>
         </div>
         <div class="col-lg-4 height-fill">
            <figure class="figure-responsive">
               <img class="vikas" src="<?php the_field('sixth_sec_image');?>" alt="image" width="573"
                  height="368" />
            </figure>
         </div>
      </div>
   </div>
</section>
<!-- End Sixth Section -->

<!-- Seventh Section -->
<section class="section section-md bg-gray-100">
   <div class="container offset-top-1 text-center">
   		<?php the_field('seventh_sec_content');?>
   </div>
</section>
<!-- End Seventh Section -->

<!-- Eighth Section -->
<section class="section section-md text-center">
   <div class="container">
      <h3><?php the_field('eighth_sec_heading');?></h3>
      <!-- Owl Carousel-->
      <div class="owl-carousel owl-carousel-stretch" data-autoplay="true"
         data-autoplay-speed="3500" data-items="1" data-sm-items="2"
         data-md-items="3" data-lg-items="4" data-dots="true"
         data-dots-each="2" data-nav="false" data-stage-padding="2px"
         data-loop="true" data-margin="30" data-mouse-drag="false">
         <a class="link-corporate" href="#"><img
            src="<?php the_field('gallery_img_1');?>" alt="image" width="200" height="44" /></a><a
            class="link-corporate" href="#"><img src="<?php the_field('gallery_img_2');?>"
            alt="image" width="200" height="82" /></a><a class="link-corporate"
            href="#"><img src="<?php the_field('gallery_img_3');?>" alt="image" width="200"
            height="39" /></a><a class="link-corporate" href="#"><img
            src="<?php the_field('gallery_img_4');?>" alt="image" width="200" height="77" /></a>
      </div>
   </div>
</section>
<!-- End Eighth Section  -->
<!-- CTA-->

<!-- Start Ninth Section  -->
<section>
   <div class="responsive-map">
   		<?php the_field('map_content');?>
   </div>
</section>
<!-- End Ninth Section  -->
<?php get_footer();?>