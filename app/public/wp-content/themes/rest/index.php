<?php get_header(); ?>
 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="container sobre">
		<h2 class="subtitulo"><?php the_title(); //exibe o título do post?></h2>
		
		<div class="grid-8">
        <?php the_content();  //exibe o conteúdo do post?> 
		</div>
	</section>
    
    <?php endwhile; else: ?>
        <p><?php _e('Desculpe, mas não foi encontrado post.'); ?></p>
    <?php endif;?>

<?php get_footer(); ?>
