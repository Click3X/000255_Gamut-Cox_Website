
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

                <header class="article-header">



                </header> <?php // end article header ?>

                <section class="entry-content cf" itemprop="articleBody">

                <div class="emp-img-container">
                  <?php
                    // GET TEAM MEMBER IMAGE (FEATURED IMAGE)
                    $size = 'emp-individual';
                    the_post_thumbnail( $size); ?>
                </div>
                  <!-- the employee name & title -->
                  <div class="emp-intro-container">
                   <h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>

                   <h2 class="entry-subtitle"><?php the_field('title'); ?></h2>

                  <?php

                    // the content (pretty self explanatory huh)
                    $addInfo = get_post_custom_values('additional_info', $team_member->ID);

                    echo '<p>'. $addInfo[0] .'</p></div>';
                    
                  ?>
                </section> <?php // end article section ?>

                <footer class="article-footer">

                </footer> <?php // end article footer ?>

              </article> <?php // end article ?>