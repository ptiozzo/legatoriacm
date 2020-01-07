<?php get_header(); ?>
<?php
  if( have_posts() ) :
    while( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <span><?php the_time('j M Y') ?></span>
          <!-- Titolo -->
          <div class='title'>
            <a href='<?php the_permalink(); ?>'><h3><?php the_title(); ?></h3></a>
          </div>

            <?php the_excerpt();?>

          <a href='<?php the_permalink(); ?>'><div class='cta'>LEGGI DI PIÙ</div></a>

      </article>
    <?php
  endwhile;
    ?>
  </div> <!-- .grid -->
  <?php
  else:
    ?>
      <p>Spiacente, nessun post/pagina trovata</p>
    <?php
  endif; ?>
<!-- carico footer -->
<?php get_footer(); ?>
