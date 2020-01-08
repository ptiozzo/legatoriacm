<?php get_header(); ?>
<div class="">

<?php
  if( have_posts() ) :
    while( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <!-- Titolo -->
          <div class='title'>
            <h1 class="d-none"><?php the_title(); ?></h1>
          </div>

          <?php the_content();?>



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
</div>
<!-- carico footer -->
<?php get_footer(); ?>
