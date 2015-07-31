<!-- CONTACT LIST -->
<section class="clearfix contact-container division-list">
  <?php 
    // helper($contact_columns); 
    foreach ($contact_columns as $key => $contact_column) {
      if($contact_column['horizontal_rule']) { 
        $col_class = 'horizontal';
      } else {
        $col_class = 'no-horizontal';
      }
      echo '<div class="category section">';
      if($contact_column['column_entry']) { 
        foreach ($contact_column['column_entry'] as $key => $entry) {
          echo '<div class="team-member '.$col_class.'">';
            foreach ($entry as $key => $ent) {
              echo $ent;
            }
          echo '</div>';
        }
      }
      echo '</div>';
    }
  ?>
</section>