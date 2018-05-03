

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                <header class="article-header">

                  <h1 class="text-left entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

                </header> <?php // end article header ?>

                <section style="background:transparent;" class="entry-content cf" itemprop="articleBody">
                  <?php the_content(); ?>
                </section> <?php // end article section ?>

                <footer class="article-footer"></footer> <?php // end article footer ?>

                <?php //comments_template(); ?>

              </article> <?php // end article ?>
