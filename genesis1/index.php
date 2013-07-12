  
<section id="content">
    <?php get_header(); ?>      
    
           <section id="page">
                <div class="bienvenida">
                    <span>Bienvenidos a génesis profesional</span>
                </div>
                
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                
                
                    <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1><!--titulo del ´pst-->

                    <?php the_time('F jS, Y') ?><!--fecha del ´pst-->


                    <?php the_content("Continuar leyendo " . the_title('', '', false)); ?>
                    
                    <p>Escrito por: <?php the_author() ?>, categoria(s): <?php the_category(', ') ?></p><!--quien escribio el post del ´pst-->
                
                
                
                <?php endwhile; ?>
                    <!--paginacion-->
                    <?php next_posts_link('&laquo; Entradas Previas') ?>

                    <?php previous_posts_link('Entradas Siguietes &raquo;') ?>  
                <?php else : ?>
                    <!--sinno eciste-->
                    <h1>Esta p&aacute;gina no se en cuentra :-( </h1>
                <?php endif; ?>
                
                <div class="grid_18 alpha">
    <!--Start Content-->
    <div class="content">
      <?php get_template_part( 'loop', 'index' ); ?>
      <div class="clear"></div>
      <nav id="nav-single"> <span class="nav-previous">
        <?php next_posts_link( __( '&larr; Older posts', 'dzonia' ) ); ?>
        </span> <span class="nav-next">
        <?php previous_posts_link( __( 'Newer posts &rarr;', 'dzonia' ) ); ?>
        </span> </nav>
    </div>
    <!--End Content-->
  </div>
            </section>
            <?php get_sidebar(); ?>
                
                <?php get_footer(); ?>
            
        </section>    
 