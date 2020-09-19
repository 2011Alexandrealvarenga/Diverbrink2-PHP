<?php get_header(); ?>
<div class="container mb-5 mt-5">
 
  <div class="row pt-3 single"><!--single post -->
    
    <?php if(have_posts()) : while (have_posts()) : the_post();?><!--SE TEM POST CARREGA OS POSTS -->
      <div class="col "> 
        
        
        <h3><?php the_title(); ?></h3> 
        <?php the_content(); ?>
                                       
           <!-- posts-->
      </div> 

    <?php endwhile; ?> 
    <?php else : get_404_template(); endif;?> 
    
  </div>
  
</div>
<div class="container cont-mais-recentes">
  <div class="row">
    <div class="conteudo-mais-recentes">
      <div class="maisrecentes">
        <h4>Mais Recentes</h4>
      </div> 
      <div class="card-group ">
      

        <?php

        $related = get_posts( array
          ( 'category__in' => wp_get_post_categories($post->ID), 
            'numberposts' => 5, 
            'post__not_in' => array($post->ID) 
          ) 
        );
        if( $related ) foreach( $related as $post ) {
        setup_postdata($post); ?>
         <ul> 
           
            <li>
              <div class="card"> 
                <a href="<?php the_permalink() ?>" >
                  <div class="card-body ">
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid img-responsive')); ?>
                  </div>
                  <div class="card-text">
                    <h6>
                      <?php the_title(); ?>
                    </h6>

                    <button class="btn btn-primary btn-block">Saiba Mais</button>

                        
                  </div>
                  
                  
                </a>
              </div>  
            </li>
          </ul> 

       
         <?php }
        wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</div>
  
  
  

<?php get_footer(); ?>


