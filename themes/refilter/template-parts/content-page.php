<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="entry-content">
		<?php the_content(); ?>

		<section class="our-purpose">
		<h3 class="purpose-title"><?php the_field('purpose_title'); ?></h3>			
		<p class="purpose-description"><?php the_field('purpose_description'); ?></p>	
		</section>

		<section class="what-we-do">
		<h3 class="what-we-do-title"><?php the_field('what_we_do_title'); ?></h3>			
		<p class="what-we-do-description"><?php the_field('what_we_do_description'); ?></p>	
		<img src="<?php the_field('what_we_do_image'); ?>;" />
		</section>

		<section class="wavy-testimonial">
		<p class="wavy-testimonial-description"><?php the_field('wavy_testimonial_description'); ?></p>
		<span class="wavy-testimonial-author"><?php the_field('wavy_testimonial_author'); ?></span>	
		<span class="wavy-testimonial-member"><?php the_field('wavy_testimonial_member'); ?></span>	
		<p class="wavy-testimonial-event"><?php the_field('wavy_testimonial_event'); ?></p>	
		</section>
		
		<section class="contribute">
			<h1 class="contribute-title"><?php the_field('contribute_title'); ?></h1>
			<p class="contribute-description"><?php the_field('contribute_description'); ?></p>
		</section>

			<ul class="contribute-types">
				<li class="contribute-recycling"><?php the_field('contribute_recycling'); ?></li>
				<li class="contribute-events"><?php the_field('contribute_events'); ?></li>
				<li class="contribute-donation"><?php the_field('contribute_donation'); ?></li>
				<li class="contribute-word"><?php the_field('contribute_word'); ?></li>			
			</ul>

			<section class="butt-count">
			<h1 class="butt-count-title"><?php the_field('butt_count_title'); ?></h1>
			<h1 class="butt-count-title"><?php the_field('butt_count_title'); ?></h1>						
			<h1 class="butt-count-title"><?php the_field('butt_count_title'); ?></h1>						
			<span class="butt-count-butts-collected"><?php the_field('butt_count_butts_collected'); ?></span>						
			<span class="butt-count-waste-collected"><?php the_field('butt_count_waste_collected'); ?></span>						
			</section>

			<ul class="instagram-feed">
				<li class="instagram_feed_image"><img src="<?php the_field("instagram_feed_image"); ?>" /></li>
			</ul>

			<section class="wavy-newsletter">
				<h1 class="wavy-newsletter-title"><?php the_field('wavy_newsletter_title'); ?></h1>										
				<input class="wavy-newsletter-name" type="text" placeholder="<?php the_field('wavy_newsletter_name'); ?>" />
				<input class="wavy-newsletter-email" type="text" placeholder="<?php the_field('wavy_newsletter_email'); ?>" />													
			</section>
	</section><!-- .entry-content -->
</main><!-- #post-## -->

