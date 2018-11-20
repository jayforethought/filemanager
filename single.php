<?php 
/**
 * The template for displaying all single posts
 */

global $path;
get_header(); ?>

<section class="section">
 <div class="container">    
   <div class="row">
    <div class="col-sm-8">
      <div class="list_wrapper">
        <div class="seelink_wrapper listmargin"> 
           <?php //query_posts('category_name=music&post_per_page=4'); ?>               
              <h3 class="brTitle blue"><?php 
        $taxonomy = 'category';
         
        // Get the term IDs assigned to post.
        $post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
         
        // Separator between links.
        $separator = ', ';
         
        if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {
         
            $term_ids = implode( ',' , $post_terms );
         
            $terms = wp_list_categories( array(
                'title_li' => '',
                'style'    => 'none',
                'echo'     => false,
                'taxonomy' => $taxonomy,
                'include'  => $term_ids
            ) );
         
            $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );
         
            // Display post categories.
            echo  $terms; }?></h3>

            
              <?php
              // Get the ID of a given category
              //$category_id = get_cat_ID( 'artists' );

              // Get the URL of this category
              //$category_link_artists= get_category_link( $category_id );
              ?>

              <!-- <a class="pull-right brMore" href="<?php //echo $category_link_artists; ?>">More</a> -->
            </div>

             <!--  <p>After the DJ Mag controversial spots, 1001tracklist has come into light with its own list of the “101 best producers”. 1001tracklists rolls out sets played by DJs, track support and has recently started with the list of best producers –… </p>
              <a href="#">Read More</a> -->
            <div class="clearfix"></div>

            <div class="row">
             <div class="listpost"> 
                <div class="col-sm-9"> 
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

              	?>
              <div class="listcontent">
              <h3><?php the_title(); ?></h3>
             	 <?php the_content(); ?>
             	  <p class="authur_info"><span><?php the_author_posts_link(); ?></span> in Live 
  				<?php 

				$taxonomy = 'category';
				 
				// Get the term IDs assigned to post.
				$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
				 
				// Separator between links.
				$separator = ', ';
				 
				if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {
				 
				    $term_ids = implode( ',' , $post_terms );
				 
				    $terms = wp_list_categories( array(
				        'title_li' => '',
				        'style'    => 'none',
				        'echo'     => false,
				        'taxonomy' => $taxonomy,
				        'include'  => $term_ids
				    ) );
				 
				    $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );
				 
				    // Display post categories.
				    echo  $terms; } ?></p>
          
              <ul class="author_details">
                <li><?php echo get_the_date( 'd M' ); //Oct 10 ?></li>
                <li><?php echo get_the_date( 'G:i' );  ?></li>
                <li><a href="#">star</a></li>
                <li><a href="#" class="follow_link">Follow</a></li>
              </ul> 

            </div>
          	<?php endwhile; endif; ?>

              </div>
              
                <div class="col-sm-3">
                  <div class="listpost-img">
                    <div class="img1">

                    	<?php
					        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					            the_post_thumbnail( 'full', array( 'class'  => 'img-resposive' ) ); // show featured image
					        } 
					    ?>

                    </div>
                   

                   </div>
                  </div>
                </div><!-- listpost end -->  
                 
               
                 
            </div><!--- row end -->
          </div><!-- list wrapper end -->

          
         
         <?php 
    //sidebar  enable
    echo get_template_part('template-parts/sidebar/featured','collectionsfooter'); ?>


   </div>  

    <?php 
    //sidebar  enable
    echo get_template_part('template-parts/sidebar/sidebar','default'); ?>


    </div>
   </div>
   </section><!--- Section end --->
   <footer class="footer_section">
     <div class="container">    
       <div class="row">
        <div class="col-sm-8">
           <?php wp_nav_menu( array(
            'theme_location' => 'footer',
            'menu_id'        => 'footer-menu',
            'menu_class' =>'footer_menu'
            ) ); ?>
          <!--<ul class="footer_menu">
           <li><a href="#">Help</a></li>
           <li><a href="#">Status</a></li>
           <li><a href="#">Writers</a></li>
           <li><a href="#">Blog</a></li>
           <li><a href="#">Careers</a></li>
           <li><a href="#">Privacy</a></li>
           <li><a href="#">Terms</a></li>
           <li><a href="#">About</a></li>
         </ul>-->
       </div>

     </div>
   </div>
   </footer>
 </div>
 <script>
   jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 1180){  
    jQuery('.sidebar_section').addClass("sticky_side");
  }
  else{
    jQuery('.sidebar_section').removeClass("sticky_side");
  }
});
 </script>
</body>
</html>
        
        

