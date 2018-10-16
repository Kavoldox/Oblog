<?php
get_header();
?>
<div class="main-sidebar-wrapper main-sidebar-wrapper--without-sidebar">
  <main class="main">
      <h1>R&eacute;sultats de ma recherche pour le terme &laquo; <?php the_search_query(); ?> &raquo;</h1>
    <section class="posts">
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    get_template_part( 'template-parts/post/excerpt' );
  }
} else {
    get_template_part( 'template-parts/post/notfound' );
}
?>
    </section>
    <?php the_posts_pagination(); ?>
  </main>
</div>
<?php
get_footer();
