<?php
/**
 * The default archieve template file
 *
 * If the user has selected a static page for their artist
 */
global $path;
get_header(); ?>

<section class="section">
 <div class="container">    
   <div class="row">
    <div class="col-sm-8">
      <div class="list_wrapper">
        <div class="seelink_wrapper listmargin"> 

              <h3 class="brTitle blue"><?php 
              echo single_cat_title( '', false ); ?></h3>              
            </div>
            <?php the_archive_description( '<p class="taxonomy-description">', '</p>' ); ?>
            
           
            <div class="clearfix"></div>
            
            <div class="row">
             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   
             <div class="listpost"> 
                <div class="col-sm-9"> 
                 <div class="listcontent">
              <h3><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h3>
               <?php echo content(40); ?>

               <ul class="author_details">
                <li><?php the_author_posts_link(); ?></li>
                <li><?php echo get_the_date( 'd M' ); //Oct 10 ?></li>
                <li><?php echo get_the_date( 'G:i' ); //Oct 10 ?></li>
                <li><a href="#">star</a></li>
                <li><a href="#" class="follow_link">Follow</a></li>
              </ul>
            </div>
              </div>
                <div class="col-sm-3">
                  <div class="listpost-img">
                    <div class="img1">
                     <?php
                      if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                          the_post_thumbnail( 'thumbnail', array( 'class'  => 'img-resposive' ) ); // show featured image
                      } 
                      ?></div>
                   </div>
                  </div>
                </div><!-- listpost end --> 
            
            <?php endwhile; endif; ?>
                
                 
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


<?php get_footer(); ?>        
        


