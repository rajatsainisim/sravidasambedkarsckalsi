<?php
/* Template Name: Contact Us*/ 

get_header();
?>
    <div class="">
          <div class="container">
          <?php the_field('banner_section');?>
			
          </div>
          <div class="jc-decoration">
           
            <div class="jc-decoration-item jc-decoration-item-2">
              <svg version="1.1" x="0px" y="0px" viewbox="0 0 1446 970" width="1446" height="970" preserveAspectRatio="none">
                <path d="M-0.000,33.000 C-0.000,33.000 80.000,54.000 113.000,83.000 C146.000,112.000 147.000,152.000 183.000,174.000 C219.000,196.000 288.000,172.000 334.000,193.000 C380.000,214.000 379.000,282.000 427.000,317.000 C475.000,352.000 548.000,336.000 588.000,371.000 C628.000,406.000 614.000,483.000 647.000,513.000 C680.000,543.000 786.000,537.000 841.000,587.000 C896.000,637.000 885.000,739.000 932.000,776.000 C979.000,813.000 1026.000,796.000 1069.000,817.000 C1112.000,838.000 1135.000,865.000 1189.000,893.000 C1243.000,921.000 1433.000,970.000 1433.000,970.000 L1446.000,0.000 L-0.000,33.000 Z"></path>
              </svg>
            </div><img class="jc-decoration-image img1" src="<?php the_field('banner_image');?>" alt="" width="800" height="600"/>
          </div>
        </div>
      </header>
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
<!-- Contacts-->
<section class="section section-md">
	<div class="container">
		<div class="row row-50">
			<div class="col-md-10 col-lg-8 col-xl-6">
                <?php the_field('upper_content');?>
			</div>
		</div>
		<div class="layout-bordered">
			<div class="layout-bordered-item">
				<div class="layout-bordered-item-inner">
					<div class="unit unit-spacing-sm flex-md-column hading1">
						<div
							class="unit-left icon icon-xl fl-bigmug-line-cellphone55 text-primary"></div>
                            <?php the_field('phone_number_content');?>
					</div>
				</div>
			</div>
			<div class="layout-bordered-item">
				<div class="layout-bordered-item-inner">
					<div class="unit unit-spacing-sm flex-md-column">
						<div
							class="unit-left icon icon-xl fl-bigmug-line-big104 text-primary"></div>
                            <?php the_field('address_content');?>
					</div>
				</div>
			</div>
			<div class="layout-bordered-item">
				<div class="layout-bordered-item-inner">
					<div class="unit unit-spacing-sm flex-md-column">
						<div
							class="unit-left icon icon-xlg fl-bigmug-line-email64 text-primary"></div>
                            <?php the_field('email_content');?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<?php the_field('contact_form_heading');?>
				<!-- RD Mailform-->
				<?php echo do_shortcode('[contact-form-7 id="172" title="Contact Us"]');?>
			</div>
		</div>
	</div>
</section>

<section>
<div class="responsive-map">
    <?php the_field('map_content');?>
</div>
</section>
<?php get_footer();?>