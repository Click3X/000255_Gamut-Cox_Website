<!-- CONTACT LIST -->
  <section class="clearfix contact-container division-list">
      <?php           
          //get all categories then display all posts in each term

          $taxonomy = 'division';
          $term_args=array(
            'orderby' => 'name',
            'order' => 'ASC'
          );
          $terms = get_terms($taxonomy,$term_args);
          if ($terms) {
            foreach( $terms as $term ) {
              $args=array(
                'post_type' => 'team_members',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                // 'caller_get_posts'=> 1,
                'tax_query' => array(
                      array(
                          'taxonomy' => 'division',
                          'terms' => array($term->term_id),
                          'include_children' => true,
                          'operator' => 'IN'
                      )
                  )
                );
              $my_query = null;
              $my_query = new WP_Query($args);
              if( $my_query->have_posts() ) { ?>
                <div class="category section">
                  <h2 class="division-title gothic"><?php echo $term->name;?></h2>
                  

                  <?php
                while ($my_query->have_posts()) : $my_query->the_post(); 
                 // helper($my_query); 
                  $title = get_field('title'); 
                  $email = get_field('email'); 
                  $telephone = get_field('telephone'); 
                 ?>
                 <ul class="team-member">
                      <li class="address"><h3 class="gothic"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></li>
                      <li class="emp-title"><?php echo $title; ?></li>
                      <!-- add antispambot function -->
                      <li class="email"><a class="page-link" href="mailto:<?php echo antispambot($email); ?>"><?php echo antispambot($email) ; ?></a></li>
                      <li class="telephone"><a href="tel:<?php echo $telephone; ?>"></a><?php echo $telephone; ?></li>
                  </ul>
                 <?php
                endwhile;
                ?>
                
                </div>
           <?php
              }
            }
          }
          wp_reset_query();  // Restore global post data stomped by the_post().
          ?>
  </section>