<?php get_header(); ?>




<img src="http://ejfstudios.com.ar/genesis/wordpress/wp-content/uploads/2013/02/text1.jpg" />


<div style="border-top: 1px solid #ccc;
height: 536px;
border-bottom: 1px solid #ccc;"><?php get_template_part( 'slide', 'index' ); ?></div>

<?php if (of_get_option('w2f_video_slide')== "1") { ?>
	
<div id="videoslide">
<div class="caroselhead"> 
	<h2>Game Videos</h2>
	<a id="prev2" class="prev" href="#"></a>
	<a id="next2" class="next" href="#"></a>
</div>
<div id="timer1" class="timer"></div>
 <ul id="carousel">
	<?php 	$vidcount= of_get_option('w2f_video_number');
			$query = new WP_Query( array( 'post_type' =>'video','posts_per_page' =>$vidcount ) );
	       	if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
	?>
	
 	<li class="panel">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'video_feature', array('class' => 'v-image') ); ?></a>
		<h3><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a> </h3>
 	</li>

	<?php endwhile; endif; ?>
 </ul>
	
</div>
<?php } ?>

<!-- end videoslide -->




<div id="home-content">
	
<h2 class="sectionhead">ACTIVIDADES</h2>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="story" id="post-<?php the_ID(); ?>">
	
		<div class="entry">
			<a href="<?php the_permalink() ?>"> <?php the_post_thumbnail( 'story_feature','id=ima-act', array('class' => 's-image') ); ?></a>
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

				<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
				<a class="rmore" href="<?php the_permalink() ?>">leer más</a>
				<div class='clear'></div>
		</div>

</div>

<?php endwhile; ?>
<?php getpagenavi(); ?>
<?php endif; ?>
</div>

<!-- end story section -->


<div id="homeright">


	<div class="review-left">
		<h2 class="sectionhead">NOVEDADES</h2>
		<ul class="siderevs">
		<?php 	$revcount= of_get_option('w2f_review_number');
				$query = new WP_Query( array( 'post_type' =>'review','posts_per_page' =>$revcount ) );
		       	if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
		?>
		<li class="reviewbox">
			<span class="categ"><?php echo get_the_term_list( $post->ID, 'console', '', ', ', '' ); ?> </span>
			
				<div class="bentry noved">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'review_thumb', array('class' => 's-image') ); ?> </a>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<?php wpe_excerpt('wpe_excerptlength_side', ''); ?>
					<div class='clear'></div>
				</div>
		</li>
		<?php endwhile; endif; ?>
		</ul>
	</div>



	<div class="latest-review">
		<h2 class="sectionhead">ARTÍCULOS</h2>
		<ul class="sidetops">
		<?php 	$topcount= of_get_option('w2f_top_number');
				$query = new WP_Query( array( 'post_type' =>'review','meta_key'=>'WTF_overall','orderby'=>'meta_value_num','order'=>'DESC','posts_per_page' =>$topcount ) );
		       	if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
		?>
		<li class="reviewbox artic">
			<span class="categ"><?php echo get_the_term_list( $post->ID, 'console', '', ', ', '' ); ?> </span>
			

				<div class="bentry">
					<?php /*?><a href="<?php the_permalink() ?>"> <?php the_post_thumbnail( 'review_thumb', array('class' => 's-image') ); ?> </a><?php */?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<?php wpe_excerpt('wwpe_excerptlength_side', ''); ?>


					<div class='clear'></div>
				</div>
		</li>
		<?php endwhile; endif; ?>
		</ul>
	</div>
	

</div>

<?php get_footer(); ?>