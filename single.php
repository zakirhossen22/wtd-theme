<?php get_header();?>

<div class="jakir">
       <div class="hossen">
       <img src=" <?php echo the_post_thumbnail_url();?>" >
       <h4><?php the_title(); ?></h4>
       <?php the_content();?>
       </div>
       <?php get_sidebar();?>
</div>
<?php get_footer();?>