<?php get_header(); ?>

<div id="content">
<h1>Resultado de la busqueda:</h1>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post">
<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

<h2><?php the_time('F jS, Y') ?></h2>
<?php the_excerpt("Continuar leyendo " . the_title('', '', false)); ?>
<div class=
"meta">
<p>Escrito por: <?php the_author() ?>, categoria(s): <?php the_category(', ') ?></p>
</div>
</div>

<?php endwhile; ?>

<?php next_posts_link('&laquo; Entradas Previas') ?>

<?php previous_posts_link('Entradas Siguietes &raquo;') ?>

<?php else : ?>

<h1>Esta p&aacute;gina no se en cuentra :-( </h1>

<?php endif; ?>
</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>