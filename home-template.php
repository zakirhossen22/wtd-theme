<?php get_header();
/*
Template Name:About Template

*/
?>

<div class="content">
       <?php

       $args = array(
              'post_type' => 'post',
              'posts_per_page' =>4,
              'category_name' => 'music'
       );

       $query = new WP_Query($args);

       while($query -> have_posts()){
              $query -> the_post();

       ?>

       <h1><?php the_title();?></h1>
       <?php the_content();?>

       
       <?php
       }

      ?>
</div>

<?php get_footer();?>
