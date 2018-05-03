<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article">
  <header class="entry-header article-header">
    <?php the_post_thumbnail('medium'); ?>
    <h3 class="entry-title center-on-mobile">
      <a class="lead" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
        <strong><?php the_field('performance_event_type'); ?></strong>: <?php the_field('performance_venue_name'); ?>
      </a>
    </h3>
    <?php if (get_field('performance_date')) : ?>
      <?php
        $date = get_field('performance_date', false, false);
        $date = new DateTime($date);
      ?>
      <small class="d-none d-lg-block center-on-mobile">
        <?php echo $date->format('M j Y'); ?>
      </small>
    <?php endif; ?>
  </header>
  <?php if (get_field('performance_subtitle')) : ?>
  <section class="container-fluid entry-content">
    <p class="text-left">
      <?php the_field('performance_subtitle'); ?>
    </p>
  </section>
  <?php endif; ?>
  <footer>
    <?php printf( '<p class="text-left footer-category">' . __('Categories', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>
    <?php the_tags( '<p class="text-left footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
  </footer>
</article>
