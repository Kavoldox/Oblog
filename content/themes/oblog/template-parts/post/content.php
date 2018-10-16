<article class="post">
  <h1 class="post__title"><span class="post__title__text"><?php the_title(); ?></span></h1>
  <?php the_post_thumbnail('post-thumbnail-square', ['class' => 'post__image', 'alt' => 'photo feuille']); ?>
  <!-- <img class="post__image" src="/images/black-white-city.jpg" alt="" /> -->
  <div class="post__info">
    <span><?php the_date() ?> &bull; <?php the_author(); ?></span>
  </div>
  <div class="post__content">
    <p><?php the_content(); ?>&hellip;</p>
  </div>
</article>
