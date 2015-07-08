<?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                <!-- ADDING IN NEW REQUESTED NEXT/PREV POST ARROWS -->
                <div class="gamut-navigation cf">
                  <?php previous_post_link( '%link', 'previous post in category', TRUE ); ?>
                  <?php next_post_link( '%link', 'Next post in category', TRUE ); ?>
                </div>
                

                <header class="article-header">

                  <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

                  <h2 class="entry-subtitle"><?php the_field('title'); ?></h2>

                </header> <?php // end article header ?>

                <section class="entry-content cf" itemprop="articleBody">
                  <?php

                    // GET TEAM MEMBER IMAGE (FEATURED IMAGE)
                    $size = 'thumb';
                    the_post_thumbnail( $size);

                    // the content (pretty self explanatory huh)
                    the_content();
                    
                  ?>
                </section> <?php // end article section ?>

                <footer class="article-footer">

                </footer> <?php // end article footer ?>

              </article> <?php // end article ?>