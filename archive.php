<?php get_header();?>
        <!-- Banner Start Here -->
        <div class="banner">
            <img src="<?php echo get_template_directory_uri();?> /asset/img/bannar.jpg">
        </div>
        <!-- Banner End Here -->
        
       
        <!-- About Start Here -->
        <div class="about fix" id="about">
            <div class="about-left">
                <h4>Category:<?php single_cat_title();?></h4>
                <?php get_template_part( 'template-parts/content', 'blog' ); ?>
            </div>


           
                <?php get_sidebar();?>
            
        </div>
        <!-- About End Here -->

        <?php get_footer();?>
    </div>



       <?php wp_footer();?> 
</body>
</html>