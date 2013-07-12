<section id="content">
<?php get_header(); ?>
<section id="page">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post">
<h1><?php the_title(); ?></h1>


<?php the_content("Continuar leyendo " . the_title('', '', false)); ?>

</div>

<?php endwhile; ?>

<?php next_posts_link('&laquo; Entradas Previas') ?>

<?php previous_posts_link('Entradas Siguietes &raquo;') ?>

<?php else : ?>

<h1>Esta p&aacute;gina no se en cuentra :-( </h1>

<?php endif; ?>

</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
</section>   